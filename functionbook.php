<?php
require"connect.php";
function AutoID()
{
    global $db;
    $querycount="SELECT count(id_book) as LastID FROM booking";
    $result=$db->query($querycount) or die($db->error());
    $row=$result->fetch_assoc();
    return $row['LastID'];
}

function IdKredit($num) {
    $num=$num+1; switch (strlen($num))
    {
        case 1 : $NoTrans = "B0000".$num; break;
        case 2 : $NoTrans = "B000".$num; break;
        case 3 : $NoTrans = "B00".$num; break;
        case 4 : $NoTrans = "B0".$num; break;
        default: $NoTrans = $num;
    }
    return $NoTrans;
}
echo IdKredit(autoID());
?>