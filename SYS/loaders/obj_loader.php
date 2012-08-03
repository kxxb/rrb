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
 SECURITY 
 
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
 $v_SECURITY 
                
                
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

            
            
            
            
            if ($triger_name == $p_complex_name){
                $h++;
                $v_result = $v_result."<hr>$k";
                $v_result = $v_result."triger_name=$triger_name<BR>";
                $v_result = $v_result."p_complex_name=$p_complex_name<BR>";
                $v_result = $v_result."p_name=$p_name<BR>";
                
                
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
                
            }else{
                $k++;
                $h++;
                $v_result = $v_result."<hr>$k";
                $v_result = $v_result."triger_name=$triger_name<BR>";
                $v_result = $v_result."p_complex_name=$p_complex_name<BR>";
                $v_result = $v_result."p_name=$p_name<BR>";
                $v_result = $v_result."<br>uid_rrb_apartment_comlex =". uid_rrb_apartment_comlex($p_connect,
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
                        
                        $triger_name = $p_complex_name;
                        
                        
        }
        
            
                
            }
     
        mysqli_stmt_close($stmt);
       
        //return $v_result;  

 }
 
 //echo data_pump(conn());
?>
