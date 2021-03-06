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
        
        <li class="active"><a href="menuuser.php"><i class="material-icons right">assignment_ind</i>Menu User</a></li>
        <li><a href="pesan.php"><i class="material-icons right">markunread_mailbox</i>Pesan</a></li>
        <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="material-icons">more_vert</i></a></li>
          
      </ul>
        <ul class="side-nav" id="mobile-demo">
        <li><a href="menuservis.php"><i class="material-icons right">store</i>Menu Jasa Servis</a></li>
        
        <li class="active"><a href="menuuser.php"><i class="material-icons left">assignment_ind</i>Menu User</a></li>
        <li><a href="pesan.php"><i class="material-icons left">markunread_mailbox</i>Pesan</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons left">more_vert</i>Settings</a></li>
      </ul>
    </div>
        </nav>
         
   <div class="container">
       <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">description</i>Lihat User</div>
      <div class="collapsible-body">
          <p>Menu untuk melihat Semua user yang terdaftar.</p>
        <p><a href="#modal2" class="btn-large modal-trigger">Lihat User<i class="material-icons right">description</i></a></p>
        </div>
    </li>
        <li>
      <div class="collapsible-header"><i class="material-icons">delete</i>Hapus User</div>
      <div class="collapsible-body">
          <p>Menu untuk menghapus User berdasarkan No ktp.</p>
          <div class="container">
          <p><form action="hapus_user.php" method="post">
                   <div class="input-field col s12">
                        <select name="ktp">
                        <?php
                            $konek = mysqli_connect("localhost","root","","suzuki");
                            $query = "select ktp from user";
                            $hasil = mysqli_query($konek,$query);
                            if (mysqli_num_rows($hasil) > 0) {
                            while($data=mysqli_fetch_array($hasil)){
                                echo "<option value=$data[ktp]>$data[ktp]</option>";
                            }
                                }else{
                                echo "<option value=0>Data Ktp User tidak ada</option>";
                            }       
                        ?>
                        </select>
                        <label>No Ktp User</label>
                    </div>
                    <button type="submit" class="btn">Hapus<i class="material-icons right">delete</i></button>
             </form>
                   </p>
          </div>
    </li>
  </ul>
        </div>
    
    </div>
    
    <!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <h4>User</h4>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="col s12">
                        <table class="highlight centered">
        <thead>
          <tr>
              <th data-field="ktp" rowspan="2">Ktp</th>
              <th data-field="nama" rowspan="2">Nama</th>
              <th data-field="username" rowspan="2">Username</th>
              <th data-field="password" rowspan="2">Password</th>
              <th data-field="phone" rowspan="2">Phone</th>
          </tr>
        </thead>

        <tbody>
            <?php
                require_once "connect.php";
    
                $sql = "SELECT * FROM user";
                $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>".@$row['ktp']."</td>  
            <td>".@$row['nama']."</td>
            <td>".@$row['username']."</td>
            <td>".sha1(@$row['password'])."</td>
            <td>".@$row['phone']."</td>
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
