<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//require_once('../../SYS/sys_constants.php');
require_once('../../SYS/dbconn.php');
$query = "
SELECT t.id
,t.complex_name
,t.last_user_id
,t.date_rec
,(select count(*) from rrb_apartment_comlex) as c
FROM rrb_apartment_comlex t limit ?,?";
$h_id = $_GET["h_id"];
$h_limit = $_GET["limit"];
$h_start = $_GET["start"];
$connection = conn();
$connection->query("SET NAMES 'utf8'");
$stmt = $connection->prepare($query);
$stmt->bind_param("ii",$h_start,$h_limit);
//$stmt->bind_param("s", $h_id);
/* execute query */
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
mysqli_stmt_bind_result($stmt, $id
        , $complex_name
        , $last_user_id
        , $date_rec
        ,$c
);
$hndb_arr = array();
while (mysqli_stmt_fetch($stmt)) {
    $i++;
    $hndb_arr[] = array(
        'id' => $id
        , 'complex_name' => $complex_name
        , 'last_user_id' => $last_user_id
        , 'date_rec' => $date_rec
    );
}
mysqli_stmt_close($stmt);
echo $_GET["callback"].'({totalcount:"'.$c.'","results":'.json_encode($hndb_arr).
'})'; 
?>
