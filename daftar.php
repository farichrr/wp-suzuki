<?php
/**
 * Created by PhpStorm.
 * User: farich
 * Date: 1/16/2016
 * Time: 11:25 AM
 */
    $db = new mysqli('localhost','root','','suzuki');
    if (mysqli_connect_errno()) {
        echo 'Error!';
        exit();
    }
        $id = $_POST['ktp'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
    $sql = "INSERT INTO user
VALUES ('$id', '$nama', '$username','$password','$phone')";
    if (mysqli_query($db, $sql)) {
        echo "Data Berhasil Disimpan";
        header("Location: http://localhost:63342/suzuki/index.php"); /* Redirect browser */
        exit();
    } else {
        echo "User anda telah terdaftar";
        echo '<p><a href="index.php">Daftar Ulang</a>';
    }

mysqli_close($db);
?>
