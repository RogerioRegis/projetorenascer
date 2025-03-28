
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Rogério Regis">

    <link data-vue-meta="1" rel="apple-touch-icon" href="{{ url('/img/favicon.png') }}" sizes="180x180">
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

    <!-- Custom styles for this template
    <link href="{{ url('css/profile-styles.css') }}" rel="stylesheet" />-->
    <link href="{{ url('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" rel="stylesheet">

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
