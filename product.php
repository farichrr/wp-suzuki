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
                <a id="logo-container" href="home.php" class="brand-logo"><img  class="img-rounded" src="img/logo.png" alt="suzuki.png"></a>
         
                <div class="nav-wrapper">

            <ul id="slide-out" class="side-nav right">
                <li><a href="team.php" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Costumer Service Page"><i class="material-icons left">supervisor_account</i>Costumer Service</a></li>
                <li class="active"><a href="product.php" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Check out our latest  Products"><i class="material-icons left">store</i><span class="new badge">4</span></a></li>
                <li><a href="home.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Booking Service"><i class="material-icons left">receipt</i>Book Now</a></li>
                <li><a href="profile.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Profile User"><i class="material-icons left">perm_identity</i>Profile</a></li>
                <li><a href="logout.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Logout"><i class="material-icons left">settings</i>Logout</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="team.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Costumer Service Page"><i class="material-icons left">supervisor_account</i>Costumer Service</a></li>
                <li class="active"><a href="product.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Check out our latest  Products"><i class="material-icons left">store</i><span class="new badge">4</span></a></li>
                <li><a href="home.php" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Booking Service"><i class="material-icons left">receipt</i>Book Now</a></li>
                <li><a href="profile.php" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Profile User"><i class="material-icons left">perm_identity</i>Profile</a></li>
                <li><a href="logout.php" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="material-icons left">settings</i>Logout</a></li>
            </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                </div>
        </div>
</nav>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Spesifikasi Suzuki Inazuma 250</h4>
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#test1">Feature</a></li>
                    <li class="tab col s3"><a href="#test2">Gallery</a></li>
                    <li class="tab col s3"><a href="#test3">Color</a></li>
                    <li class="tab col s3"><a href="#test4">Spesification</a></li>
                </ul>
            </div>
            <div id="test1" class="col s12 padding">
                <div class="row">
                    <div class="col s6">
                            <img class="responsive-img" src="img/d1.png">
                        <p><strong>248cm3, liquid-cooled SOHC in-line 2-cylinder engine</strong></p>
                        <p>has user-friendly characteristics in low-to-mid range engine speed to match with a variety of riding conditions.</p>
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/d2.png">
                        <p><strong>The multi-function instrumentation</strong></p>
                        <p>displays a variety of information. In the centre, there is large analogue tachometer with convenient digital gear position indicator. It’s flanked by a digital LCD speedometer, odometer, twin trip meter, clock and fuel gauge readouts, maintenance interval indicator and adjustable rpm indicator on the right, plus LED indicators on the left.</p>
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/d3.png">
                        <p><strong>Fuel Injection system</strong></p>
                        <p>electronically controls the fuel volume and the injection timing to the optimum values according to the riding condition, based on information from various sensors, in order to improve fuel economy and reduce emission. This also contributes to improved idling stability and almost linear throttle response, and makes for stable performance.</p>
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/d4.png">
                        <p><strong>Athletic Chassis</strong></p>
                        <p>The INAZUMA’s semi double-cradle chassis is designed to provide ample support for a variety of riding styles, while humbly securing this naked bike’s more visible and prominent features. </p>
                    </div>
                </div>
            </div>
            <div id="test2" class="col s12 padding">
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="img/g1.png">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/g2.png">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/g3.png">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/g4.png">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/g5.png">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/g6.png">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/g7.png">
                    </div>
                </div>
            </div>
            <div id="test3" class="col s12 padding">
                <div class="row">
                    <div class="col s12">
                        <img class="responsive-img" src="img/c1.png">
                    </div>
                    <div class="col s12">
                        <img class="responsive-img" src="img/c2.png">
                    </div>
                </div>
            </div>
            <div id="test4" class="col s12 padding">
                <div class="row">
                    <div class="col s12">
                        <table>
                            <tr>
                                <th colspan="2"><h4>Inazuma 250 Spesification</h4></th>
                            </tr>
                            <tr>
                                <th>Engine</th>
                                <td>TWIN-CYLINDER, 4-STROKE, SOHC, LIQUID-COOLED</td>
                            </tr>
                            <tr>
                                <th>Starter</th>
                                <td>ELECTRIC</td>
                            </tr>
                            <tr>
                                <th>Transmission</th>
                                <td>6-SPEED CONSTANT MESH</td>
                            </tr>
                            <tr>
                                <th>Front Suspension</th>
                                <td>37MM KYB TELESCOPIC FORKS, COIL SPRING, OIL DAMPED</td>
                            </tr>
                            <tr>
                                <th>Rear Suspension</th>
                                <td>SWINGARM TYPE, KYB COIL SPRING, OIL DAMPED WITH ADJUSTABLE S</td>
                            </tr>
                            <tr>
                                <th>Front Brakes</th>
                                <td>NISSIN TWIN-PISTON CALIPER, 290MM DISC</td>
                            </tr>
                            <tr>
                                <th>Rear Brakes</th>
                                <td>NISSIN SINGLE-PISTON CALIPER, 240MM DISC</td>
                            </tr>
                            <tr>
                                <th>Fuel Capacity</th>
                                <td>13.3 LITERS</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col s12">
                        <div class="row">
                            <div class="col s2">
                                <ul>
                                    <li>
                                        <span>780</span>
                                        <span>mm</span>
                                    </li>
                                    <li>
                                        <span>Seat Height</span>
                                    </li>
                                </ul>
                        </div>
                            <div class="col s2">
                                <ul>
                                    <li>
                                        <span>2145</span>
                                        <span>mm</span>
                                    </li>
                                    <li>
                                        <span>Length</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col s2">
                                <ul>
                                    <li>
                                        <span>760</span>
                                        <span>mm</span>
                                    </li>
                                    <li>
                                        <span>Width</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col s2">
                                <ul>
                                    <li>
                                        <span>1075</span>
                                        <span>mm</span>
                                    </li>
                                    <li>
                                        <span>Height</span>
                                    </li>
                                </ul>
                            </div>
                        <div class="col s2">
                            <ul>
                                <li>
                                    <span>183</span>
                                    <span>KG</span>
                                </li>
                                <li>
                                    <span>Height</span>
                                </li>
                            </ul>
                        </div>
                            <div class="col s2">
                                <ul>
                                    <li>
                                        <span>1430</span>
                                        <span>mm</span>
                                    </li>
                                    <li>
                                        <span>Wheelbase</span>
                                    </li>
                                </ul>
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
        <h4>Book Servis</h4>
        <div class="row">
            <form class="col s12" method="post" action="book.php">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="nama" type="text" class="validate"  value="<?php echo $_SESSION['nama'];?>" readonly>
                        <label>Nama</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" class="validate" name="nopol" required>
                        <label>Nomor Polisi</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" class="validate" name="jam" required>
                        <label>Jam</label>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="waves-effect waves-green right btn">Book</button>
                </div>
            </form>
        </div>
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
    

