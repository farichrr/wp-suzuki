<?php
    require_once "connect.php";
    session_start();
    $id_product = $_POST['id_product'];
    $uang_muka_baru = $_POST['uang_muka'];
    $baru_11x = $_POST['11x'];
    $baru_23x = $_POST['23x'];
    $baru_35x = $_POST['35x'];
echo $_SESSION['id_kredit'];
    $check = "SELECT * FROM kredit WHERE id_kredit='".$_SESSION['id_kredit']."'";
    
    $hasil = mysqli_query($db, $check);
    
    $query="UPDATE kredit SET id_product='".$id_product."',uang_muka='".$uang_muka_baru."',11x='".$baru_11x."',23x='".$baru_23x."',35x='".$baru_35x."' WHERE id_kredit = '".$_SESSION['id_kredit']."'";
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
               window.location="menukredit.php";
            }
            
            
            setTimeout('Redirect()', 10000);
         //-->
      </script>