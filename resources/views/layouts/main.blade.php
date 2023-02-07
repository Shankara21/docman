<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Docman - Document Management</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="./assets/img/favicon.png" rel="icon">
    <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="./assets/css/boxicons.min.css" rel="stylesheet">
    <link href="./assets/css/quill.snow.css" rel="stylesheet">
    <link href="./assets/css/quill.bubble.css" rel="stylesheet">
    <link href="./assets/css/remixicon.css" rel="stylesheet">
    <link href="./assets/css/simple-datatables.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @include('layouts.header')
    @include('layouts.aside')
    <main id="main" class="main">
        @yield('content')
    </main>
    @include('layouts.footer')
    <script src="./assets/js/apexcharts.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/chart.min.js"></script>
    <script src="./assets/js/echarts.min.js"></script>
    <script src="./assets/js/quill.min.js"></script>
    <script src="./assets/js/simple-datatables.js"></script>
    <script src="./assets/js/tinymce.min.js"></script>
    <script src="./assets/js/validate.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>
