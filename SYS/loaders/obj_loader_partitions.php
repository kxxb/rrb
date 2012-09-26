<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../../helper/app.housing/UID_Package.php');
 require_once('../../helper/handbooks/hndb_utilits.php');
require_once('../dbconn.php');

function load_rrb_apartment_comlex($p_connect){
    $v_result ="";
     $bad_message="";
    $i=0;
    $u=0;
    $o_out="";
    $query = "   SELECT
                     id ,
                     date_rec ,
                     batch_number ,
                     OBJECTID ,
                     case when komplex = 'is null' then ADDRESS else komplex end 
                   FROM  rrb_temporary_load;";
    
    
    
     //$connection = conn();
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                
                 $v_id ,
                 $v_date_rec ,
                 $v_batch_number ,
                 $v_OBJECTID ,
                 $v_komplex        
                );
          
        while (mysqli_stmt_fetch($stmt)) {
            
            //$p_connect = conn();
            $p_id = null;
            $p_last_user_id = 1;
            $p_date_rec = date("Y-m-d H:i:s");
            $p_mode = "UI";
            $k = get_appartment_id($p_connect, $v_komplex);
            
              $v_result =  uid_rrb_apartment_comlex($p_connect,
                    $k, $v_komplex, $p_last_user_id, $p_date_rec, $p_mode);
              
               if ($v_result == "{success:true,errors:{reason:'Запись сохранена!'}}"){
                  ++$i;
              } elseif ($v_result == "{success:true,errors:{reason:'Запись изменена!'}}") {
                  ++$u;
              } else {
                 $bad_message .=  $v_result;
              }
        }
         mysqli_stmt_close($stmt);
       
        $o_out = "load_rrb_apartment_comlex - inserted $i | updated $u  | $bad_message <br>";
        return $o_out;  
                        
    
}


/**/

function load_rrb_housing_comlex($p_connect){
    $v_result ="";
    $bad_message="";
    $i=0;
    $u=0;
    $o_out="";
    $query = "
        SELECT
                     id ,
                     date_rec ,
                     batch_number ,
                     OBJECTID ,
                      case when komplex = 'is null' then ADDRESS else komplex end, 
                     ADDRESS,
                     BUILDING
                   FROM  rrb_temporary_load;";
    
    
    
     //$connection = conn();
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                
                 $v_id ,
                 $v_date_rec ,
                 $v_batch_number ,
                 $v_OBJECTID ,
                 $v_komplex,
                 $v_ADDRESS,
                 $v_BUILDING 
                );
          
        while (mysqli_stmt_fetch($stmt)) {
            
            //$p_connect = conn();
     
            $p_last_user_id = 1;
            $p_date_rec = date("Y-m-d H:i:s");
            $p_mode = "UI";
            $k = get_appartment_id($p_connect, $v_komplex);
                    $p_name =   $v_ADDRESS;
            
              $v_result = uid_rrb_housing($p_connect, 
                         $v_OBJECTID, $p_name,   $v_BUILDING , $k, 
                         $p_last_user_id, $p_date_rec, $p_mode);
              
              if ($v_result == "{success:true,errors:{reason:'Запись сохранена!'}}"){
                  ++$i;
              } elseif ($v_result == "{success:true,errors:{reason:'Запись изменена!'}}") {
                  ++$u;
              } else {
                 $bad_message .=  $v_result;
              }
        }
         $o_out = "load_rrb_housing_comlex - inserted $i | updated $u  | $bad_message <br>";
        mysqli_stmt_close($stmt);
       
        return $o_out;  
                        
    
}
    


     


/*address*/
function load_rrb_housing_adress($p_connect){
    $v_result ="";
    $bad_message="";
    $i=0;
    $u=0;
    $o_out="";
    $query = "SELECT
                    id ,
                    date_rec ,
                    batch_number ,
                    OBJECTID ,
                    ADDRESS,
km_mkad,
direction,
SUBJECT,
KOD_OKATO,
Kod_cadastre,
SUBJECT_rayon,
REGION,
SETTLEMENT, 
CITY, 
VGT,
STREET_TYPE, 
STREET,
HOUSE_NUM, 
LETTER,
BUILDING, 
STRUCTURE, 
ESTATE, 
LONGITUDE, 
LATITUDE,
CADASTRE_NUM
                   FROM  rrb_temporary_load;";
    
    
    
     //$connection = conn();
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                
                 $v_id ,
                 $v_date_rec ,
                 $v_batch_number ,
                 $v_OBJECTID ,
                 $v_ADDRESS,
                 $v_km_mkad,
                 $v_direction,
                 $v_SUBJECT,
                 $v_KOD_OKATO,
                 $v_Kod_cadastre,
                 $v_SUBJECT_rayon,
                 $v_REGION,
                 $v_SETTLEMENT, 
                 $v_CITY, 
                 $v_VGT,
                 $v_STREET_TYPE, 
                 $v_STREET,
                 $v_HOUSE_NUM, 
                 $v_LETTER,
                 $v_BUILDING, 
                 $v_STRUCTURE, 
                 $v_ESTATE, 
                 $v_LONGITUDE, 
                 $v_LATITUDE,
                 $v_CADASTRE_NUM
                );
          
        while (mysqli_stmt_fetch($stmt)) {
            
            //$p_connect = conn();
            $p_id = 0;
            $p_last_user_id = 1;
            $p_date_rec = date("Y-m-d H:i:s");
            $p_mode = "UI";
            /*from handbooks*/
            $p_state_id = 1770;//get_hndb_key($p_connect, 925, $CONTRACT_TYPE);
            $p_dirrection_id = get_hndb_key($p_connect, 926, $v_direction);
            $p_subject_of_state_id = get_hndb_key($p_connect, 12, $v_SUBJECT);
            $p_street_type_id = get_hndb_key($p_connect, 20, $v_STREET_TYPE);
            
              $v_result = uid_rrb_housing_address($p_connect, 
                      $p_id, $v_OBJECTID, $p_state_id, 
                      $v_ADDRESS, $v_km_mkad, $p_dirrection_id, 
                      $p_subject_of_state_id, $v_KOD_OKATO, $v_Kod_cadastre, 
                      $v_SUBJECT_rayon, $v_REGION, $v_SETTLEMENT, $v_CITY, 
                      $v_VGT, $p_street_type_id, $v_STREET, $v_HOUSE_NUM, 
                      $v_LETTER, $v_BUILDING, $v_BUILDING, 
                      $v_ESTATE, $v_LONGITUDE, $v_LATITUDE, 
                      $v_CADASTRE_NUM, $p_last_user_id, $p_date_rec, $p_mode);
              
              if ($v_result == "{success:true,errors:{reason:'Запись сохранена!'}}"){
                  ++$i;
              } elseif ($v_result == "{success:true,errors:{reason:'Запись изменена!'}}") {
                  ++$u;
              } else {
                 $bad_message .=  $v_result;
              }
        }
         $o_out = "load_rrb_housing_adress - inserted $i | updated $u  | $bad_message <br>";
        mysqli_stmt_close($stmt);
       
        return $o_out;  
                        
    
}
           



