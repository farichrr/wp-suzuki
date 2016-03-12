<?php
require"connect.php";
function AutoID()
{
    global $db;
    $querycount="SELECT count(id_kredit) as LastID FROM kredit";
    $result=$db->query($querycount) or die($db->error());
    $row=$result->fetch_assoc();
    return $row['LastID'];
}

function IdKredit($num) {
    $num=$num+1; switch (strlen($num))
    {
        case 1 : $NoTrans = "K0000".$num; break;
        case 2 : $NoTrans = "K000".$num; break;
        case 3 : $NoTrans = "K00".$num; break;
        case 4 : $NoTrans = "K0".$num; break;
        default: $NoTrans = $num;
    }
    return $NoTrans;
}
echo IdKredit(autoID());
?>