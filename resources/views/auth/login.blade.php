<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Furniture Admin</title>
        <meta name="robots" content="noindex, nofollow" />
        <link rel="shortcut icon" type="image/icon" href="{{ url('public/favicon.ico') }}">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ url('public/aset/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('public/aset/fa/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ url('public/aset/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ url('public/aset/plugins/iCheck/square/blue.css') }}">
        <style>
            @media only screen and (max-width: 768px) {

            .cust_unduh {
                display:none;
            }
            .cust_app {
                display:block !important;
            }
            
            }
        </style>
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
        <div class="login-logo">
            <b>Furniture Admin</b>
        </div>
        <div class="login-box-body">
            <div style="text-align: center;">
                <p>Kode Akses : admin</p>
                <p>Kata Sandi : password</p>
            </div>
            {{--  <b><p class="login-box-msg">Furniture Admin</p></b>  --}}
            <form action="{{ route('panel.login.proses') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input type="text" value="admin" name="username" class="form-control" placeholder="Kode Akses" maxlength="30" required/>
                    <span class="form-control-feedback"><i class="fa fa-user"></i></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" value="password" name="password" class="form-control" placeholder="Kata Sandi" maxlength="255" required/>
                    <span class="form-control-feedback"><i class="fa fa-unlock"></i></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <button type="submit" class="btn btn-primary">Masuk</i></button>
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                    
                    </div><!-- /.col -->
                </div>
                <br>
                @if (Session::has('message'))
                    <div class="alert alert-{{ Session::get('alert') }} alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{--  <h5> Alert!</h5>  --}}
                        {{ Session::get('message') }}
                    </div>
                @endif
                {{-- <center><font style="color:red;"><?php echo $Err ?></font></center>
                <center><font style="color:green;"><?php echo $Notif ?></font></center> --}}
                </br>
            </form>
        </div>
        <div class="col text-center" style="margin-top:15px; font-size:90%;">
            <strong>Copyright © 2020 <a href="http://sinudtech.web.id/" target="_blank">Sinudtech</a></strong>
        </div>
        

        <!-- jQuery 2.1.4 -->
        <script src="{{ url('public/aset/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
        <script src="{{ url('public/aset/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('public/aset/plugins/iCheck/icheck.min.js') }}"></script>
    </body>
</html>