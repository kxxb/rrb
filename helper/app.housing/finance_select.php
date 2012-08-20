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
,t.contract_type_id
,t.leasing_id
,t.leasing_conditions
,t.ipoteka_id
,t.ipoteka_conditions
,t.min_price
,t.avg_unit_price
,t.max_price
,t.avg_unit_price_1r
,t.avg_unit_price_2r
,t.avg_unit_price_3r
,t.avg_unit_price_4r
,t.avg_unit_price_5r
,t.avg_unit_price_6r
,t.avg_unit_price_nr
,t.total_flats_sale
,t.total_1r_flats_sale
,t.total_2r_flats_sale
,t.total_3r_flats_sale
,t.total_4r_flats_sale
,t.total_5r_flats_sale
,t.total_6r_flats_sale
,t.total_nr_flats_sale
,t.koefficent
,t.rates_sales_quarterly
,t.rates_sales_from_start
,t.avg_area_of_flat
,t.tot_area_flat_in_offer
,t.total_whole_price_in_offer
,t.tot_area_1r_flat_offer
,t.total_1r_whole_price_offer
,t.tot_area_2r_flat_offer
,t.total_2r_whole_price_offer
,t.tot_area_3r_flat_offer
,t.total_3r_whole_price_offer
,t.tot_area_nr_flat_offer
,t.total_nr_whole_price_offer
,t.quotas_id
,t.update_category_id
,t.info_source
,t.collect_information_dt
,t.report_on_phase_dt
,t.impl_status_id
,t.input_in_db_dt
,t.comment_txt
,t.rrb_housing_id
FROM rrb_housing_finance t 
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
        , $contract_type_id
        , $leasing_id
        , $leasing_conditions
        , $ipoteka_id
        , $ipoteka_conditions
        , $min_price
        , $avg_unit_price
        , $max_price
        , $avg_unit_price_1r
        , $avg_unit_price_2r
        , $avg_unit_price_3r
        , $avg_unit_price_4r
        , $avg_unit_price_5r
        , $avg_unit_price_6r
        , $avg_unit_price_nr
        , $total_flats_sale
        , $total_1r_flats_sale
        , $total_2r_flats_sale
        , $total_3r_flats_sale
        , $total_4r_flats_sale
        , $total_5r_flats_sale
        , $total_6r_flats_sale
        , $total_nr_flats_sale
        , $koefficent
        , $rates_sales_quarterly
        , $rates_sales_from_start
        , $avg_area_of_flat
        , $tot_area_flat_in_offer
        , $total_whole_price_in_offer
        , $tot_area_1r_flat_offer
        , $total_1r_whole_price_offer
        , $tot_area_2r_flat_offer
        , $total_2r_whole_price_offer
        , $tot_area_3r_flat_offer
        , $total_3r_whole_price_offer
        , $tot_area_nr_flat_offer
        , $total_nr_whole_price_offer
        , $quotas_id
        , $update_category_id
        , $info_source
        , $collect_information_dt
        , $report_on_phase_dt
        , $impl_status_id
        , $input_in_db_dt
        , $comment_txt
        , $rrb_housing_id
);
$hndb_arr = array();
while (mysqli_stmt_fetch($stmt)) {
    $i++;
    $hndb_arr[] = array(
        'id' => $id
        , 'last_user_id' => $last_user_id
        , 'date_rec' => $date_rec
        , 'contract_type_id' => $contract_type_id
        , 'leasing_id' => $leasing_id
        , 'leasing_conditions' => $leasing_conditions
        , 'ipoteka_id' => $ipoteka_id
        , 'ipoteka_conditions' => $ipoteka_conditions
        , 'min_price' => $min_price
        , 'avg_unit_price' => $avg_unit_price
        , 'max_price' => $max_price
        , 'avg_unit_price_1r' => $avg_unit_price_1r
        , 'avg_unit_price_2r' => $avg_unit_price_2r
        , 'avg_unit_price_3r' => $avg_unit_price_3r
        , 'avg_unit_price_4r' => $avg_unit_price_4r
        , 'avg_unit_price_5r' => $avg_unit_price_5r
        , 'avg_unit_price_6r' => $avg_unit_price_6r
        , 'avg_unit_price_nr' => $avg_unit_price_nr
        , 'total_flats_sale' => $total_flats_sale
        , 'total_1r_flats_sale' => $total_1r_flats_sale
        , 'total_2r_flats_sale' => $total_2r_flats_sale
        , 'total_3r_flats_sale' => $total_3r_flats_sale
        , 'total_4r_flats_sale' => $total_4r_flats_sale
        , 'total_5r_flats_sale' => $total_5r_flats_sale
        , 'total_6r_flats_sale' => $total_6r_flats_sale
        , 'total_nr_flats_sale' => $total_nr_flats_sale
        , 'koefficent' => $koefficent
        , 'rates_sales_quarterly' => $rates_sales_quarterly
        , 'rates_sales_from_start' => $rates_sales_from_start
        , 'avg_area_of_flat' => $avg_area_of_flat
        , 'tot_area_flat_in_offer' => $tot_area_flat_in_offer
        , 'total_whole_price_in_offer' => $total_whole_price_in_offer
        , 'tot_area_1r_flat_offer' => $tot_area_1r_flat_offer
        , 'total_1r_whole_price_offer' => $total_1r_whole_price_offer
        , 'tot_area_2r_flat_offer' => $tot_area_2r_flat_offer
        , 'total_2r_whole_price_offer' => $total_2r_whole_price_offer
        , 'tot_area_3r_flat_offer' => $tot_area_3r_flat_offer
        , 'total_3r_whole_price_offer' => $total_3r_whole_price_offer
        , 'tot_area_nr_flat_offer' => $tot_area_nr_flat_offer
        , 'total_nr_whole_price_offer' => $total_nr_whole_price_offer
        , 'quotas_id' => $quotas_id
        , 'update_category_id' => $update_category_id
        , 'info_source' => $info_source
        , 'collect_information_dt' => $collect_information_dt
        , 'report_on_phase_dt' => $report_on_phase_dt
        , 'impl_status_id' => $impl_status_id
        , 'input_in_db_dt' => $input_in_db_dt
        , 'comment_txt' => $comment_txt
        , 'rrb_housing_id' => $rrb_housing_id
    );
}
mysqli_stmt_close($stmt);
echo $_GET["callback"] . '({"results":' . json_encode($hndb_arr) .
 '})';
?>
