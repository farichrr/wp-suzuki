<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- CSS  -->
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="css/sweetalert.css">
    <link href="css/custom.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
    require_once"connect.php";
    session_start();
    $nopol = $_POST['nopol'];    
    $query= "DELETE FROM kendaraan WHERE nopol='".$nopol."'";
    if (mysqli_query($db,$query)) {
        echo "<script>
swal({
    title: \"Hapus Sukses!\",
    text: \"Data Kendaraan Telah Dihapus\",
    type: \"success\"
},
function () {
    window.location.href = 'profile.php';
});
</script>";
        } else echo "<script>
swal({
    title: \"Gagal!\",
    text: \"Data Kendaraan Gagal Dihapus\",
    type: \"error\"
},
function () {
    window.location.href = 'profile.php';
});
</script>";
    mysqli_close($db);

    ?>
     </body>
</html>