<?php
   $db = new mysqli('localhost','root','','suzuki');
if (mysqli_connect_errno()) {
    echo 'Error!';
    exit();
    }
    require_once "rupiah.php";
    session_start();    
    $id_servis = $_POST['id_servis'];
    $check = "select jenis_servis, harga_servis from servis where id_servis='".$id_servis."'";
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
        <form method="post" action="update_servis.php">
            <?php
            echo "<h1> Update Jasa Servis </h1> "
            ?>
                <div class="row">
                
                    <div class="input-field col s12">
                        <input value="<?php echo $id_servis;?>" id="id_servis" type="text" class="validate" name="id_servis" readonly>
                        <label class="active" for="id_servis">ID.Servis</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="<?php echo $row['jenis_servis'];?>" id="jenis_servis" type="text" class="validate" name="jenis_servis">
                        <label class="active" for="jenis_servis">Jenis Servis</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="<?php echo $row['harga_servis'];?>" id="harga_servis" type="text" class="validate" name="harga_servis">
                        <label class="active" for="harga_servis">Harga Servis</label>
                    </div>
                
                    <a href="menuservis.php" class="btn btn-flat waves-effect">Kembali</a>
                    <button class="btn waves-effect waves-teal" type="submit">Update</button>
                </div>
            </form>
        </div>
     
    </body>
</html>