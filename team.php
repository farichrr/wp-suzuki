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
                <li class="active"><a href="team.php" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Costumer Service Page"><i class="material-icons left">supervisor_account</i>Costumer Service</a></li>
                <li><a href="product.php" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Check out our latest  Products"><i class="material-icons left">store</i><span class="new badge">4</span></a></li>
                <li><a href="home.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Booking Service"><i class="material-icons left">receipt</i>Book Now</a></li>
                <li><a href="profile.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Profile User"><i class="material-icons left">perm_identity</i>Profile</a></li>
                <li><a href="logout.php" class="tooltipped waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Logout"><i class="material-icons left">settings</i>Logout</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li class="active"><a href="team.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Costumer Service Page"><i class="material-icons left">supervisor_account</i>Costumer Service</a></li>
                <li><a href="product.php" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Check out our latest  Products"><i class="material-icons left">store</i><span class="new badge">4</span></a></li>
                <li><a href="home.php" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Booking Service"><i class="material-icons left">receipt</i>Book Now</a></li>
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
            <h1 class="header center teal-text text-darken-3">Costumers Satisfaction Team</h1>
                        <div class="card col s3 m3 ">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/cs8.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Arman Salim<i class="material-icons right">more_vert</i></span>
                                 <p><a href="#modal3" class="modal-trigger btn tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Ask Our Costumers Service"><i class="material-icons right">send</i>Ask Arman</a></p>
        
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Arman<i class="material-icons right">close</i></span>
                                <p class="teal-text text-darken-4">Hi ada yang bisa saya bantu ?</p>
                            </div>
                                            <div class="card-image waves-effect waves-block waves-light">
                            </div>
            </div>
             <div class="card col s3 m3 ">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/cs4.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Restu A.<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal4" class="btn tooltipped waves-effect waves-light modal-trigger" data-position="bottom" data-delay="50" data-tooltip="Ask Our Costumers Service"><i class="material-icons right">send</i>Ask Restu</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Restu<i class="material-icons right">close</i></span>
                                <p class="teal-text text-darken-4">Butuh bantuan mengenai semua produk kami ? kami siap membantu anda.</p>
                            </div>
                                            <div class="card-image waves-effect waves-block waves-light">
                            </div>
            </div>
                <div class="card col s3 m3 ">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/cs6.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Anna Lusi<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal5" class="modal-trigger btn tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Ask Our Costumers Service"><i class="material-icons right">send</i>Ask Anna</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Anna<i class="material-icons right">close</i></span>
                                <p class="teal-text text-darken-4">Punya pertanyaan mengenai produk,bengkel dan asuransi motor anda saya siap membantu anda.</p>
                            </div>
                                            <div class="card-image waves-effect waves-block waves-light">
                            </div>
            </div>
                <div class="card col s3 m3 ">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/cs5.png">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Pamungkas Aji<i class="material-icons right">more_vert</i></span>
                                <p><a href="#modal6" class="modal-trigger btn tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Ask Our Costumers Service"><i class="material-icons right">send</i>Ask Aji</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Aji<i class="material-icons right">close</i></span>
                                <p class="teal-text text-darken-4">Saya siap membantu berbagai keluhan dan masalah produk kami.</p>
                            </div>
                                <div class="card-image waves-effect waves-block waves-light">
                            </div>
                </div>
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
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a href="#modal7" class="btn-floating btn-large red modal-trigger">
        <i class="large material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Track History Motorcycle by License Plate">search</i>
    </a>
    <ul>
        <li><a href="mailto:farichrr@gmail.com?Subject=Hello%20Developer" target="_top" class="btn-floating blue"><i class="material-icons tooltipped" data-position="left" data-delay="50" data-tooltip="Contact Developer">perm_identity</i></a></li>
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
                        <input id="nama" type="text" class="validate" size="30" name="nama" required>
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
<div id="modal3" class="modal">
    <div class="modal-content">
        <h4>Ask Us</h4>
        <div class="row">
            <form class="col s12" method="post" action="proseskomentar.php">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">perm_contact_calendar</i>
                        <input value="Arman" name="pegawai" id="icon_prefix" type="text" class="validate" readonly> 
                        <label for="icon_prefix">To</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="nama" id="icon_prefix" type="text" class="validate" required autofocus>
                        <label class="active" for="icon_prefix">Nama</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" class="validate" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">comment</i>
                        <textarea id="komentar" type="text"
                               class="validate materialize-textarea"
                                  name="pesan" required></textarea>
                        <label for="komentar">Pertanyaan</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn waves-effect waves-light" type="submit"><i class="material-icons right">send</i>send</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
    <!-- Modal Structure -->
<div id="modal4" class="modal">
    <div class="modal-content">
        <h4>Ask Us</h4>
        <div class="row">
            <form class="col s12" method="post" action="proseskomentar.php">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">perm_contact_calendar</i>
                        <input value="Restu" name="pegawai"  id="icon_prefix" type="text" class="validate" readonly> 
                        <label for="icon_prefix">To</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="nama" id="icon_prefix" type="text" class="validate" required autofocus>
                        <label class="active" for="icon_prefix">Nama</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" class="validate" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">comment</i>
                        <textarea id="komentar" type="text"
                               class="validate materialize-textarea"
                                  name="pesan" required></textarea>
                        <label for="komentar">Pertanyaan</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn waves-effect waves-light" type="submit"><i class="material-icons right">send</i>send</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
    <!-- Modal Structure -->
<div id="modal5" class="modal">
    <div class="modal-content">
        <h4>Ask Us</h4>
        <div class="row">
            <form class="col s12" method="post" action="proseskomentar.php">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">perm_contact_calendar</i>
                        <input value="Anna" name="pegawai" id="icon_prefix" type="text" class="validate" readonly> 
                        <label for="icon_prefix">To</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="nama" id="icon_prefix" type="text" class="validate" required autofocus>
                        <label class="active" for="icon_prefix">Nama</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" class="validate" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">comment</i>
                        <textarea id="komentar" type="text"
                               class="validate materialize-textarea"
                                  name="pesan" required></textarea>
                        <label for="komentar">Pertanyaan</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn waves-effect waves-light" type="submit"><i class="material-icons right">send</i>send</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
    <!-- Modal Structure -->
<div id="modal6" class="modal">
    <div class="modal-content">
        <h4>Ask Us</h4>
        <div class="row">
            <form class="col s12" method="post" action="proseskomentar.php">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">perm_contact_calendar</i>
                        <input value="Pamungkas" name="pegawai"  id="icon_prefix" type="text" class="validate" readonly> 
                        <label for="icon_prefix">To</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="nama" id="icon_prefix" type="text" class="validate" required autofocus>
                        <label class="active" for="icon_prefix">Nama</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" class="validate" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">comment</i>
                        <textarea id="komentar" type="text"
                               class="validate materialize-textarea"
                                  name="pesan" required></textarea>
                        <label for="komentar">Pertanyaan</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn waves-effect waves-light" type="submit"><i class="material-icons right">send</i>send</button>
                </div>
            </form>
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
     <!-- Modal Structure -->
<div id="modal8" class="modal">
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
