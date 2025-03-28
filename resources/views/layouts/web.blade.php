<!DOCTYPE html>
<html lang="pt-br">
<head>

    @include('section.head')

</head>

<body id="page-top">

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
    <img class="responsive mb-2" src="{{ url('img/logo/qr-code.svg') }}" width="200">
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
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script> new DataTable('#dataTable', {language: {url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json'}}); </script>

<script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ url('js/demo/datatables-demo.js') }}"></script>


</body>

</html>
