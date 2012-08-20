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
,t.section
,t.floor_numb
,t.quant_rooms_in_flat
,t.total_flat_area
,t.live_area
,t.kitchen_area
,t.balcony_area
,t.price_whoole_payment
,t.price_lease_payment
,t.flat_descripton
,t.saler_name
,t.saler_contact
,t.link_to_source_inf
,t.collect_information_dt
,t.report_on_phase_dt
,t.rrb_housing_id
FROM rrb_flats t 
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
        , $section
        , $floor_numb
        , $quant_rooms_in_flat
        , $total_flat_area
        , $live_area
        , $kitchen_area
        , $balcony_area
        , $price_whoole_payment
        , $price_lease_payment
        , $flat_descripton
        , $saler_name
        , $saler_contact
        , $link_to_source_inf
        , $collect_information_dt
        , $report_on_phase_dt
        , $rrb_housing_id
);
$hndb_arr = array();
while (mysqli_stmt_fetch($stmt)) {
    $i++;
    $hndb_arr[] = array(
        'id' => $id
        , 'last_user_id' => $last_user_id
        , 'date_rec' => $date_rec
        , 'section' => $section
        , 'floor_numb' => $floor_numb
        , 'quant_rooms_in_flat' => $quant_rooms_in_flat
        , 'total_flat_area' => $total_flat_area
        , 'live_area' => $live_area
        , 'kitchen_area' => $kitchen_area
        , 'balcony_area' => $balcony_area
        , 'price_whoole_payment' => $price_whoole_payment
        , 'price_lease_payment' => $price_lease_payment
        , 'flat_descripton' => $flat_descripton
        , 'saler_name' => $saler_name
        , 'saler_contact' => $saler_contact
        , 'link_to_source_inf' => $link_to_source_inf
        , 'collect_information_dt' => $collect_information_dt
        , 'report_on_phase_dt' => $report_on_phase_dt
        , 'rrb_housing_id' => $rrb_housing_id
    );
}
mysqli_stmt_close($stmt);
echo $_GET["callback"] . '({"results":' . json_encode($hndb_arr) .
 '})';
?>
