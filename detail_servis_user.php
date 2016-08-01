<?php
    require_once "connect.php";
    require_once "rupiah.php";
    session_start();

?>

<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Hero Sakti Motor Gemilang Website By Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    
    </head>
<body>
    <div class="container">
       <form class="col s12">
           <?php echo "<h1> Data Servis bengkel</h1> ";?>
                <div class="row">
                    <div class="col s12">
                        <table class="highlight centered" >
        <thead>
          <tr>
              <th data-field="id_book" rowspan="2">No Booking</th>
              <th data-field="nama" rowspan="2">Kode Sparepart</th>
              <th data-field="nama_kendaraan" rowspan="2">Nama Sparepart</th>
              <th data-field="tanggal" rowspan="2">Harga Sparepart</th>
            
              
          </tr>
        </thead>
 
        <tbody>
            <?php
            $id_book = $_POST['id_book'];
            $total = 0;
            $count = "select sum(harga_sparepart) as total from detail_book where id_book='".$id_book."'";
            $sql = "select detail_book.id_book, detail_book.id_sparepart, sparepart.nama_sparepart, detail_book.harga_sparepart from detail_book right join sparepart on detail_book.id_sparepart = sparepart.id_sparepart where detail_book.id_book = '".$id_book."'";
//            $sql = " select detail_book.id_book,user.nama,kendaraan.nama_kendaraan,booking.tanggal,servis.jenis_servis,servis.harga_servis,sparepart.nama_sparepart,sparepart.harga_sparepart,booking.status from detail_book natural join booking natural join servis natural join sparepart natural join user natural join kendaraan where detail_book.id_book='".$id_book."'";
                $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $total = $total + $row['harga_sparepart'];
        echo "<tr>
            <td>".@$row['id_book']."</td>  
            <td>".@$row['id_sparepart']."</td>  
            <td>".@$row['nama_sparepart']."</td>  
            <td>".format_rupiah(@$row['harga_sparepart'])."</td>
            </tr>
            ";
                
                
    }
} else {
    echo "0 results";
}
            echo "<tr>
            <td>SubTotal</td>
            <td></td>
            <td></td>
            <td>".format_rupiah($total)."</td>
            </tr>";
            
            $query = "select detail_book.id_servis, servis.jenis_servis, detail_book.harga_servis from detail_book inner join servis on detail_book.id_servis = servis.id_servis  where detail_book.id_book='".$id_book."'";
$koneksi = mysql_connect('localhost', 'root', '');
mysql_select_db('suzuki');
$ambildata = mysql_query( $query, $koneksi);
 
            
if(! $ambildata )
{
  die('Gagal ambil data: ' . mysql_error());
}
$row = mysql_fetch_assoc($ambildata);
    echo "ID servis :{$row['id_servis']}  <br> ".
         "jenis_servis : {$row['jenis_servis']} <br> ".
         "harga_servis : {$row['harga_servis']} <br> ".
         "Total Servis dan Sparepart =". $total1 = $row['harga_servis'] + $total."<br>".
         "--------------------------------<br>";
            

            
mysql_close($koneksi);
?>
          
        </tbody>            
                    </table>
                        
                        
                </div>
            </div>
           <a class="btn btn-flat waves-effect" href="profile.php">Kembali</a>
        </form>
        </div>
    </body>
</html>