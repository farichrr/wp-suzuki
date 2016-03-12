<?php
    require_once "connect.php";

    $ktp = $_POST['ktp'];
    $passwordbaru = $_POST['password'];
    
    $check = "SELECT * FROM user WHERE ktp='".$ktp."'";
    
    $hasil = mysqli_query($db, $check);
    
    $query="UPDATE user SET password=sha1('$passwordbaru') WHERE ktp = '".$ktp."'";
    if (mysqli_query($db,$query)) {
        echo "<script>
        alert('Password berhasil dirubah');
        window.location.href='index.php';
        </script>";
    } else {
        echo "<script>
alert('no ktp tidak terdaftar');
window.location.href='reset.php';
</script>";
    }

    mysqli_close($db);
?>
    