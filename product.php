<?php
/**
 * Created by PhpStorm.
 * User: farich
 * Date: 1/14/2016
 * Time: 11:09 PM
 */
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

</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a href="index.php"><img class="img-rounded" src="img/logo.png" alt="suzuki.png"></a>
        <a id="logo-container" href="index.php" class="brand-logo">Suzuki</a>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Sign out</a></li>
        </ul>
        <ul class="right ">
            <div class="nav-wrapper">

                <ul class="right">
                    <li><a href="team.php" class="tooltipped" data-position="left" data-delay="50" data-tooltip="Costumer Service Page"><i class="material-icons left">supervisor_account</i></a></li>
                    <li class="active"><a href="product.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Check out our latest  Products"><i class="material-icons left">store</i><span class="new badge">4</span></a></li>
                    <li><a href="badges.html" class="tooltipped waves-effect waves-light btn" data-position="bottom" data-delay="50" data-tooltip="Costumer Service Page">Book Now</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons right">more_vert</i></a></li>
                </ul>
            </div>
</nav>
</ul>
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
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-darken-3">Product</h1>
            <!--
            <div class="row center">
              <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>

            <div class="row center">
              <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1"></a>
            </div>
            <br><br>

            -->
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
                    </td>
                </tr>

        </div>
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
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

<script>$(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });
</script>
<script>$(document).ready(function(){
        $('ul.tabs').tabs();
    });
</script>


<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a href="#modal1" class="btn-floating btn-large red">
        <i class="large material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Track History Motorcycle by License Plate">search</i>
    </a>
    <ul>
        <li><a href="mailto:farichrr@gmail.com?Subject=Hello%20Developer" target="_top" class="btn-floating blue"><i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Contact Developer">perm_identity</i></a></li>
    </ul>
</div>
</body>
</html>



