<?php
/**
 * Created by PhpStorm.
 * User: farich
 * Date: 1/23/2016
 * Time: 6:37 PM
 */
$db = new mysqli('localhost','root','','suzuki');
if (mysqli_connect_errno()) {
    echo 'Error!';
    exit();
}
?>