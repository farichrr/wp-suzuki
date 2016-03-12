 <?php
    require_once "connect.php";
    require_once "functionproduct.php";
    $id_kredit = IdKredit(autoID());

        $id_product = $_POST['id_product'];
        $uang_muka = $_POST['uang_muka'];
        $tahun1 = $_POST['tahun1'];
        $tahun2 = $_POST['tahun2'];
        $tahun3 = $_POST['tahun2'];
        $query = "INSERT INTO kredit VALUES ('$id_kredit','$id_product','$uang_muka','$tahun1','$tahun2','$tahun3')";
    if (mysqli_query($db, $query)) {
        echo "<script>
        alert('Berhasil ditambah');
        window.location.href='menukredit.php';
        </script>";
        exit();
    } else {
        echo "<script>
        alert('Product sudah ada');
        window.location.href='index.php';
        </script>";
    }

mysqli_close($db);

?>