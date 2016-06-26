<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Hero Sakti Motor Gemilang Website By Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="js/sweetalert.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    
    <style> 
        #map {
            width: 100%;
            height: 400px;
        }
    </style>
    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a href="index.php"><img class="img-rounded brand-logo" src="img/logo.png" alt="suzuki.png"></a>
        <!--<a id="logo-container" href="index.php" class="brand-logo">Suzuki</a>-->
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
            <ul id="slide-out" class="side-nav right">
                <li><a href="#modal1" class="modal-trigger">Login</a></li>
                <li><a href="#modal2" class="modal-trigger waves-effect waves-light btn">Sign Up</a></li>   
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="#modal1" class="modal-trigger">Login</a></li>
                <li><a href="#modal2" class="modal-trigger waves-effect waves-light btn">Sign Up</a></li>
            </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
</nav>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-darken-3">HSMG Malang</h1>
            <!--
            <div class="row center">
              <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>

            <div class="row center">
              <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1"></a>
            </div>
            <br><br>

            -->

        </div>
    </div>
    <div class="parallax"><img class="img-responsive" src="img/bg6.png" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
    <div class="section">
        <h2 class="header center waves-teal black-text">Our Service</h2>
        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center amber-text"><i class="material-icons">settings</i></h2>
                    <h5 class="center">Bengkel</h5>
                    <p class="light">Layanan bengkel merupakan salah satu upaya kami untuk menjaga kendaraan konsumen
                        agar selalu prima pada setiap saat. Kami juga menyediakan
                        suku cadang asli suzuki untuk kendaraan anda dan kami juga menyediakan servis dengan booking
                        untuk konsumen agar waktu servis dapat lebih maksimal serta dapat
                        menjadikan waktu anda menjadi lebih produktif.</p>
                    <a class="btn" onclick="Materialize.toast('Harap Login Terlebih dahulu', 4000,'rounded')">
                        <i class="material-icons right">input</i>Book Now</a>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center amber-text"><i class="material-icons">store</i></h2>
                    <h5 class="center">Dealer</h5>

                    <p class="light">Layanan showroom untuk semua produk motor suzuki kami. untuk anda yang ingin
                        mencari informasi tentang produk-produk suzuki terupdate
                        kami siap memanjakan keingintahuan anda, pada layanan dealer anda bisa bertanya detail mengenai
                        produk-produk kami serta prosedur pembelian semua motor suzuki
                        di dealer kami baik cash maupun kredit.</p>
                    <br>
                    <a href="product_1.php" class="waves-effect waves-light btn"><i
                            class="material-icons right">search</i>Our Product</a>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center amber-text"><i class="material-icons">contact_phone</i></h2>
                    <h5 class="center">Layanan Pelanggan</h5>

                    <p class="light">Pelayanan pelanggan memberikan aspek Reliabilitas dengan informasi produk-produk
                        kami yang akurat didukung dengan pelayanan yang
                        responsif serta rasa kepedulian sebagai bentuk apresiasi kepada seluruh costumer suzuki.
                        hubungi kami untuk layanan yang cepat dan efisien. Serta dengan jangkauan dimanapun dan kapanpun untuk menunjang konsumen.
                    </p>
                    <a href="team_1.php" class="waves-effect waves-light btn"><i class="material-icons right">send</i>Contact
                        Us</a>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light"></h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img class="img-responsive" src="img/bg4.png" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <h1 class="center brown-text"><i class="material-icons">my_location</i></h1>
                <h4>Our Location</h4>
                <div id="map"></div>

                <script>
function initMap() {
  var myLatlng = {lat: -7.9673911, lng: 112.633494};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: myLatlng
  });

  var marker = new google.maps.Marker({
    position: myLatlng,
    animation:google.maps.Animation.BOUNCE,
    map: map,
    title: 'Click to zoom'
  });

  map.addListener('center_changed', function() {
    // 3 seconds after the center of the map has changed, pan back to the
    // marker.
    window.setTimeout(function() {
      map.panTo(marker.getPosition());
    }, 3000);
  });

  marker.addListener('click', function() {
    map.setZoom(19);
    map.setCenter(marker.getPosition());
  });
    var infowindow = new google.maps.InfoWindow({
  content:"HSMG Malang Come!"
  });

