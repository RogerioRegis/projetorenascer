<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('section.head')
</head>
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('reeducandos') }}">
            <div class="sidebar-brand-icon">
                <img class="responsive" src="{{ url('img/PROJETO_RENASCER_LOGO.svg') }}" width="50">  
            </div>
            <div class="sidebar-brand-text mx-1">Reeducandos 
                <sup id="current_date">
                    <script>
                        date = new Date();
                        year = date.getFullYear();
                        document.getElementById("current_date").innerHTML = year;
                    </script>
                </sup>
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Reeducandos -->
        <li class="nav-item active">
            <a class="nav-link" href="{{url('reeducandos')}}">
                <i class="fas fa-fw fa-user"></i>
                <span>Reeducandos</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Ordens de Serviços -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('month')}}">
                <i class="fas fa-fw fa-calendar"></i>
                <span>Meses</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            FREQUÊNCIAS
        </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Arquivos</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">2022</h6>
                <a class="collapse-item" href="{{ url('#') }}"><i class="fas fa-fw fa-file-alt"></i>FREQUÊNCIAS 2022</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">2023</h6>
                <a class="collapse-item" href="{{ url('#') }}"><i class="fas fa-fw fa-file-alt"></i>FREQUÊNCIAS 2023</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card">
        <img class="responsive" src="{{ url('img/PROJETO_RENASCER_LOGO.svg') }}" width="100" alt="">
        <p class="text-center mb-2"><strong>Projeto Renscer</strong> da Secretaria de Justiça e Cidadania</p>
        <a class="btn btn-success btn-sm" href="{{ url('http://www.sejuc.rr.gov.br/') }}" target = "_ blank">SEJUC - RR</a>
    </div>
</ul>
<!-- End of Sidebar -->

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
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Procurar por..."
                aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    {{ Auth::user()->name }}
                </span>
                <img class="img-profile rounded-circle"
                src="{{ url('img/logo_projeto_renascer.png') }}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">

            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>

        </div>
    </li>
</ul>

</nav>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">
    @yield('content')
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Todos os direitos reservados &copy; SEJUC 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

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
aria-hidden="true">
<div class="modal-dialog text-center" role="document">
    <img class="responsive" src="{{ url('img/PROJETO_RENASCER_LOGO.svg') }}" width="150">
    <div class="modal-content">
        <div class="modal-header text-center">
            <h5 class="modal-title" id="exampleModalLabel">Pronto para sair? <strong>{{ Auth::user()->name }}</strong></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body text-truncate">Selecione "Logout" abaixo se você estiver pronto para encerrar sua sessão atual.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Sair
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ url('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ url('js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ url('vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ url('js/demo/chart-area-demo.js') }}"></script>
<script src="{{ url('js/demo/chart-pie-demo.js') }}"></script>


<!-- Page level plugins -->
<script src="{{ url('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ url('js/demo/datatables-demo.js') }}"></script>

</body>

</html>