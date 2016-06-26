<?php
function format_rupiah($angka){
 $rupiah=floatval($angka). ',-';
$rv="Rp. ".$rupiah;
 return $rv;
}

?>