function load_rrb_housing_specification($p_connect){
    $v_result ="";
    $bad_message="";
    $i=0;
    $u=0;
    $o_out="";
    $query = "
        SELECT
                     id ,
                     date_rec ,
                     batch_number ,
                     OBJECTID ,
SECTION_COUNT ,
TYPE_DEVELOP ,
AREA_DEV ,
AREA_ALL_OBJECT ,
AREA_LOT ,
TECHNOLOGY ,
MATERIAL_WALL ,
PROJECT_TYPE ,
PROJECT_NUMBER ,
FLOOR_QNT_MIN ,
FLOOR_QNT_MAX ,
FLOOR_TYPE ,
CLASS_TYPE ,
CLASS ,
HEIGHT_FLOOR ,
FINISHING_TYPE_FLAT ,
FINISHING_LEVEL_FLAT ,
FINISHING_LEVEL_INSIDE ,
GLAZING ,
PARKING_TYPE ,
PARKING_COUNT ,
LIFT ,
ESTIMATE ,
FENCE ,
SECURITY
                   FROM  rrb_temporary_load;";
    
    
    
     //$connection = conn();
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                
                 $v_id ,
                 $v_date_rec ,
                 $v_batch_number ,
                 $v_OBJECTID ,
                 $v_SECTION_COUNT ,
                 $v_TYPE_DEVELOP ,
                 $v_AREA_DEV ,
                 $v_AREA_ALL_OBJECT ,
                 $v_AREA_LOT ,
                 $v_TECHNOLOGY ,
                 $v_MATERIAL_WALL ,
                 $v_PROJECT_TYPE ,
                 $v_PROJECT_NUMBER ,
                 $v_FLOOR_QNT_MIN ,
                 $v_FLOOR_QNT_MAX ,
                 $v_FLOOR_TYPE ,
                 $v_CLASS_TYPE ,
                 $v_CLASS ,
                 $v_HEIGHT_FLOOR ,
                 $v_FINISHING_TYPE_FLAT ,
                 $v_FINISHING_LEVEL_FLAT ,
                 $v_FINISHING_LEVEL_INSIDE ,
                 $v_GLAZING ,
                 $v_PARKING_TYPE ,
                 $v_PARKING_COUNT ,
                 $v_LIFT ,
                 $v_ESTIMATE ,
                 $v_FENCE ,
                 $v_SECURITY
                );
          
        while (mysqli_stmt_fetch($stmt)) {
            
            //$p_connect = conn();
     
            $p_last_user_id = 1;
            $p_date_rec = date("Y-m-d H:i:s");
            $p_mode = "UI";
            
            
            /*specification*/
            
            $p_number_of_sections= $v_SECTION_COUNT;
            $p_type_of_building = get_hndb_key($p_connect, 15, $v_TYPE_DEVELOP);
            $p_total_land_area = $v_AREA_DEV;
            $p_total_floor_area = $v_AREA_ALL_OBJECT;
            $p_land_area_build  =$v_AREA_LOT;
            $p_bearing_material_tech = get_hndb_key($p_connect, 13, $v_TECHNOLOGY);
            $p_wall_material = get_hndb_key($p_connect, 3, $v_MATERIAL_WALL);
            $p_proj_doc_type = get_hndb_key($p_connect, 19, $v_PROJECT_TYPE);
            $p_serial_number = $v_PROJECT_NUMBER;
            $p_min_floors = $v_FLOOR_QNT_MIN;
            $p_max_floors = $v_FLOOR_QNT_MAX;
            $p_floors_type_id = get_hndb_key($p_connect, 21,$v_FLOOR_TYPE);
            $p_consumer_class_id = get_hndb_key($p_connect, 8,$v_CLASS_TYPE );
            $p_economy_class_house_id = get_hndb_key($p_connect, 24,$v_CLASS);
            $p_ceiling_height = $v_HEIGHT_FLOOR;
            $p_finishing_flats_id = get_hndb_key($p_connect, 17,$v_FINISHING_TYPE_FLAT);
            $p_finishing_level_id = get_hndb_key($p_connect, 22,$v_FINISHING_LEVEL_FLAT);
            $p_common_area_finishing_id = get_hndb_key($p_connect, 23, $v_FINISHING_LEVEL_INSIDE);
            $p_glazed_loggia_id = get_hndb_key($p_connect, 6, $v_GLAZING);
            $p_parking_type_id = get_hndb_key($p_connect, 18, $v_PARKING_TYPE);
            $p_num_of_parking_place = $v_PARKING_COUNT;
            $p_num_of_Elevator = $v_LIFT;
            $p_estimated_cost_construction = $v_ESTIMATE;
            $p_territory_fencing_id = get_hndb_key($p_connect, 5, $v_FENCE);
            $p_security_id = get_hndb_key($p_connect, 7, $v_SECURITY);
            
            
            
              
              $v_result =uid_rrb_housing_specification($p_connect, 
                                $p_id, $p_number_of_sections, $p_type_of_building, $p_total_land_area,
                                $p_total_floor_area, $p_land_area_build, $p_bearing_material_tech,
                                $p_wall_material, $p_proj_doc_type, $p_serial_number, $p_min_floors, 
                                $p_max_floors, $p_floors_type_id, $p_consumer_class_id, $p_economy_class_house_id,
                                $p_ceiling_height, $p_finishing_flats_id, $p_finishing_level_id, 
                                $p_common_area_finishing_id, $p_glazed_loggia_id, $p_parking_type_id, 
                                $p_num_of_parking_place, $p_num_of_Elevator, $p_estimated_cost_construction, 
                                $p_territory_fencing_id, $p_security_id, 
                                $p_last_user_id, $p_date_rec,$v_OBJECTID, $p_mode);
              
              
              if ($v_result == "{success:true,errors:{reason:'Запись сохранена!'}}"){
                  ++$i;
              } elseif ($v_result == "{success:true,errors:{reason:'Запись изменена!'}}") {
                  ++$u;
              } else {
                 $bad_message .=  $v_result;
              }
        }
         $o_out = "load_rrb_housing_specification - inserted $i | updated $u  | $bad_message <br>";
        mysqli_stmt_close($stmt);
       
        return $o_out;  
                        
    
}



