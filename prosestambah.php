<?php
    include"connect.php";
    $foto1 = $_FILES['foto1']
$skl=$_FILES['skl'];
$kk=$_FILES['kk'];
$an=$_FILES['an'];
$ktp=$_FILES['ktp'];
$noKK=$_POST['nokk'];
$namaKK=$_POST['namakk'];
$nama_bayi=$_POST['nama_bayi'];
$tl=$_POST['tl'];
$tgl_lahir=$_POST['tgl'];
$jk=$_POST['group1'];
$kota_lahir=$_POST['kota_lahir'];
$kelahiran_ke=$_POST['kelahiran_ke'];
$berat=$_POST['berat'];
$panjang=$_POST['panjang'];
$nik_ayah=$_POST['nik_ayah'];
$nama_ayah=$_POST['nama_ayah'];
$pekerjaan_ayah=$_POST['pekerjaan_ayah'];
$nik_ibu=$_POST['nik_ibu'];
$nama_ibu=$_POST['nama_ibu'];
$pekerjaan_ibu=$_POST['pekerjaan_ibu'];

$name_skl=$skl['name'];
$name_kk=$kk['name'];
$name_an=$an['name'];
$name_ktp=$ktp['name'];

$temp1 = explode(".", $skl["name"]);
$newfilename1 = round(microtime(true)) . '.' . end($temp1);
$temp2 = explode(".", $kk["name"]);
$newfilename2 = round(microtime(true)) . '.' . end($temp2);
$temp3 = explode(".", $an["name"]);
$newfilename3 = round(microtime(true)) . '.' . end($temp3);
$temp4 = explode(".", $ktp["name"]);
$newfilename4 = round(microtime(true)) . '.' . end($temp4);
$path="uploads/".$newfilename1.$name_skl;
move_uploaded_file($_FILES['skl']['tmp_name'],$path);
$path1="uploads/".$newfilename2.$name_kk;
move_uploaded_file($_FILES['kk']['tmp_name'],$path1);
$path2="uploads/".$newfilename3.$name_an;
move_uploaded_file($_FILES['an']['tmp_name'],$path2);
$path3="uploads/".$newfilename4.$name_ktp;
move_uploaded_file($_FILES['ktp']['tmp_name'],$path3);
echo "".basename($ktp["name"]);