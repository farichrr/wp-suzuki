<?php
   $db = new mysqli('localhost','root','','suzuki');
if (mysqli_connect_errno()) {
    echo 'Error!';
    exit();
    }
    session_start();
    $nopol = $_POST['nopol'];
    $check = "SELECT * FROM kendaraan WHERE nopol = '".$nopol."'";
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
        <script>
             $(document).ready(function() {
            $('select').material_select();
          });
    </script>
    </head>
<body>
    <div class="container">
    <form method="POST" action="update_motor.php" class="col s12">
            <?php
            echo "<h1> update data kendaraan </h1> "
            ?>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="<?php echo $row[0];?>" id="nopol" type="text" class="validate" name="nopol" length="30" readonly>
                        <label class="active" for="nama_kendaraan">No Polisi</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="<?php echo $row[2];?>" id="nama_kendaraan" type="text" class="validate" name="nama_kendaraan" length="30">
                        <label class="active" for="jenis_kendaraan">Nama Kendaraan</label>
                    </div>        
                    <div class="input-field col s12">
                        <input value="<?php echo $row[3];?>" id="jenis_kendaraan" type="text" class="validate" name="jenis_kendaraan" length="30">
                        <label class="active" for="jenis_kendaraan">Jenis Kendaraan</label>
                    </div>        
                </div>
                    <a href="profile.php" class="btn btn-flat waves-effect waves-teal">Kembali</a>
                    <button class="btn btn-flat waves-effect" type="submit">Update Data</button>
        </form>
        </div>
    
    </body>
</html>