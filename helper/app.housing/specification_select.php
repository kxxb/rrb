<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../../SYS/dbconn.php');
$query = "
SELECT t.id
,t.number_of_sections
,t.type_of_building
,t.total_land_area
,t.total_floor_area
,t.land_area_build
,t.bearing_material_tech
,t.wall_material
,t.proj_doc_type
,t.serial_number
,t.min_floors
,t.max_floors
,t.floors_type_id
,t.consumer_class_id
,t.economy_class_house_id
,t.ceiling_height
,t.finishing_flats_id
,t.finishing_level_id
,t.common_area_finishing_id
,t.glazed_loggia_id
,t.parking_type_id
,t.num_of_parking_place
,t.num_of_Elevator
,t.estimated_cost_construction
,t.territory_fencing_id
,t.security_id
,t.last_user_id
,t.date_rec
,t.rrb_housing_id
FROM rrb_housing_specification t
where t.rrb_housing_id = ?";

$query_ext ="
SELECT 
 t.id
,t.number_of_sections
,t.type_of_building
,t.total_land_area
,t.total_floor_area
,t.land_area_build
,t.bearing_material_tech
,t.wall_material
,t.proj_doc_type
,t.serial_number
,t.min_floors
,t.max_floors
,t.floors_type_id
,t.consumer_class_id
,t.economy_class_house_id
,t.ceiling_height
,t.finishing_flats_id
,t.finishing_level_id
,t.common_area_finishing_id
,t.glazed_loggia_id
,t.parking_type_id
,t.num_of_parking_place
,t.num_of_Elevator
,t.estimated_cost_construction
,t.territory_fencing_id
,t.security_id
,t.last_user_id
,t.date_rec
,t.rrb_housing_id
,tob.hndb_value as type_of_building_name
,bmt.hndb_value as bearing_material_tech_name
,wm.hndb_value as wall_material_name
,pdt.hndb_value as proj_doc_type_name
,fti.hndb_value as floors_type_id_name
,cci.hndb_value as consumer_class_id_name
,echi.hndb_value as economy_class_house_id_name
,ffi.hndb_value as finishing_flats_id_name
,fli.hndb_value as finishing_level_id_name
,cafi.hndb_value as common_area_finishing_id_name
,gli.hndb_value as glazed_loggia_id_name
,pti.hndb_value as parking_type_id_name
,tfi.hndb_value as territory_fencing_id_name
,si.hndb_value as security_id_name

FROM rrb_housing_specification t left join 
	        rrb_s_handbooks tob 		on

            tob.id = t.type_of_building
        and tob.rrb_handbooks_id  = 15
  left join rrb_s_handbooks  bmt on
            bmt.id = t.bearing_material_tech
        and bmt.rrb_handbooks_id  = 13
left join rrb_s_handbooks  wm on
            wm.id = t.wall_material
        and wm.rrb_handbooks_id  = 3
left join rrb_s_handbooks  pdt on
            pdt.id = t.proj_doc_type
        and pdt.rrb_handbooks_id  = 19
left join rrb_s_handbooks  fti on
            fti.id = t.floors_type_id
        and fti.rrb_handbooks_id  = 21
left join rrb_s_handbooks  cci on
            cci.id = t.consumer_class_id
        and cci.rrb_handbooks_id  = 8
left join rrb_s_handbooks  echi on
            echi.id = t.economy_class_house_id
        and echi.rrb_handbooks_id  = 24

left join rrb_s_handbooks  ffi on
            ffi.id = t.finishing_flats_id
        and ffi.rrb_handbooks_id  = 17
left join rrb_s_handbooks  fli on
            fli.id = t.finishing_level_id
        and fli.rrb_handbooks_id  = 22

left join rrb_s_handbooks  cafi on
            cafi.id = t.common_area_finishing_id
        and cafi.rrb_handbooks_id  = 23
left join rrb_s_handbooks  gli on
            gli.id = t.glazed_loggia_id
        and gli.rrb_handbooks_id  = 6
left join rrb_s_handbooks  pti on
            pti.id = t.parking_type_id
        and pti.rrb_handbooks_id  = 18
left join rrb_s_handbooks  tfi on
            tfi.id = t.territory_fencing_id
        and tfi.rrb_handbooks_id  = 5
left join rrb_s_handbooks  si on
            si.id = t.security_id
        and si.rrb_handbooks_id  = 7
