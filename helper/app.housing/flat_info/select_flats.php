<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../../../SYS/dbconn.php');

$query = "
SELECT t.id
,t.last_user_id
,t.date_rec
,t.total_area_all_flats
,t.total_area_studio
,t.total_area_1rooms
,t.total_area_2rooms
,t.total_area_3rooms
,t.total_area_4rooms
,t.total_area_5rooms
,t.total_area_6rooms
,t.avg_area_studio
,t.min_area_studio
,t.max_area_studio
,t.min_area_st_wo_unheat
,t.max_area_st_wo_unheat
,t.avg_area_1r
,t.min_area_1r
,t.max_area_1r
,t.min_area_1r_wo_unheat
,t.max_area_1r_wo_unheat
,t.avg_area_2r
,t.min_area_2r
,t.max_area_2r
,t.min_area_2r_wo_unheat
,t.max_area_2r_wo_unheat
,t.avg_area_3r
,t.min_area_3r
,t.max_area_3r
,t.min_area_3r_wo_unheat
,t.max_area_3r_wo_unheat
,t.avg_area_4r
,t.min_area_4r
,t.max_area_4r
,t.min_area_4r_wo_unheat
,t.max_area_4r_wo_unheat
,t.avg_area_5r
,t.min_area_5r
,t.max_area_5r
,t.min_area_5r_wo_unheat
,t.max_area_5r_wo_unheat
,t.avg_area_6r
,t.min_area_6r
,t.max_area_6r
,t.min_area_6r_wo_unheat
,t.max_area_6r_wo_unheat
,t.avg_area_n_room
,t.min_area_n_room
,t.max_area_n_room
,t.min_area_n_wo_unheat
,t.max_area_n_wo_unheat
,t.total_area_n_rooms
,t.total_count_all_flats
,t.total_count_studio
,t.total_count_1_rooms
,t.total_count_2_rooms
,t.total_count_3_rooms
,t.total_count_4_rooms
,t.total_count_5_rooms
,t.total_count_6_rooms
,t.total_count_n_rooms
,t.rrb_housing_id
FROM rrb_housing_flat_info t 
where t.rrb_housing_id = ?";
$h_id = $_GET["h_id"];
//$h_id = 1;
$connection = conn();
$connection->query("SET NAMES 'utf8'");
$stmt = $connection->prepare($query);
$stmt->bind_param("i", $h_id);
/* execute query */
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
mysqli_stmt_bind_result($stmt, $id
        , $last_user_id
        , $date_rec
        , $total_area_all_flats
        , $total_area_studio
        , $total_area_1rooms
        , $total_area_2rooms
        , $total_area_3rooms
        , $total_area_4rooms
        , $total_area_5rooms
        , $total_area_6rooms
        , $avg_area_studio
        , $min_area_studio
        , $max_area_studio
        , $min_area_st_wo_unheat
        , $max_area_st_wo_unheat
        , $avg_area_1r
        , $min_area_1r
        , $max_area_1r
        , $min_area_1r_wo_unheat
        , $max_area_1r_wo_unheat
        , $avg_area_2r
        , $min_area_2r
        , $max_area_2r
        , $min_area_2r_wo_unheat
        , $max_area_2r_wo_unheat
        , $avg_area_3r
        , $min_area_3r
        , $max_area_3r
        , $min_area_3r_wo_unheat
        , $max_area_3r_wo_unheat
        , $avg_area_4r
        , $min_area_4r
        , $max_area_4r
        , $min_area_4r_wo_unheat
        , $max_area_4r_wo_unheat
        , $avg_area_5r
        , $min_area_5r
        , $max_area_5r
        , $min_area_5r_wo_unheat
        , $max_area_5r_wo_unheat
        , $avg_area_6r
        , $min_area_6r
        , $max_area_6r
        , $min_area_6r_wo_unheat
        , $max_area_6r_wo_unheat
        , $avg_area_n_room
        , $min_area_n_room
        , $max_area_n_room
        , $min_area_n_wo_unheat
        , $max_area_n_wo_unheat
        , $total_area_n_rooms
        , $total_count_all_flats
        , $total_count_studio
        , $total_count_1_rooms
        , $total_count_2_rooms
        , $total_count_3_rooms
        , $total_count_4_rooms
        , $total_count_5_rooms
        , $total_count_6_rooms
        , $total_count_n_rooms
        , $rrb_housing_id
);
$hndb_arr = array();
while (mysqli_stmt_fetch($stmt)) {
    $i++;
    $hndb_arr[] = array(
        'id' => $id
        , 'last_user_id' => $last_user_id
        , 'date_rec' => $date_rec
        , 'total_area_all_flats' => $total_area_all_flats
        , 'total_area_studio' => $total_area_studio
        , 'total_area_1rooms' => $total_area_1rooms
        , 'total_area_2rooms' => $total_area_2rooms
        , 'total_area_3rooms' => $total_area_3rooms
        , 'total_area_4rooms' => $total_area_4rooms
        , 'total_area_5rooms' => $total_area_5rooms
        , 'total_area_6rooms' => $total_area_6rooms
        , 'avg_area_studio' => $avg_area_studio
        , 'min_area_studio' => $min_area_studio
        , 'max_area_studio' => $max_area_studio
        , 'min_area_st_wo_unheat' => $min_area_st_wo_unheat
        , 'max_area_st_wo_unheat' => $max_area_st_wo_unheat
        , 'avg_area_1r' => $avg_area_1r
        , 'min_area_1r' => $min_area_1r
        , 'max_area_1r' => $max_area_1r
        , 'min_area_1r_wo_unheat' => $min_area_1r_wo_unheat
        , 'max_area_1r_wo_unheat' => $max_area_1r_wo_unheat
        , 'avg_area_2r' => $avg_area_2r
        , 'min_area_2r' => $min_area_2r
        , 'max_area_2r' => $max_area_2r
        , 'min_area_2r_wo_unheat' => $min_area_2r_wo_unheat
        , 'max_area_2r_wo_unheat' => $max_area_2r_wo_unheat
        , 'avg_area_3r' => $avg_area_3r
        , 'min_area_3r' => $min_area_3r
        , 'max_area_3r' => $max_area_3r
        , 'min_area_3r_wo_unheat' => $min_area_3r_wo_unheat
        , 'max_area_3r_wo_unheat' => $max_area_3r_wo_unheat
        , 'avg_area_4r' => $avg_area_4r
        , 'min_area_4r' => $min_area_4r
        , 'max_area_4r' => $max_area_4r
        , 'min_area_4r_wo_unheat' => $min_area_4r_wo_unheat
        , 'max_area_4r_wo_unheat' => $max_area_4r_wo_unheat
        , 'avg_area_5r' => $avg_area_5r
        , 'min_area_5r' => $min_area_5r
        , 'max_area_5r' => $max_area_5r
        , 'min_area_5r_wo_unheat' => $min_area_5r_wo_unheat
        , 'max_area_5r_wo_unheat' => $max_area_5r_wo_unheat
        , 'avg_area_6r' => $avg_area_6r
        , 'min_area_6r' => $min_area_6r
        , 'max_area_6r' => $max_area_6r
        , 'min_area_6r_wo_unheat' => $min_area_6r_wo_unheat
        , 'max_area_6r_wo_unheat' => $max_area_6r_wo_unheat
        , 'avg_area_n_room' => $avg_area_n_room
        , 'min_area_n_room' => $min_area_n_room
        , 'max_area_n_room' => $max_area_n_room
        , 'min_area_n_wo_unheat' => $min_area_n_wo_unheat
        , 'max_area_n_wo_unheat' => $max_area_n_wo_unheat
        , 'total_area_n_rooms' => $total_area_n_rooms
        , 'total_count_all_flats' => $total_count_all_flats
        , 'total_count_studio' => $total_count_studio
        , 'total_count_1_rooms' => $total_count_1_rooms
        , 'total_count_2_rooms' => $total_count_2_rooms
        , 'total_count_3_rooms' => $total_count_3_rooms
        , 'total_count_4_rooms' => $total_count_4_rooms
        , 'total_count_5_rooms' => $total_count_5_rooms
        , 'total_count_6_rooms' => $total_count_6_rooms
        , 'total_count_n_rooms' => $total_count_n_rooms
        , 'rrb_housing_id' => $rrb_housing_id
    );
}
mysqli_stmt_close($stmt);
echo $_GET["callback"] . '({"results":' . json_encode($hndb_arr) .
 '})';
?>
