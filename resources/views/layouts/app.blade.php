<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/assets/vendors/core/core.css">
    <link rel="stylesheet" href="/assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/images/favicon.png" />
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/floating-message.css">
    <link rel="stylesheet" href="/css/form-elements.css">
    @stack('css')
</head>

<body>
    <div class="main-wrapper">
        @include('layouts.sidebar')
        <div class="page-wrapper">
            @include('layouts.navbar')
            <div class="page-content">
                @yield('content')
            </div>
            @include('layouts.footer')
        </div>
    </div>


    <!-- plugin js for this page -->
    <script src="../assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- custom js for this page -->
    <script src="../assets/js/data-table.js"></script>
    <div class="progress-container" id="progress">
        <div class="progress-content">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div>Procesando, por favor espere ...</div>
        </div>
    </div>
    <script src="/assets/vendors/core/core.js"></script>
    <script src="/assets/vendors/feather-icons/feather.min.js"></script>
    <script src="/assets/js/template.js"></script>
    <script src="/js/utils/floating-message.js"></script>
    @stack('js')
</body>

</html>
