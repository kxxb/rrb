<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../../SYS/dbconn.php');

$query_n ="
SELECT t.id
,t.last_user_id
,t.date_rec
,t.type_of_infrastructure_id
,t.rrb_housing_id
,tob.hndb_value as type_of_infrastructure_name
FROM rrb_housing_infrastructure t left join 
	        rrb_s_handbooks tob 		on
            tob.id = t.type_of_infrastructure_id
        and tob.rrb_handbooks_id  = 16
where t.rrb_housing_id = ?    
";

$h_id = $_GET["h_id"];
$connection = conn();
$connection->query("SET NAMES 'utf8'");
$stmt = $connection->prepare($query_n);
$stmt->bind_param("s", $h_id);
/* execute query */
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
mysqli_stmt_bind_result($stmt, $id
        , $last_user_id
        , $date_rec
        , $type_of_infrastructure_id
        , $rrb_housing_id
        , $type_of_infrastructure_name
);
$hndb_arr = array();
while (mysqli_stmt_fetch($stmt)) {
    $i++;
    $hndb_arr[] = array(
        'id' => $id
        , 'last_user_id' => $last_user_id
        , 'date_rec' => $date_rec
        , 'type_of_infrastructure_id' => $type_of_infrastructure_id
        , 'rrb_housing_id' => $rrb_housing_id
        , 'type_of_infrastructure_name' =>  $type_of_infrastructure_name
    );
}
mysqli_stmt_close($stmt);
echo $_GET["callback"] . '({"results":' . json_encode($hndb_arr) .
 '})';
?>
