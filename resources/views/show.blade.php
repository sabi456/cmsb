
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
        <h1 class="m-0 font-weight-bold text-primary" >Informations of user</h1>       
                                <div class="card-body">
                                    <div class="table-responsive">
        <div  id="table">                            
        <div class="card shadow mb-4">
                                <div class="card-header py-3">
                            
                                </div>
                                
                                <div class="card-body">
                                    <div class="table-responsive">
                                    
                                    
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <table class="table">
                    <tr>
                        <th class="text-center">ID : </th>
                    </tr>
                    <tr>
                        <th class="text-center">Nom complet : </th>
                    </tr>
                    <tr>
                        <th class="text-center">CIN : </th>
                    </tr>
                    <tr>
                        <th class="text-center">Date de naissance : </th>
                    </tr>
                    <tr>
                        <th class="text-center">Lieu de naissance : </th>
                    </tr>
                    <tr>
                        <th class="text-center">Adresse : </th>
                    </tr>
                    <tr>
                        <th class="text-center">Phone : </th>
                    </tr>
                    <tr>
                        <th class="text-center">E-mail : </th>
                    </tr>
                    <tr>
                        <th class="text-center">Note : </th>
                    </tr>
                    <tr>
                        <th class="text-center">Date d'inscription : </th>
                    </tr>
                    <tr>
                        <th class="text-center">Nom de l'entreprise : </th>
                    </tr>
                    <tr>
                        <th class="text-center">Catégorie : </th>
                    </tr>
                    <tr>
                        <th class="text-center">Phone de l'entreprise : </th>
                    </tr>
                    <tr>
                        <th class="text-center">Nombre des employés : </th>
                    </tr>
                    <tr>
                        <th class="text-center">Adress de l'entreprise : </th>
                    </tr>
                    <tr>
                        <th class="text-center">ICE : </th>
                    </tr>
                    <tr>
                        <th class="text-center">RC : </th>
                    </tr>
                    <tr>
                        <th class="text-center">Phone de l'entreprise : </th>
                    </tr>
                    <tr>
                        <th class="text-center">Nombre des employés : </th>
                    </tr>
                   
                    <tr>
                        <th class="text-center"></th>
                        <th class="text-center">{{$post->name}}</th>
                        <th class="text-center">{{$post->cin}}</th>
                        <th class="text-center">{{$post->adress}}</th>
                        <th style="color:red;" class="text-center">{{$post->user1 ? $post->user1->name : null}}</th>
                        <th style="color:red;" class="text-center">{{$post->user2 ? $post->user2->name : null}}</th>

                    </tr>

                </table>
                <div class="text-center"><a href="{{ route('tables') }}" class="btn btn-danger">Retour</a></div>

        </form>

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