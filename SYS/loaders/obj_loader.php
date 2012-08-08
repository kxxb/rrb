<meta http-equiv="Content-Type" content="text/html; charset=cp1251"/>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 
 require_once('../../helper/app.housing/UID_Package.php');
 require_once('../../helper/handbooks/hndb_utilits.php');
 require_once('../dbconn.php');

 function data_pump($p_connect) {
 $v_result ="";
 $p_complex_name ="";
 $triger_name ="";
$query = "
  
SELECT
 id ,
 date_rec ,
 batch_number ,
 OBJECTID ,
 case when komplex = 'is null' then ADDRESS else komplex end ,
 ADDRESS ,
 km_mkad ,
 direction ,
 SUBJECT ,
 KOD_OKATO ,
 Kod_cadastre ,
 SUBJECT_rayon ,
 REGION ,
 SETTLEMENT ,
 CITY ,
 VGT ,
 STREET_TYPE ,
 STREET ,
 HOUSE_NUM ,
 LETTER ,
 BUILDING ,
 STRUCTURE ,
 ESTATE ,
 LONGITUDE ,
 LATITUDE ,
 CADASTRE_NUM,
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
 SECURITY,
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


 
FROM  rrb_temporary_load;

        ";
        
        //$connection = conn();
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        //$stmt->bind_param("sss",$issue_id, $start, $limit); 

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                
                $v_id ,
 $v_date_rec ,
 $v_batch_number ,
 $v_OBJECTID ,
 $v_komplex ,
 $v_ADDRESS ,
 $v_km_mkad ,
 $v_direction ,
 $v_SUBJECT ,
 $v_KOD_OKATO ,
 $v_Kod_cadastre ,
 $v_SUBJECT_rayon ,
 $v_REGION ,
 $v_SETTLEMENT ,
 $v_CITY ,
 $v_VGT ,
 $v_STREET_TYPE ,
 $v_STREET ,
 $v_HOUSE_NUM ,
 $v_LETTER ,
 $v_BUILDING ,
 $v_STRUCTURE ,
 $v_ESTATE ,
 $v_LONGITUDE ,
 $v_LATITUDE ,
 $v_CADASTRE_NUM,
                
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
 $v_SECURITY,
                
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
       
        
         
        $k = 1;
        $h = 1;
        while (mysqli_stmt_fetch($stmt)) {
            
            //$p_connect = conn();
            $p_id = null;
            $p_last_user_id = 1;
            $p_date_rec = date("Y-m-d H:i:s");
            $p_mode = "UI";
            
            $p_complex_name =   $v_komplex;
                        /*housing*/
            $p_name =   $v_ADDRESS;
            $p_corpse_number = $v_BUILDING;
            
            
 
           
            /*addres*/
            $p_kladr_code = "00000";
            $p_ot_mkad = $v_km_mkad;
            $p_longitude_yandex  = $v_LONGITUDE;
            $p_latitude_yandex = $v_LATITUDE;
            $p_cadastral_number = $v_CADASTRE_NUM;
            $p_building_address = $v_ADDRESS;
            $p_house_number =$v_HOUSE_NUM;
            $p_house_letter = $v_LETTER; 
            $p_house_corps = $v_BUILDING; 
            $p_house_building = $v_BUILDING;
            $p_house_ownership = $v_ESTATE; 
            $p_state_id = 0;
            $p_subject_of_state_id = 0;
            $p_street_type_id = 0;
            $p_dirrection_id  = 0;
            $p_OBJECTID_in_file = $v_id; 
            
            /*specification*/
           /* 
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

            */
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

            
            
            
            if ($triger_name == $p_complex_name){
                $h++;
                $v_result = $v_result."<hr>$k";
                $v_result = $v_result."triger_name=$triger_name<BR>";
                $v_result = $v_result."p_complex_name=$p_complex_name<BR>";
                $v_result = $v_result."p_name=$p_name<BR>";
                
                /*
                 $v_result =$v_result."<br>uid_rrb_housing =". uid_rrb_housing($p_connect, 
                         $h, $p_name, $p_corpse_number, $k, 
                         $p_last_user_id, $p_date_rec, $p_mode);
                 
                 $v_result =$v_result."<br>uid_rrb_housing_address =".uid_rrb_housing_address($p_connect, 
                                $p_id, $h, $p_kladr_code, $p_ot_mkad, 
                                $p_longitude_yandex, $p_latitude_yandex, $p_cadastral_number, 
                                $p_building_address, $p_house_number, $p_house_letter, 
                                $p_house_corps, $p_house_building, $p_house_ownership, 
                                $p_state_id, $p_subject_of_state_id, $p_street_type_id, 
                                $p_dirrection_id, 
                                $p_last_user_id, $p_date_rec, $p_mode);
                 
                 $v_result =$v_result. "<br>uid_rrb_housing_specification =".uid_rrb_housing_specification($p_connect, 
                                $p_id, $p_number_of_sections, $p_type_of_building, $p_total_land_area,
                                $p_total_floor_area, $p_land_area_build, $p_bearing_material_tech,
                                $p_wall_material, $p_proj_doc_type, $p_serial_number, $p_min_floors, 
                                $p_max_floors, $p_floors_type_id, $p_consumer_class_id, $p_economy_class_house_id,
                                $p_ceiling_height, $p_finishing_flats_id, $p_finishing_level_id, 
                                $p_common_area_finishing_id, $p_glazed_loggia_id, $p_parking_type_id, 
                                $p_num_of_parking_place, $p_num_of_Elevator, $p_estimated_cost_construction, 
                                $p_territory_fencing_id, $p_security_id, 
                                $p_last_user_id, $p_date_rec,$h, $p_mode);
                 */
                 
                 $v_result =$v_result. "<br>uid_rrb_housing_flat_info =".  uid_rrb_housing_flat_info(
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
                               $h, $p_mode);
                 
                
            }else{
                $k++;
                $h++;
                $v_result = $v_result."<hr>$k";
                $v_result = $v_result."triger_name=$triger_name<BR>";
                $v_result = $v_result."p_complex_name=$p_complex_name<BR>";
                $v_result = $v_result."p_name=$p_name<BR>";
                
                /*$v_result = $v_result."<br>uid_rrb_apartment_comlex =". uid_rrb_apartment_comlex($p_connect,
                    $k, $p_complex_name, $p_last_user_id, $p_date_rec, $p_mode);
             
     
     
                 $v_result =$v_result."<br>uid_rrb_housing =". uid_rrb_housing($p_connect, 
                         $h, $p_name, $p_corpse_number, $k, 
                         $p_last_user_id, $p_date_rec, $p_mode);
                 
                 
                 
                        $v_result =$v_result. "<br>uid_rrb_housing_address =".uid_rrb_housing_address($p_connect, 
                                $p_id, $h, $p_kladr_code, $p_ot_mkad, 
                                $p_longitude_yandex, $p_latitude_yandex, $p_cadastral_number, 
                                $p_building_address, $p_house_number, $p_house_letter, 
                                $p_house_corps, $p_house_building, $p_house_ownership, 
                                $p_state_id, $p_subject_of_state_id, $p_street_type_id, 
                                $p_dirrection_id, 
                                $p_last_user_id, $p_date_rec, $p_mode);
                        
                        
                        $v_result =$v_result. "<br>uid_rrb_housing_specification =".uid_rrb_housing_specification($p_connect, 
                                $p_id, $p_number_of_sections, $p_type_of_building, $p_total_land_area,
                                $p_total_floor_area, $p_land_area_build, $p_bearing_material_tech,
                                $p_wall_material, $p_proj_doc_type, $p_serial_number, $p_min_floors, 
                                $p_max_floors, $p_floors_type_id, $p_consumer_class_id, $p_economy_class_house_id,
                                $p_ceiling_height, $p_finishing_flats_id, $p_finishing_level_id, 
                                $p_common_area_finishing_id, $p_glazed_loggia_id, $p_parking_type_id, 
                                $p_num_of_parking_place, $p_num_of_Elevator, $p_estimated_cost_construction, 
                                $p_territory_fencing_id, $p_security_id, 
                                $p_last_user_id, $p_date_rec,$h, $p_mode);
                        
                        */
                        $v_result =$v_result. "<br>uid_rrb_housing_flat_info =".  uid_rrb_housing_flat_info($p_connect, 
                               $p_id, $p_last_user_id, $p_date_rec, $p_total_area_all_flats, $p_total_area_studio, 
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
                               $h, $p_mode);
                        
                        $triger_name = $p_complex_name;
                        
                        
        }
        
            
                
            }
     
        mysqli_stmt_close($stmt);
       
        return $v_result;  

 }
 
 echo data_pump(conn());
?>
