<!DOCTYPE html>
<html>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J5XTGTN6FP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
    
        gtag('config', 'G-J5XTGTN6FP');
    </script>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Furniture | {{ $halaman }}</title>
        <link rel="shortcut icon" type="image/icon" href="{{ url('public/favicon.ico') }}">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ url('public/aset/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('public/aset/fa/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ url('public/aset/plugins/datatables/dataTables.bootstrap.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="{{ url('public/aset/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ url('public/aset/dist/css/skins/_all-skins.min.css') }}">
        @yield('style')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('panel.layouts.header.header')
            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image"><p></p></div>
                    </div>
                    @include('panel.layouts.menu.admin')
                </section>
            </aside>
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('panel.layouts.footer.footer')
        </div>

        <script src="{{ url('public/aset/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
        <script src="{{ url('public/aset/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('public/aset/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('public/aset/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ url('public/aset/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ url('public/aset/plugins/fastclick/fastclick.min.js') }}"></script>
        <script src="{{ url('public/aset/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
        <script src="{{ url('public/aset/dist/js/app.min.js') }}"></script>
        @yield('javascript')
    </body>
</html>
