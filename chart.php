<?php
    require_once "connect.php";
    $query = "select tanggal,count(id_book) as jumlah from booking group by tanggal";
    $data=$db->query($query);
    $row=$data->fetch_assoc();
    $array=array();
    $i=0;
        foreach ($data as $row){
            $array[$i]['tanggal']=$row['tanggal'];
            $array[$i]['jumlah']=$row['jumlah'];
            $i++;
        }
            echo json_encode($array);
?>
    