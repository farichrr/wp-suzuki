<?php
    session_start();
    require_once "connect.php";
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
    <script src="js/sweetalert-min.js"></script>
    <link rel="stylesheet" href="css/sweetalert.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    
</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo"><img  class="img-rounded" src="img/logo.png" alt="suzuki.png"></a>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Sign out</a></li>
        </ul>
        <ul>
             <div class="nav-wrapper">
                <ul id="slide-out" class="side-nav">
                    <li><a href="#modal2" class="modal-trigger">Login</a></li>
                    <li><a href="#modal3" class="modal-trigger waves-effect waves-light btn">Sign Up</a></li>   
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#modal2" class="modal-trigger">Login</a></li>
                    <li><a href="#modal3" class="modal-trigger waves-effect waves-light btn">Sign Up</a></li>
                </ul>
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                </div>
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
    
<!-- Modal Structure -->
<div id="modal2" class="modal">
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
<div id="modal3" class="modal">
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
<div id="modal4" class="modal">
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
<div id="modal5" class="modal">
     <div class="modal-content">
        <h4>Spesifikasi Thunder 125</h4>
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#thunder1">Feature</a></li>
                    <li class="tab col s3"><a href="#thunder2">Gallery</a></li>
                    <li class="tab col s3"><a href="#thunder3">Color</a></li>
                    <li class="tab col s3"><a href="#thunder4">Spesification</a></li>
                </ul>
            </div>
            <div id="thunder1" class="col s12 padding">
                <div class="row">
                    <div class="col s6">
                            <img class="responsive-img" src="img/t4.png">
                        <p><strong>Sporty Muffler Design</strong></p>
                        <p>Design knalpot yang gagah dan sporty pada thunder 125.</p>
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/t5.png">
                        <p><strong>125cc Engine</strong></p>
                        <p>Meskipun Suzuki Thunder 125 merupakan sport bike kelas paling bontot karena memiliki kapasitas mesin 125 cc namun tenaganya masih dapat diandalkan. Bahkan untuk perjalanan jarak jauh atau touring karena selain mesin yang masih mendukung, dimensi dan ergonomis dari Suzuki Thunder 125 terasa sangat nyaman. Mesin tersebut berjenis SOHC 4 Langkah dengan silinder tunggal berkapasitas 125 cc dengan transmisi manual 5 percepatan.</p>
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/t6.png">
                        <p><strong>Sport Tank</strong></p>
                        <p>Dengan design tutup tangki datar menambah kegagahan motor sport thunder 125 ini.</p>
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/t7.png">
                        <p><strong>Classic Stop Lamp</strong></p>
                        <p>Lampu belakang yang menganut design classic sport bike. </p>
                    </div>
                </div>
            </div>
            
         </div>
         <div id="thunder2" class="col s12 padding">
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="img/t1.png">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/t4.PNG">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/t5.png">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/t6.png">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/t7.png">
                    </div>
                </div>
            </div>
         <div id="thunder3" class="col s12 padding">
                <div class="row">
                    <div class="col s6">
                        <img class="responsive-img" src="img/t1.png">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/t2.png">
                    </div>
                    <div class="col s12">
                        <img class="responsive-img" src="img/t3.png">
                    </div>
                </div>
            </div>
         <div id="thunder4" class="col s12 padding">
                <div class="row">
                    <div class="col s12">
                        <table>
                            <tr>
                                <th colspan="2"><h4>Thunder 125 Spesification</h4></th>
                            </tr>
                            <tr>
                                <th>Engine</th>
                                <td>4-STROKE, SOHC</td>
                            </tr>
                            <tr>
                                <th>Starter</th>
                                <td>ELECTRIC &amp; Manual</td>
                            </tr>
                            <tr>
                                <th>Transmission</th>
                                <td>5-SPEED CONSTANT MESH</td>
                            </tr>
                            <tr>
                                <th>Front Brakes</th>
                                <td>Cakram</td>
                            </tr>
                            <tr>
                                <th>Rear Brakes</th>
                                <td>Tromol</td>
                            </tr>
                            <tr>
                                <th>Fuel Capacity</th>
                                <td>15 LITERS</td>
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
                                        <span>1970</span>
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
                                        <span>745</span>
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
                                    <span>130</span>
                                    <span>KG</span>
                                </li>
                                <li>
                                    <span>Weight</span>
                                </li>
                            </ul>
                        </div>
                            <div class="col s2">
                                <ul>
                                    <li>
                                        <span>1270</span>
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
    
