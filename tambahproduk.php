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
        <li><a href="help.html">Help</a></li>
        <li><a href="logout.php">Sign Out</a></li>
    </ul>
    <!-- Dropdown Structure -->
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="help.html">Help</a></li>
        <li><a href="logout.php">Sign Out</a></li>
    </ul>
    <nav class="white   ">
    <div class="nav-wrapper container">
      <a id="logo-container" href="admin.php" class="brand-logo"><img  class="img-rounded" src="img/logo.png" alt="suzuki.png"></a>
        
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li ><a href="menukredit.php"><i class="material-icons right">library_books</i>Menu Kredit</a></li>
        <li class="active"><a href="menuproduk.php"><i class="material-icons right">redeem</i>Menu Produk</a></li>
        <li><a href="menuuser.php"><i class="material-icons right">assignment_ind</i>Menu User</a></li>
        <li><a href="pesan.php"><i class="material-icons right">markunread_mailbox</i>Pesan</a></li>
          
        <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="material-icons">more_vert</i></a></li>
          
      </ul>
        <ul class="side-nav" id="mobile-demo">
        <li><a href="menukredit.php"><i class="material-icons left">library_books</i>Menu Kredit</a></li>
        <li class="active"><a href="menuproduk.php"><i class="material-icons left">redeem</i>Menu Produk</a></li>
        <li><a href="menuuser.php"><i class="material-icons left">assignment_ind</i>Menu User</a></li>    
        <li><a href="pesan.php"><i class="material-icons left">markunread_mailbox</i>Pesan</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons left">more_vert</i>Settings</a></li>
      </ul>
    </div>
        </nav>
         
   <div class="container">
       <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">note_add</i>Tambah Kredit</div>
      <div class="collapsible-body"><p>menu tambah kredit digunakan untuk menambahkan simulasi kredit untuk salah satu produk.</p>
          <p><a href="#modal1" class="btn-large modal-trigger ">Tambah Kredit <i class="material-icons right">note_add</i></a></p>
        </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">description</i>Lihat Kredit</div>
      <div class="collapsible-body">
          <p>Menu untuk melihat simulasi kredit motor yang tersedia.</p>
        <p><a href="#modal2" class="btn-large modal-trigger">Lihat Kredit<i class="material-icons right">description</i></a></p>
        </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">pageview</i>Update Kredit</div>
        <div class="collapsible-body">
            <p>Menu untuk memperbarui simulasi kredit produk berdasarkan id produk.</p>
            <div class="container">
        <p><form action="edit_kredit.php" method="post">
                <input type="text" name="id_kredit" required>
                <button type="submit" class="btn">Search<i class="material-icons right">pageview</i></button>
            </form>
                
           </p>
            </div>
        </div>
    </li>
        <li>
      <div class="collapsible-header"><i class="material-icons">delete</i>Hapus Kredit</div>
      <div class="collapsible-body">
          <p>Menu untuk menghapus kredit berdasarkan id produk.</p>
          <div class="container">
          <p><form action="delete_kredit.php" method="post">
                   <input type="text" name="id_hapus_kredit" required>
                    <button type="submit" class="btn">Hapus<i class="material-icons right">delete</i></button>
             </form>
                   </p>
          </div>
        </li>
        </ul>
        </div>
    
    </div>
    
    <!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Tambah Produk</h4>
        <div id="service" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col s12">
                    <ul class="tabs black-text">
                        <li class="tab col s3"><a href="#test1" class="light-green-text">Foto Produk</a></li>
                        <li class="tab col s3"><a href="#test2" class="light-green-text">Dimensi</a></li>
                        <li class="tab col s3"><a href="#test3" class="light-green-text">Mesin</a></li>
                        <li class="tab col s3"><a href="#test4" class="light-green-text">Rangka</a></li>
                    </ul>
                </div>
                <div id="test1" class="col s12">
                    <form action="prosestambah.php" method="post" enctype="multipart/form-data">

                        <label for="klBtn" class="black-text" style="font-size: 1em;">Foto Produk</label>

                        <div class="file-field input-field">
                            <div class="btn waves-effect waves-light">
                                <span>File</span>
                                <input type="file" name="foto1">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" id="klBtn" type="text">
                            </div>
                        </div>
                        <label for="kkBtn" class="black-text" style="font-size: 1em;">Foto Produk</label>

                        <div class="file-field input-field">
                            <div class="btn waves-effect waves-light">
                                <span>File</span>
                                <input type="file" name="foto2">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" id="kkBtn" type="text">
                            </div>
                        </div>
                        <label for="anBtn" class="black-text" style="font-size: 1em;">Foto Produk</label>

                        <div class="file-field input-field">
                            <div class="btn waves-effect waves-light">
                                <span>File</span>
                                <input type="file" name="foto3">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" id="anBtn" type="text">
                            </div>
                        </div>
                        <label for="ktpBtn" class="black-text" style="font-size: 1em;">Foto Produk</label>

                        <div class="file-field input-field">
                            <div class="btn waves-effect waves-light">
                                <span>File</span>
                                <input type="file" name="foto4">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" id="ktpBtn" type="text">
                            </div>
                        </div>
                </form>


                </div>
                <div id="test2" class="col s12">

                        <div class="input-field col s12">
                            <input id="panjang" name="d1" type="text" class="validate" required>
                            <label for="panjang">panjang</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="lebar" name="d2" type="text" class="validate" required>
                            <label for="lebar">lebar</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="jaraksumbu" name="d3" type="text" class="validate" required>
                            <label for="jaraksumbu">jarak sumbu</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="jarakpijak" name="d4" type="text" class="validate" required>
                            <label for="jarakpijak">jarak pijak</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="tinggijok" name="d5" type="text" class="validate" required>
                            <label for="tinggijok">tinggi jok</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="beratkosong" name="d6" type="text" class="validate" required>
                            <label for="beratkosong">berat kosong</label>
                        </div>


                </div>
                <div id="test3" class="col s12">

                        <div class="input-field col s12">
                            <input id="jenis" name="m1" type="text" class="validate" required>
                            <label for="jenis">jenis</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="isisilinder" name="m2" type="text" class="validate" required>
                            <label for="isisilinder">isi silinder</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="ratiokompresi" name="m3" type="text" class="validate" required>
                            <label for="ratiokompresi">ratio kompresi</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="sistembahanbakar" name="m4" type="text" class="validate" required>
                            <label for="sistembahanbakar">sistem bahan bakar</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="sistempengapian" name="m5" type="text" class="validate" required>
                            <label for="sistempengapian">sistem pengapian</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="sistemstarter" name="m6" type="text" class="validate" required>
                            <label for="sistemstarter">sistem starter</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="transimi" name="m7" type="text" class="validate" required>
                            <label for="transimi">transimi</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="kapasitastangki" name="m8" type="text" class="validate" required>
                            <label for="kapasitastangki">kapasitas tangki</label>
                        </div>
                </div>
                <div id="test4" class="col s12">
                        <div class="input-field col s12">
                            <input id="suspensidepan" name="r1" type="text" class="validate" required>
                            <label for="suspensidepan">suspensi depan</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="suspensibelakang" name="r2" type="text" class="validate" required>
                            <label for="suspensibelakang">suspensi belakang</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="remdepan" name="r3" type="text" class="validate" required>
                            <label for="remdepan">rem depan</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="rembelakang" name="r4" type="text" class="validate" required>
                            <label for="rembelakang">rem belakang</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="rodadepan" name="r5" type="text" class="validate" required>
                            <label for="rodadepan">roda depan</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="rodabelakang" name="r6" type="text" class="validate" required>
                            <label for="rodabelakang">roda belakang</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="velg" name="r7" type="text" class="validate" required>
                            <label for="velg">velg</label>
                        </div>
                        <div style="margin-top: 25px;">

                            <button class="btn waves-effect waves-light center darken-2" type="submit"
                                    name="action">Submit<i class="mdi-content-send right white-text"></i>
                            </button>

                            <button class="btn waves-effect waves-light center red" type="reset" name="action">Batal
                            </button>
                        </div>
                </div>


            </div>

            </div>
        </div>
        </div>
    </div>
    
</div>
    <!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <h4>Simulasi Kredit</h4>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="col s12">
                        <table class="highlight centered">
        <thead>
          <tr>
              <th data-field="id_kredit" rowspan="2">Id Kredit</th>
              <th data-field="id_product" rowspan="2">Product</th>
              <th data-field="uang_muka" rowspan="2">Uang Muka</th>
              <th data-field="angsuran" colspan="3">Angsuran</th>
          </tr>
            <tr>
                <th>11x</th>
                <th>25x</th>
                <th>35x</th>
            </tr>
        </thead>

        <tbody>
            <?php require_once "connect.php";
    require_once "rupiah.php";
    
$sql = "SELECT * FROM kredit order by id_kredit";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>".@$row['id_kredit']."</td>  
            <td>".@$row['id_product']."</td>
            <td>".format_rupiah(@$row['uang_muka'])."</td>
            <td>".format_rupiah(@$row['11x'])."</td>
            <td>".format_rupiah(@$row['23x'])."</td>
            <td>".format_rupiah(@$row['35x'])."</td>
            </tr>";
    }
} else {
    echo "0 results";
} ?>
          
        </tbody>
      </table>
            </form>
        </div>
    </div>
    
</div>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>


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
