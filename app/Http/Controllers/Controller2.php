<?php

namespace App\Http\Controllers;
use ZipArchive;

use App\Models\Post;
use App\Models\User;
use App\Models\Akhbar;
use App\Models\Persen;
use App\Models\Document;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Models\unconfirmed_users;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use App\Notifications\NewUserNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Database\Eloquent\SoftDeletes;

class Controller2 extends Controller
{

    public function show($id)
    {
        if (auth()->check()) {
            $post = DB::table('persens')
                ->join('entreprises', 'persens.id', '=', 'entreprises.id')
                ->join('documents', 'persens.id', '=', 'documents.id')
                ->join('pays', 'persens.id', '=', 'pays.id')
                ->select('persens.*', 'entreprises.*', 'documents.*', 'pays.*')
                ->where('persens.id', '=', $id)
                ->first();

            return view('show')->with(['post' => $post]);
        }
        return redirect()->back(); 
    }

    public function show1($id)
    {
        if (auth()->check()) {
            $post = DB::table('posts')
                ->where('posts.id', '=', $id)
                ->first();

            return view('show1')->with(['post' => $post]);
        }
        return redirect()->back(); 
    }

    public function softd($id)
    {
        if (auth()->check()) {
            $post = Post::findOrFail($id);
            $post->delete();
        }
        return redirect('admin');
    }
    
    public function deleted()
    {
        if (auth()->check()) {
            $posts = Post::onlyTrashed()->get();
            return view('deleted')->with(['posts' => $posts]);
        }
        return redirect()->back(); 
    }

    public function admin()
    {
        if (auth()->check()) {
            // Count the total number of posts
            $userConfirmed = Post::where('status', 'confirmed')->count();
            $userUnconfirmed = Persen::where('status', 'unconfirmed')->count();

            // Count the number of posts in the trash (soft deleted)
            $userTrash = Post::onlyTrashed()->count();
            
            // Retrieve the monthly registrations data
            $registrations = Post::selectRaw('MONTH(created_at) as month, COUNT(*) as created_count')
                ->groupBy('month')
                ->orderBy('month')
                ->get();

            // Retrieve the monthly deleted registrations data
            $deletedRegistrations = Post::onlyTrashed()
                ->selectRaw('MONTH(deleted_at) as month, COUNT(*) as deleted_count')
                ->groupBy('month')
                ->orderBy('month')
                ->get();

            // Retrieve the monthly unconfirmed users data
            $unconfirmedUsers = Persen::selectRaw('MONTH(created_at) as month, COUNT(*) as created_count')
                ->groupBy('month')
                ->orderBy('month')
                ->get();

            // Initialize arrays to store labels, created data, deleted data, and unconfirmed users data
            $labels = [];
            $createdData = [];
            $deletedData = [];
            $unconfirmedUsersData = [];

            // Loop through each month (from 1 to 12) to populate the data arrays
            for ($month = 1; $month <= 12; $month++) {
                // Get the month name based on the month number
                $monthName = date('F', mktime(0, 0, 0, $month, 1));
                $labels[] = $monthName;

                // Find the registration data for the current month
                $registration = $registrations->firstWhere('month', $month);

                // Find the deleted registration data for the current month
                $deletedRegistration = $deletedRegistrations->firstWhere('month', $month);

                // Find the unconfirmed users data for the current month
                $unconfirmedUser = $unconfirmedUsers->firstWhere('month', $month);

                // Store the count of created registrations for the current month, or 0 if not found
                $createdData[] = $registration ? $registration->created_count : 0;

                // Store the count of deleted registrations for the current month, or 0 if not found
                $deletedData[] = $deletedRegistration ? $deletedRegistration->deleted_count : 0;

                // Store the count of unconfirmed users for the current month, or 0 if not found
                $unconfirmedUsersData[] = $unconfirmedUser ? $unconfirmedUser->created_count : 0;
            }

            // Return a view called 'admin' with the necessary data passed to it
            return view('admin')->with([
                'userConfirmed' => $userConfirmed,
                'userTrash' => $userTrash,
                'labels' => $labels,
                'createdData' => $createdData,
                'deletedData' => $deletedData,
                'userUnconfirmed' => $userUnconfirmed,
                'unconfirmedUsersData' => $unconfirmedUsersData,
            ]);
        }
        else return view('auth.login');

    }