-
    
  <!-- Modal Structure -->
<div id="modal6" class="modal">
    <div class="modal-content">
        <h4>Book Servis</h4>
        <div class="row">
            <form class="col s12" method="post" action="book.php">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="nama" type="text" class="validate"  value="<?php echo $_SESSION['nama'];?>" readonly>
                        <label>Nama</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" class="validate" name="nopol" placeholder="N4444AA"  required>
                        <label>Nomor Polisi</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="servis">
                            <option value="50000"selected>Servis Rutin</option>
                            <option value="0">Free Service 1000Km</option>
                            <option value="0">Free Service 4000Km</option>
                            <option value="0">Free Service 8000Km</option>
                            <option value="0">Free Service 12000Km</option>
                            <option value="40000">Tune Up Motor Matic</option>
                            <option value="40000">Tune Up Motor Bebek</option>
                            <option value="50000">Tune Up Motor Sport</option>
                        </select>
                        <label>Servis</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="sparepart" multiple>
                            <option value="0"  selected>Tidak Ganti Sparepart</option>
                            <option value="40000">Ganti Oli (matic,bebek,sport)</option>
                            <option value="20000">Ganti Busi (matic,bebek)</option>
                            <option value="35000">Ganti Busi(sport)</option>
                            <option value="35000">Ganti Filter Udara</option>
                            <option value="35000">Ganti Oli Transmisi(matic)</option>
                            <option value="40000">Ganti kampas rem depan</option>
                            <option value="30000">Ganti kampas rem belakang</option>
                        </select>
                        <label>Ganti Sparepart</label>
                    </div>
                    <div class="input-field col s12">
                    
                    <input name="jam" class="timepicker" type="text" placeholder="Try me">
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

    <div>
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-darken-3">Product</h1>
            <table>
                <tr>
                    <td>
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/sport1.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Inazuma 250<i class="material-icons right">more_vert</i></span>
                                <p><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Detail</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Inazuma 250<i class="material-icons right">close</i></span>
                                <p class="teal-text text-darken-4">Rp.49.500.000,- OTR</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/sport2.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Thunder 125<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal1" class="modal-trigger waves-effect waves-light btn">Detail</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Thunder 125<i class="material-icons right">close</i></span>
                                <p class="teal-text text-darken-4">Rp.18.900.000,- OTR</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/sy1.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Satria F115<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal1" class="modal-trigger waves-effect waves-light btn">Detail</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Satria F115<i class="material-icons right">close</i></span>
                                <p class="teal-text text-darken-4">Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                </tr>
                <tr>
                    <td>
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/s11.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Satria F150 SE<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal1" class="modal-trigger waves-effect waves-light btn">Detail</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Satria F150 SE<i class="material-icons right">close</i></span>
                                <p class="teal-text text-darken-4">Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/s2.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Satria F150 S<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal1" class="modal-trigger waves-effect waves-light btn">Detail</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Satria F150 S<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/s3.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Satria F150 R<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal1" class="modal-trigger waves-effect waves-light btn">Detail</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Satria F150 R<i class="material-icons right">close</i></span>
                                <p class="teal-text text-darken-4">Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                </tr>
                <tr>

                    <td>
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/s4.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Satria F150 MotoGP<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal1" class="modal-trigger waves-effect waves-light btn">Detail</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Satria F150 MotoGP<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/s5.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Address MotoGP<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal1" class="modal-trigger waves-effect waves-light btn">Detail</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Address MotoGP<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/sy2.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Satria F115 MotoGP<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal1" class="modal-trigger waves-effect waves-light btn">Detail</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Satria F115 MotoGP<i class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked on.</p>
                            </div>
                        </div>
                    </td>
                </tr>
        </table>
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
  });</script>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a href="#modal4" class="btn-floating btn-large red modal-trigger">
        <i class="large material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Track History Motorcycle by License Plate">search</i>
    </a>
    <ul>
        <li><a href="mailto:farichrr@gmail.com?Subject=Hello%20Developer" target="_top" class="btn-floating blue"><i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Contact Developer">perm_identity</i></a></li>
        <li>
            <a href="#modal5" target="_top" class="btn-floating green modal-trigger">
                <i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Estimasi Kredit">view_list</i>
            </a>
        </li>
    </ul>
</div>
</body>
</html>