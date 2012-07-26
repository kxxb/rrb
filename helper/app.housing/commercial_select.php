<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../../SYS/dbconn.php');
$query = "
SELECT t.id
,t.last_user_id
,t.date_rec
,t.comercial_available
,t.commercial_area
,t.rrb_housing_id
FROM rrb.rrb_housing_commercial t 
where rrb_housing_id = ?";
$h_id = $_GET["h_id"];
$connection = conn();
$connection->query("SET NAMES 'utf8'");
$stmt = $connection->prepare($query);
$stmt->bind_param("s", $h_id);
/* execute query */
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
mysqli_stmt_bind_result($stmt, $id
        , $last_user_id
        , $date_rec
        , $comercial_available
        , $commercial_area
        , $rrb_housing_id
);
$hndb_arr = array();
while (mysqli_stmt_fetch($stmt)) {
    $i++;
    $hndb_arr[] = array(
        'id' => $id
        , 'last_user_id' => $last_user_id
        , 'date_rec' => $date_rec
        , 'comercial_available' => $comercial_available
        , 'commercial_area' => $commercial_area
        , 'rrb_housing_id' => $rrb_housing_id
    );
}
mysqli_stmt_close($stmt);
echo $_GET["callback"] . '({"results":' . json_encode($hndb_arr) .
 '})';
?>