function load_rrb_housing_flat_info($p_connect){
    $v_result ="";
    $bad_message="";
    $i=0;
    $u=0;
    $o_out="";
    $query = "
        SELECT
                     id ,
                     date_rec ,
                     batch_number ,
                     OBJECTID ,
AREA_OBJECT	,
AREA_OBJECT_STUDIO	,
AREA_OBJECT_1	,
AREA_OBJECT_2	,
AREA_OBJECT_3	,
AREA_OBJECT_4	,
AREA_OBJECT_5	,
AREA_OBJECT_6	,
arae_studio_avg	,
AREA_OBJECT_STUDIO_MIN	,
AREA_OBJECT_STUDIO_MAX	,
AREA_OBJECT_STUDIO_NOT_HEAT_MIN	,
AREA_OBJECT_STUDIO_NOT_HEAT_MAX	,
Area_object_1_av	,
AREA_OBJECT_1_MIN	,
AREA_OBJECT_1_MAX	,
AREA_OBJECT_1_NOT_HEAT_MIN	,
AREA_OBJECT_1_NOT_HEAT_MAX	,
Area_object_2_av	,
AREA_OBJECT_2_MIN	,
AREA_OBJECT_2_MAX	,
AREA_OBJECT_2_NOT_HEAT_MIN	,
AREA_OBJECT_2_NOT_HEAT_MAX	,
Area_object_3_av	,
AREA_OBJECT_3_MIN	,
AREA_OBJECT_3_MAX	,
AREA_OBJECT_3_NOT_HEAT_MIN	,
AREA_OBJECT_3_NOT_HEAT_MAX	,
Area_object_4_av	,
AREA_OBJECT_4_MIN	,
AREA_OBJECT_4_MAX	,
AREA_OBJECT_4_NOT_HEAT_MIN	,
AREA_OBJECT_4_NOT_HEAT_MAX	,
Area_object_5_av	,
AREA_OBJECT_5_MIN	,
AREA_OBJECT_5_MAX	,
AREA_OBJECT_5_NOT_HEAT_MIN	,
AREA_OBJECT_5_NOT_HEAT_MAX	,
Area_object_6_av	,
AREA_OBJECT_6_MIN	,
AREA_OBJECT_6_MAX	,
AREA_OBJECT_6_NOT_HEAT_MIN	,
AREA_OBJECT_6_NOT_HEAT_MAX	,
Area_object_mnogo_av	,
Area_object_mnogo_min	,
Area_object_mnogo_max	,
0 as Area_object_mnogo_wo_h_min	,
0 as Area_object_mnogo_wo_h_max	,
Area_object_mnogo	,
Quantity_object	,
QUANTITY_OBJECT_STUDIO	,
Quantity_object_1	,
Quantity_object_2	,
Quantity_object_3	,
Quantity_object_4	,
Quantity_object_5	,
Quantity_object_6	,
Quantity_object_mnogo	
                   FROM  rrb_temporary_load;";
    
    
    
     //$connection = conn();
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                
                 $v_id ,
                 $v_date_rec ,
                 $v_batch_number ,
                 $v_OBJECTID ,
 $v_AREA_OBJECT	,
$v_AREA_OBJECT_STUDIO	,
$v_AREA_OBJECT_1	,
$v_AREA_OBJECT_2	,
$v_AREA_OBJECT_3	,
$v_AREA_OBJECT_4	,
$v_AREA_OBJECT_5	,
$v_AREA_OBJECT_6	,
$v_arae_studio_avg	,
$v_AREA_OBJECT_STUDIO_MIN	,
$v_AREA_OBJECT_STUDIO_MAX	,
$v_AREA_OBJECT_STUDIO_NOT_HEAT_MIN	,
$v_AREA_OBJECT_STUDIO_NOT_HEAT_MAX	,
$v_Area_object_1_av	,
$v_AREA_OBJECT_1_MIN	,
$v_AREA_OBJECT_1_MAX	,
$v_AREA_OBJECT_1_NOT_HEAT_MIN	,
$v_AREA_OBJECT_1_NOT_HEAT_MAX	,
$v_Area_object_2_av	,
$v_AREA_OBJECT_2_MIN	,
$v_AREA_OBJECT_2_MAX	,
$v_AREA_OBJECT_2_NOT_HEAT_MIN	,
$v_AREA_OBJECT_2_NOT_HEAT_MAX	,
$v_Area_object_3_av	,
$v_AREA_OBJECT_3_MIN	,
$v_AREA_OBJECT_3_MAX	,
$v_AREA_OBJECT_3_NOT_HEAT_MIN	,
$v_AREA_OBJECT_3_NOT_HEAT_MAX	,
$v_Area_object_4_av	,
$v_AREA_OBJECT_4_MIN	,
$v_AREA_OBJECT_4_MAX	,
$v_AREA_OBJECT_4_NOT_HEAT_MIN	,
$v_AREA_OBJECT_4_NOT_HEAT_MAX	,
$v_Area_object_5_av	,
$v_AREA_OBJECT_5_MIN	,
$v_AREA_OBJECT_5_MAX	,
$v_AREA_OBJECT_5_NOT_HEAT_MIN	,
$v_AREA_OBJECT_5_NOT_HEAT_MAX	,
$v_Area_object_6_av	,
$v_AREA_OBJECT_6_MIN	,
$v_AREA_OBJECT_6_MAX	,
$v_AREA_OBJECT_6_NOT_HEAT_MIN	,
$v_AREA_OBJECT_6_NOT_HEAT_MAX	,
$v_Area_object_mnogo_av	,
$v_Area_object_mnogo_min	,
$v_Area_object_mnogo_max	,
$v_Area_object_mnogo_wo_h_min	,
$v_Area_object_mnogo_wo_h_max	,
$v_Area_object_mnogo	,
$v_Quantity_object	,
$v_QUANTITY_OBJECT_STUDIO	,
$v_Quantity_object_1	,
$v_Quantity_object_2	,
$v_Quantity_object_3	,
$v_Quantity_object_4	,
$v_Quantity_object_5	,
$v_Quantity_object_6	,
$v_Quantity_object_mnogo
                );
          
        while (mysqli_stmt_fetch($stmt)) {
            
            //$p_connect = conn();
     
            $p_last_user_id = 1;
            $p_date_rec = date("Y-m-d H:i:s");
            $p_mode = "UI";
            
            
           /*flat info */
            $p_total_area_all_flats		=		$v_AREA_OBJECT	;
            $p_total_area_studio		=		$v_AREA_OBJECT_STUDIO	;
            $p_total_area_1rooms		=		$v_AREA_OBJECT_1	;
            $p_total_area_2rooms		=		$v_AREA_OBJECT_2	;
            $p_total_area_3rooms		=		$v_AREA_OBJECT_3	;
            $p_total_area_4rooms		=		$v_AREA_OBJECT_4	;
            $p_total_area_5rooms		=		$v_AREA_OBJECT_5	;
            $p_total_area_6rooms		=		$v_AREA_OBJECT_6	;
            $p_avg_area_studio		=		$v_arae_studio_avg	;
            $p_min_area_studio		=		$v_AREA_OBJECT_STUDIO_MIN	;
            $p_max_area_studio		=		$v_AREA_OBJECT_STUDIO_MAX	;
            $p_min_area_st_wo_unheat		=		$v_AREA_OBJECT_STUDIO_NOT_HEAT_MIN	;
            $p_max_area_st_wo_unheat		=		$v_AREA_OBJECT_STUDIO_NOT_HEAT_MAX	;
            $p_avg_area_1r		=		$v_Area_object_1_av	;
            $p_min_area_1r		=		$v_AREA_OBJECT_1_MIN	;
            $p_max_area_1r		=		$v_AREA_OBJECT_1_MAX	;
            $p_min_area_1r_wo_unheat		=		$v_AREA_OBJECT_1_NOT_HEAT_MIN	;
            $p_max_area_1r_wo_unheat		=		$v_AREA_OBJECT_1_NOT_HEAT_MAX	;
            $p_avg_area_2r		=		$v_Area_object_2_av	;
            $p_min_area_2r		=		$v_AREA_OBJECT_2_MIN	;
            $p_max_area_2r		=		$v_AREA_OBJECT_2_MAX	;
            $p_min_area_2r_wo_unheat		=		$v_AREA_OBJECT_2_NOT_HEAT_MIN	;
            $p_max_area_2r_wo_unheat		=		$v_AREA_OBJECT_2_NOT_HEAT_MAX	;
            $p_avg_area_3r		=		$v_Area_object_3_av	;
            $p_min_area_3r		=		$v_AREA_OBJECT_3_MIN	;
            $p_max_area_3r		=		$v_AREA_OBJECT_3_MAX	;
            $p_min_area_3r_wo_unheat		=		$v_AREA_OBJECT_3_NOT_HEAT_MIN	;
            $p_max_area_3r_wo_unheat		=		$v_AREA_OBJECT_3_NOT_HEAT_MAX	;
            $p_avg_area_4r		=		$v_Area_object_4_av	;
            $p_min_area_4r		=		$v_AREA_OBJECT_4_MIN	;
            $p_max_area_4r		=		$v_AREA_OBJECT_4_MAX	;
            $p_min_area_4r_wo_unheat		=		$v_AREA_OBJECT_4_NOT_HEAT_MIN	;
            $p_max_area_4r_wo_unheat		=		$v_AREA_OBJECT_4_NOT_HEAT_MAX	;
            $p_avg_area_5r		=		$v_Area_object_5_av	;
            $p_min_area_5r		=		$v_AREA_OBJECT_5_MIN	;
            $p_max_area_5r		=		$v_AREA_OBJECT_5_MAX	;
            $p_min_area_5r_wo_unheat		=		$v_AREA_OBJECT_5_NOT_HEAT_MIN	;
            $p_max_area_5r_wo_unheat		=		$v_AREA_OBJECT_5_NOT_HEAT_MAX	;
            $p_avg_area_6r		=		$v_Area_object_6_av	;
            $p_min_area_6r		=		$v_AREA_OBJECT_6_MIN	;
            $p_max_area_6r		=		$v_AREA_OBJECT_6_MAX	;
            $p_min_area_6r_wo_unheat		=		$v_AREA_OBJECT_6_NOT_HEAT_MIN	;
            $p_max_area_6r_wo_unheat		=		$v_AREA_OBJECT_6_NOT_HEAT_MAX	;
            $p_avg_area_n_room		=		$v_Area_object_mnogo_av	;
            $p_min_area_n_room		=		$v_Area_object_mnogo_min	;
            $p_max_area_n_room		=		$v_Area_object_mnogo_max	;
            $p_min_area_n_wo_unheat		=		$v_Area_object_mnogo_wo_h_min	;
            $p_max_area_n_wo_unheat		=		$v_Area_object_mnogo_wo_h_max	;
            $p_total_area_n_rooms		=		$v_Area_object_mnogo	;
            $p_total_count_all_flats		=		$v_Quantity_object	;
            $p_total_count_studio		=		$v_QUANTITY_OBJECT_STUDIO	;
            $p_total_count_1_rooms		=		$v_Quantity_object_1	;
            $p_total_count_2_rooms		=		$v_Quantity_object_2	;
            $p_total_count_3_rooms		=		$v_Quantity_object_3	;
            $p_total_count_4_rooms		=		$v_Quantity_object_4	;
            $p_total_count_5_rooms		=		$v_Quantity_object_5	;
            $p_total_count_6_rooms		=		$v_Quantity_object_6	;
            $p_total_count_n_rooms		=		$v_Quantity_object_mnogo	;

            
            
             $v_result = uid_rrb_housing_flat_info(
                               $p_connect, $p_id, $p_last_user_id, $p_date_rec, 
                               $p_total_area_all_flats, $p_total_area_studio, 
                               $p_total_area_1rooms, $p_total_area_2rooms, $p_total_area_3rooms, $p_total_area_4rooms, 
                               $p_total_area_5rooms, $p_total_area_6rooms, $p_avg_area_studio, $p_min_area_studio, 
                               $p_max_area_studio, $p_min_area_st_wo_unheat, $p_max_area_st_wo_unheat, $p_avg_area_1r,
                               $p_min_area_1r, $p_max_area_1r, $p_min_area_1r_wo_unheat, $p_max_area_1r_wo_unheat, 
                               $p_avg_area_2r, $p_min_area_2r, $p_max_area_2r, $p_min_area_2r_wo_unheat, 
                               $p_max_area_2r_wo_unheat, $p_avg_area_3r, $p_min_area_3r, $p_max_area_3r, 
                               $p_min_area_3r_wo_unheat, $p_max_area_3r_wo_unheat, $p_avg_area_4r, $p_min_area_4r, 
                               $p_max_area_4r, $p_min_area_4r_wo_unheat, $p_max_area_4r_wo_unheat, $p_avg_area_5r, 
                               $p_min_area_5r, $p_max_area_5r, $p_min_area_5r_wo_unheat, $p_max_area_5r_wo_unheat, 
                               $p_avg_area_6r, $p_min_area_6r, $p_max_area_6r, $p_min_area_6r_wo_unheat, 
                               $p_max_area_6r_wo_unheat, $p_avg_area_n_room, $p_min_area_n_room, $p_max_area_n_room, 
                               $p_min_area_n_wo_unheat, $p_max_area_n_wo_unheat, $p_total_area_n_rooms, 
                               $p_total_count_all_flats, $p_total_count_studio, $p_total_count_1_rooms, 
                               $p_total_count_2_rooms, $p_total_count_3_rooms, $p_total_count_4_rooms, 
                               $p_total_count_5_rooms, $p_total_count_6_rooms, $p_total_count_n_rooms, 
                               $v_OBJECTID, $p_mode);
                 
            
           
              
              
              if ($v_result == "{success:true,errors:{reason:'Запись сохранена!'}}"){
                  ++$i;
              } elseif ($v_result == "{success:true,errors:{reason:'Запись изменена!'}}") {
                  ++$u;
              } else {
                 $bad_message .=  $v_result;
              }
        }
         $o_out = "load_rrb_housing_flat_info - inserted $i | updated $u  | $bad_message <br>";
        mysqli_stmt_close($stmt);
       
        return $o_out;  
                        
    
}


