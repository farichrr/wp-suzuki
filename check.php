<?php
/**
 * Created by PhpStorm.
 * User: farich
 * Date: 1/17/2016
 * Time: 1:04 PM
 */
    $db = new mysqli('localhost','root','','suzuki');
        if (mysqli_connect_errno()) {
    echo 'Error!';
    exit();
    }
   
    $user_name    =    $dbConnection->real_escape_string($_POST['username']);
    $sqlUser='SELECT username FROM user WHERE username = "'.$user_name.'"';
    $resUser=$dbConnection->query($sqlUser);
    if($resUser === false) {
        trigger_error('Error: ' . $dbConnection->error, E_USER_ERROR);
    } else {
        echo $rows_returned = $resUser->num_rows;
    }
?>