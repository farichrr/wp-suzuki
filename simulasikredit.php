<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    <script src="js/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="css/sweetalert.css">
</head>
<body>
    
<?php
    $dp = $_POST['dp'];
    $produk = $_POST['produk'];
    $tahun = $_POST['tahun'];
    $kalkulasi = (($produk-$dp)/$tahun)*1.50;
    if ($dp < 500000) {
    echo "<script>
        swal({
            title: \"Uang Muka Kurang!\",
            text: \"Uang Muka tidak Boleh kurang dari Rp.500.000.00\",
            type: \"error\"
            },
                function () {
                window.location.href = 'product_1.php';
                });
                </script>";
    } else if ($dp >= $produk) {
        echo "<script>
            swal({
            title: \"DP melebihi produk!\",
            text: \"Uang Muka yang anda inputkan melebihi dari harga produk!\",
            type: \"error\"
            },
                function () {
                window.location.href = 'product_1.php';
                });
                </script>";
    } else
        echo "<script>
    swal({
        title: \"Estimasi Kredit\",
        text: \"Untuk Produk yang anda Pilih dengan Uang Muka = $dp selama $tahun bulan Estimasi kredit sebesar $kalkulasi\",
        type: \"success\"
        },
            function () {
            window.location.href = 'product_1.php';
            });
            </script>";
        
?>
</body>
</html>
