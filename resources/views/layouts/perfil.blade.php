<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('section.head')
</head>
<body id="page-top">
    <!-- Begin Page Content -->
    <div class="container-fluid bg-gray-900">
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
