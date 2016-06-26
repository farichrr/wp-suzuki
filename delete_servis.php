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
    $query = "DELETE FROM servis where id_servis = '".$id_servis."'";
    if (mysqli_query($db,$query)) {
              echo "<script>
swal({
    title: \"Delete Sukses!\",
    text: \"Delete $id_servis Berhasil\",
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
    text: \"Delete Gagal\",
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