<!-- Modal Structure -->
<div id="modal6" class="modal">
    <div class="modal-content">
        <h4>Spesifikasi All New Satria F150</h4>
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#fi1">Feature</a></li>
                    <li class="tab col s3"><a href="#fi2">Gallery</a></li>
                    <li class="tab col s3"><a href="#fi3">Color</a></li>
                    <li class="tab col s3"><a href="#fi4">Spesification</a></li>
                </ul>
            </div>
            <div id="fi1" class="col s12 padding">
                <div class="row">
                    <div class="col s6">
                            <img class="responsive-img" src="img/fif1.png">
                        <p><strong>248cm3, liquid-cooled SOHC in-line 2-cylinder engine</strong></p>
                        <p>has user-friendly characteristics in low-to-mid range engine speed to match with a variety of riding conditions.</p>
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/fif2.png">
                        <p><strong>The multi-function instrumentation</strong></p>
                        <p>displays a variety of information. In the centre, there is large analogue tachometer with convenient digital gear position indicator. It’s flanked by a digital LCD speedometer, odometer, twin trip meter, clock and fuel gauge readouts, maintenance interval indicator and adjustable rpm indicator on the right, plus LED indicators on the left.</p>
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/fif3.png">
                        <p><strong>Fuel Injection system</strong></p>
                        <p>electronically controls the fuel volume and the injection timing to the optimum values according to the riding condition, based on information from various sensors, in order to improve fuel economy and reduce emission. This also contributes to improved idling stability and almost linear throttle response, and makes for stable performance.</p>
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/fif4.png">
                        <p><strong>Athletic Chassis</strong></p>
                        <p>The INAZUMA’s semi double-cradle chassis is designed to provide ample support for a variety of riding styles, while humbly securing this naked bike’s more visible and prominent features. </p>
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/fif5.png">
                        <p><strong>Athletic Chassis</strong></p>
                        <p>The INAZUMA’s semi double-cradle chassis is designed to provide ample support for a variety of riding styles, while humbly securing this naked bike’s more visible and prominent features. </p>
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/fif6.png">
                        <p><strong>Athletic Chassis</strong></p>
                        <p>The INAZUMA’s semi double-cradle chassis is designed to provide ample support for a variety of riding styles, while humbly securing this naked bike’s more visible and prominent features. </p>
                    </div>
                </div>
            </div>
            <div id="fi2" class="col s12 padding">
                <div class="row">
                    <div class="col s12">
                        <img class="responsive-img" src="img/fi1.PNG">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/fif1.PNG">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/fif2.PNG">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/fif3.PNG">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/fif4.PNG">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/fif5.PNG">
                    </div>
                    <div class="col s6">
                        <img class="responsive-img" src="img/fif6.PNG">
                    </div>
                    
                </div>
            </div>
            <div id="fi3" class="col s12 padding">
                <div class="row">
                    <div class="col s12">
                        <img class="responsive-img" src="img/fi1.PNG">
                    </div>
                    <div class="col s12">
                        <img class="responsive-img" src="img/fi2.png">
                    </div>
                    <div class="col s12">
                        <img class="responsive-img" src="img/fi3.png">
                    </div>
                    <div class="col s12">
                        <img class="responsive-img" src="img/fi4.png">
                    </div>
                    <div class="col s12">
                        <img class="responsive-img" src="img/fi5.png">
                    </div>
                </div>
            </div>
            <div id="fi4" class="col s12 padding">
                <div class="row">
                    <div class="col s12">
                        <table>
                            <tr>
                                <th colspan="2"><h4>All New Satria F150 Spesification</h4></th>
                            </tr>
                            <tr>
                                <th>Engine</th>
                                <td>TWIN-CYLINDER, 4-STROKE, DOHC, LIQUID-COOLED</td>
                            </tr>
                            <tr>
                                <th>Starter</th>
                                <td>1 PUSH ELECTRIC STARTER</td>
                            </tr>
                            <tr>
                                <th>Transmission</th>
                                <td>6-SPEED CONSTANT MESH</td>
                            </tr>
                            <tr>
                                <th>Front Suspension</th>
                                <td>Teleskopik, pegas spiral, bantalan oli</td>
                            </tr>
                            <tr>
                                <th>Rear Suspension</th>
                                <td>Lengan ayun, pegas spiral, bantalan oli</td>
                            </tr>
                            <tr>
                                <th>Front Brakes</th>
                                <td>New Petal Design Disc Brake</td>
                            </tr>
                            <tr>
                                <th>Rear Brakes</th>
                                <td>New Petal Design Disc Brake</td>
                            </tr>
                            <tr>
                                <th>Fuel Capacity</th>
                                <td>4 LITERS</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col s12">
                        <div class="row">
                            <div class="col s2">
                                <ul>
                                    <li>
                                        <span>765</span>
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
                                        <span>1960</span>
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
                                        <span>675</span>
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
                                        <span>1280</span>
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
                                    <span>109</span>
                                    <span>KG</span>
                                </li>
                                <li>
                                    <span>Weight</span>
                                </li>
                            </ul>
                        </div>
                            <div class="col s2">
                                <ul>
                                    <li>
                                        <span>1280</span>
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
<div id="modal7" class="modal">
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

    
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-darken-3">Product</h1>
            <table>
                <tr>
                    <td>
                        <div class="card hoverable">
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
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/sport2.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Thunder 125<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal5" class="modal-trigger waves-effect waves-light btn">Detail</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Thunder 125<i class="material-icons right">close</i></span>
                                <p class="teal-text text-darken-4">Rp.18.900.000,- OTR</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/fi1.PNG">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">All New Satria F150<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal6" class="modal-trigger waves-effect waves-light btn">Detail</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">All New Satria F150<i class="material-icons right">close</i></span>
                                <p class="teal-text text-darken-4">FROM Rp. 21.650.000,- to 21.950.000, OTR</p>
                            </div>
                        </div>
                </tr>
                <tr>
                    <td>
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/s4.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Satria F150 MotoGP<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal1" class="modal-trigger waves-effect waves-light btn">Detail</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Satria F150 MotoGP<i class="material-icons right">close</i></span>
                                <p>Rp.23.500.000,- OTR.</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator img-responsive" src="img/s5.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Address MotoGP<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal1" class="modal-trigger waves-effect waves-light btn">Detail</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Address MotoGP<i class="material-icons right">close</i></span>
                                <p>Rp.17.500.000,- OTR.</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator img-responsive" src="img/sy2.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Satria F115 MotoGP<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal1" class="modal-trigger waves-effect waves-light btn">Detail</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Satria F115 MotoGP<i class="material-icons right">close</i></span>
                                <p>Rp.18.500.000,- OTR.</p>
                            </div>
                        </div>
                    </td>
                </tr>
        </table>
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
<script>var slider = document.getElementById('test5');
  noUiSlider.create(slider, {
   start: [500000],
   connect: true,
   step: 1,
   range: {
     'min': 500000,
     'max': 10000000
   },
   format: wNumb({
     decimals: 0
   })
  });</script>
<script>$(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });
</script>
<script>$(document).ready(function(){
        $('ul.tabs').tabs();
    });
</script>
    <script>
     $(document).ready(function() {
    $('select').material_select();
  });
    </script>
    
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a href="#modal7" class="btn-floating btn-large red modal-trigger">
        <i class="large material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Track History Motorcycle by License Plate">search</i>
    </a>
    <ul>
        <li>
            <a href="mailto:farichrr@gmail.com?Subject=Hello%20Developer" target="_top" class="btn-floating blue">
                <i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Contact Developer">perm_identity</i>
            </a>
        </li>
        <li>
            <a href="#modal4" target="_top" class="btn-floating green modal-trigger">
                <i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Estimasi Kredit">view_list</i>
            </a>
        </li>
    </ul>
</div>
</body>
</html>



