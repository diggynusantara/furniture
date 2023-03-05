<?php
    include 'vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createMutable(__DIR__);
    $dotenv->load();
    // echo env('MOBILE_URL');
    date_default_timezone_set("Asia/Bangkok");
    $server = env('DB_HOST');
    // $username = "root";
    // $password = "";
    // $database = "skada";
    $username = env('DB_USERNAME');
    $password = env('DB_PASSWORD');
    $database = env('DB_DATABASE');
    $konek = mysqli_connect($server, $username, $password, $database);

    if(mysqli_connect_errno()){
    	printf ("Gagal terkoneksi : ".mysqli_connect_error());
    	exit();
    }

?>
