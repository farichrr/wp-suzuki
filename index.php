<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
    <style>
        #map {
            width: 100%;
            height: 400px;
        }
    </style>

</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a href="index.php"><img class="img-rounded" src="img/logo.png" alt="suzuki.png"></a>
        <a id="logo-container" href="index.php" class="brand-logo">Suzuki</a>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
        <ul class="right ">

            <li><a href="#modal1" class="modal-trigger">Login</a></li>
            <li><a href="#modal2" class="modal-trigger waves-effect waves-light btn">Sign Up</a></li>
        </ul>
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
    <div class="parallax"><img src="img/bg6.png" alt="Unsplashed background img 1"></div>
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
                    <a href="" class="waves-effect waves-light btn"><i class=" material-icons right">input</i>Book
                        Now</a>
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
                    <a href="product.php" class="waves-effect waves-light btn"><i
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
                        hubungi kami untuk layanan yang cepat dan efisien efisien efisien efisien efisien efisien
                        efisien efisien efisien efisien efisien efisien.
                    </p>
                    <a href="team.php" class="waves-effect waves-light btn"><i class="material-icons right">send</i>Contact
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
    <div class="parallax"><img src="img/bg4.png" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <h1 class="center brown-text"><i class="material-icons">my_location</i></h1>
                <h4>Our Location</h4>
                <div id="map"></div>

                <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
    <script>

        var map = L.map('map').setView([-7.9673911, 112.633494], 19);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6IjZjNmRjNzk3ZmE2MTcwOTEwMGY0MzU3YjUzOWFmNWZhIn0.Y8bhBaUMqFiPrDRW9hieoQ', {
            maxZoom: 21,
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="http://mapbox.com">Mapbox</a>',
            id: 'mapbox.streets'
        }).addTo(map);


        L.marker([-7.9673911, 112.633494]).addTo(map)
            .bindPopup("<b>HSMG Malang</b><br />Come!").openPopup();

        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(map);
        }

        map.on('click', onMapClick);

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
    <div class="parallax"><img src="img/bg8.png" alt="Unsplashed background img 3"></div>
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
    <a href="contact.html" class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
        <li><a class="btn-floating red"><i class="material-icons">perm_identity</i></a></li>
        <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
        <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
        <li><a class="btn-floating blue"><i class="material-icons">perm_identity</i></a></li>
    </ul>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Login</h4>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">lock</i>
                        <input id="icon_telephone" type="password" class="validate">
                        <label for="icon_telephone">Password</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Login</a>
    </div>
</div><!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Login</h4>
        <div class="row">
            <form class="col s12" method="post" action="">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">lock</i>
                        <input id="icon_telephone" type="password" class="validate">
                        <label for="icon_telephone">Password</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Login</a>
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
                        <input id="username" type="text" class="validate" size="30" name="username" required>
                        <label for="username">Username</label>
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
                    </div>
                </div>
                <button class="waves-effect waves-light btn right" type="submit">Sign Up</button>
            </form>
        </div>
    </div>
    <div class="modal-footer">

    </div>
</div>
<script>$(document).ready(function () {
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });</script>
<script>$(document).ready(function () {
        $('input#input_text, textarea#textarea1').characterCounter();
    });</script>

</body>
</html>
