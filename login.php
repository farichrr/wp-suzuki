<?php
/**
 * Created by PhpStorm.
 * User: farich
 * Date: 1/23/2016
 * Time: 6:36 PM
 */

require_once "connect.php";
$user= $_POST['username'];
$pass= $_POST['password'];
$query = 'SELECT * FROM user';
$data = $db->query($query);
$sukses = 0;
$row = $data->fetch_assoc();
foreach ($data as $row) {

    if ($user == $row['username'] && $pass == $row['password']) {
        $sukses = 1;
        session_start();
        $_SESSION['ktp'] = $row['ktp'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['phone'] = $row['phone'];
    }
}
if ($sukses == 1) {
    echo "<script>
alert('Berhasil Login');
window.location.href='home.php';
</script>";

} else
    echo "<script>
alert('Username tidak ada atau password salah');
window.location.href='index.php';
</script>";