function load_rrb_housing_infr_type($p_connect){
    $v_result ="";
    $bad_message="";
    $i=0;
    $u=0;
    $o_out="";
    $query = "
        SELECT
                     id ,
                     date_rec ,
                     batch_number ,
                     OBJECTID ,
                     INFR_TYPE
                   FROM  rrb_temporary_load;";
    
    
    
     //$connection = conn();
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                
                 $v_id ,
                 $v_date_rec ,
                 $v_batch_number ,
                 $v_OBJECTID ,
                 $INFR_TYPE
                );
          
        while (mysqli_stmt_fetch($stmt)) {
    
            $p_last_user_id = 1;
            $p_date_rec = date("Y-m-d H:i:s");
            $p_mode = "UI";
          
            
            $v_result =ui_infr_type(
                         $p_connect, $INFR_TYPE, $p_id, $p_last_user_id, $p_date_rec, $v_OBJECTID, $p_mode);
                 
              if ($v_result == "{success:true,errors:{reason:'Запись сохранена!'}}"){
                  ++$i;
              } elseif ($v_result == "{success:true,errors:{reason:'Запись изменена!'}}") {
                  ++$u;
              } else {
                 $bad_message .= "OBJECT_ID - $v_OBJECTID ". $v_result;
              }
        }
         $o_out =  $bad_message;
        mysqli_stmt_close($stmt);
       
        return $o_out;  
                        
    
}



