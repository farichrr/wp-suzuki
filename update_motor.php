<?php
    require_once "connect.php";
    session_start();
    $nopol = $_POST['nopol'];
    $nama_kendaraan = $_POST['nama_kendaraan'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $check = "SELECT * FROM kendaraan WHERE nopol='".$nopol."'";
    $hasil = mysqli_query($db, $check);
    $query="UPDATE kendaraan SET 
    nama_kendaraan='".$nama_kendaraan."',jenis_kendaraan='".$jenis_kendaraan."' WHERE nopol = '".$nopol."'";
    if (mysqli_query($db,$query)) {
        echo "Data berhasil diedit";
    } else {
        echo "Data gagal diedit";
    }

    mysqli_close($db);
?>
    

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet"/>
    <div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-red">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-green">
        <div class="circle-clipper left">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper right">
          <div class="circle"></div>
        </div>
      </div>
    </div>
<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="profile.php";
            }
            
            
            setTimeout('Redirect()', 10000);
         //-->
      </script>