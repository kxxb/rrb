<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */





/* Получение значения из справочника
 * 
 */
function get_hnbdb_value($key){
    $value_name ='';
    try{
            $value_name =  rrb_handbooks::find('all', array('conditions' => 'id = '.$key));
            $value_name  = $value_name[0]->hndb_value;
       } catch (Exception $e) {
            $value_name = 'пусто ';
       }
  return $value_name;
}

function get_hnbdb_mask($key){
    $value_name ='';
    try{
            $value_name =  rrb_handbooks::find('all', array('conditions' => 'id = '.$key));
            $value_name  = $value_name[0]->hndb_mask;
       } catch (Exception $e) {
            $value_name = 'пусто ';
       }
  return $value_name;
}





/*вспомоготельная функция для расчёта площадей и стоимостей квартир в корпусе*/
function calculate_flat_data($p_connect, $rrb_housing_id, $p_quant_rooms_in_flat ){
    try{
    $v_result ="";
     $bad_message="";
    $i=0;
    $u=0;
    $o_out= array();
    $query = "   SELECT 
                    IFNULL(t.total_flat_area, 0),
                    IFNULL(min(CONVERT( (t.price_whoole_payment),   DECIMAL(10,2) ) ), 0) as min_price_whoole_payment, 
                    IFNULL(CONVERT( (t.price_whoole_payment/t.total_flat_area),   DECIMAL(10,2) ), 0)  as sq_m_price,
                    IFNULL(max(CONVERT( (t.price_whoole_payment),   DECIMAL(14,2) ) ), 0) AS max_price_whoole_payment,
                    IFNULL(CONVERT( (sum(t.price_whoole_payment) / sum(t.total_flat_area)),   DECIMAL(10,2) ), 0)  as avg_sq_m_price,
                    IFNULL(count(quant_rooms_in_flat), 0) as count_flats,
                    IFNULL(avg(t.total_flat_area), 0) as avg_area,
                    IFNULL(sum(t.total_flat_area), 0) as sum_area,
                    IFNULL(sum(t.price_whoole_payment), 0) as sum_area,
                    IFNULL(CONVERT( min((t.price_whoole_payment/t.total_flat_area)),   DECIMAL(10,2) ), 0)  as min_sq_m_price,
                    IFNULL(CONVERT( max((t.price_whoole_payment/t.total_flat_area)),   DECIMAL(10,2) ), 0)  as max_sq_m_price
            FROM rrb.rrb_flats t 
            where rrb_housing_id = $rrb_housing_id";
    
            
            if ($p_quant_rooms_in_flat == 'студия') {
            $query = $query."  and  quant_rooms_in_flat = '$p_quant_rooms_in_flat'";      }
            
            elseif ($p_quant_rooms_in_flat == 'пусто') {    
                $query = $query;
            
           } elseif ($p_quant_rooms_in_flat != null){
              $query = $query."  and  quant_rooms_in_flat = $p_quant_rooms_in_flat";      }
     //$connection = conn();
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                
                 $v_total_flat_area,
                 $v_min_price_whoole_payment ,
                 $v_sq_m_price ,
                 $v_max_price_whoole_payment ,
                 $v_avg_sq_m_price,
                 $v_count_flats,
                 $v_avg_area,
                 $v_sum_area,
                 $v_sum_area,
                 $v_min_sq_m_price,
                 $v_max_sq_m_price
                );
          
        while (mysqli_stmt_fetch($stmt)) {
            $o_out[0]=  $v_total_flat_area;
            //$o_out[1]=  number_format($v_min_price_whoole_payment, 0, ',', ' ');
            $o_out[1]=  $v_min_price_whoole_payment;
            $o_out[2]=  $v_sq_m_price;
//            $o_out[2]=  number_format($v_sq_m_price, 0, ',', ' ') ;
//            $o_out[3]=  number_format($v_max_price_whoole_payment, 0, ',', ' ');
            $o_out[3]=  $v_max_price_whoole_payment;
            //$o_out[4]=  number_format($v_avg_sq_m_price, 0, ',', ' ');
            $o_out[4]= $v_avg_sq_m_price;
            $o_out[5]=  $v_count_flats;
            $o_out[6]=  $v_avg_area;
            $o_out[7]=  $v_sum_area;
            $o_out[8]=  $v_sum_area;
            $o_out[9]=  $v_min_sq_m_price;
            $o_out[10]= $v_max_sq_m_price;
            //$o_out[9]=  number_format($v_min_sq_m_price, 0, ',', ' ');
            //$o_out[10]= number_format($v_max_sq_m_price, 0, ',', ' ');
            
            $o_out[11]=  number_format($v_min_price_whoole_payment, 0, ',', ' ');
            $o_out[12]=  number_format($v_sq_m_price, 0, ',', ' ') ;
            $o_out[13]=  number_format($v_max_price_whoole_payment, 0, ',', ' ');
            $o_out[14]=  number_format($v_avg_sq_m_price, 0, ',', ' ');
            $o_out[19]=  number_format($v_min_sq_m_price, 0, ',', ' ');
            $o_out[20]= number_format($v_max_sq_m_price, 0, ',', ' ');
        }
         mysqli_stmt_close($stmt);
       return $o_out;  
     } catch (Exception $exc) {
            $o_out[0]= 0;
            $o_out[1]= 0;
            $o_out[2]= 0 ;
            $o_out[3]= 0;
            $o_out[4]= 0;
            $o_out[5]= 0;
            $o_out[6]= 0;
            $o_out[7]= 0;
            $o_out[8]= 0;
            $o_out[11]= 0;
            $o_out[12]= 0;
            $o_out[13]= 0;
            $o_out[14]= 0;
            $o_out[19]= 0;
            $o_out[20]=  0;
            return $o_out;  
    }
                         
    
}

