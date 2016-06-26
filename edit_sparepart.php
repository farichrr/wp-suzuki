<?php
   $db = new mysqli('localhost','root','','suzuki');
if (mysqli_connect_errno()) {
    echo 'Error!';
    exit();
    }
    session_start();    
    $id_sparepart = $_POST['id_sparepart'];
    $check = "SELECT nama_sparepart, harga_sparepart FROM sparepart where id_sparepart = '".$id_sparepart."'";
    $result = $db->query($check);
    $num = $result->num_rows;
    $data = mysqli_query($db,$check);
    $row=mysqli_fetch_assoc($data);
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
        <form method="post" action="update_sparepart.php">
            <?php
            echo "<h1> Update Jasa Servis </h1> "
            ?>
                <div class="row">
                
                    <div class="input-field col s12">
                        <input value="<?php echo $id_sparepart;?>" id="id_sparepart" type="text" class="validate" name="id_sparepart" readonly>
                        <label class="active" for="id_sparepart">ID. Sparepart</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="<?php echo $row['nama_sparepart'];?>" id="nama_sparepart" type="text" class="validate" name="nama_sparepart">
                        <label class="active" for="nama_sparepart">Nama Sparepart</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="<?php echo $row['harga_sparepart'];?>" id="harga_sparepart" type="text" class="validate" name="harga_sparepart">
                        <label class="active" for="harga_sparepart">Harga Sparepart</label>
                    </div>
                
                    <a href="menuservis.php" class="btn btn-flat waves-effect">Kembali</a>
                    <button class="btn waves-effect waves-teal" type="submit">Update</button>
                </div>
            </form>
        </div>
    
    </body>
</html>