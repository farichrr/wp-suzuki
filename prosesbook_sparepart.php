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
    $servis = $_POST['servis'];
    $sparepart = $_POST['sparepart']; 
    $_SESSION['servis'] = $_POST['servis'] ;
    $_SESSION['sparepart'] = $_POST['sparepart'];
    $query = "INSERT INTO detail_book (id_book,id_servis,id_sparepart) VALUES ('".$_SESSION['id_book']."','".$servis."','".$sparepart."')";    
    //$query="INSERT INTO detail_book (id_book,id_servis,id_sparepart) values ('".$_SESSION['id_book']."','".$servis."','".$sparepart."')";
         if (mysqli_query($db, $query)) {
    echo "<script>
            swal({
                title: \"Sukses!\",
                text: \"Booking sukses\",
                type: \"success\"
                },
            function () {
            window.location.href = 'tambahan.php';
                });
                </script>";
        exit();
             } else  echo "<script> 
            swal({
                title: \"Gagal!\",
                text: \"Booking gagal\",
                type: \"error\"
                },
                function () {
                window.location.href = 'home.php';
                });
                    </script>";     


    
          
    //$nama_sparepart = "Select nama_sparepart from sparepart where id_sparepart = '".$sparepart."'";
    
    //echo $nama_sparepart;
    /*$query = "INSERT INTO booking (id_book,tanggal,ktp,nopol,jam,status) VALUES ('$id_book',now(),'".$_SESSION['ktp']."','$nopol','$jam','pending')";
    if (mysqli_query($db, $query)) {
    echo "<script>
            swal({
                title: \"Sukses!\",
                text: \"Booking sukses\",
                type: \"success\"
                },
            function () {
            window.location.href = 'home1.php';
                });
                </script>";
        exit();
    } else { echo "<script> 
            swal({
                title: \"Gagal!\",
                text: \"Booking gagal\",
                type: \"error\"
                },
                function () {
                window.location.href = 'home.php';
                });
                    </script>";     

    }*/

mysqli_close($db);

?>
    </body>
</html>
