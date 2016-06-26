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
    $ktp = $_POST['ktp'];    
    $query= "DELETE FROM user WHERE ktp='".$ktp."'";
    if (mysqli_query($db,$query)) {
        echo "<script>
swal({
    title: \"Hapus Sukses!\",
    text: \"Data User Telah Dihapus\",
    type: \"success\"
},
function () {
    window.location.href = 'menuuser.php';
});
</script>";
        } else echo "<script>
swal({
    title: \"Gagal!\",
    text: \"Data User Gagal Dihapus\",
    type: \"error\"
},
function () {
    window.location.href = 'menuuser.php';
});
</script>";
    mysqli_close($db);

    ?>
     </body>
</html>