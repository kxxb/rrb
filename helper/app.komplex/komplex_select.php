<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('../../SYS/dbconn.php');
$v_sql =" select  a.id,          ".
        "         a.complex_name, ".
        "         h.name,                      ".
        "         h.corpse_number              ".
        " from rrb_apartment_comlex a, rrb_housing h ".
        " where a.id =  h.apartment_coplex_id".
        " order by a.id ";


$h_id = $_GET["h_id"];
$connection = conn();
$connection->query("SET NAMES 'utf8'");
$stmt = $connection->prepare($v_sql);
//$stmt->bind_param("s", $h_id);
/* execute query */
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
mysqli_stmt_bind_result($stmt, $id, $complex_name, $name, $corpse_number);

$hndb_arr = array();
while (mysqli_stmt_fetch($stmt)) {
    $i++;
    $hndb_arr[] = array(
        'id' => $id,
        'complex_name'=>$complex_name, 
        'name'=>$name, 
        'corpse_number'=>$corpse_number
        );
}
mysqli_stmt_close($stmt);
echo $_GET["callback"] . '({"results":' . json_encode($hndb_arr) .
 '})';



?>
