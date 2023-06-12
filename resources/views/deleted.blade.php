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
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
<link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web\css\all.min.css')}}">


    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <!-- Custom styles for this page -->
    <style>
    .fade-in {
    animation-name: fadeIn;
    animation-duration: 1.5s;
  }
</style>
</head>
@section('active_del')
    active
@endsection

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('master.side_bar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(auth()->check())
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><h1 style="font-size:20px;"><b>{{ auth()->user()->name }}</b></h1></span>
                               
                                <img class="img-profile rounded-circle" style="height:50px;width:50px;"
                                    src="{{auth()->user()->profile_photo_url}}">
                            </a> @endif
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <form method="GET" action="{{ route('admin') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Home
                                    </button>
                                </form>
                                <form method="GET" action="{{ route('profile.show') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </button>
                                </form>
                                    @if(auth()->check())
                                    @if(auth()->user()->status=='High') 
                                    <a class="dropdown-item" href="{{'show_admin'}}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit Admin
                                </a>
                                @endif
                                @endif
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    
                    <div id="table1">                            
                    @if(session()->has('info'))
    <div id="success-message" class="container alert alert-primary">
        {{ session()->get('info') }}
    </div>
    <script>
        setTimeout(function() {
            var successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.remove();
            }
        }, 7000); // 7000 milliseconds = 7 seconds
    </script>
@endif

@if(session()->has('restored'))
    <div id="success-message" class="container alert alert-success">
        {{ session()->get('restored') }}
    </div>
@endif

@if(session()->has('restoreall'))
    <div id="success-message" class="container alert alert-success">
        {{ session()->get('restoreall') }}
    </div>
@endif

@if(session()->has('delete3'))
    <div id="success-message" class="container alert alert-danger">
        {{ session()->get('delete3') }}
    </div>
@endif

@if(session()->has('delete4'))
    <div id="success-message" class="container alert alert-success">
        {{ session()->get('delete4') }}
    </div>
@endif

@if(session()->has('success'))
    <div id="success-message" class="container alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('delete'))
    <div id="success-message" class="container alert alert-danger">
        {{ session()->get('delete') }}
    </div>
@endif

@if(session()->has('delete2'))
    <div id="success-message" class="container alert alert-danger">
        {{ session()->get('delete2') }}
    </div>
@endif

@if(session()->has('empty'))
    <div id="success-message" class="container alert alert-danger">
        {{ session()->get('empty') }}
    </div>
@endif

<script>
    setTimeout(function() {
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.remove();
        }
    }, 7000); // 7000 milliseconds = 7 seconds
</script>

       
 
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        <div class="d-flex justify-content-between">
  <h1 class="m-0 font-weight-bold text-primary mx-auto">Engageurs supprimés</h1>
</div>
</div>

                        
                        
    <div class="card-body">


        <div class="table-responsive">
            <table id="example" class="display nowrap" style="width:100%">
        
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Nom Complet</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Restore</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $t)  
                    <tr>
                        <td class="text-center">{{$t->id}}</td>
                        <td class="text-center">{{$t->name}}</td>
                        <td class="text-center">{{$t->phone}}</td>
                        <td class="text-center">{{$t->mail}}</td>
                        <td class="text-center">
                            <form id="restore{{$t->id}}" action="{{ route('post.restore', $t->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('PUT')
                                <button onclick="event.preventDefault(); if (confirm('Are You Sure?')) document.getElementById('restore{{$t->id}}').submit();" class="btn btn-success" type="submit">Restore</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        
            </table>
            
        </div>
        
            </table>
        </div>
    <<div class="text-center">
        @if($posts->isEmpty())
            <p>No users found in trash.</p>
        @else
            <form id="restoreAllForm" action="{{ route('post.restoreall') }}" method="post" style="display: inline;">
                @csrf
                @method('PUT')
                <button onclick="event.preventDefault(); if (confirm('Are You Sure?')) document.getElementById('restoreAllForm').submit();" class="btn btn-warning" type="submit">Restore All Users</button>
            </form>
        @endif
    </div>
    
    </div>