function load_rrb_housing_finance($p_connect){
    $v_result ="";
    $bad_message="";
    $i=0;
    $u=0;
    $o_out="";
    $query = "
        SELECT
                     id ,
                     date_rec ,
                     batch_number ,
                     OBJECTID ,
CONTRACT_TYPE	,
0 as INSTALLMENT_PLAN_ID	,
INSTALLMENT_PLAN	,
MORTGAGE	,
MORTGAGE	,
Price_min_object	,
Price_avg_object	,
Price_max_object	,
Price_avg_1	,
Price_avg_2	,
Price_avg_3	,
Price_avg_4	,
Price_avg_5	,
Price_avg_6	,
Price_avg_mnogo	,
Quantity_sell_object	,
Quantity_sell_1	,
Quantity_sell_2	,
Quantity_sell_3	,
Quantity_sell_4	,
Quantity_sell_5	,
Quantity_sell_6	,
total_n_rooms	,
koefficent	,
sale_temp_kavrtal	,
sale_temp_from_start	,
avg_flat_area	,
total_area_offer	,
total_whoole_price	,
total_area_offer_1r	,
total_wh_price_1r	,
total_area_offer_2r	,
total_wh_price_2r	,
total_area_offer_3r	,
total_wh_price_3r	,
total_area_offer_nr	,
total_wh_price_nr	,
quotas	,
update_category	,
SOURCE_DESC	,
DATE_RESEARCH	,
DATE_IN_BASE	,
SALE_STATUS	,
insert_date	,
comment_text
                   FROM  rrb_temporary_load;";
    
    
    
     //$connection = conn();
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                
                 $v_id ,
                 $v_date_rec ,
                 $v_batch_number ,
                 $v_OBJECTID ,
                 $CONTRACT_TYPE,
$INSTALLMENT_PLAN_ID,
$INSTALLMENT_PLAN,
$MORTGAGE,
$MORTGAGE,
$Price_min_object,
$Price_avg_object,
$Price_max_object,
$Price_avg_1,
$Price_avg_2,
$Price_avg_3,
$Price_avg_4,
$Price_avg_5,
$Price_avg_6,
$Price_avg_mnogo,
$Quantity_sell_object,
$Quantity_sell_1,
$Quantity_sell_2,
$Quantity_sell_3,
$Quantity_sell_4,
$Quantity_sell_5,
$Quantity_sell_6,
$total_n_rooms,
$koefficent,
$sale_temp_kavrtal,
$sale_temp_from_start,
$avg_flat_area,
$total_area_offer,
$total_whoole_price,
$total_area_offer_1r,
$total_wh_price_1r,
$total_area_offer_2r,
$total_wh_price_2r,
$total_area_offer_3r,
$total_wh_price_3r,
$total_area_offer_nr,
$total_wh_price_nr,
$quotas,
$update_category,
$SOURCE_DESC,
$DATE_RESEARCH,
$DATE_IN_BASE,
$SALE_STATUS,
$insert_date,
$comment_text 
                );
          
        while (mysqli_stmt_fetch($stmt)) {
            
            //$p_connect = conn();
     
            $p_last_user_id = 1;
            $p_date_rec = date("Y-m-d H:i:s");
            $p_mode = "UI";
            
            
             /*finance*/
            $p_contract_type_id = 	get_hndb_key($p_connect, 14, $CONTRACT_TYPE);
            $p_leasing_id = 	$INSTALLMENT_PLAN_ID;
            $p_leasing_conditions = 	$INSTALLMENT_PLAN;
            $p_ipoteka_id = 	get_hndb_key($p_connect, 2, $MORTGAGE);
            $p_ipoteka_conditions = 	$MORTGAGE;
            $p_min_price = 	$Price_min_object;
            $p_avg_unit_price = 	$Price_avg_object;
            $p_max_price = 	$Price_max_object;
            $p_avg_unit_price_1r = 	$Price_avg_1;
            $p_avg_unit_price_2r = 	$Price_avg_2;
            $p_avg_unit_price_3r = 	$Price_avg_3;
            $p_avg_unit_price_4r = 	$Price_avg_4;
            $p_avg_unit_price_5r = 	$Price_avg_5;
            $p_avg_unit_price_6r = 	$Price_avg_6;
            $p_avg_unit_price_nr = 	$Price_avg_mnogo;
            $p_total_flats_sale = 	$Quantity_sell_object;
            $p_total_1r_flats_sale = 	$Quantity_sell_1;
            $p_total_2r_flats_sale = 	$Quantity_sell_2;
            $p_total_3r_flats_sale = 	$Quantity_sell_3;
            $p_total_4r_flats_sale = 	$Quantity_sell_4;
            $p_total_5r_flats_sale = 	$Quantity_sell_5;
            $p_total_6r_flats_sale = 	$Quantity_sell_6;
            $p_total_nr_flats_sale = 	$total_n_rooms;
            $p_koefficent = 	$koefficent;
            $p_rates_sales_quarterly = 	$sale_temp_kavrtal;
            $p_rates_sales_from_start = 	$sale_temp_from_start;
            $p_avg_area_of_flat = 	$avg_flat_area;
            $p_tot_area_flat_in_offer = 	$total_area_offer;
            $p_total_whole_price_in_offer = 	$total_whoole_price;
            $p_tot_area_1r_flat_offer = 	$total_area_offer_1r;
            $p_total_1r_whole_price_offer = 	$total_wh_price_1r;
            $p_tot_area_2r_flat_offer = 	$total_area_offer_2r;
            $p_total_2r_whole_price_offer = 	$total_wh_price_2r;
            $p_tot_area_3r_flat_offer = 	$total_area_offer_3r;
            $p_total_3r_whole_price_offer = 	$total_wh_price_3r;
            $p_tot_area_nr_flat_offer = 	$total_area_offer_nr;
            $p_total_nr_whole_price_offer = 	$total_wh_price_nr;
            $p_quotas_id = 	get_hndb_key($p_connect, 49, $quotas);
            $p_update_category_id = 	get_hndb_key($p_connect, 50, $update_category);
            $p_info_source = 	$SOURCE_DESC;
            $p_collect_information_dt = 	date('Y-m-d H:i:s', strtotime ($DATE_RESEARCH));
            $p_report_on_phase_dt = 	date('Y-m-d H:i:s', strtotime ($DATE_IN_BASE));
            $p_impl_status_id = 	get_hndb_key($p_connect, 10, $SALE_STATUS);
            $p_input_in_db_dt = 	date('Y-m-d H:i:s', strtotime ($insert_date));
            $p_comment_txt = 	$comment_text;
            
            
            $v_result =uid_rrb_housing_finance(
                                     $p_connect, $p_id, $p_last_user_id, $p_date_rec, 
                                     $p_contract_type_id, $p_leasing_id, $p_leasing_conditions, $p_ipoteka_id, 
                                     $p_ipoteka_conditions, $p_min_price, $p_avg_unit_price, $p_max_price, 
                                     $p_avg_unit_price_1r, $p_avg_unit_price_2r, $p_avg_unit_price_3r, 
                                     $p_avg_unit_price_4r, $p_avg_unit_price_5r, $p_avg_unit_price_6r, 
                                     $p_avg_unit_price_nr, $p_total_flats_sale, $p_total_1r_flats_sale, $p_total_2r_flats_sale, 
                                     $p_total_3r_flats_sale, $p_total_4r_flats_sale, $p_total_5r_flats_sale, 
                                     $p_total_6r_flats_sale, $p_total_nr_flats_sale, $p_koefficent, $p_rates_sales_quarterly, 
                                     $p_rates_sales_from_start, $p_avg_area_of_flat, $p_tot_area_flat_in_offer, 
                                     $p_total_whole_price_in_offer, $p_tot_area_1r_flat_offer, $p_total_1r_whole_price_offer, 
                                     $p_tot_area_2r_flat_offer, $p_total_2r_whole_price_offer, $p_tot_area_3r_flat_offer, 
                                     $p_total_3r_whole_price_offer, $p_tot_area_nr_flat_offer, $p_total_nr_whole_price_offer, 
                                     $p_quotas_id, $p_update_category_id, $p_info_source, $p_collect_information_dt, 
                                     $p_report_on_phase_dt, $p_impl_status_id, $p_input_in_db_dt, $p_comment_txt, 
                                     $v_OBJECTID, $p_mode);
            
              
              
              if ($v_result == "{success:true,errors:{reason:'Запись сохранена!'}}"){
                  ++$i;
              } elseif ($v_result == "{success:true,errors:{reason:'Запись изменена!'}}") {
                  ++$u;
              } else {
                 $bad_message .=  $v_result;
              }
        }
         $o_out = "load_rrb_housing_finance - inserted $i | updated $u  | $bad_message <br>";
        mysqli_stmt_close($stmt);
       
        return $o_out;  
                        
    
}







