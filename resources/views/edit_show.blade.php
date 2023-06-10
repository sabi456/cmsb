
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Users</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
<link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web\css\all.min.css')}}">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>

</style>
</head>


<body id="page-top">
    <div class="container text-center my-4">
        <!-- Page content goes here -->
        
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <form action="{{ route('post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            <tr>
                                <th class="text-center">ID:</th>
                                <td>
                                    <input type="text" class="form-control" name="id" value="{{$post->id}}" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Nom complet:</th>
                                <td>
                                    <input type="text" class="form-control" name="name" value="{{$post->name}}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">CIN:</th>
                                <td>
                                    <input type="text" class="form-control" name="cin" value="{{$post->cin}}">
                                    @error('cin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Date de naissance:</th>
                                <td>
                                    <input type="text" class="form-control" name="date_b" value="{{$post->date_b}}">
                                    @error('date_b')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Lieu de naissance:</th>
                                <td>
                                    <input type="text" class="form-control" name="city_b" value="{{$post->city_b}}">
                                    @error('city_b')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Adresse:</th>
                                <td>
                                    <input type="text" class="form-control" name="adress" value="{{$post->adress}}">
                                    @error('adress')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Phone:</th>
                                <td>
                                    <input type="text" class="form-control" name="phone" value="{{$post->phone}}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">E-mail:</th>
                                <td>
                                    <input type="text" class="form-control" name="mail" value="{{$post->mail}}">
                                    @error('mail')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Note:</th>
                                <td>
                                    <input type="text" class="form-control" name="note" value="{{$post->note}}">
                                    @error('note')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Date d'inscription:</th>
                                <td>
                                    <input type="text" class="form-control" name="created_at" value="{{$post->created_at}}" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Nom de l'entreprise:</th>
                                <td>
                                    <input type="text" class="form-control" name="name_e" value="{{$post->name_e}}">
                                    @error('name_e')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Catégorie:</th>
                                <td>
                                    <input type="text" class="form-control" name="cat" value="{{$post->cat}}">
                                    @error('cat')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Phone de l'entreprise:</th>
                                <td>
                                    <input type="text" class="form-control" name="phone_e" value="{{$post->phone_e}}">
                                    @error('phone_e')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Nombre des employés:</th>
                                <td>
                                    <input type="text" class="form-control" name="nbr_of_em" value="{{$post->nbr_of_em}}">
                                    @error('nbr_of_em')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">Adress de l'entreprise:</th>
                                <td>
                                    <input type="text" class="form-control" name="adress_e" value="{{$post->adress_e}}">
                                    @error('adress_e')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">ICE:</th>
                                <td>
                                    <input type="text" class="form-control" name="ice" value="{{$post->ice}}">
                                    @error('ice')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">RC:</th>
                                <td>
                                    <input type="text" class="form-control" name="rc" value="{{$post->rc}}">
                                    @error('rc')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                
                                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                                        <a href="{{ route('admin') }}" class="btn btn-sm btn-secondary">Cancel</a>
                                    
                                </td>
                            </tr>
                      </form> 
                     </table>
                        
                    </div>
                </div>
            </div>
        
    </div>
</body>

</html>