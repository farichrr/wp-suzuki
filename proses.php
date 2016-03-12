<?php
include "connect.php";
$data=mysql_query("select * from servis");
$op=isset($_GET['op'])?$_GET['op']:null;

if($op=='id_servis'){
    echo"<option>Kode Barang</option>";
    while($r=mysql_fetch_array($data)){
        echo "<option value='$r[id_servis]'>$r[id_servis]</option>";
    }
}elseif($op=='servis'){
    echo'<table id="servis" class="table table-hover">
    <thead>
            <tr>
                <Td colspan="5"><a href="?page=barang&act=tambah" class="btn btn-primary">Tambah Barang</a></td>
            </tr>
            <tr>
                <td>Id Servis</td>
                <td>Jenis Servis</td>
                <td>Harga</td>
            </tr>
        </thead>';
	while ($b=mysql_fetch_array($data)){
        echo"<tr>
                <td>$b[id_servis]</td>
                <td>$b[jenis_servis]</td>
                <td>$b[harga]</td>
            </tr>";
        }
    echo "</table>";
}elseif($op=='ambildata'){
    $kode=$_GET['id_servis'];
    $dt=mysql_query("select * from servis where kode='$kode'");
    $d=mysql_fetch_array($dt);
    echo $d['jenis_servis']."|".$d['harga'];
}elseif($op=='cek'){
    $kd=$_GET['kd'];
    $sql=mysql_query("select * from id_servis where kode='$kd'");
    $cek=mysql_num_rows($sql);
    echo $cek;
}elseif($op=='update'){
    $kode=$_GET['id_servis'];
    $nama=htmlspecialchars($_GET['jenis_servis']);
    $beli=htmlspecialchars($_GET['harga']);
    
    $update=mysql_query("update servis set jenis_servis='$nama',
                        harga='$beli',
                        where kode='$kode'");
    if($update){
        echo "Sukses";
    }else{
        echo "ERROR. . .";
    }
}elseif($op=='delete'){
    $kode=$_GET['id_servis'];
    $del=mysql_query("delete from servis where kode='$kode'");
    if($del){
        echo "sukses";
    }else{
        echo "ERROR";
    }
}elseif($op=='simpan'){
    $kode=$_GET['id_servis'];
    $nama=htmlspecialchars($_GET['jenis_servis']);
    $jual=htmlspecialchars($_GET['harga']);
    
    
    $tambah=mysql_query("insert into servis (id_servis,jenis_servis,harga)
                        values ('$kode','$nama','$jual')");
    if($tambah){
        echo "sukses";
    }else{
        echo "error";
    }
}
?>