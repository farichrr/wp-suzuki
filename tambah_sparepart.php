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
        require_once "functionsparepart.php";
        $id_sparepart = IdKredit(autoID());
        $nama_sparepart = $_POST['nama_sparepart'];
        $harga_sparepart = $_POST['harga_sparepart'];
        $query = "INSERT INTO sparepart VALUES ('$id_sparepart','$nama_sparepart','$harga_sparepart')";
        
        if (mysqli_query($db, $query)) {
            echo "<script>
                    swal({
                        title: \"Sukses!\",
                        text: \"Data Servis Berhasil Ditambah\",
                        type: \"success\"
                    },
                    function () {
                        window.location.href = 'menuservis.php';
                    });
                    </script>";
                    } else echo "<script>
                    swal({
                        title: \"Gagal!\",
                        text: \"Data Servis Gagal ditambah\",
                        type: \"error\"
                    },
                    function () {
                        window.location.href = 'menuservis.php';
                    });
                    </script>";


mysqli_close($db);

?>
</body>
</html>