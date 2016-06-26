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
    session_start();
    require_once "connect.php";
    $pegawai = $_POST['pegawai'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    $query = "INSERT INTO pesan VALUES ('$pegawai','$nama','$email','$pesan',now())";
    if (mysqli_query($db, $query)) {
        echo "<script>
            swal({
                title: \"Pesan Terkirim!\",
                text: \"Pesan anda terkirim, pesan anda akan ditindaklanjuti oleh CS kami terima kasih\",
                type: \"success\"
            },
            function () {
                window.location.href = 'team.html';
            });
        </script>";
        exit();
    } else {
        echo "<script>
        swal({
            title: \"Pesan Gagal!\",
            text: \"Opps Terjadi Kesalahan Pesan\",
            type: \"error\"
        },
        function () {
            window.location.href = 'team.html';
        });
        </script>";
    }
    mysqli_close($db);
?>
    </body>
</html>