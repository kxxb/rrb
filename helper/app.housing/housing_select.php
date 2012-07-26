<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 require_once('../../SYS/dbconn.php');

$query = "SELECT
              h.name as housing_name,
              h.corpse_number,
             sp.* 
            FROM rrb.rrb_v_housing_specification sp, 
                 rrb.rrb_housing h
            where sp.rrb_housing_id = h.id";





        $handbooks_id = $_GET["handbooks_id"];
        
        $connection = conn();
        $connection->query("SET NAMES 'utf8'");
        $stmt = $connection->prepare($query);
        //$stmt->bind_param("s",$handbooks_id); 


        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                $housing_name,
                $corpse_number,
                $id,
                $number_of_sections,
                $type_of_building,
                $total_land_area,
                $total_floor_area,
                $land_area_build,
                $bearing_material_tech,
                $wall_material,
                $proj_doc_type,
                $serial_number,
                $min_floors,
                $max_floors,
                $floors_type_id,
                $consumer_class_id,
                $economy_class_house_id,
                $ceiling_height,
                $finishing_flats_id,
                $finishing_level_id,
                $common_area_finishing_id,
                $glazed_loggia_id,
                $parking_type_id,
                $num_of_parking_place,
                $num_of_Elevator,
                $estimated_cost_construction,
                $territory_fencing_id,
                $security_id,
                $last_user_id,
                $date_rec,
                $rrb_housing_id,
                $material_name,
                $wall_material_name,
                $proj_doc_name,
                $floor_type_name,
                $consumer_cl_name,
                $economy_cl_name,
                $finish_fl_name,
                $finish_level_name,
                $finish_c_area_name,
                $glazed_log_name,
                $parking_name,
                $fencing_name,
                $security_name);
       
        
         
        $users_arr = array();
        while (mysqli_stmt_fetch($stmt)) {
            $i++;
            $users_arr[]= array(
                'housing_name'=>$housing_name,
                'corpse_number'=>$corpse_number,
                'id'=>$id,
                'number_of_sections'=>$number_of_sections,
                'type_of_building'=>$type_of_building,
                'total_land_area'=>$total_land_area,
                'total_floor_area'=>$total_floor_area,
                'land_area_build'=>$land_area_build,
                'bearing_material_tech'=>$bearing_material_tech,
                'wall_material'=>$wall_material,
                'proj_doc_type'=>$proj_doc_type,
                'serial_number'=>$serial_number,
                'min_floors'=>$min_floors,
                'max_floors'=>$max_floors,
                'floors_type_id'=>$floors_type_id,
                'consumer_class_id'=>$consumer_class_id,
                'economy_class_house_id'=>$economy_class_house_id,
                'ceiling_height'=>$ceiling_height,
                'finishing_flats_id'=>$finishing_flats_id,
                'finishing_level_id'=>$finishing_level_id,
                'common_area_finishing_id'=>$common_area_finishing_id,
                'glazed_loggia_id'=>$glazed_loggia_id,
                'parking_type_id'=>$parking_type_id,
                'num_of_parking_place'=>$num_of_parking_place,
                'num_of_Elevator'=>$num_of_Elevator,
                'estimated_cost_construction'=>$estimated_cost_construction,
                'territory_fencing_id'=>$territory_fencing_id,
                'security_id'=>$security_id,
                'last_user_id'=>$last_user_id,
                'date_rec'=>$date_rec,
                'rrb_housing_id'=>$rrb_housing_id,
                'material_name'=>$material_name,
                'wall_material_name'=>$wall_material_name,
                'proj_doc_name'=>$proj_doc_name,
                'floor_type_name'=>$floor_type_name,
                'consumer_cl_name'=>$consumer_cl_name,
                'economy_cl_name'=>$economy_cl_name,
                'finish_fl_name'=>$finish_fl_name,
                'finish_level_name'=>$finish_level_name,
                'finish_c_area_name'=>$finish_c_area_name,
                'glazed_log_name'=>$glazed_log_name,
                'parking_name'=>$parking_name,
                'fencing_name'=>$fencing_name,
                'security_name'=>$security_name
                );
            
          
        }
        
        mysqli_stmt_close($stmt);
    /*   
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  */
        
        echo $_GET["callback"].'({"totalCount":10,"results":'.json_encode($users_arr).
                '})';  
  
?>
