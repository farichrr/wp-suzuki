<?php
session_start();


?>  




<!DOCTYPE html>
<html lang="">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    
</head>

<body>
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">

        <li><a href="signout.php">Sign Out</a></li>
    </ul>
    <!-- Dropdown Structure -->
    <ul id="dropdown2" class="dropdown-content">

        <li><a href="signout.php">Sign Out</a></li>
    </ul>
    <nav class="white   ">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img  class="img-rounded" src="img/logo.png" alt="suzuki.png"></a>
        
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
         <li><a href="menuservis.php"><i class="material-icons right">store</i>Menu Jasa Servis</a></li>
        
        <li><a href="menuuser.php"><i class="material-icons right">assignment_ind</i>Menu User</a></li>
        <li class="active"><a href="pesan.php"><i class="material-icons right">markunread_mailbox</i>Pesan</a></li>
        <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="material-icons">more_vert</i></a></li>
          
      </ul>
        <ul class="side-nav" id="mobile-demo">
        <li><a href="menuservis.php"><i class="material-icons right">store</i>Menu Jasa Servis</a></li>
        
        <li><a href="menuuser.php"><i class="material-icons left">assignment_ind</i>Menu User</a></li>
        <li class="active"><a href="pesan.php"><i class="material-icons left">markunread_mailbox</i>Pesan</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons left">more_vert</i>Settings</a></li>
      </ul>
    </div>
        </nav>
         
   <div class="container">
       
    
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="col s12">
                        <table class="highlight centered">
        <thead>
          <tr>
              <th data-field="pegawai" rowspan="2">Pegawai</th>
              <th data-field="nama" rowspan="2">Nama</th>
              <th data-field="email" rowspan="2">Email</th>
              <th data-field="pesan">Pesan</th>
              <th data-field="tanggal">Tanggal</th>
          </tr>
        </thead>

        <tbody>
            <?php
                require_once "connect.php";
                
                if ($_SESSION['username']=='admin'){
                    $sql = "SELECT * FROM pesan";
                } else {
                    $sql = "SELECT * FROM pesan where pegawai='".$_SESSION['username']."'";
                }
                    
                    $result = mysqli_query($db, $sql);
                    
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>".@$row['pegawai']."</td>  
            <td>".@$row['nama']."</td>
            <td><a href='mailto:".@$row['email']."'>".@$row['email']."</td>
            <td>".@$row['pertanyaan']."</td>
            <td>".@$row['tanggal']."</td>
            </tr>";
    }
} else {
    echo "0 results";
} ?>
          
        </tbody>
                    </table>
                </div>
            </div>
        </form>
       </div>
</div>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>

<script>$(document).ready(function() {
    $('select').material_select();
  });</script>
    <script>$('.modal-trigger').leanModal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      in_duration: 300, // Transition in duration
      out_duration: 200, // Transition out duration
    }
  );
          </script>
        <script>$(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });</script>
        <script>$(".button-collapse").sideNav();</script>
</body>
</html>
