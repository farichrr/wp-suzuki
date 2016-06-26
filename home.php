<?php
/**
 * Created by PhpStorm.
 * User: farich
 * Date: 1/14/2016
 * Time: 11:09 PM
 */
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
    <title>Hero Sakti Motor Gemilang Website By Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

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
                <li class="active"><a href="home.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Booking Service"><i class="material-icons left">receipt</i>Book Now</a></li>
                <li><a href="profile.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Profile User"><i class="material-icons left">perm_identity</i>Profile</a></li>
                <li><a href="logout.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Logout"><i class="material-icons left">settings</i>Logout</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="team.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Costumer Service Page"><i class="material-icons left">supervisor_account</i>Costumer Service</a></li>
                <li><a href="product.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Check out our latest  Products"><i class="material-icons left">store</i><span class="new badge">4</span></a></li>
                <li class="active"><a href="home.php" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Booking Service"><i class="material-icons left">receipt</i>Book Now</a></li>
                <li><a href="profile.php" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Profile User"><i class="material-icons left">perm_identity</i>Profile</a></li>
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
                <h3>Welcome <?php 
                    echo $_SESSION['nama'];
                    
                    
                    ?></h3>
                <br>
                <h4>Book Servis</h4>
        <div class="row">
            <form class="col s12" method="post" action="book.php">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="ktp" type="text" class="validate"  value="<?php echo $_SESSION['ktp'];?>" readonly>
                        <label>ktp</label>
                    </div>
                    <div class="input-field col s12">
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
                    </div>
                   <!-- <div class="input-field col s12">
                        <select name="servis">
                            <?php
                                $konek = mysqli_connect("localhost","root","","suzuki");
                                $query = "select * from servis";
                                $hasil = mysqli_query($konek,$query);
                                if (mysqli_num_rows($hasil) > 0) {
                                while($data=mysqli_fetch_array($hasil)){
                                    echo "<option value=$data[id_servis]>$data[jenis_servis]</option>";
                            }
                                }else{
                                echo "<option value=0>Empty</option>";
                            }       
                            
                            ?>
                        </select>
                        <label>Servis</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="sparepart" multiple>
                            <?php
                                $konek = mysqli_connect("localhost","root","","suzuki");
                                $query = "select * from sparepart";
                                $hasil = mysqli_query($konek,$query);
                                if (mysqli_num_rows($hasil) > 0) {
                                while($data=mysqli_fetch_array($hasil)){
                                    echo "<option value=$data[id_sparepart]>$data[nama_sparepart]</option>";
                            }
                                }else{
                                echo "<option value=0>Empty</option>";
                            }       
                            
                            ?>
                        </select>
                        <label>Ganti Sparepart</label>
                    </div> -->
                    <div class="input-field col s12">
                        <input name="jam" class="timepicker" type="text" placeholder="Jam Service">
                        <label>Jam Servis</label>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="waves-effect waves-green right btn">Book</button>
                </div>
            </form>
        </div>    
            
            </div>
        </div>
    </div>
                             
    <!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">
        
    </div>
</div>
    
<!-- Modal Structure -->
<div id="modal4" class="modal">
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

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
    
    
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/compressed/picker.js"></script>
    <script src="js/compressed/picker.date.js"></script>
    
    <script src="js/compressed/picker.time.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

    <script>
    $('.datepicker').pickadate();
    $('.timepicker').pickatime({
         min: [8,0],
         max: [15,0],
         interval: 15,
        formatLabel: function(time) {
    var hours = ( time.pick - this.get('now').pick ) / 60,
      label = hours < 0 ? ' !hours to now' : hours > 0 ? ' !hours from now' : 'now'
    return  'h:i a <sm!all>' + ( hours ? Math.abs(hours) : '' ) + label +'</sm!all>'
  }
    });
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });
$(document).ready(function(){
        $('ul.tabs').tabs();
    });

    $(document).ready(function() {
    $('select').material_select();

    $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
  });</script>
    
</body>
</html>



