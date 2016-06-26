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
    
    $id_sparepart = $_POST['id_sparepart'];
    $nama_sparepart = $_POST['nama_sparepart'];
    $harga_sparepart = $_POST['harga_sparepart'];
    
    $check = "SELECT * FROM sparepart WHERE id_servis='".$id_sparepart."'";
    $hasil = mysqli_query($db, $check);
    $query="UPDATE sparepart SET 
    nama_sparepart='".$nama_sparepart."',harga_sparepart='".$harga_sparepart."' WHERE id_sparepart = '".$id_sparepart."'";
    if (mysqli_query($db,$query)) {
              echo "<script>
swal({
    title: \"Update Sukses!\",
    text: \"Update $id_sparepart Berhasil\",
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