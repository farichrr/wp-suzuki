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
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$hash = $password;
$query = 'SELECT * FROM pegawai';
$data = $db->query($query);
$sukses = 0;
$row = $data->fetch_assoc();
foreach ($data as $row) {

    if ($username == $row['username'] && $hash == $row['password']) {
        $sukses = 1;
        session_start();
        $_SESSION['username'] = $row['username'];
    }
}
if ($sukses == 1) {
       echo "<script>
swal({
    title: \"Login Sukses!\",
    text: \"Selamat Datang $username\",
    type: \"success\"
},
function () {
    window.location.href = 'menuservis.php';
});
</script>";
} else echo "<script>
swal({
    title: \"Gagal!\",
    text: \"Username atau Password Salah\",
    type: \"error\"
},
function () {
    window.location.href = 'admin.php';
});
</script>";
?>
    </body>
</html>