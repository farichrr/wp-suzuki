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
              <th data-field="nama" rowspan="2">Pemilik</th>
              <th data-field="nama_kendaraan" rowspan="2">Tipe Kendaraan</th>
              <th data-field="tanggal" rowspan="2">Tanggal</th>
              <th data-field="jenis_servis" rowspan="2">Jenis Servis</th>
              <th data-field="harga_servis" rowspan="2">Harga Servis</th>
              <th data-field="nama_sparepart" rowspan="2">Sparepart</th>
              <th data-field="harga_sparepart" rowspan="2">Harga Sparepart</th>
              <th data-field="status" rowspan="2">Status</th>
          </tr>
        </thead>
 
        <tbody>
            <?php
            $id_book = $_POST['id_book'];
            print_r($_POST);
            $sql = " select detail_book.id_book,user.nama,kendaraan.nama_kendaraan,booking.tanggal,servis.jenis_servis,servis.harga_servis,sparepart.nama_sparepart,sparepart.harga_sparepart,booking.status from booking natural join detail_book natural join servis natural join sparepart natural join user natural join kendaraan where detail_book.id_book='".$id_book."'";
                $result = mysqli_query($db, $sql);
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>".@$row['id_book']."</td>  
            <td>".@$row['nama']."</td>  
            <td>".@$row['nama_kendaraan']."</td>  
            <td>".@$row['tanggal']."</td>
            <td>".@$row['jenis_servis']."</td>  
            <td>".format_rupiah(@$row['harga_servis'])."</td>
            <td>".@$row['nama_sparepart']."</td>
            <td>".format_rupiah(@$row['harga_sparepart'])."</td>
            <td>".@$row['status']."</td>
            </tr>";
    }
} else {
    echo "0 results";
} ?>
          
        </tbody>
                    </table>
                </div>
            </div>
           <a class="btn btn-flat waves-effect" href="profile.php">Kembali</a>
        </form>
        </div>
    </body>
</html>