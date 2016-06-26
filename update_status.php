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
    $id_book = $_POST['id_book'];
    $status = $_POST['status'];
    $check = "SELECT * FROM booking WHERE id_book='".$id_book."'";
    $hasil = mysqli_query($db, $check);
    $query="UPDATE booking SET 
    status='".$status."' WHERE id_book = '".$id_book."'";
    if (mysqli_query($db,$query)) {
              echo "<script>
swal({
    title: \"Update Sukses!\",
    text: \"Update Berhasil\",
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