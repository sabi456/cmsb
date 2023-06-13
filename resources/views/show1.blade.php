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
        <h1 class="m-0 font-weight-bold text-primary" >Les informations de l'engageur</h1>       
                                <div class="card-body">
                                    <div class="table-responsive">
        <div  id="table">                            
        <div class="card shadow mb-4">
                                
                                <div class="card-body">
                                    <div class="table-responsive">
                                    
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th class="text-center">ID : </th>
                        <td>{{$post->id}}</td>
                    </tr>
                    <tr>
                    <tr>
                        <th class="text-center">Nom complet : </th>
                        <td>{{$post->name}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">CIN : </th>
                        <td>{{$post->cin}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Date de naissance : </th>
                        <td>{{$post->date_b}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Lieu de naissance : </th>
                        <td>{{$post->city_b}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Adresse : </th>
                        <td>{{$post->adress}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Phone : </th>
                        <td>{{$post->phone}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">E-mail : </th>
                        <td>{{$post->mail}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Note : </th>
                        <td>{{$post->note}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Date d'inscription : </th>
                        <td>{{$post->created_at}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Nom de l'entreprise : </th>
                        <td>{{$post->name_e}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Catégorie : </th>
                        <td>{{$post->cat}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Phone de l'entreprise : </th>
                        <td>{{$post->phone_e}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Nombre des employés : </th>
                        <td>{{$post->nbr_of_em}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Adress de l'entreprise : </th>
                        <td>{{$post->adress_e}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">ICE : </th>
                        <td>{{$post->ice}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">RC : </th>
                        <td>{{$post->rc}}</td>
                    </tr>
                    <tr>
                        <th class="text-center">Image : </th>
                        <td><a href="{{ asset('uploads/' . $post->pict) }}" download>Télécharger l'image</a></td>
                    </tr>
                    <tr>
                        <th class="text-center">Cin : </th>
                        <td><a href="{{ asset('pdfs/' . $post->cin_pict) }}" download>Télécharger le cin</a></td>
                    </tr>
                    <tr>
                        <th class="text-center">Magasin : </th>
                        <td><a href="{{ asset('pdfs2/' . $post->magasin_pict) }}" download>Télécharger l'image de magasin</a></td>
                    </tr>
                    <tr>
                        <th class="text-center">Entreprise : </th>
                        <td><a href="{{ asset('pdfs3/' . $post->entreprise_pict) }}" download>Télécharger le fichier de l'entreprise</a></td>
                    </tr>
                    <tr>
                        <th class="text-center">Paiment : </th>
                        <td><a href="{{ asset('pdfs4/' . $post->payment_pict) }}" download>Télécharger le fichier du paiment</a></td>
                    </tr>
                   

                </table>
                <br>
                <div class="d-flex justify-content-center">

                <form action="{{ route('softd', ['id' => $post->id]) }}" method="GET">
               
                    <a href="{{ route('admin') }}" class="btn btn-sm btn-info">&lt; Retour</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button onclick="return confirm('Etes-vous sûr ?')" type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                </form>
                <form action="{{ route('edit_show',['id' =>$post->id])}}" method="GET">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button  type="submit" style="width:90px;"class="btn btn-sm btn-warning">Edit</button>
                </form></div>
                

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

 
    </div>
</body>

</html>