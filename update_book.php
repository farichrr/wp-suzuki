<?php
   $db = new mysqli('localhost','root','','suzuki');
if (mysqli_connect_errno()) {
    echo 'Error!';
    exit();
    }
    session_start();
    $status = $_POST['status'];
    $check = "SELECT * FROM booking WHERE id_book = '".$status."'";
    $result = $db->query($check);
    $num = $result->num_rows;
    $data = mysqli_query($db,$check);
    $row=mysqli_fetch_row($data);

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
        <script>$(document).ready(function() {
    $('select').material_select();
  });</script>

    <div class="container">
    <form method="POST" action="update_status.php" class="col s12">
            <?php
            echo "<h1> update data kendaraan </h1> "
            ?>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="<?php echo $row[0];?>" id="id_book" type="text" class="validate" name="id_book" length="30" readonly>
                        <label class="active" for="nama_kendaraan">No Book</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="<?php echo $row[1];?>" id="tanggal" type="text" class="validate" name="tanggal" length="30">
                        <label class="active" for="jenis_kendaraan">Tanggal</label>
                    </div>        
                    <div class="input-field col s12">
                        <input value="<?php echo $row[4];?>" id="jam" type="text" class="validate" name="jam" length="30">
                        <label class="active" for="jenis_kendaraan">Jenis Kendaraan</label>
                    </div>        
                    <div class="input-field col s12">
                        <input value="<?php echo $row[3];?>" id="status" type="text" class="validate" name="status" length="30">
                        <label class="active" for="jenis_kendaraan">Jenis Kendaraan</label>
                    </div>        
                    <div class="input-field col s12">
                        <select name="status">
                          <option value="Pending" selected>Pending</option>
                          <option value="Dikerjakan">Dikerjakan</option>
                          <option value="Selesai">Selesai</option>
                          <option value="Gagal">Gagal</option>
                        </select>
                        <label>Status</label>
                      </div>
                </div>
                    <a href="menuservis.php" class="btn btn-flat waves-effect waves-teal">Kembali</a>
                    <button class="btn btn-flat waves-effect" type="submit">Update Data</button>
        </form>
        </div>
    
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
    <script>
        $(document).ready(function() {
        $('select').material_select();
        });
    </script>
    </body>
</html>