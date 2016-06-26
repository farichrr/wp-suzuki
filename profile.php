<?php
    session_start();        
    if( !isset($_SESSION["nama"]) ){
        header("location:index.php");
        exit();
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
     <link href="js/compressed/themes/default.time.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="js/compressed/themes/default.date.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="js/compressed/themes/default.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        
        <a id="logo-container" href="#" class="brand-logo"><img  class="img-rounded" src="img/logo.png" alt="suzuki.png"></a>
        <ul>
        <div class="nav-wrapper">

            <ul id="slide-out" class="side-nav right">
                <li><a href="team.php" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Costumer Service Page"><i class="material-icons left">supervisor_account</i>Costumer Service</a></li>
                <li><a href="product.php" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Check out our latest  Products"><i class="material-icons left">store</i><span class="new badge">4</span></a></li>
                <li><a href="home.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Booking Service"><i class="material-icons left">receipt</i>Book Now</a></li>
                <li class="active"><a href="profile.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Profile User"><i class="material-icons left">perm_identity</i>Profile</a></li>
                <li><a href="logout.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Logout"><i class="material-icons left">settings</i>Logout</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="team.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Costumer Service Page"><i class="material-icons left">supervisor_account</i>Costumer Service</a></li>
                <li><a href="product.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Check out our latest  Products"><i class="material-icons left">store</i><span class="new badge">4</span></a></li>
                <li><a href="home.php" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Booking Service"><i class="material-icons left">receipt</i>Book Now</a></li>
                <li class="active"><a href="profile.php" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Profile User"><i class="material-icons left">perm_identity</i>Profile</a></li>
                <li><a href="logout.php" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="material-icons left">settings</i>Logout</a></li>
            </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                </div>
            </ul>        
    </div>
</nav>


   <div class="section">
        <div class="container">
            <div class="row">
            <br><br>
            <h1 class="header center teal-text text-darken-3">Profile User</h1>
       <ul class="collapsible popout" data-collapsible="accordion">
            <li>
                <div class="collapsible-header"><i class="material-icons">perm_identity</i>Profil</div>
                <div class="collapsible-body">
                    <p>Menu untuk melihat data dan memperbarui nomor telepon anda</p>
                    
                        <p>
                            <a href="#modal2" class="modal-trigger btn waves-effect waves-light">Mulai Ubah</a>
                            
                        </p>
                   
                </div>
            </li>
           <li>
             <div class="collapsible-header"><i class="material-icons">assignment_ind</i>Motor</div>
                <div class="collapsible-body">
                    <p>Menu menambah data kendaraan anda, jika anda memiliki kendaraan lebih dari satu anda dapat dengan mudah untuk menambah data kendaraan anda</p>
                    
                        <p>
                            <a href="#modal3" class="modal-trigger btn waves-effect waves-light">Tambah Kendaraan</a>
                            <a href="#modal4" class="modal-trigger btn waves-effect waves-light">Lihat Data Kendaraan</a>
                            <a href="#modal5" class="modal-trigger btn waves-effect waves-light">Edit Data Kendaraan</a>
                            <a href="#modal6" class="modal-trigger btn waves-effect waves-light">Hapus Kendaraan</a>
                        </p>
                   
                </div>
            </li>
            <li>
                  <div class="collapsible-header"><i class="material-icons">description</i>Lihat Servis</div>
                  <div class="collapsible-body">
                      <p>Menu untuk melihat simulasi kredit motor yang tersedia.</p>
                    <p><a href="#modal7" class="btn-large modal-trigger">Lihat Servis<i class="material-icons right">description</i></a>
                      <a href="#modal8" class="btn-large modal-trigger">Detil Servis<i class="material-icons right">description</i></a></p>
                  </div>
            </li>
            </ul>
        </div>
    </div>
</div>
                             
    <!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Cari Track Record Motor dengan plat nomor</h4>
        <div class="row">
            <form class="col s12" method="post" action="cari_motor.php">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">label_outline</i>
                        <input name="nopol" id="nopol" type="text" class="validate" required >
                        <label for="nopol">No Polisi</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn waves-effect waves-light" type="submit"><i class="material-icons right">search</i>Cari</button>
                </div>
            </form>
        </div>
    </div>
</div>
        <!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <h4>Update Data</h4>
        <div class="row">
            <form class="col s12" method="post" action="update_user.php">
               <div class="row">
                   <div class="input-field col s12">
                        <input name="ktp" type="text" class="validate"  value="<?php echo $_SESSION['ktp'];?>" readonly>
                        <label>Ktp</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="nama" type="text" class="validate"  value="<?php echo $_SESSION['nama'];?>" readonly>
                        <label>Nama</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="username" type="text" class="validate"  value="<?php echo $_SESSION['username'];?>" readonly>
                        <label>Username</label>
                    </div>
                       <div class="input-field col s12">
                        <input name="phone" type="text" class="validate"  value="<?php echo $_SESSION['phone'];?>">
                        <label>Phone</label>
                    </div>
                    
                </div>
                <div class="modal-footer">
                  <button type="submit" class="waves-effect waves-green right btn">Ubah</button>
                </div>
            </form>
        </div>    
        </div>
    </div>
    <!-- Modal Structure -->
<div id="modal3" class="modal">
    <div class="modal-content">
        <h4>Kendaraan</h4>
        <div class="row">
            <form class="col s12" method="post" action="tambah_motor.php">
                   <div class="input-field col s12">
                        <input name="nopol" type="text" class="validate" autofocus required>
                        <label>No Polisi Kendaraan</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="ktp" type="text" class="validate"  value="<?php echo $_SESSION['ktp'];?>" readonly>
                        <label>Ktp</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="nama_kendaraan">
                            <option value="Suzuki Thunder 125">Suzuki Thunder 125</option>
                            <option value="Suzuki Satria F150">Suzuki Satria F150</option>
                            <option value="Suzuki Arashi 125">Suzuki Arashi 125</option>
                            <option value="Suzuki New Smash 110">Suzuki New Smash 110</option>
                            <option value="Suzuki New Shogun 125">Suzuki New Shogun 125</option>
                            <option value="Suzuki Skywave 125">Suzuki Skywave 125</option>
                            <option value="Suzuki New Shogun 125 FI">Suzuki New Shogun 125 FI</option>
                            <option value="Suzuki Skydrive 125">Suzuki Skydrive 125</option>
                            <option value="Suzuki Titan 110">Suzuki Titan 110</option>
                            <option value="Suzuki Axelo 125">Suzuki Axelo 125</option>
                            <option value="Suzuki Hayate 125">Suzuki Hayate 125</option>
                            <option value="Suzuki Nex 115">Suzuki Nex 115</option>
                            <option value="Suzuki Nex 115 FI">Suzuki Nex 115 FI</option>
                            <option value="Suzuki Lets 115">Suzuki Lets 115</option>
                            <option value="Suzuki Inazuma 250">Suzuki Inazuma 250</option>
                            <option value="Suzuki Shooter 115 FI">Suzuki Shooter 115 FI</option>
                            <option value="Suzuki New Satria FU150">Suzuki New Satria FU150</option>
                            <option value="Suzuki New Satria FU150 FI">Suzuki New Satria FU150 FI</option>
                            <option value="Suzuki Address">Suzuki Address</option>
                            <option value="Suzuki Satria F115 Young Star">Suzuki Satria F115 Young Star</option>
                        </select>
                        <label>Produk Suzuki</label>
                    </div>
                       <div class="input-field col s12">
                            <select name="jenis_kendaraan">
                                <option value="Matic">Matic</option>
                                <option value="Sport">Sport</option>
                                <option value="Bebek">Bebek</option>
                           </select>
                           <label>Tipe</label>
                    </div>
                        <div class="modal-footer">
                  <button type="submit" class="waves-effect waves-green right btn">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
     <!-- Modal Structure -->
<div id="modal4" class="modal">
    <div class="modal-content">
        <h4>Data Kendaraan Yang Anda Miliki</h4>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="col s12">
                        <table class="highlight centered">
        <thead>
          <tr>
              <th data-field="nopol">NO. Polisi</th>
              <th data-field="nama_kendaraan">Nama Kendaraan</th>
              <th data-field="jenis_kendaraan">Jenis Kendaraan</th>
          </tr>
        </thead>

        <tbody>
            <?php
                require_once "connect.php";
    
                $sql = "SELECT nopol,nama_kendaraan,jenis_kendaraan FROM kendaraan WHERE ktp='".$_SESSION['ktp']."'";
                $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>".@$row['nopol']."</td>  
                    <td>".@$row['nama_kendaraan']."</td>
                    <td>".@$row['jenis_kendaraan']."</td>
                    </tr>";
                    }
                } else {
                    echo "Data Kendaraan Tidak Ada atau Tidak ditemukan";
            } ?>
          
        </tbody>
                    </table>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
    <!--modal structure-->
    <div id="modal5" class="modal">
    <div class="modal-content">
        <h4>Edit Data Kendaraan</h4>
        <div class="row">
            <form class="col s12" action="edit_motor.php" method="post">
                    <select name="nopol">
                        <?php
                            $konek = mysqli_connect("localhost","root","","suzuki");
                            $query = "select nopol from kendaraan where ktp=".$_SESSION['ktp']."";
                            $hasil = mysqli_query($konek,$query);
                            if (mysqli_num_rows($hasil) > 0) {
                            while($data=mysqli_fetch_array($hasil)){
                                echo "<option value=$data[nopol]>$data[nopol]</option>";
                            }
                                }else{
                                echo "<option value=0>Data Kendaraan Tidak Ada</option>";
                            }       
                        ?>
                        </select>
                        <label>NOPOL</label>
                <button class="btn waves-effect waves-light" type="submit"><i class="material-icons right">info</i>Edit</button>
        </form>
        </div>
    </div>
