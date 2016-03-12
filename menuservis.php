

<!DOCTYPE html>
<html lang="">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    
</head>

<body>
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="help.html">Help</a></li>
        <li><a href="logout.php">Sign Out</a></li>
    </ul>
    <!-- Dropdown Structure -->
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="help.html">Help</a></li>
        <li><a href="logout.php">Sign Out</a></li>
    </ul>
    <nav class="white   ">
    <div class="nav-wrapper container">
      <a id="logo-container" href="admin.php" class="brand-logo"><img  class="img-rounded" src="img/logo.png" alt="suzuki.png"></a>
        
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li class="active"><a href="menuservis.php"><i class="material-icons right">store</i>Menu Jasa Servis</a></li>
        <li><a href="menukredit.php"><i class="material-icons right">library_books</i>Menu Kredit</a></li>
        <li><a href="menuuser.php"><i class="material-icons right">assignment_ind</i>Menu User</a></li>
        <li><a href="pesan.php"><i class="material-icons right">markunread_mailbox</i>Pesan</a></li>
        <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="material-icons">more_vert</i></a></li>
          
      </ul>
        <ul class="side-nav" id="mobile-demo">
        <li class="active"><a href="menuservis.php"><i class="material-icons right">store</i>Menu Jasa Servis</a></li>
        <li><a href="menukredit.php"><i class="material-icons left">library_books</i>Menu Kredit</a></li>
        <li><a href="menuuser.php"><i class="material-icons left">assignment_ind</i>Menu User</a></li>
        <li><a href="pesan.php"><i class="material-icons left">markunread_mailbox</i>Pesan</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons left">more_vert</i>Settings</a></li>
      </ul>
    </div>
        </nav>
         
   <div class="container">
       <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">note_add</i>Tambah Servis dan Sparepart</div>
      <div class="collapsible-body"><p>menu untuk menambah jenis layanan servis dan sparepart.</p>
          <p><a href="#modal1" class="btn-large modal-trigger ">Tambah Jasa Servis <i class="material-icons right">note_add</i></a>
          <a href="#modal4" class="btn-large modal-trigger ">Tambah Sparepart <i class="material-icons right">note_add</i></a>
          </p>
        </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">description</i>Lihat Servis Dan Sparepart</div>
      <div class="collapsible-body">
          <p>Menu untuk melihat jasa servis yang disediakan dan sparepart.</p>
        <p><a href="#modal2" class="btn-large modal-trigger">Lihat Servis<i class="material-icons right">description</i></a>
          <a href="#modal5" class="btn-large modal-trigger">Lihat Sparepart<i class="material-icons right">description</i></a></p>
        </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">pageview</i>Update Servis dan Sparepart.</div>
        <div class="collapsible-body">
            <div class="container">
                <p>Menu untuk memperbaiki jasa servis yang disediakan berdasarkan id servis.</p>
        <form action="edit_servis.php" method="post">
                <input type="text" name="id_servis" required>
                <button type="submit" class="btn">Search Servis<i class="material-icons right">pageview</i></button>
                </form>
        <p>Menu untuk memperbaiki sparepart yang disediakan berdasarkan id sparepart.
           <form action="edit_sparepart.php" method="post">
                <input type="text" name="id_sparepart" required>
                <button type="submit" class="btn">Search Sparepart<i class="material-icons right">pageview</i></button>
            </form>
                </p>
                
        
            </div>
        </div>
    </li>
        <li>
      <div class="collapsible-header"><i class="material-icons">delete</i>Hapus Layanan Servis dan Sparepart.</div>
      <div class="collapsible-body">
          
          <div class="container">
            <p>Menu untuk menghapus Layanan Servis berdasarkan id servis.</p>
          <p><form action="delete_servis.php" method="post">
              
                   <input type="text" name="id_hapus_kredit" required>
                    <button type="submit" class="btn">Hapus<i class="material-icons right">delete</i></button>
             </form>
              <p>Menu untuk menghapus Sparepart berdasarkan id sparepart.</p>
              <form action="delete_servis.php" method="post">
                  <div class="input-field col s12">
                        <select name="sparepart" multiple>
                            <?php
                                $konek = mysqli_connect("localhost","root","","suzuki");
                                $query = "select nama_sparepart from sparepart";
                                $hasil = mysqli_query($konek,$query);
                                if (mysqli_num_rows($hasil) > 0) {
                                while($data=mysqli_fetch_array($hasil)){
                                    echo "<option value=$data[id_sparepart]>$data[nama_sparepart]</option>";
                            }
                                }else{
                                echo "<option value=0>Empty</option>";
                            }       
                            
                            ?>
                        </select>
                        <label>Ganti Sparepart</label>
                    </div>
                    
                    <button type="submit" class="btn">Hapus Sparepart<i class="material-icons right">delete</i></button>
             </form>
                   </p>
          </div>
    </li>
  </ul>
        </div>
    
    </div>
    
    <!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Tambah Layanan Servis</h4>
        <div class="row">
            <form class="col s12" method="post" action="tambah_servis.php">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" class="validate" name="nama_sparepart" length="50" required>
                        <label>Jenis Servis</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="number" class="validate" name="harga_sparepart" length="12" required>
                        <label>Harga Servis</label>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="waves-effect waves-green right btn">Tambah</button>
                  <button type="reset" class="btn-flat  waves-effect">Clear</button>
                
                </div>
            </form>
        </div>
    </div>
    
</div>
    <!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <h4>Simulasi Kredit</h4>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="col s12">
                        <table class="highlight centered">
        <thead>
          <tr>
              <th data-field="id_kredit" rowspan="2">Id Kredit</th>
              <th data-field="id_product" rowspan="2">Product</th>
              <th data-field="uang_muka" rowspan="2">Uang Muka</th>
              <th data-field="angsuran" colspan="3">Angsuran</th>
          </tr>
            <tr>
                <th>11x</th>
                <th>25x</th>
                <th>35x</th>
            </tr>
        </thead>

        <tbody>
            <?php
                require_once "connect.php";
                require_once "rupiah.php";
    
                $sql = "SELECT * FROM kredit order by id_kredit";
                $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>".@$row['id_kredit']."</td>  
                    <td>".@$row['id_product']."</td>
                    <td>".format_rupiah(@$row['uang_muka'])."</td>
                    <td>".format_rupiah(@$row['11x'])."</td>
                    <td>".format_rupiah(@$row['23x'])."</td>
                    <td>".format_rupiah(@$row['35x'])."</td>
                    </tr>";
                    }
                } else {
                    echo "0 results";
            } ?>
          
        </tbody>
                    </table>
                </div>
            </div>
        </form>
    
</div>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>


    <script>$('.modal-trigger').leanModal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      in_duration: 300, // Transition in duration
      out_duration: 200, // Transition out duration
    }
  );
          </script>
        <script>$(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });</script>
        <script>$(".button-collapse").sideNav();</script>
</body>
</html>
