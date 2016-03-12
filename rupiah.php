<?php
function format_rupiah($angka){
 $rupiah=number_format($angka,0,',','.'). ',-';
$rv="Rp. ".$rupiah;
 return $rv;
}

?>