    public function unconfirmed()
    {
        if (auth()->check()) {
            //softDeletedUserCount = Post::onlyTrashed()->count();
            $posts = Persen::all();
            
            //$deletedUsers = Post::onlyTrashed()->get();
            return view('unconfirmed')->with([
                'posts' => $posts,
            ]);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        if (auth()->check() && (auth()->user()->status == 'High' || auth()->user()->status == 'Medium')) {

            $post = Post::find($id);
            return view('edit')->with([
                'post'=>$post
            ]);
        }
        return redirect()->back();
    }

    public function edit_show($id)
    {
        if (auth()->check() && (auth()->user()->status == 'High' || auth()->user()->status == 'Medium')) {

            $post = Post::find($id);
            return view('edit_show')->with([
                'post'=>$post
            ]);
        }
        return redirect()->back();
    }


   public function update(Request $req, $id)
    {

        $req->validate([
            'name' => 'required|min:6|max:20',
            'cin' => 'required|min:4|max:8',
            'city_b' => 'required|min:2|max:15',
            'adress' => 'required|min:5|max:40',
            'phone' => 'required|min:10|max:14',
            'mail' => 'required|email',
            'name_e' => 'required|min:2|max:20',
            'cat' => 'required|min:4|max:20',
            'phone_e' => 'required|min:2|max:15',
            'nbr_of_em' => 'required|numeric|min:0|max:100',
            'adress_e' => 'required|min:10|max:40',
            'ice' => 'required|min:10|max:40',
            'rc' => 'required|min:10|max:40'
        ]);

        $data = Post::find($id);

        // Removed redundant check for $data existence

        if ($req->hasFile('pict') && $req->hasFile('cin_pict') && $req->hasFile('magasin_pict') && $req->hasFile('entreprise_pict')) {
            $file1 = $req->file('pict');
            $file2 = $req->file('cin_pict');
            $file3 = $req->file('magasin_pict');
            $file4 = $req->file('entreprise_pict');

            if ($file1->isValid() && $file2->isValid() && $file3->isValid() && $file4->isValid()) {
                $pict = file_get_contents($file1->getRealPath());
                $cin_pict = file_get_contents($file2->getRealPath());
                $magasin_pict = file_get_contents($file3->getRealPath());
                $entreprise_pict = file_get_contents($file4->getRealPath());

                $data->pict = $pict;
                $data->cin_pict = $cin_pict;
                $data->magasin_pict = $magasin_pict;
                $data->entreprise_pict = $entreprise_pict;
            }
        }

        $data->name = $req->name;
        $data->name_e = $req->name_e;
        $data->adress = $req->adress;
        $data->phone = $req->phone;
        $data->phone_e = $req->phone_e;
        $data->mail = $req->mail;
        $data->cat = $req->cat;
        $data->cin = $req->cin;
        $data->date_b = $req->date_b;
        $data->city_b = $req->city_b;
        $data->nbr_of_em = $req->nbr_of_em;
        $data->adress_e = $req->adress_e;
        $data->ice = $req->ice;
        $data->rc = $req->rc;

        $data->save();

        return redirect()->route('post1.show', ['id' => $id]);
    }




    public function delete($id)
    {
            // Delete the unconfirmed user record
            DB::table('documents')
                ->where('id', '=', $id)
                ->delete();
            DB::table('entreprises')
                ->where('id', '=', $id)
                ->delete();
            DB::table('pays')
                ->where('id', '=', $id)
                ->delete();
            DB::table('persens')
                ->where('id', '=', $id)
                ->delete();
            
            //Delete the notification for the specific unconfirmed user
            DB::table('notifications')->where('id', $id)->delete();

            return redirect('admin');
    }
    
    public function perma($id)
    {
        if (auth()->check() && (auth()->user()->status == 'high' || auth()->user()->status == 'Medium')) {
            $post = Post::withTrashed()->findOrFail($id);

            if ($post) {

                $post->forceDelete();

                return redirect('tables')->with([
                    'delete2' => 'User Deleted Permanently'
                ]);
            }
        }

        return redirect()->back();
    }

    public function restore($id){
        if (auth()->check() && (auth()->user()->status == 'High' || auth()->user()->status == 'Medium'  )) {

            $post= Post::withTrashed()->where('id',$id)->first();
            $post->restore();
            $message = 'User "' . $post->name . '" Restored';
            return redirect('Confirm ')->with([
                'restored'=>$message
            ]);
        }
        return redirect()->back();
    }
    public function restoreall()
    {
        $posts = Post::onlyTrashed()->get();
    
        if (auth()->check() && (auth()->user()->status == 'High' || auth()->user()->status == 'Medium')) {
            if ($posts->isEmpty()) {
                return redirect()->back()->with([
                    'restoreall' => 'No users found in trash.'
                ]);
            }
    
            $posts->restore();
    
            return redirect('Confirm')->with([
                'restoreall' => 'All Users have been restored.'
            ]);
        }
    
        return redirect()->back();
    }
    
    public function deleteMultiple(Request $request)
    {
        if (auth()->check() && (auth()->user()->status == 'High' || auth()->user()->status == 'Medium'  )) {
            $selectedIds = $request->input('selected_ids', []);
            $user = auth()->user();

            foreach ($selectedIds as $postId) {
                $post = Post::find($postId);

                if ($post) {
                    $post->user_id3 = $user->id;
                    $post->save(); // Save the user_id3 value before soft deleting

                    $post->delete(); // Soft delete the post
                }
            }
        }

        return redirect()->back()->with('success', 'Selected posts deleted successfully');
    }

    // public function downloadUsers()
    // {
    //     $uniqueIdentifier = uniqid(); // Generate a unique identifier

    //     $fileName = 'users_' . $uniqueIdentifier . '.xlsx'; // Append the unique identifier to the filename

    //     return Excel::download(new UsersExport(), $fileName);
    // }


    public function confirmUser($id)
    {
        $data = DB::table('persens')
            ->join('entreprises', 'persens.id', '=', 'entreprises.id')
            ->join('documents', 'persens.id', '=', 'documents.id')
            ->join('pays', 'persens.id', '=', 'pays.id')
            ->select('persens.*', 'entreprises.*', 'documents.*', 'pays.*')
            ->where('persens.id', '=', $id)
            ->first();
        
        // Create a new post record
        $post = new Post();
        $post->id = $data->id;
        $post->name = $data->name;
        $post->name_e = $data->name_e;
        $post->cin = $data->cin;
        $post->city_b = $data->city_b;
        $post->date_b = $data->date_b;
        $post->adress = $data->adress;
        $post->adress_e = $data->adress_e;
        $post->phone = $data->phone;
        $post->phone_e = $data->phone_e;
        $post->mail = $data->mail;
        $post->note = $data->note;
        $post->pict = $data->pict;
        $post->cin_pict = $data->cin_pict;
        $post->magasin_pict = $data->magasin_pict;
        $post->entreprise_pict = $data->entreprise_pict;
        $post->payment_pict = $data->payment_pict;
        $post->nbr_of_em = $data->nbr_of_em;
        $post->payment_pict = $data->payment_pict;
        $post->cat = $data->cat;
        $post->ice = $data->ice;
        $post->rc = $data->rc;
        $post->payer = $data->payer;
        $post->number_v = $data->number_v;
        $post->pay_name = $data->pay_name;
        $post->pay_name = $data->pay_name;
        $post->status = 'Confirmed';
        // Set other attributes if needed
        try {
            $post->save();
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }

        // Delete the unconfirmed user record
        DB::table('documents')
            ->where('id', '=', $id)
            ->delete();
        DB::table('entreprises')
            ->where('id', '=', $id)
            ->delete();
        DB::table('pays')
            ->where('id', '=', $id)
            ->delete();
        DB::table('persens')
            ->where('id', '=', $id)
            ->delete();
        
        //Delete the notification for the specific unconfirmed user
        DB::table('notifications')->where('id', $id)->delete();

        return redirect('admin')->with([
            'success' => 'User confirmed and moved to posts',
        ]);
    }

    public function confirmed()
    {
        $posts = Post::all();
            return view('confirmed')->with([
                'posts' => $posts,
            ]);
        }
        
   

    // public function confirmAllUsers()
    // {
    //     $unconfirmedUsers = DB::table('persens')
    //         ->join('entreprises', 'persens.id', '=', 'entreprises.id')
    //         ->join('documents', 'persens.id', '=', 'documents.id')
    //         ->join('pays', 'persens.id', '=', 'pays.id')
    //         ->join('payvs', 'persens.id', '=', 'payvs.id')
    //         ->select('persens.*', 'entreprises.*', 'documents.*', 'pays.*', 'payvs.*')
    //         ->get();

    //     foreach ($unconfirmedUsers as $unconfirmedUser) {
    //         // Create a new post record
    //         $post = new Post();
    //         $post->name = $unconfirmedUser->name;
    //         $post->age = $unconfirmedUser->age;
    //         $post->salary = $unconfirmedUser->salary;
    //         $post->image = $unconfirmedUser->image;
    //         $post->status = 'Confirmed'; // corrected the capitalization of 'status'
    //         $post->Gender = $unconfirmedUser->Gender;
    //         $post->pdf = $unconfirmedUser->pdf;
    //         $post->pdf2 = $unconfirmedUser->pdf2;

    //         // Set other attributes if needed
    //         $post->save();

    //         // Delete the notification for the specific unconfirmed user
    //         $notificationsToDelete = DB::table('notifications')
    //             ->where('data->unconfirmed_user_id', $unconfirmedUser->id);    
    //         $notificationsToDelete->delete();

    //         // Delete the unconfirmed user record
    //         $unconfirmedUser->delete();
    //     }

    //     return redirect('admin')->with([
    //         'success' => 'All users confirmed and moved to posts',
    //     ]);
    // }


    // public function deletenotif($id)
    // {
    //     if (auth()->check() && (auth()->user()->status == 'High' || auth()->user()->status == 'Medium'  )) {

    //     $unconfirmedUser = unconfirmed_users::findOrFail($id);
    //     $unconfirmedUser->delete();
        
    //     $notificationsToDelete = DB::table('notifications')->where('data->unconfirmed_user_id', $id);    
    //     $notificationsToDelete->delete();
    //     }
    //     return redirect('admin')->with([
    //         'success' => 'deleted',
    //     ]);
    // }

    // public function deleteall()
    // {
    //     if (auth()->check() && (auth()->user()->status == 'High' || auth()->user()->status == 'Medium')) {

    //     $unconfirmedUser = unconfirmed_users::get();
    //     foreach($unconfirmedUser as $deleted){
    //     $deleted->delete();  }
    //     DB::table('notifications')->delete();
    
    // }
    //     return redirect('admin')->with([
    //         'success' => 'deleted',
    //     ]);
    // }
    public function post_3(Request $req){

        $req->validate(
            [
                'pict' => 'file|mimes:jpg,png|max:5000',
                'cin_pict' => 'file|mimes:jpg,png,pdf|max:5000',
                'magasin_pict' => 'file|mimes:jpg,png|max:5000',
                'entreprise_pict' => 'file|mimes:pdf,jpg,png|max:5000'
            ],
            [
                'pict.mimes' => 'نقبل فقط JPG أو PNG',
                'pict.max' => 'لقد تجاوزت 5 MB',
                'cin_pict.mimes' => 'نقبل فقط JPG أو PNG أو PDF',
                'cin_pict.max' => 'لقد تجاوزت 5 MB',
                'magasin_pict.mimes' => 'نقبل فقط JPG أو PNG',
                'magasin_pict.max' => 'لقد تجاوزت 5 MB',
                'entreprise_pict.mimes' => 'نقبل فقط PDF',
                'entreprise_pict.max' => 'لقد تجاوزت 5 MB'
            ]
        );
        $id = Session::get('id');
    $doc = Document::where('id', $id)->first();

    if ($req->hasFile('pict') && $req->hasFile('cin_pict') && $req->hasFile('magasin_pict') && $req->hasFile('entreprise_pict')) {
        $file1 = $req->file('pict');
        $file2 = $req->file('cin_pict');
        $file3 = $req->file('magasin_pict');
        $file4 = $req->file('entreprise_pict');

        if ($file1->isValid() && $file2->isValid() && $file3->isValid() && $file4->isValid()) {
            $pict = file_get_contents($file1->getRealPath());
            $cin_pict = file_get_contents($file2->getRealPath());
            $magasin_pict = file_get_contents($file3->getRealPath());
            $entreprise_pict = file_get_contents($file4->getRealPath());

            try {
                if (!$doc) {
                    $doc = new Document();
                    $doc->id = $id;
                }

                $doc->pict = $pict;
                $doc->cin_pict = $cin_pict;
                $doc->magasin_pict = $magasin_pict;
                $doc->entreprise_pict = $entreprise_pict;
                $doc->payment_pict = null;
                $doc->save();

                // Move uploaded files to appropriate directories
                $image_name1 = time() . '_' . $file1->getClientOriginalName();
                $file1->move(public_path('uploads'), $image_name1);

                $image_name2 = time() . '_' . $file2->getClientOriginalName();
                $file2->move(public_path('pdfs'), $image_name2);

                $image_name3 = time() . '_' . $file3->getClientOriginalName();
                $file3->move(public_path('pdfs2'), $image_name3);

                $image_name4 = time() . '_' . $file4->getClientOriginalName();
                $file4->move(public_path('pdfs3'), $image_name4);

                // Delete old files if they exist
                if ($doc->pict) {
                    $old_image_path1 = public_path('uploads') . '/' . $doc->pict;
                    if (file_exists($old_image_path1)) {
                        unlink($old_image_path1);
                    }
                }

                if ($doc->cin_pict) {
                    $old_image_path2 = public_path('pdfs') . '/' . $doc->cin_pict;
                    if (file_exists($old_image_path2)) {
                        unlink($old_image_path2);
                    }
                }

                if ($doc->magasin_pict) {
                    $old_image_path3 = public_path('pdfs2') . '/' . $doc->magasin_pict;
                    if (file_exists($old_image_path3)) {
                        unlink($old_image_path3);
                    }
                }

                if ($doc->entreprise_pict) {
                    $old_image_path4 = public_path('pdfs3') . '/' . $doc->entreprise_pict;
                    if (file_exists($old_image_path4)) {
                        unlink($old_image_path4);
                    }
                }

                // Update the filenames in the database
                $doc->pict = $image_name1;
                $doc->cin_pict = $image_name2;
                $doc->magasin_pict = $image_name3;
                $doc->entreprise_pict = $image_name4;
                $doc->save();
            } catch (\Exception $e) {
                // Handle the exception (e.g., log the error, display an error message)
                return "Error: " . $e->getMessage();
            }

            Session::put('id', $id);

            return redirect()->route('log4_mo');
        }
    }

    return "No file selected or invalid file.";
}
        public function download($filename)
        {
            $file = Document::where('cin_pict', $filename)->first();
        
            if ($file) {
                $extension = pathinfo($file->cin_pict, PATHINFO_EXTENSION);
                $filenameWithExtension = 'downloaded_file.' . $extension;
        
                return response()->streamDownload(function () use ($file) {
                    echo $file->cin_pict;
                }, $filenameWithExtension);
            }
        
            abort(404);
        }
        function downloadRAR($pict, $cin_pict, $magasin_pict, $entreprise_pict, $payment_pict, $name)
        {
            $archiveName = 'Confirmed_' . $name . '.rar';
            $archivePath = storage_path('app/' . $archiveName);
        
            // Create a new ZIP archive
            $zip = new ZipArchive;
            if ($zip->open($archivePath, ZipArchive::CREATE) === true) {
                // Add the PDF files to the ZIP archive
        
                $zip->addFile(public_path('uploads/' . $pict), $pict);
                $zip->addFile(public_path('pdfs/' . $cin_pict), $cin_pict);
                $zip->addFile(public_path('pdfs2/' . $magasin_pict), $magasin_pict);
                $zip->addFile(public_path('pdfs3/' . $entreprise_pict), $entreprise_pict);
        
                // Check if the payment_pict file exists
                if (file_exists(public_path('pdfs4/' . $payment_pict))) {
                    $zip->addFile(public_path('pdfs4/' . $payment_pict), $payment_pict);
                }
        
                // Close the ZIP archive
                $zip->close();
            }
        
            // Serve the ZIP archive for download
            return response()->download($archivePath);
        }
    

    public function trashRAR($name, $pict, $cin_pict, $magasin_pict, $entreprise_pict, $paymeny_pict)
    {
        $archiveName = 'Trash_'.$name .'.rar';
        $archivePath = storage_path('app/'.$archiveName);

        // Create a new ZIP archive
        $zip = new ZipArchive;
        if ($zip->open($archivePath, ZipArchive::CREATE) === true) {
            // Add the PDF files to the ZIP archive
            $zip->addFile(public_path('pict/'.$pict), $pict);
            $zip->addFile(public_path('cin_pict/'.$cin_pict), $cin_pict);
            $zip->addFile(public_path('magasin_pict/'.$magasin_pict), $magasin_pict);
            $zip->addFile(public_path('entreprise_pict/'.$entreprise_pict), $entreprise_pict);
            $zip->addFile(public_path('paymeny_pict/'.$paymeny_pict), $paymeny_pict);
            // Close the ZIP archive
            $zip->close();
        }
        // Serve the ZIP archive for download
        return response()->download($archivePath);
    }

    public function downloadAll()
    {
        $users = DB::table('persens')
            ->join('entreprises', 'persens.id', '=', 'entreprises.id')
            ->join('documents', 'persens.id', '=', 'documents.id')
            ->join('pays', 'persens.id', '=', 'pays.id')
            ->join('payvs', 'persens.id', '=', 'payvs.id')
            ->select('persens.*', 'entreprises.*', 'documents.*', 'pays.*', 'payvs.*')
            ->get();

        if ($users->isEmpty()) {
            return redirect('tables')->with([
                'empty' => 'Table Is Empty !'
            ]);
        }

        $archiveName = 'All users.rar';
        $archivePath = storage_path('app/'.$archiveName);

        // Create a new ZIP archive
        $zip = new ZipArchive;
        if ($zip->open($archivePath, ZipArchive::CREATE) === true) {
            foreach ($users as $user) {
                $userName = $user->name; // Assuming each user has a "name" property indicating their name
                $userFolder = $userName . '/'; // Create a folder using the user's name

                // Create the user's folder inside the ZIP archive
                $zip->addEmptyDir($userFolder);

                $pict = $user->pict; // Assuming each user has a "picture" property indicating their PDF file
                $pict_path = public_path('pict/'.$pict);
                $pict_filename = $userFolder . $pict; // Store the picture inside the user's folder

                $cin_pict = $user->cin_pict; // Assuming each user has a "cin picture" property indicating their second PDF file
                $cin_pict_path = public_path('cin_pict/'.$cin_pict);
                $cin_pict_filename = $userFolder . $cin_pict; // Store the second cin picture inside the user's folder

                $magasin_pict = $user->magasin_pict; // Assuming each user has an "magasin picture" property indicating their image file
                $magasin_pict_path = public_path('uploads/'.$magasin_pict);
                $magasin_pict_filename = $userFolder . $magasin_pict; // Store the magasin picture inside the user's folder
                
                $entreprise_pict = $user->entreprise_pict; // Assuming each user has a "entreprise_picture" property indicating their second PDF file
                $entreprise_pict_path = public_path('cin_pict/'.$entreprise_pict);
                $entreprise_pict_filename = $userFolder . $entreprise_pict; // Store the second entreprise_picture inside the user's folder

                $payment_pict = $user->payment_pict; // Assuming each user has an "payment_picture" property indicating their image file
                $payment_pict_path = public_path('payment_pict/'.$payment_pict);
                $payment_pict_filename = $userFolder . $payment_pict; // Store the payment_picture inside the user's folder

                // Check if the files exist before adding them to the ZIP archive
                if (file_exists($pict_path) && file_exists($cin_pict_path) && file_exists($magasin_pict_path) && file_exists($entreprise_pict_path) && file_exists($payment_pict_path)) {
                    $zip->addFile($pict_path, $pict_filename);
                    $zip->addFile($cin_pict_path, $cin_pict_filename);
                    $zip->addFile($magasin_pict_path, $magasin_pict_filename);
                    $zip->addFile($entreprise_pict_path, $entreprise_pict_filename);
                    $zip->addFile($payment_pict_path, $payment_pict_filename);
                }else {
                    echo "files download error!";
                }
            }

            // Close the ZIP archive
            $zip->close();
        } else {
            return response()->json(['message' => 'Failed to create ZIP archive'], 500);
        }

        // Serve the ZIP archive for download with the appropriate Content-Disposition header
        return response()->download($archivePath, $archiveName, ['Content-Disposition' => 'attachment'])->deleteFileAfterSend(true);
    }
    
    public function show_admin()
    {
        if (auth()->check() && (auth()->user()->status == 'High')) {
            $users = User::all();
            return view('show_admin')->with([
                'users' => $users,
            ]);
        }
        return redirect()->back();
    }

    public function delete_admin($id)
    {
        $User = User::findOrFail($id);

        $User->delete(); // Soft delete the post

        return redirect('show_admin')->with([
            'delete_admin' => 'Admin Deleted'
        ]);
    }

    public function up(Request $request, $id)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'status' => 'required'
        ]);

        // Retrieve the user by ID
        $user = User::find($id);

        if (!$user) {
            // Handle the case if the user is not found
            return redirect()->back()->with('error_admin', 'User not found');
        }

        // Update the user information
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->status = $request->input('status');

        // Save the changes
        if ($user->isDirty()) {
            $user->save();
            return redirect()->back()->with('success_admin', 'Admin updated successfully');
        }else{
            return redirect()->back()->with('info_admin', 'No changes made');

        }
    }
    public function posts()
    {
        if (auth()->check() && (auth()->user()->status == 'High' || auth()->user()->status == 'Medium' )) {
            return view('posts');
        }
        return redirect()->back();
    }
    public function show3()
    {
        if (auth()->check()) {
            $akhbar = Akhbar::all();
            return view('posts')->with(['akhbar' => $akhbar]);
        }
        
        return redirect()->back();
    }
    
    public function edit_akhbar($id)
    {
        if (auth()->check() && (auth()->user()->status == 'High' || auth()->user()->status == 'Medium')) {

            $post = Akhbar::find($id);
            return view('edit_akhbar')->with([
                'post'=>$post
            ]);
        }
        return redirect()->back();
    }
    public function update_akhbar(Request $req, $id)
    {
        if (auth()->check() && (auth()->user()->status == 'High' || auth()->user()->status == 'Medium')) {
            $data = Akhbar::find($id);
            
            $data->title = $req->title;
            $data->detail = $req->detail;
            $data->datePosted = $req->datePosted;
            if ($req->hasFile('image')) {
                // Upload the new image if provided
                $file = $req->file('image');
                $image_name = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('akhbar'), $image_name);
                
                // Delete the old image if it exists
                if ($data->image) {
                    $old_image_path = public_path('akhbar') . '/' . $data->image;
                    if (file_exists($old_image_path)) {
                        unlink($old_image_path);
                    }
                }
        
                $data->image = $image_name;
            }$data->save();
        }
        return redirect('show3');
    }