/*вспомоготельная функция для расчёта площадей и стоимостей квартир в корпусе*/
function calculate_price_diapazon($p_connect, $cplx_id){
    try{
    $v_result ="";
     $bad_message="";
    $i=0;
    $u=0;
    $o_out= array();
    $query = "   SELECT 
                    IFNULL(t.total_flat_area, 0),
                    IFNULL(min(CONVERT( (t.price_whoole_payment),   DECIMAL(10,2) ) ), 0) as min_price_whoole_payment, 
                    IFNULL(CONVERT( (t.price_whoole_payment/t.total_flat_area),   DECIMAL(10,2) ), 0)  as sq_m_price,
                    IFNULL(max(CONVERT( (t.price_whoole_payment),   DECIMAL(14,2) ) ), 0) AS max_price_whoole_payment,
                    IFNULL(CONVERT( (sum(t.price_whoole_payment) / sum(t.total_flat_area)),   DECIMAL(10,2) ), 0)  as avg_sq_m_price,
                    IFNULL(count(quant_rooms_in_flat), 0) as count_flats,
                    IFNULL(avg(t.total_flat_area), 0) as avg_area,
                    IFNULL(sum(t.total_flat_area), 0) as sum_area,
                    IFNULL(sum(t.price_whoole_payment), 0) as sum_area,
                    IFNULL(CONVERT( min((t.price_whoole_payment/t.total_flat_area)),   DECIMAL(10,2) ), 0)  as min_sq_m_price,
                    IFNULL(CONVERT( max((t.price_whoole_payment/t.total_flat_area)),   DECIMAL(10,2) ), 0)  as max_sq_m_price
            FROM rrb.rrb_flats t 
            where rrb_housing_id   in (SELECT id FROM rrb.rrb_housing
                where apartment_coplex_id =  $cplx_id)";
    
            
           
     //$connection = conn();
        $p_connect->query("SET NAMES 'cp1251'");
        $stmt = $p_connect->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                
                 $v_total_flat_area,
                 $v_min_price_whoole_payment ,
                 $v_sq_m_price ,
                 $v_max_price_whoole_payment ,
                 $v_avg_sq_m_price,
                 $v_count_flats,
                 $v_avg_area,
                 $v_sum_area,
                 $v_sum_area,
                 $v_min_sq_m_price,
                 $v_max_sq_m_price
                );
          
        while (mysqli_stmt_fetch($stmt)) {
            $o_out[0]=  $v_total_flat_area;
            $o_out[1]=  number_format($v_min_price_whoole_payment, 0, ',', ' ');
            //$o_out[1]=  $v_min_price_whoole_payment;
            //$o_out[2]=  $v_sq_m_price;
            $o_out[2]=  number_format($v_sq_m_price, 0, ',', ' ') ;
            $o_out[3]=  number_format($v_max_price_whoole_payment, 0, ',', ' ');
            //$o_out[3]=  $v_max_price_whoole_payment;
            $o_out[4]=  number_format($v_avg_sq_m_price, 0, ',', ' ');
            //$o_out[4]= $v_avg_sq_m_price;
            $o_out[5]=  $v_count_flats;
            $o_out[6]=  $v_avg_area;
            $o_out[7]=  $v_sum_area;
            $o_out[8]=  $v_sum_area;
            //$o_out[9]=  $v_min_sq_m_price;
            //$o_out[10]= $v_max_sq_m_price;
            $o_out[9]=  number_format($v_min_sq_m_price, 0, ',', ' ');
            $o_out[10]= number_format($v_max_sq_m_price, 0, ',', ' ');
        }
         mysqli_stmt_close($stmt);
       return $o_out;  
     } catch (Exception $exc) {
            $o_out[0]=  0;
            $o_out[1]= 0;
            $o_out[2]= 0 ;
            $o_out[3]= 0;
            $o_out[4]= 0;
            $o_out[5]= 0;
            $o_out[6]= 0;
            $o_out[7]= 0;
            $o_out[8]= 0;
            return $o_out;  
    }
                         
    
}




