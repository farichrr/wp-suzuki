<?php
/**
 * Created by PhpStorm.
 * User: farich
 * Date: 1/17/2016
 * Time: 1:06 PM
 */
$db = new mysqli('localhost','root','','suzuki');
if (mysqli_connect_errno()) {
    echo 'Error!';
    exit();
}
?>