public function add_akhbar(Request $req)
{
    if (auth()->check() && (auth()->user()->status == 'High' || auth()->user()->status == 'Medium')) {
        $req->validate([
            'image' => 'nullable',
            
        ]);
        $Akhbar = new Akhbar();
        $Akhbar->title = $req->title;
        $Akhbar->description = $req->description;
        $Akhbar->detail = $req->detail;
        $Akhbar->datePosted = $req->datePosted;
        $Akhbar->image = $req->image;
        if ($req->hasFile('image')) {
            // Upload the new image if provided
            $file = $req->file('image');
            $image_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('akhbar'), $image_name);
            
            // Delete the old image if it exists
            if ($Akhbar->image) {
                $old_image_path = public_path('akhbar') . '/' . $Akhbar->image;
                if (file_exists($old_image_path)) {
                    unlink($old_image_path);
                }
            }
    
            $Akhbar->image = $image_name;
        }
        $Akhbar->save();
    }
    return redirect('show3');
}

public function page_akhbar()
{
    if (auth()->check() && (auth()->user()->status == 'High' || auth()->user()->status == 'Medium' )) {
        return view('add_akhbar');
    }
    return redirect()->back();
} 
public function delete_akhbar($id)
{
    if (auth()->check()) {
        $post = Akhbar::findOrFail($id);
        $post->delete();
    }
    return redirect('show3');
}
function download_unconfirmed($pict, $cin_pict, $magasin_pict, $entreprise_pict, $payment_pict, $name)
{
    $archiveName = 'Unconfirmed_' . $name . '.rar';
    $archivePath = storage_path('app/' . $archiveName);

    // Create a new ZIP archive
    $zip = new ZipArchive;
    if ($zip->open($archivePath, ZipArchive::CREATE) === true) {
        // Add the PDF files to the ZIP archive

        $zip->addFile(public_path('uploads/' . $pict), $pict);
        $zip->addFile(public_path('pdfs/' . $cin_pict), $cin_pict);
        $zip->addFile(public_path('pdfs2/' . $magasin_pict), $magasin_pict);
        $zip->addFile(public_path('pdfs3/' . $entreprise_pict), $entreprise_pict);

        // Check if the payment_pict file exists
        if (file_exists(public_path('pdfs4/' . $payment_pict))) {
            $zip->addFile(public_path('pdfs4/' . $payment_pict), $payment_pict);
        }

        // Close the ZIP archive
        $zip->close();
    }

    // Serve the ZIP archive for download
    return response()->download($archivePath);
}
}
