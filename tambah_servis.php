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
        require_once "functionservis.php";
        $id_servis = IdKredit(autoID());
        $jenis_servis = $_POST['jenis_servis'];
        $harga_servis = $_POST['harga_servis'];
        $query = "INSERT INTO servis VALUES ('$id_servis','$jenis_servis','$harga_servis')";
        
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