function load_rrb_housing_investor_builder($p_connect){
    $v_result ="";
    $bad_message="";
    $i=0;
    $u=0;
    $o_out="";
    $query = "
        SELECT
                     id ,
                     date_rec ,
                     batch_number ,
                     OBJECTID ,
                    DEVELOPER	,
                    CONTACTS	,
                    URL_INFO	,
                    BUILDER	,
                    Investor	,
                    architect	,
                    STR_TO_DATE(DATE_PERMIT, '%m.%d.%Y') as DATE_PERMIT	,
                    NUMBER_PERMIT	,
                    BEGIN_SALE	,
                    BEGIN_BUILT	,
                    CONST_STAGE	,
                    CONST_STATUS	,
                    STR_TO_DATE(EXPL_PLAN, '%d.%m.%Y') as EXPL_PLAN,
                    STR_TO_DATE(EXPL_FACT, '%d.%m.%Y') as EXPL_FACT,
                    STR_TO_DATE(impl_end, '%d.%m.%Y') as impl_end,
                    expl_start	,
                    delay_sheduly	,
                    EXPL_DATE	,
                    EXPL_NUMBER	

                   FROM  rrb_temporary_load;";
    
    
    
     //$connection = conn();
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                
                 $v_id ,
                 $v_date_rec ,
                 $v_batch_number ,
                 $v_OBJECTID ,
                    $v_DEVELOPER	,
                    $v_CONTACTS	,
                    $v_URL_INFO	,
                    $v_BUILDER	,
                    $v_Investor	,
                    $v_architect	,
                    $v_DATE_PERMIT	,
                    $v_NUMBER_PERMIT	,
                    $v_BEGIN_SALE	,
                    $v_BEGIN_BUILT	,
                    $v_CONST_STAGE	,
                    $v_CONST_STATUS	,
                    $v_EXPL_PLAN,
                    $v_EXPL_FACT,
                    $v_impl_end,
                    $v_expl_start	,
                    $v_delay_sheduly	,
                    $v_EXPL_DATE	,
                    $v_EXPL_NUMBER	
                );
          
        while (mysqli_stmt_fetch($stmt)) {
            
            //$p_connect = conn();
     
            $p_last_user_id = 1;
            $p_date_rec = date("Y-m-d H:i:s");
            $p_mode = "UI";
            $k = get_appartment_id($p_connect, $v_komplex);
                    $p_name =   $v_ADDRESS;
                 $p_build_stage_id   = get_hndb_key_w_like($p_connect, 9, $v_CONST_STAGE); 
                 $p_build_status_id  =get_hndb_key_w_like($p_connect, 11,  $v_CONST_STATUS); 
            
              $v_result = uid_rrb_investor_builder($p_connect, 
                      $p_id, $p_last_user_id, $p_date_rec, $v_DEVELOPER, $v_CONTACTS, 
                      $v_URL_INFO, $v_BUILDER, $v_Investor, $v_architect, $v_DATE_PERMIT, 
                      $v_NUMBER_PERMIT, $v_BEGIN_SALE, $v_BEGIN_BUILT, $p_build_stage_id, $p_build_status_id, 
                      $v_EXPL_PLAN, $v_EXPL_FACT, $v_impl_end, $v_expl_start, $v_delay_sheduly,
                      $v_EXPL_DATE, $v_EXPL_NUMBER, $v_OBJECTID, $p_mode);
                    ;
              
              if ($v_result == "{success:true,errors:{reason:'Запись сохранена!'}}"){
                  ++$i;
              } elseif ($v_result == "{success:true,errors:{reason:'Запись изменена!'}}") {
                  ++$u;
              } else {
                 $bad_message .=  $v_result;
              }
        }
         $o_out = "load_rrb_housing_investor_builder - inserted $i | updated $u  | $bad_message <br>";
        mysqli_stmt_close($stmt);
       
        return $o_out;  
                        
    
}
   


