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
            echo "<h1> Detail Booking Kostumer </h1> ";
                $no_book = $_POST['no_book'];
                $_SESSION['no_book'] =   $_POST['no_book'];
                $id_servis = $_POST['id_servis'];
                $_SESSION['id_servis'] = $_POST['id_servis'];
                $id_sparepart = $_POST['id_sparepart'];
                $_SESSION['id_sparepart'] = $_POST['id_sparepart'];
            ?>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="<?php echo "$no_book";?>" id="no_book" type="text" class="validate" name="no_book" readonly>
                        <label class="active" for="no_book">Booking Number</label>
                    </div>
                    
                    <div class="input-field col s12 ">
                        <input value="<?php echo "$id_servis"; ?>" id="id_servis" type="text" class="validate" name="id_servis" length="12" readonly>
                        <label class="active" for="id_servis">ID Servis</label>
                    </div>        
                    <div class=" input-field col s12">
                    <input id="harga_servis" value="<?php
                            $konek = mysqli_connect("localhost","root","","suzuki");
                            $query = "select harga_servis from servis where id_servis = '".$id_servis."'";
                            $hasil = mysqli_query($konek,$query);
                            if (mysqli_num_rows($hasil) > 0) {
                            while($data=mysqli_fetch_array($hasil)){
                                echo "$data[harga_servis]";
                            }
                                }else{
                                echo "Data Servis Kosong";
                            }       
                        ?>" type="number" class="validate" name="harga_servis" readonly>
                        <label for="harga_servis">Harga Servis</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="<?php echo "$id_sparepart"; ?>" id="id_sparepart" type="text" class="validate" name="id_sparepart" length="12" readonly>
                        <label class="active" for="id_sparepart">ID Sparepart</label>
                    </div>        
                    <div class=" input-field col s12">
                     <input id="harga_sparepart" value="<?php
                            $konek1 = mysqli_connect("localhost","root","","suzuki");
                            $query1 = "select harga_sparepart from sparepart where id_sparepart = '".$id_sparepart."'";
                            $hasil1 = mysqli_query($konek1,$query1);
                            if (mysqli_num_rows($hasil1) > 0) {
                            while($data1=mysqli_fetch_array($hasil1)){
                                echo "$data1[harga_sparepart]";
                            }
                                }else{
                                echo "Data Sparepart Sparepart";
                            }       
                        ?>" type="number" class="validate" name="harga_sparepart" readonly>
                        <label for="harga_sparepart">Harga Sparepart</label>
                    </div>
                            <!-- <button value="Submit" name="Submit" type="submit" href="prosesbook.php">Tambah Sparepart</button> -->
        </div>
                    <button value="Submit" name="Submit" type="submit" class="waves-effect waves-green right btn">Submit</button>
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