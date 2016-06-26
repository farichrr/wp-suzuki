<?php
   $db = new mysqli('localhost','root','','suzuki');
if (mysqli_connect_errno()) {
    echo 'Error!';
    exit();
    }
    session_start();
    require_once "rupiah.php";
    $id_kredit = $_POST['id_kredit'];
    $_SESSION['id_kredit']=$id_kredit;
    $check = "SELECT * FROM detail_book WHERE id_book = '".$_SESSION['id_book']."'";
    
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
    </head>
<body>
    <div class="container">
    <form method="POST" action="updatekredit.php" class="col s12">
            <?php
            echo "<h1> update kredit $id_kredit </h1> "
            ?>
                <div class="row">
                    <div class="input-field col s6">
                        <input value="<?php echo $row['id_product'];?>" id="id_product" type="text" class="validate" name="id_product">
                        <label class="active" for="id_product">Product</label>
                    </div>
                    <div class="input-field col s6">
                        <input value="<?php echo $row['uang_muka'];?>" id="uang_muka" type="number" class="validate" name="uang_muka" length="8">
                        <label class="active" for="uang_muka">Product</label>
                    </div>
                    <div class="input-field col s4">
                        <input value="<?php echo $row['11x'];?>" id="11x" type="number" class="validate" name="11x" length="8">
                        <label class="active" for="11x">11x angsuran</label>
                    </div>        
                    <div class="input-field col s4">
                        <input value="<?php echo $row['23x'];?>" id="23x" type="number" class="validate" name="23x" length="8">
                        <label class="active" for="23x">23x angsuran</label>
                    </div>        
                    <div class="input-field col s4">
                        <input value="<?php echo $row['35x'];?>" id="35x" type="number" class="validate" name="35x" length="8">
                        <label class="active" for="35x">35x angsuran</label>
                    </div>        
                </div>
                    <button class="btn btn-flat waves-effect" type="submit">Update</button>
        </form>
        </div>
    </body>
</html>