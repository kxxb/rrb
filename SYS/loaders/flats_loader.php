<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once('../dbconn.php');
require_once('../../helper/handbooks/hndb_utilits.php');

function load_rrb_housing_investor_builder($p_connect){
    $v_result ="";
    $bad_message="";
    $i=0;
    $u=0;
    $o_out="";
    $query = "
        select 
        rrb_housing_id	,
        address	,
        section	,
        /* CONVERT( REPLACE(floor_numb, ',', ''),   DECIMAL(10,2)) as  floor_numb	,
        CONVERT( REPLACE(quant_rooms_in_flat, ',', ''),   DECIMAL(10,2)) as  quant_rooms_in_flat	,
        CONVERT( REPLACE(total_flat_area, ',', ''),   DECIMAL(10,2)) as  total_flat_area	,
        CONVERT( REPLACE(live_area, ',', ''),   DECIMAL(10,2)) as live_area	,
        CONVERT( REPLACE(kitchen_area, ',', ''),   DECIMAL(10,2)) as  kitchen_area	,
        CONVERT( REPLACE(balcony_area, ',', ''),   DECIMAL(10,2))  as balcony_area	,
        CONVERT( REPLACE(price_whoole_payment, ',', ''),   DECIMAL(10,2)) as price_whoole_payment, 
        CONVERT( REPLACE(price_lease_payment, ',', ''),   DECIMAL(10,2)) as price_lease_payment, */
        
        CONVERT( floor_numb,  DECIMAL(10,2)) as  floor_numb	,
        CONVERT( quant_rooms_in_flat,  DECIMAL(10,2)) as  quant_rooms_in_flat	,
        CONVERT( total_flat_area,    DECIMAL(10,2)) as  total_flat_area	,
        CONVERT( live_area,    DECIMAL(10,2)) as live_area	,
        CONVERT( kitchen_area,   DECIMAL(10,2)) as  kitchen_area	,
        CONVERT( balcony_area,    DECIMAL(10,2))  as balcony_area	,
        CONVERT( price_whoole_payment,    DECIMAL(10,2)) as price_whoole_payment, 
        CONVERT( price_lease_payment,    DECIMAL(10,2)) as price_lease_payment,



        flat_descripton	,
        saler_name	,
        saler_contact	,
        link_to_source_inf	,
        STR_TO_DATE(collect_information_dt, '%m/%d/%Y') as collect_information_dt,
        STR_TO_DATE(report_on_phase_dt, '%m/%d/%Y') as report_on_phase_dt,
        state,
        city
	

 FROM rrb_temporary_flats;";
    
    
    
     //$connection = conn();
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                  $p_rrb_housing_id,
                     $p_addres, $p_section,    
                      $p_floor_numb, $p_quant_rooms_in_flat, $p_total_flat_area, 
                      $p_live_area, $p_kitchen_area, $p_balcony_area, 
                      $p_price_whoole_payment, $p_price_lease_payment, $p_flat_descripton, 
                      $p_saler_name, $p_saler_contact, $p_link_to_source_inf, 
                      $p_collect_information_dt, $p_report_on_phase_dt, $v_state, $v_city	
                );
          
        while (mysqli_stmt_fetch($stmt)) {
            
            //$p_connect = conn();
            $p_state_id = $p_state_id = get_hndb_key($p_connect, 925, $v_state);
            $a = get_suragat_key($p_connect, $v_komplex, $p_state_id, $v_city);
            $p_rrb_housing_id = get_housing_key($p_connect, $p_state_id, $v_city, $p_rrb_housing_id);;
            $p_last_user_id = 1;
            $p_date_rec = date("Y-m-d H:i:s");
            $p_mode = "UI";
            $p_id = 0;
            
              $v_result = uid_rrb_flats($p_connect,
                      $p_id, $p_last_user_id, $p_date_rec, 
                      $p_section, 
                      $p_floor_numb, $p_quant_rooms_in_flat, $p_total_flat_area, 
                      $p_live_area, $p_kitchen_area, $p_balcony_area, 
                      $p_price_whoole_payment, $p_price_lease_payment, $p_flat_descripton, 
                      $p_saler_name, $p_saler_contact, $p_link_to_source_inf, 
                      $p_collect_information_dt, $p_report_on_phase_dt, $p_rrb_housing_id, 
                      $p_mode);
                    ;
              
              if ($v_result == "{success:true,errors:{reason:'Запись сохранена!'}}"){
                  ++$i;
              } elseif ($v_result == "{success:true,errors:{reason:'Запись изменена!'}}") {
                  ++$u;
              } else {
                 $bad_message .=  $v_result;
              }
        }
         $o_out = "load_rrb_flats - inserted $i | updated $u  | $bad_message <br>";
        mysqli_stmt_close($stmt);
       
        return $o_out;  
                        
    
}

function get_suragat_key($p_connect, $p_complex_name , $p_state_id , $p_city){
        $output = 0;
        $query = " SELECT id FROM rrb.rrb_apartment_comlex
                        where complex_name = ?
                          and state_id = ? 
                          and city = ? ";
        
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        $stmt->bind_param("sss",$p_complex_name , $p_state_id , $p_city); 

        /* execute query */
        
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $v_id );
        
        while (mysqli_stmt_fetch($stmt)) {
        $output=    $v_id; 
        };
        return $output;
 }

 
 function get_housing_key($p_connect,  $p_state_id, $v_city, $p_rrb_housing_id){
        $output = 0;
        $query = "select h.id from rrb.rrb_housing h
                    where h.state_id = ?
                    and h.city = ?
                    and h.csv_id = ?
                    ;";        
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        $stmt->bind_param("isi", $p_state_id, $v_city, $p_rrb_housing_id); 

        /* execute query */
        
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $v_id );
        
        while (mysqli_stmt_fetch($stmt)) {
        $output=    $v_id; 
        };
        return $output;
 }
 
function uid_rrb_flats(
$p_connect, $p_id, $p_last_user_id, $p_date_rec, $p_section, $p_floor_numb, $p_quant_rooms_in_flat, $p_total_flat_area, $p_live_area, $p_kitchen_area, $p_balcony_area, $p_price_whoole_payment, $p_price_lease_payment, $p_flat_descripton, $p_saler_name, $p_saler_contact, $p_link_to_source_inf, $p_collect_information_dt, $p_report_on_phase_dt, $p_rrb_housing_id, $p_mode) {
    $v_result = "";
    $query_ui = "CALL uid_rrb_flats(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,@output);";
    $p_connect->query("SET NAMES 'cp1251'");
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "iissssssssssssssssis", $p_id, $p_last_user_id, $p_date_rec, $p_section, $p_floor_numb, $p_quant_rooms_in_flat, $p_total_flat_area, $p_live_area, $p_kitchen_area, $p_balcony_area, $p_price_whoole_payment, $p_price_lease_payment, $p_flat_descripton, $p_saler_name, $p_saler_contact, $p_link_to_source_inf, $p_collect_information_dt, $p_report_on_phase_dt, $p_rrb_housing_id, $p_mode
    );
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
        if ($output == 'good_insert') {
            $v_result = "{success:true,errors:{reason:'Запись сохранена!'}}";
        }
        if ($output == 'good_update') {
            $v_result = "{success:true,errors:{reason:'Запись изменена!'}}";
        }
        if ($output == 'good_delete') {
            $v_result = "{success:true,errors:{reason:'Запись удалена!'}}";
        }
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $v_result;
}




?>