function load_rrb_housing_commercial($p_connect){
    $v_result ="";
    $bad_message="";
    $i=0;
    $u=0;
    $o_out="";
    $query = "
        SELECT
                     id ,
                     date_rec ,
                     batch_number ,
                     OBJECTID ,
                     COMMERCE_PLACE,
                     AREA_COMMERCE	

                   FROM  rrb_temporary_load;";
    
    
    
     //$connection = conn();
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                
                 $v_id ,
                 $v_date_rec ,
                 $v_batch_number ,
                 $v_OBJECTID ,
                 $v_COMMERCE_PLACE,
                 $v_AREA_COMMERCE	    
                );
          
        while (mysqli_stmt_fetch($stmt)) {
            
            //$p_connect = conn();
     
            $p_last_user_id = 1;
            $p_date_rec = date("Y-m-d H:i:s");
            $p_mode = "UI";
       
                
        
              $v_result = uid_rrb_housing_commercial($p_connect, 
                      $p_id, $p_last_user_id, $p_date_rec, $v_COMMERCE_PLACE, 
                      $v_AREA_COMMERCE, $v_OBJECTID, $p_mode);
                    ;
              
              if ($v_result == "{success:true,errors:{reason:'Запись сохранена!'}}"){
                  ++$i;
              } elseif ($v_result == "{success:true,errors:{reason:'Запись изменена!'}}") {
                  ++$u;
              } else {
                 $bad_message .=  $v_result;
              }
        }
         $o_out = "load_rrb_housing_commercial - inserted $i | updated $u  | $bad_message <br>";
        mysqli_stmt_close($stmt);
       
        return $o_out;  
                        
    
}



