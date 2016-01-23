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
    echo "<script>
        alert('Berhasil Login');
        window.location.href='home.php';
        </script>";
    exit();
} else {
    echo "<script>
        alert('Username anda telah terdaftar atau password salah');
        window.location.href='index.php';
        </script>";
}

mysqli_close($db);

if(isset($_POST['submit'])){
    $captcha=$_POST['g-recaptcha-response'];
    if(!empty($captcha))
    {
        $errMsg= '';
        $google_url="https://www.google.com/recaptcha/api/siteverify";
        $secret="6LeAkRUTAAAAABaeMoNfdQSc8IB31CcyM2QCDADF";
        $ip=$_SERVER['REMOTE_ADDR'];
        $captchaurl=$google_url."?secret=".$secret."&response=".$captcha."&remoteip=".$ip;

        $curl_init = curl_init();
        curl_setopt($curl_init, CURLOPT_URL, $captchaurl);
        curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_init, CURLOPT_TIMEOUT, 10);
        $results = curl_exec($curl_init);
        curl_close($curl_init);

        $results= json_decode($results, true);
        if($results['success']){
            $errMsg="Valid reCAPTCHA code. You are human.";
        }else{
            $errMsg="Invalid reCAPTCHA code.";
        }
    }else{
        $errMsg="Please re-enter your reCAPTCHA.";
    }
}
?>
