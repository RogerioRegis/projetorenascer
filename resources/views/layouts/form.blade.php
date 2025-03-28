<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Rogério Regis">

    <link data-vue-meta="1" rel="apple-touch-icon" href="{{ url('img/favicon.png') }}" sizes="180x180">
    <link data-vue-meta="1" rel="icon" href="{{ url('img/favicon.png') }}" sizes="32x32" type="image/png">
    <link data-vue-meta="1" rel="icon" href="{{ url('img/favicon.png') }}" sizes="16x16" type="image/png">
    <link data-vue-meta="1" rel="manifest" href="{{ url('img/favicon.png') }}">
    <link data-vue-meta="1" rel="mask-icon" href="{{ url('img/favicon.png') }}" color="#212121">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('css/profile-styles.css') }}" rel="stylesheet" />
    <link href="{{ url('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page 
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">-->

    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
  <![endif]-->
    <!-- Scripts -->

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>

<body id="page-top" class="bg-dark-menu">

    @include('section.topbar')

    <!-- Begin Page Content -->
    <div class="container-fluid bg-dark-mode">

        @yield('content')

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-dark-mode">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>

<script type="text/javascript">
    var form = $("#create_form");
    $(document).ready(function() {
        $('#create_form').parent('.portlet-body').addClass('form portlet-form-body');
        $('#fone').inputmask("(99)99999-9999", {autoUnmask: true,"clearIncomplete": true});
        $('#placa').inputmask("aaa-9*99", {autoUnmask: true});
        $('#cpf').inputmask("999.999.999-99", {autoUnmask: true});
        $('cnpj').inputmask("99.999.999.99", {autoUnmask: true});
        $('#data_nasc').inputmask("99/99/9999", {autoUnmask: true});});
</script>

</body>

</html>
