<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
    <link rel="stylesheet" href="../assets/vendors/core/core.css">
    <link rel="stylesheet" href="../assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
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

    <script src="../assets/vendors/core/core.js"></script>
    <script src="../assets/vendors/feather-icons/feather.min.js"></script>
    <script src="../assets/js/template.js"></script>
</body>

</html>