</div>
    <!--modal structure-->
    <div id="modal6" class="modal">
    <div class="modal-content">
        <h4>Hapus Kendaraan</h4>
        <div class="row">
            <form class="col s12" action="hapus_motor.php" method="post">
                    <select name="nopol">
                        <?php
                            $konek = mysqli_connect("localhost","root","","suzuki");
                            $query = "select nopol from kendaraan where ktp=".$_SESSION['ktp']."";
                            $hasil = mysqli_query($konek,$query);
                            if (mysqli_num_rows($hasil) > 0) {
                            while($data=mysqli_fetch_array($hasil)){
                                echo "<option value=$data[nopol]>$data[nopol]</option>";
                            }
                                }else{
                                echo "<option value=0>Data Kendaraan Tidak Ada</option>";
                            }       
                        ?>
                        </select>
                        <label>NOPOL</label>
                <button class="btn waves-effect waves-light" type="submit"><i class="material-icons right">delete</i>Hapus</button>
        </form>
        </div>
    </div>
</div>
    <!--modal structure-->
    <div id="modal7" class="modal">
    <div class="modal-content">
        <h4>Lihat Servis</h4>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="col s12">
                        <table class="highlight centered">
        <thead>
          <tr>
              <th data-field="id_book">No Booking</th>
              <th data-field="tanggal">Tanggal</th>
              <th data-field="nopol">No. Polisi</th>
              <th data-field="jam">jam</th>
              <th data-field="status">status</th>
          </tr>
        </thead>

        <tbody>
            <?php
                require_once "connect.php";
    
                $sql = "SELECT id_book,tanggal,nopol,jam,status FROM booking WHERE ktp='".$_SESSION['ktp']."'";
                $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>".@$row['id_book']."</td>  
                    <td>".@$row['tanggal']."</td>
                    <td>".@$row['nopol']."</td>
                    <td>".@$row['jam']."</td>
                    <td>".@$row['status']."</td>
                    </tr>";
                    }
                } else {
                    echo "Data Kendaraan Tidak Ada atau Tidak ditemukan";
            } ?>
          
        </tbody>
                    </table>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
     <!--modal structure-->
    <div id="modal8" class="modal">
    <div class="modal-content">
        <h4>Detil Servis Kendaraan</h4>
        <div class="row">
            <form class="col s12" action="detail_servis_user.php" method="post">
                    <select name="id_book">
                        <?php
                            $konek = mysqli_connect("localhost","root","","suzuki");
                            $query = "select id_book from booking where ktp=".$_SESSION['ktp']."";
                            $hasil = mysqli_query($konek,$query);
                            if (mysqli_num_rows($hasil) > 0) {
                            while($data=mysqli_fetch_array($hasil)){
                                echo "<option value=$data[id_book]>$data[id_book]</option>";
                            }
                                }else{
                                echo "<option value=0>Data Kendaraan Tidak Ada</option>";
                            }       
                        ?>
                        </select>
                        <label>NO Book</label>
                <button class="btn waves-effect waves-light" type="submit"><i class="material-icons right">info</i>Lihat</button>
        </form>
        </div>
    </div>