where t.rrb_housing_id = ?";

$h_id = $_GET["h_id"];
$connection = conn();
$connection->query("SET NAMES 'utf8'");
$stmt = $connection->prepare($query_ext);
$stmt->bind_param("s", $h_id);
/* execute query */
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
mysqli_stmt_bind_result($stmt, $id
        , $number_of_sections
        , $type_of_building
        , $total_land_area
        , $total_floor_area
        , $land_area_build
        , $bearing_material_tech
        , $wall_material
        , $proj_doc_type
        , $serial_number
        , $min_floors
        , $max_floors
        , $floors_type_id
        , $consumer_class_id
        , $economy_class_house_id
        , $ceiling_height
        , $finishing_flats_id
        , $finishing_level_id
        , $common_area_finishing_id
        , $glazed_loggia_id
        , $parking_type_id
        , $num_of_parking_place
        , $num_of_Elevator
        , $estimated_cost_construction
        , $territory_fencing_id
        , $security_id
        , $last_user_id
        , $date_rec
        , $rrb_housing_id
        
        ,	$type_of_building_name
,	$bearing_material_tech_name
,	$wall_material_name
,	$proj_doc_type_name
,	$floors_type_id_name
,	$consumer_class_id_name
,	$economy_class_house_id_name
,	$finishing_flats_id_name
,	$finishing_level_id_name
,	$common_area_finishing_id_name
,	$glazed_loggia_id_name
,	$parking_type_id_name
,	$territory_fencing_id_name
,	$security_id_name

);
$hndb_arr = array();
while (mysqli_stmt_fetch($stmt)) {
    $i++;
    $hndb_arr[] = array(
        'id' => $id
        , 'number_of_sections' => $number_of_sections
        , 'type_of_building' => $type_of_building
        , 'total_land_area' => $total_land_area
        , 'total_floor_area' => $total_floor_area
        , 'land_area_build' => $land_area_build
        , 'bearing_material_tech' => $bearing_material_tech
        , 'wall_material' => $wall_material
        , 'proj_doc_type' => $proj_doc_type
        , 'serial_number' => $serial_number
        , 'min_floors' => $min_floors
        , 'max_floors' => $max_floors
        , 'floors_type_id' => $floors_type_id
        , 'consumer_class_id' => $consumer_class_id
        , 'economy_class_house_id' => $economy_class_house_id
        , 'ceiling_height' => $ceiling_height
        , 'finishing_flats_id' => $finishing_flats_id
        , 'finishing_level_id' => $finishing_level_id
        , 'common_area_finishing_id' => $common_area_finishing_id
        , 'glazed_loggia_id' => $glazed_loggia_id
        , 'parking_type_id' => $parking_type_id
        , 'num_of_parking_place' => $num_of_parking_place
        , 'num_of_Elevator' => $num_of_Elevator
        , 'estimated_cost_construction' => $estimated_cost_construction
        , 'territory_fencing_id' => $territory_fencing_id
        , 'security_id' => $security_id
        , 'last_user_id' => $last_user_id
        , 'date_rec' => $date_rec
        , 'rrb_housing_id' => $rrb_housing_id
        
        ,	'type_of_building_name'	=>	$type_of_building_name
        ,	'bearing_material_tech_name'	=>	$bearing_material_tech_name
        ,	'wall_material_name'	=>	$wall_material_name
        ,	'proj_doc_type_name'	=>	$proj_doc_type_name
        ,	'floors_type_id_name'	=>	$floors_type_id_name
        ,	'consumer_class_id_name'	=>	$consumer_class_id_name
        ,	'economy_class_house_id_name'	=>	$economy_class_house_id_name
        ,	'finishing_flats_id_name'	=>	$finishing_flats_id_name
        ,	'finishing_level_id_name'	=>	$finishing_level_id_name
        ,	'common_area_finishing_id_name'	=>	$common_area_finishing_id_name
        ,	'glazed_loggia_id_name'	=>	$glazed_loggia_id_name
        ,	'parking_type_id_name'	=>	$parking_type_id_name
        ,	'territory_fencing_id_name'	=>	$territory_fencing_id_name
        ,	'security_id_name'	=>	$security_id_name


    );
}
mysqli_stmt_close($stmt);
echo $_GET["callback"] . '({"results":' . json_encode($hndb_arr) .
 '})';
?>
