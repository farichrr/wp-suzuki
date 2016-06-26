<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS  -->
</head>
<body>

   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "suzuki";
$harga_servis = $_POST['harga_servis'];
$harga_sparepart = $_POST['harga_sparepart'];
    $no_book = $_POST['no_book'];
                $_SESSION['no_book'] =   $_POST['no_book'];
                $id_servis = $_POST['id_servis'];
                $_SESSION['id_servis'] = $_POST['id_servis'];
                $id_sparepart = $_POST['id_sparepart'];
                $_SESSION['id_sparepart'] = $_POST['id_sparepart'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO detail_book (id_book, id_servis, harga_servis, id_sparepart, harga_sparepart)
VALUES ('".$_SESSION['no_book']."','".$_SESSION['id_servis']."' , '".$harga_servis."','".$_SESSION['id_sparepart']."','".$harga_sparepart."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 
<!--

    session_start();
    require_once "connect.php";
    print_r($_POST);
    $no_book = $_POST['no_book'];
    $servis = $_POST['id_servis'];
    $sparepart = $_POST['id_sparepart']; 
    $harga_servis = $_POST['harga_servis'];
    $harga_sparepart = $_POST['harga_sparepart'];    
    $query="INSERT INTO detail_book (id_book,id_servis,harga_servis,id_sparepart,harga_sparepart) values ('$no_book','$servis','$harga_servis','$sparepart','$harga_sparepart') where detail_book.id_book='".$no_book."'";
                                 
         if (mysqli_query($db, $query)) {
    echo "berhasil";
        exit();
             } else { echo "gagal";     

}
    
          
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
-->
    </body>
</html>