</div>
    
<footer class="page-footer teal">
    <div class="container">
        <div class="row">
            <div class="col l5 s12">
                <h5 class="white-text">PT HSMG Malang Pusat</h5>
                <p class="grey-text text-lighten-4">PT. Hero Sakti Motor Gemilang Malang (Pusat) adalah sebuah dealer
                    kendaraan roda dua dan juga bengkel yang berada di kota Malang, Jawa Timur. PT. Hero Sakti Motor
                    Gemilang merupakan pusat penjualan dan perawatan berkala untuk kendaraan roda dua merk Suzuki di
                    kota Malang, Jawa Timur.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Alamat</h5>
                <ul>
                    <p class="grey-text text-lighten-4"> Jl. Jaksa Agung Suprapto no 38 Klojen Malang 65111</p>
                </ul>
                <ul><p class="grey-text text-lighten-4">(0341) 327750</p></ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li>
                        <a style="text-decoration: none;" class="white-text"
                           href="https://www.facebook.com/suzukimotorindonesia/?fref=tsv"><i class="fa fa-facebook-square small"></i>
                            Facebook
                        </a>

                    </li>
                    <li>
                        <a style="text-decoration: none;" class="white-text"
                           href="https://www.facebook.com/suzukimotorindonesia/?fref=tsv"><i class="fa fa-instagram small"></i>
                            Instagram
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>

<script>
    $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
    </script>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

    
<script>
    $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
    });
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });
    
    $(".button-collapse").sideNav();
        
    $(document).ready(function(){
        $('ul.tabs').tabs();
    });

    $(document).ready(function() {
    $('select').material_select();
    });
    
        $(document).ready(function () {
        $('input#input_text, textarea#textarea1').characterCounter();
    });
    
    
    </script>

    


</body>
</html>
