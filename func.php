<?php
require_once "connect.php";
function insDetail($id_book, $id_servis, $id_sparepart)
{
    global $db;
    $dtl = "INSERT INTO detail_book VALUES ('" . $id_book . "','" . $id_servis . "','" . $id_sparepart . "')";
    $db->query($dtl) or die("<script>
alert('Terjadi kesalahan ');
window.location.href='home.php';
</script>");
}
function updPesanan($total, $id_book)
{
    global $db;
    $upd = "UPDATE 'booking' SET 'total'='" . $total . "' WHERE `id_book` LIKE '%" . $id_book . "%'";
    $db->query($upd) or die("<script>
alert('Terjadi kesalahan');
window.location.href='home.php';
</script>");
}

?>