infowindow.open(map,marker);
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOnchancvaUlaDwG-DYyTeq2wMuzEx9kU&signed_in=true&callback=initMap" async defer>
    </script>
            </div>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light"></h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img class="img-responsive" src="img/bg8.png" alt="Unsplashed background img 3"></div>
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
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a href="#modal4" class="btn-floating btn-large red modal-trigger">
        <i class="large material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Track History Motorcycle by License Plate">search</i>
    </a>
    <ul>
        <li><a href="mailto:farichrr@gmail.com?Subject=Hello%20Developer" target="_top" class="btn-floating blue"><i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Contact Developer">perm_identity</i></a></li>
        <li><a href="#modal5" target="_top" class="btn-floating green modal-trigger">
                <i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Estimasi Kredit">view_list</i>
            </a></li>
    </ul>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Login</h4>
        <div class="row">
            <form class="col s12" method="post" action="login.php">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="username" id="icon_prefix" type="text" class="validate" required >
                        <label for="icon_prefix">Username</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">lock</i>
                        <input id="icon_telephone" type="password" class="validate" name="password" required>
                        <label for="icon_telephone">Password</label>
                    </div>
                    
                    
                </div>
                <div class="modal-footer">
                  <button type="submit" class="waves-effect waves-green right btn">Login</button>
                    
                        <a href="resetpass.php" class=" waves-effect waves-green btn-flat">Reset Password</a>
                    
                </div>
            </form>
        </div>
    </div>
    
</div>

<!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <h4>Sign Up</h4>
        <div class="row">
            <form class="col s12" action="daftar.php" method="post">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="ktp" type="number" class="validate" length="15" name="ktp" size="15" required autofocus>
                        <label for="ktp">NIK</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="nama" type="text" class="validate" size="30" name="nama">
                        <label for="nama">Nama</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="username" type="text" class="validate" name="username" required>
                        <label for="Username">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate" size="30" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="phone" type="number" name="phone" length="12" class="validate input_text" required>
                        <label for="phone">Phone</label>
                    </div><br>
                    <div class="g-recaptcha col s12" data-sitekey="6LeAkRUTAAAAAJqBhjZT7KK4R2Vu3pp-96wrTfDG"></div>
                </div>

                <button class="waves-effect waves-light btn right" type="submit">Sign Up</button>
            </form>
        </div>
    </div>
    <div class="modal-footer">

    </div>
</div>
    
    <!-- Modal Structure -->
<div id="modal5" class="modal">
    <div class="modal-content">
        <h4>Simulasi Kredit</h4>
        <div class="row">
            <form class="col s12" action="simulasikredit.php" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="dp" type="number" class="validate" size="30" name="dp" autofocus required>
                        <label for="dp">Uang Muka</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select class="icons" name="produk">
                            <optgroup label="Sport">
                                <option  value="50000000" data-icon="img/c1.png" class="left circle">Inazuma 250</option>
                                <option  value="18000000" data-icon="img/sport2.png" class="left circle">Thunder 125</option>
                            </optgroup>
                            <optgroup label="Underbone">
                                <option  value="21500000" data-icon="img/sm.png" class="left circle">Satria F150 GP</option>
                                <option  value="21000000" data-icon="img/s11.png" class="left circle">Satria F150 SE</option>
                                <option  value="19500000" data-icon="img/s3.png" class="left circle">Satria F150 S</option>
                                <option  value="18800000" data-icon="img/s2.png" class="left circle">Satria F150</option>
                            </optgroup>
                            <optgroup label="Matic">
                                <option  value="15000000" data-icon="img/s5.png" class="left circle">Address 115 GP</option>
                            </optgroup>
                             <optgroup label="Cub">
                                <option  value="17000000" data-icon="img/sy2.png" class="left circle">Satria F115 GP</option>
                            </optgroup>
                        </select>
                            <label>Pilih Produk</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select name="tahun">
                                <option value="12">1 Tahun</option>
                                <option value="24">2 Tahun</option>
                                <option value="36">3 Tahun</option>
                        </select>
                            <label>Pilih Tahun</label>
                    </div>                    
                <button class="waves-effect waves-light btn right" type="submit">Kalkulasi</button>
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

<script>$(document).ready(function () {
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });</script>
<script>$(document).ready(function () {
        $('input#input_text, textarea#textarea1').characterCounter();
    });</script>
    <script>
        // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
    </script>
    <script>$(document).ready(function() {
    $('select').material_select();
  });</script>

</body>
</html>