/*UTILS FUNCTIONS*/
function get_appartment_id($p_connect, $p_complex_name){
    $output =0;
    $query_ui = "CALL get_apart_id(?,@output);";
    $p_connect->query("SET NAMES 'cp1251'");
    //$p_connect->query("SET NAMES 'utf8'");
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "s",  $p_complex_name);
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    } else {
        echo "{success:false,errors:{reason:'Ошибка выполнения процедуры MySql!'}}";
    }
    $stmt = $p_connect->prepare('SELECT @output ');
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $output);
        while (mysqli_stmt_fetch($stmt)) {
            
        }
        
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $output;
 }
 
 
 
 function ui_infr_type ($p_connect,$INFR_TYPE, $p_id, $p_last_user_id, $p_date_rec, $p_rrb_housing_id, $p_mode){
      $v_result ="";
      $bad_message="";
    $i=0;
    $u=0;
    $o_out="";
         $tmp = explode(",", $INFR_TYPE); 

        for ($k = 0, $j = count($tmp); $k < $j; $k++) {
            
            $p_type_of_infrastructure_id =  get_hndb_key_w_like($p_connect, 16, trim($tmp[$k]));
            $p_id = get_infr_id_by_housing($p_connect, $p_type_of_infrastructure_id, $p_rrb_housing_id);
            $v_result = uid_rrb_housing_infrastructure(
                         $p_connect, $p_id, $p_last_user_id, $p_date_rec,
                         $p_type_of_infrastructure_id, $p_rrb_housing_id, $p_mode);
            if ($v_result == "{success:true,errors:{reason:'Запись сохранена!'}}"){
                  ++$i;
              } elseif ($v_result == "{success:true,errors:{reason:'Запись изменена!'}}") {
                  ++$u;
              } else {
                 $bad_message .=  $v_result;
              }
        }
         $o_out = "load_rrb_housing_infr_type - inserted $i | updated $u  | $bad_message <br>";
            
        
     return $o_out;
 }
 
 function get_infr_id_by_housing($p_connect, $p_type_of_infrastructure_id, $p_rrb_housing_id){
      
     
     
     $output =0;
    $query_ui = "CALL get_infr_id(?,?,@output);";
    $p_connect->query("SET NAMES 'cp1251'");
    //$p_connect->query("SET NAMES 'utf8'");
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "ii",$p_type_of_infrastructure_id, $p_rrb_housing_id);
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    } else {
        echo "{success:false,errors:{reason:'Ошибка выполнения процедуры MySql!'}}";
    }
    $stmt = $p_connect->prepare('SELECT @output ');
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $output);
        while (mysqli_stmt_fetch($stmt)) {
            
        }
        
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $output;
     
     
     
 }
 
 /*CALLL*/
//echo load_rrb_apartment_comlex(conn());
//echo load_rrb_housing_comlex(conn());
//echo load_rrb_housing_commercial(conn());


?>