function nvl($p_var){
    $val = 'Н/Д';
    if (is_null($p_var)) {
    return $val;}
    elseif ($p_var ===''){
    return $val;}
    elseif ($p_var ==='is null'){
    return $val;}
    elseif ($p_var ==='99999'){
    return $val;}
    elseif ($p_var ===99999){
    return $val;}
    elseif ($p_var === 99999.00 ){
    return $val;}
    elseif ($p_var ==='101010'){
    return $val;}
    elseif ($p_var ===101010.00 ){
    return $val;}
    elseif ($p_var ==='пусто'){
    return $val;}
    else{
      return $p_var;
    }
    
}


/*
 * Подготовка таблички по корпусам
 * in   id комплекса
 * out  вставка в таблицу 
 */
function prepare_corpses_n($cplx_array, $CORPSE_TAB){
   
 try{ 
     
     foreach ($cplx_array['corpses'] as $corpse){   
         
       $korps_tmp = str_replace("%naseleny_punkt%",                     $corpse['naseleny_punkt'], $CORPSE_TAB);
       $korps_tmp = str_replace("%ploshad_studio_from%",                  $corpse['ploshad_studio_from'], $korps_tmp);  
       $korps_tmp = str_replace("%ploshad_studio_to%",                    $corpse['ploshad_studio_to'], $korps_tmp);  
       $korps_tmp = str_replace("%ploshad_1komn_from%",                  $corpse['ploshad_1komn_from'], $korps_tmp);  
       $korps_tmp = str_replace("%ploshad_1komn_to%",                  $corpse['ploshad_1komn_to'], $korps_tmp);  
       $korps_tmp = str_replace("%ploshad_2komn_from%",                  $corpse['ploshad_2komn_from'], $korps_tmp);  
       $korps_tmp = str_replace("%ploshad_2komn_to%",                  $corpse['ploshad_2komn_to'], $korps_tmp);  
       $korps_tmp = str_replace("%ploshad_3komn_from%",                  $corpse['ploshad_3komn_from'], $korps_tmp);  
       $korps_tmp = str_replace("%ploshad_3komn_to%",                  $corpse['ploshad_3komn_to'], $korps_tmp);  
       $korps_tmp = str_replace("%ploshad_mnogokomn_from%",                  $corpse['ploshad_mnogokomn_from'], $korps_tmp);  
       $korps_tmp = str_replace("%ploshad_mnogokomn_to%",                  $corpse['ploshad_mnogokomn_to'], $korps_tmp);  
       $korps_tmp = str_replace("%costkvm_studio_from%",                  $corpse['costkvm_studio_from'], $korps_tmp);  
       $korps_tmp = str_replace("%costkvm_studio_to%",                  $corpse['costkvm_studio_to'], $korps_tmp);  
       $korps_tmp = str_replace("%costflat_studio_from%",                  $corpse['costflat_studio_from'], $korps_tmp);  
       $korps_tmp = str_replace("%costflat_studio_to%",                  $corpse['costflat_studio_to'], $korps_tmp);  
       $korps_tmp = str_replace("%costkvm_1komn_from%",                  $corpse['costkvm_1komn_from'], $korps_tmp);  
       $korps_tmp = str_replace("%costkvm_1komn_to%",                  $corpse['costkvm_1komn_to'], $korps_tmp);  
       $korps_tmp = str_replace("%costflat_1komn_from%",                  $corpse['costflat_1komn_from'], $korps_tmp);  
       $korps_tmp = str_replace("%costflat_1komn_to%",                  $corpse['costflat_1komn_to'], $korps_tmp);         
       $korps_tmp = str_replace("%costkvm_2komn_from%",                  $corpse['costkvm_2komn_from'], $korps_tmp);  
       $korps_tmp = str_replace("%costkvm_2komn_to%",                  $corpse['costkvm_2komn_to'], $korps_tmp);  
       $korps_tmp = str_replace("%costflat_2komn_from%",                  $corpse['costflat_2komn_from'], $korps_tmp);  
       $korps_tmp = str_replace("%costflat_2komn_to%",                  $corpse['costflat_2komn_to'], $korps_tmp);  
       $korps_tmp = str_replace("%costkvm_3komn_from%",                  $corpse['costkvm_3komn_from'], $korps_tmp);  
       $korps_tmp = str_replace("%costkvm_3komn_to%",                  $corpse['costkvm_3komn_to'], $korps_tmp);  
       $korps_tmp = str_replace("%costflat_3komn_from%",                  $corpse['costflat_3komn_from'], $korps_tmp);  
       $korps_tmp = str_replace("%costflat_3komn_to%",                  $corpse['costflat_3komn_to'], $korps_tmp);  
       $korps_tmp = str_replace("%costkvm_mnogokomn_from%",                  $corpse['costkvm_mnogokomn_from'], $korps_tmp);  
       $korps_tmp = str_replace("%costkvm_mnogokomn_to%",                  $corpse['costkvm_mnogokomn_to'], $korps_tmp);  
       $korps_tmp = str_replace("%costflat_mnogokomn_from%",                  $corpse['costflat_mnogokomn_from'], $korps_tmp);  
       $korps_tmp = str_replace("%costflat_mnogokomn_to%",                  $corpse['costflat_mnogokomn_to'], $korps_tmp);  
       $korps_tmp = str_replace("%ipoteka_korpus%",                  $corpse['ipoteka_korpus'], $korps_tmp);  
       $korps_tmp = str_replace("%tip_dogovora_korpus%",                  $corpse['tip_dogovora_korpus'], $korps_tmp);  
       $korps_tmp = str_replace("%prodavcy_korpus%",                  $corpse['prodavcy_korpus'], $korps_tmp);  
       
        $korps_tmp = str_replace("%ploshad_studio_tpl%",                 $corpse['ploshad_studio_tpl'], $korps_tmp);  
        $korps_tmp = str_replace("%ploshad_1komn_tpl%",                  $corpse['ploshad_1komn_tpl'], $korps_tmp);  
        $korps_tmp = str_replace("%ploshad_2komn_tpl%",                  $corpse['ploshad_2komn_tpl'], $korps_tmp);  
        $korps_tmp = str_replace("%ploshad_3komn_tpl%",                  $corpse['ploshad_3komn_tpl'], $korps_tmp);  
        $korps_tmp = str_replace("%ploshad_mnogokomn_tpl%",              $corpse['ploshad_mnogokomn_tpl'], $korps_tmp);  
        $korps_tmp = str_replace("%costkvm_studio_tpl%",                 $corpse['costkvm_studio_tpl'], $korps_tmp);  
        $korps_tmp = str_replace("%costkvm_1komn_tpl%",                  $corpse['costkvm_1komn_tpl'], $korps_tmp);  
        $korps_tmp = str_replace("%costkvm_2komn_tpl%",                  $corpse['costkvm_2komn_tpl'], $korps_tmp);  
        $korps_tmp = str_replace("%costkvm_3komn_tpl%",                  $corpse['costkvm_3komn_tpl'], $korps_tmp);  
        $korps_tmp = str_replace("%costkvm_mnogokomn_tpl%",              $corpse['costkvm_mnogokomn_tpl'], $korps_tmp);  
        $korps_tmp = str_replace("%costflat_studio_tpl%",                $corpse['costflat_studio_tpl'], $korps_tmp);  
        $korps_tmp = str_replace("%costflat_1komn_tpl%",                 $corpse['costflat_1komn_tpl'], $korps_tmp);  
        $korps_tmp = str_replace("%costflat_2komn_tpl%",                 $corpse['costflat_2komn_tpl'], $korps_tmp);  
        $korps_tmp = str_replace("%costflat_3komn_tpl%",                 $corpse['costflat_3komn_tpl'], $korps_tmp);  
        $korps_tmp = str_replace("%costflat_mnogokomn_tpl%",             $corpse['costflat_mnogokomn_tpl'], $korps_tmp);  

      
       
       $korps_tmp = str_replace("%addres%",                    $corpse['addres'], $korps_tmp);  
       $korps_tmp = str_replace("%korpus_type%",               $corpse['korpus_type'], $korps_tmp);  
       $korps_tmp = str_replace("%seria%",                     $corpse['seria'], $korps_tmp);  
       $korps_tmp = str_replace("%num_floors%",                $corpse['num_floors'], $korps_tmp);  
       $korps_tmp = str_replace("%construction_stage%",        $corpse['construction_stage'], $korps_tmp);  
       $korps_tmp = str_replace("%deadline%",                  $corpse['deadline'], $korps_tmp);  
       $korps_tmp = str_replace("%otdelka%",                   $corpse['otdelka'], $korps_tmp);  
       $korps_tmp = str_replace("%etajnost%",                  $corpse['etajnost'], $korps_tmp);  
       $korps_tmp = str_replace("%deadline%",                  $corpse['deadline'], $korps_tmp);  
       
     
            
      
       
       $j_zoo_corpse = new zoo_corpse();
       $j_zoo_corpse->complex_id  = $cplx_array['complex_id'];
       $j_zoo_corpse->korpse_id   = $corpse['corpse_id'];
       $j_zoo_corpse->korpse_name = 'Корпус '. $corpse['corpse_number'];
       $j_zoo_corpse->korpse_desc = $korps_tmp;
       $j_zoo_corpse->save();
       
       $korps_tmp='';
       
    }
    $res = 1;
     } catch (Exception $exc) {
         $res =  "prepare corpse - ". $exc->getMessage();;
    }
    return $res;
}


