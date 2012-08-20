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
,t.investor_id
,t.investor_contact
,t.investor_site
,t.general_contractor_id
,t.customer_of_object_id
,t.architect_id
,t.building_permits_date
,t.building_permits_number
,t.date_sale_start
,t.date_start_build
,t.build_stage_id
,t.build_status_id
,t.schedul_dt_commiss
,t.fact_dt_commiss
,t.End_of_implementation
,t.Commissioning
,t.Postponement_entry
,t.commissioning_dt
,t.commissioning_num
,t.rrb_housing_id
FROM rrb_investor_builder t 
where t.rrb_housing_id = ?";
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
        , $investor_id
        , $investor_contact
        , $investor_site
        , $general_contractor_id
        , $customer_of_object_id
        , $architect_id
        , $building_permits_date
        , $building_permits_number
        , $date_sale_start
        , $date_start_build
        , $build_stage_id
        , $build_status_id
        , $schedul_dt_commiss
        , $fact_dt_commiss
        , $End_of_implementation
        , $Commissioning
        , $Postponement_entry
        , $commissioning_dt
        , $commissioning_num
        , $rrb_housing_id
);
$hndb_arr = array();
while (mysqli_stmt_fetch($stmt)) {
    $i++;
    $hndb_arr[] = array(
        'id' => $id
        , 'last_user_id' => $last_user_id
        , 'date_rec' => $date_rec
        , 'investor_id' => $investor_id
        , 'investor_contact' => $investor_contact
        , 'investor_site' => $investor_site
        , 'general_contractor_id' => $general_contractor_id
        , 'customer_of_object_id' => $customer_of_object_id
        , 'architect_id' => $architect_id
        , 'building_permits_date' => $building_permits_date
        , 'building_permits_number' => $building_permits_number
        , 'date_sale_start' => $date_sale_start
        , 'date_start_build' => $date_start_build
        , 'build_stage_id' => $build_stage_id
        , 'build_status_id' => $build_status_id
        , 'schedul_dt_commiss' => $schedul_dt_commiss
        , 'fact_dt_commiss' => $fact_dt_commiss
        , 'End_of_implementation' => $End_of_implementation
        , 'Commissioning' => $Commissioning
        , 'Postponement_entry' => $Postponement_entry
        , 'commissioning_dt' => $commissioning_dt
        , 'commissioning_num' => $commissioning_num
        , 'rrb_housing_id' => $rrb_housing_id
    );
}
mysqli_stmt_close($stmt);
echo $_GET["callback"] . '({"results":' . json_encode($hndb_arr) .
 '})';
?>
