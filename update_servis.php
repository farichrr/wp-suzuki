<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS  -->
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="css/sweetalert.css">
    <link href="css/custom.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
    require_once "connect.php";
    session_start();
    
    $id_servis = $_POST['id_servis'];
    $jenis_servis = $_POST['jenis_servis'];
    $harga_servis = $_POST['harga_servis'];
    
    $check = "SELECT * FROM servis WHERE id_servis='".$id_servis."'";
    $hasil = mysqli_query($db, $check);
    $query="UPDATE servis SET 
    jenis_servis='".$jenis_servis."',harga_servis='".$harga_servis."' WHERE id_servis = '".$id_servis."'";
    if (mysqli_query($db,$query)) {
              echo "<script>
swal({
    title: \"Update Sukses!\",
    text: \"Update $id_servis Berhasil\",
    type: \"success\"
},
function () {
    window.location.href = 'menuservis.php';
});
</script>";
    } else {
        echo "<script>
swal({
    title: \"Gagal!\",
    text: \"Update Gagal\",
    type: \"error\"
},
function () {
    window.location.href = 'menuservis.php';
});
</script>";
    }

    mysqli_close($db);
?>
        </body>
</html>