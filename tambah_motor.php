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
        $nopol=$_POST['nopol'];
        $ktp=$_POST['ktp'];
        $nama_kendaraan=$_POST['nama_kendaraan'];
        $jenis_kendaraaa=$_POST['jenis_kendaraan'];
        $query = "INSERT INTO kendaraan VALUES ('$nopol','$ktp','$nama_kendaraan','$jenis_kendaraaa')";
        if (mysqli_query($db, $query)) {
            echo "<script>
                    swal({
                        title: \"Sukses!\",
                        text: \"Data Kendaraan Anda Berhasil Ditambah\",
                        type: \"success\"
                    },
                    function () {
                        window.location.href = 'profile.php';
                    });
                    </script>";
                    } else echo "<script>
                    swal({
                        title: \"Gagal!\",
                        text: \"Data Kendaraan Sudah Terdaftar\",
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