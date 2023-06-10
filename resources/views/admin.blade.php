@extends('master.layout_admin')

@section('active_d')
    active
@endsection

@section('content')
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
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                       <!-- Nav Item - Alerts -->
                        @if(auth()->user()->status == 'High' || auth()->user()->status == 'Medium')

                        <li class="nav-item dropdown no-arrow mx-1" >
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                @if(auth()->user()->unreadNotifications->count() > 0)
                                <span class="badge badge-danger badge-counter">{{ auth()->user()->unreadNotifications->count() }}</span>
                            @endif
                        @endif

                        </a>
                        <!-- Dropdown - Alerts -->
                    
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" style="width: 650px !important;">
                        <h6 class="dropdown-header">
                            Alerts Center
                        </h6>
                        <!-- Rest of the dropdown menu content -->
                        <div style="max-height: 380px; overflow-y: auto;">
                            @foreach(auth()->user()->unreadNotifications as $notification)
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('post.show', ['id' => $notification->data['id']]) }}">
                                <div class="d-flex justify-content-between align-items-center flex-grow-1">
                                    <div>
                                        <div class="small text-gray-500">{{ $notification->created_at->format('F d, Y') }}</div>
                                        <span class="font-weight-bold">{{ $notification->data['name'] }}</span>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary">Voir</button>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <a href="{{ route('unconfirmed') }}" class="dropdown-item text-center small text-gray-500" style="cursor:pointer;" id="okay">Show All Alerts</a>
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Confirmés</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $userConfirmed }}</div>
                                        </div>
                                        <a href="{{ route('unconfirmed') }}">
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Supprimés</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $userTrash }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-trash fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Non confirmés
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$userUnconfirmed}}</div>
                                                </div>
                                                <div class="col">
                                                    <!-- <div class="progress progress-sm mr-2"> -->
                                                        <!-- <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div> -->
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('unconfirmed') }}">
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(auth()->user()->status == 'High' || auth()->user()->status == 'Medium')
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Admins</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{auth()->user()->count()}}</div>
                                        </div>
                                        <a href="{{ route('show_admin') }}">
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                        <div  id="bar">
                                <div 
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary" >Aperçu des personnes</h6>
                                    
                               
                                </div>

                                <!-- Card Body -->
                                <div class="card-body" >
                                    <div class="chart-area">
<div style="width: 900px; height: 320px;">
  <canvas id="myChart" style="width: 100%; height: 100%;"></canvas>
</div>
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
    const labels = <?php echo '["' . implode('", "', $labels) . '"]'; ?>;
    const createdData = <?php echo '[' . implode(', ', $createdData) . ']'; ?>;
    const deletedData = <?php echo '[' . implode(', ', $deletedData) . ']'; ?>;
    const unconfirmedUsersData = <?php echo '[' . implode(', ', $unconfirmedUsersData) . ']'; ?>;

    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Confirmés',
                    data: createdData,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Green color
                    borderColor: 'rgba(75, 192, 192, 1)', // Green color
                    borderWidth: 1,
                },
                {
                    label: 'Supprimés',
                    data: deletedData,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)', // Red color
                    borderColor: 'rgba(255, 99, 132, 1)', // Red color
                    borderWidth: 1,
                },
                {
                    label: 'Non confirmés',
                    data: unconfirmedUsersData,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)', // Purple color
                    borderColor: 'rgba(153, 102, 255, 1)', // Purple color

                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
</script>

                          </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    
                                  
                                </div>
                                <!-- Card Body -->
                                <div class="card-body"  >
                                    <!-- Add this to your Laravel blade template -->

                                    <canvas id="doughnut-chart"></canvas>
<script>
    const userCount = <?php echo $userConfirmed; ?>;
    const userTrash = <?php echo $userTrash; ?>;
    const userunconfirmed = <?php echo $userUnconfirmed; ?>;

    const totalUsers = userCount + userTrash + userunconfirmed;

    const userCountPercentage = ((userCount / totalUsers) * 100).toFixed(1);
    const userTrashPercentage = ((userTrash / totalUsers) * 100).toFixed(1);
    const unconfirmedUsersPercentage = ((userunconfirmed / totalUsers) * 100).toFixed(1);

    new Chart(document.getElementById("doughnut-chart"), {
        type: 'doughnut',
        data: {
            labels: ['Confirmés', 'Supprimés', 'Non confirmés'],
            datasets: [{
                label: "User Data",
                backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)', 'rgba(153, 102, 255, 0.2)'],
                borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(153, 102, 255, 1)'],
                data: [userCountPercentage, userTrashPercentage, unconfirmedUsersPercentage]
    

            }]
        },
        options: {
            title: {
                display: true,
                text: 'User Data Chart'
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            return context.formattedValue + '%';
                        }
                    }
                }
            }
        }
    });
</script>

                                    
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hiden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hiden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script>
    var  okay = document.getElementById("okay");
  var confirmall = document.getElementById("confirmall");
  var bar= document.getElementById("bar");



  okay.addEventListener("click", function() {
    if (bar.style.display === "none" ) {
      bar.classList.add("fade-in");
      bar.style.display = "block";
      confirmall.classList.add("fade-in");
      confirmall.style.display = "none";
     
    } else {
    confirmall.classList.add("fade-in");
    confirmall.style.display = "block";
      bar.style.display = "none";
      bar.classList.add("fade-in");

  }});
  bar.addEventListener("animationend", function() {
    bar.classList.remove("fade-in");
  }); 
  confirmall.addEventListener("animationend", function() {
    confirmall.classList.remove("fade-in");
  });
  
</script>
<script>
    var  back = document.getElementById("back");
  var confirmall = document.getElementById("confirmall");
  var bar= document.getElementById("bar");
  back.addEventListener("click", function() {
    if (confirmall.style.display === "none" ) {
      confirmall.classList.add("fade-in");
      confirmall.style.display = "block";
      bar.classList.add("fade-in");
      bar.style.display = "none";
     
    } else {
    bar.classList.add("fade-in");
    bar.style.display = "block";
      confirmall.style.display = "none";
      confirmall.classList.add("fade-in");

  }});
  bar.addEventListener("animationend", function() {
    bar.classList.remove("fade-in");
  }); 
  confirmall.addEventListener("animationend", function() {
    confirmall.classList.remove("fade-in");
  });
  
</script>
@endsection