function get_subject_state_id($p_aratmen_id){
    $join =   'left join rrb_housing h on rrb_housing_address.rrb_housing_id = h.id';
    $h_adreses = rrb_address::all(array('joins' => $join,
                                 'conditions' => 'h.apartment_coplex_id ='.$p_aratmen_id,
                               )); 
    return $h_adreses[0]->subject_of_state_id;
}


function get_cplx_id_by_subj($p_subj, $p_limit=10, $p_offset=0){
    $cplxids = null;
    if ($p_subj=='jk-moskva'){
        $condition = 'a.subject_of_state_id = 87  and f.impl_status_id = 50';
    }elseif($p_subj=='jk-moskovskaya-oblast'){
        $condition = 'a.subject_of_state_id = 88 and f.impl_status_id = 50 ';
    }elseif($p_subj=='jk-russia'){
        $condition = 'a.subject_of_state_id  !=87 and a.subject_of_state_id  !=88 and a.subject_of_state_id <141   and f.impl_status_id = 50';
    }elseif($p_subj=='jk-sng'){
        $condition = 'a.subject_of_state_id >140   and f.impl_status_id = 50';
    }
    $join =  'left join rrb_housing_address a on a.rrb_housing_id = rrb_housing.id  left join rrb_housing_finance f on f.rrb_housing_id = rrb_housing.id';
    //$join =  'left join rrb_housing_address a on a.rrb_housing_id = rrb_housing.id';
    $h_s = rrb_housing::all(array('select' => 'DISTINCT apartment_coplex_id',
                                 'joins' => $join,
                                 'conditions' => $condition,
                                 'limit' => $p_limit,
                                 'offset' => $p_offset
                                 // 'order' => 'apartment_coplex_id'
                               )); 
       foreach($h_s as $h) {
          $cplxids[]= $h->apartment_coplex_id;
         }
         
    return $cplxids;
    
    
}

?>
