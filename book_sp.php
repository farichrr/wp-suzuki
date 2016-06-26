<?php
   $db = new mysqli('localhost','root','','suzuki');
if (mysqli_connect_errno()) {
    echo 'Error!';
    exit();
    }
    session_start();
    require_once "rupiah.php";
    
?>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Hero Sakti Motor Gemilang Website By Materialize</title>

    <!-- CSS  -->
        
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    </head>
<body>
    <div class="container">
    <form method="POST" action="prosesbook.php" class="col s12">
            <?php
            echo "<h1> Tambah Sparepart </h1> "
            ?>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="<?php echo $_SESSION['id_book'];?>" id="id_book" type="text" class="validate" name="id_book" readonly>
                        <label class="active" for="id_book">Booking Number</label>
                    </div>
                    <div class="input-field col s12">
                       <select name="servis">
                            <?php 
                                $konek = mysqli_connect("localhost","root","","suzuki");
                                $query = "select id_servis.servis,jenis_servis.servis, from servis where id_servis = '".$_SESSION['id_servis']."'";
                                $hasil = mysqli_query($konek,$query);  
                                    if (mysqli_num_rows($hasil) > 0) {
                                        while($data=mysqli_fetch_array($hasil)){
                                        echo "<option value='$data[id_servis]'>$data[jenis_servis]</option>";
                                        }
                                            }else{
                                            echo "<option value='0'>Data servis Tidak Ada</option>";
                                        }       
                            ?>
                        </select>
                    </div>
                    <div class="input-field col s12 m6">
                        <select class="icons" name="sparepart">                            
                        <?php
                            require_once "connect.php";
                            $query = "select * from sparepart";
                            $hasil = mysqli_query($db, $query);
                                if (mysqli_num_rows($hasil)>0){
                                    while($data=mysqli_fetch_array($hasil)){
                                         echo "<option value='".$data[id_sparepart]."'>$data[nama_sparepart]</option>";
                                        }
                                            }else{
                                            echo "<option value='Tidak Ada Sparepart Yang diganti'></option>";
                                        }  
                        ?>
                            </select>
                       <label>Pergantian Sparepart</label>
                            <a href="book_sp.php">Tambah Sparepart</a>
                    </div>        
                    <button value="Submit" name="Submit" type="submit" class="waves-effect waves-green right btn">Submit</button>
        </div>
        </form>
        </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
    <script>
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });
$(document).ready(function(){
        $('ul.tabs').tabs();
    $('select').material_select();
    $('.tooltipped').tooltip({delay: 50});
    });
</script>
    </body>
</html>