</div>
</div>

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

    <!-- Logout Modal-->
    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>
<script charset="utf8" type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script charset="utf8" type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script charset="utf8" type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script charset="utf8" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script charset="utf8" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script charset="utf8" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script charset="utf8" type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script charset="utf8" type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script>
$(document).ready(function() {
    // Handle the click event on the notification icon or trigger
    $('.dropdown-toggle').on('click', function(e) {
        e.preventDefault();
        $(this).next('.dropdown-menu').toggle();
    });
    
    // Close the dropdown menu when clicking outside of it
    $(document).on('click', function(e) {
        var target = e.target;
        if (!$(target).is('.dropdown-toggle') && !$(target).parents().is('.dropdown-toggle')) {
            $('.dropdown-menu').hide();
        }
    });
});
</script>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        dom: 'lBfrtip',
        buttons: [
            'copy',

            {
                extend: 'excel',
                text: 'Excel',
                filename: 'Table Users',
                customize: function(xlsx) {
                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
                    var data = sheet.getElementsByTagName('row');
                    
                    // Remove unwanted columns
                    for (var i = data.length - 1; i >= 0; i--) {
                        var cells = data[i].getElementsByTagName('c');
                        for (var j = cells.length - 1; j >= 0; j--) {
                            var cell = cells[j];
                            var column = cell.getAttribute('r').replace(/[0-9]/g, '');
                            
                            // Check if the column header is not in the allowed list
                            if (column !== 'A' && column !== 'B' && column !== 'C' && column !== 'D' && column !== 'E') {
                                data[i].removeChild(cell);
                            }
                        }
                    }
                    
                    xlsx.xl.worksheets['sheet1.xml'] = sheet;
                }
            }
        ],
        lengthMenu: [1, 5,10, 15, 20, 25, 50, 100, 200, 300, 1000]

    });
});
</script>



<script>
    var  delusers = document.getElementById("delusers");
  var table1 = document.getElementById("table1");
  var table2= document.getElementById("table2");
  var back= document.getElementById("back");



  delusers.addEventListener("click", function() {
    if (table1.style.display === "none" ) {
      table1.classList.add("fade-in");
      table1.style.display = "block";
      table2.style.display = "none";
      table2.classList.add("fade-in");
     
    } else {
        table1.classList.add("fade-in");
      table1.style.display = "none";
      table2.style.display = "block";
      table2.classList.add("fade-in");

  }});
  table1.addEventListener("animationend", function() {
    table1.classList.remove("fade-in");
  }); 
  table2.addEventListener("animationend", function() {
    table2.classList.remove("fade-in");
  });
  var  delusers = document.getElementById("delusers");
  var table1 = document.getElementById("table1");
  var table2= document.getElementById("table2");
  var back= document.getElementById("back");



  back.addEventListener("click", function() {
    if (table2.style.display === "none" ) {
      table1.classList.add("fade-in");
      table1.style.display = "none";
      table2.style.display = "block";
      table2.classList.add("fade-in");
     
    } else {
        table1.classList.add("fade-in");
      table1.style.display = "block";
      table2.style.display = "none";
      table2.classList.add("fade-in");

  }});
  table1.addEventListener("animationend", function() {
    table1.classList.remove("fade-in");
  }); 
  table2.addEventListener("animationend", function() {
    table2.classList.remove("fade-in");
  });
</script>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src= href="{{ asset('js/sb-admin-2.min.js')}}" ></script>

  <!-- Page level plugins -->
  <script src="{{ asset('vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
  <script src="{{ asset('js/demo/chart-bar-demo.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://kit.fontawesome.com/ce7b98fac5.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
<script charset="utf8" type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script charset="utf8" type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script charset="utf8" type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script charset="utf8" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script charset="utf8" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script charset="utf8" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script charset="utf8" type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script charset="utf8" type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
</html>