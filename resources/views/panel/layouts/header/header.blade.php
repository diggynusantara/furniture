<header class="main-header">
    <div class="logo">
        <span class="logo-mini"><img src="{{ url('public/favicon.ico') }}" class="img-circle" alt="Logo" height="50" width="50"></span>
        <span class="logo-lg"><b>
            Furniture Admin</b>
        </span>
    </div>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
                <a href="#" onclick="if(confirm('Apakah Yakin Anda Akan Keluar ?')){ window.location.href = '{{ route('panel.logout') }}'; }" class="btn-primary">Keluar <i class="fa fa-sign-out"></i></a>
            </ul>
        </div>
    </nav>
</header>
