<?php

set_time_limit(100);
/*
 * Данный файл содержит функцию инциации отправки даных на сайт
 * В первой редакции данного механизма, происходит прямой инсерт в таблицы сайта
 * 
 */
 require_once 'arconn.php';
 require_once 'prep_data.php';
 require_once './templates.php';
 require_once './zoo_insert.php';
 require_once('../dbconn.php');
  require_once('./utilits.php');


$P_APARTMENT_ID =  $_POST["a_id"];
$P_ACTION_FLAG  =  $_POST["f"];


$p_date_rec =date("Y-m-d H:i:s");

/* Функция go выполняет вю логику вставки и удаления объекта на/с сайт(а)
 * in $P_APARTMENT_ID   - id комплекса  с которым происходит действие
 *    $P_ACTION_FLAG    - принимает несколько значений
 *                         ins - вставка объекта 
 *                         del - удаление объекта с сайта 
 * 
 */

function go($P_APARTMENT_ID, $P_ACTION_FLAG){
  try {
    $add_arr = array('SyncBtMoscow','SyncBtMO','SyncBtRussia','SyncBtSng');
    $dell_arr = array('SyncDelBtMoscow','SyncDelBtMO','SyncDelBtRussia','SyncDelBtSng');
     $o_message = "Информация не обработана! Обратитесь к разработчику.";
     if ($P_ACTION_FLAG == '1') {
         //$o_message .= "Вставка";
         
                    /*подготовка для вставки*/   

                    $apartments = rrb_apartment::all( array('conditions' => 'id = '. $P_APARTMENT_ID , 'limit' => 3));
                    
                        $subj_id = get_subject_state_id($P_APARTMENT_ID);
                            //if ($apartments[0]->city=='Москва'){
                            if ($subj_id == 87 ){
                            //if (in_array($apartments[0]->city, $ad_city_msk)) {  
                                   $p_application_id = 2;
                                   $p_type           = 'jk-moskva';
                                   $p_name           = $apartments[0]->complex_name; 
                                   $p_alias          = 'moskva-'.$P_APARTMENT_ID;
                                   $p_category       = 1; 
                                   $message_tail     = 'Москва'; 
                            //}elseif (in_array($apartments[0]->city, $ad_city_mo)) {
                            }elseif ($subj_id == 88) {                                
                                   $p_application_id = 2;
                                   $p_type           = 'jk-moskovskaya-oblast';
                                   $p_name           = $apartments[0]->complex_name; 
                                   $p_alias          = 'moskovskaya-oblast-'.$P_APARTMENT_ID;
                                   $p_category       = 2;
                                   $message_tail     = 'МО'; 
                            //}elseif (in_array($apartments[0]->city, $ad_city_russia)) {
                            }elseif ($subj_id !=87 and $subj_id !=88 and $subj_id <141) {    
                                   $p_application_id = 2;
                                   $p_type           = 'jk-russia';
                                   $p_name           = $apartments[0]->complex_name; 
                                   $p_alias          = 'russia-'.$P_APARTMENT_ID;
                                   $p_category       = 4;
                                   $message_tail     = 'Россия'; 
                            //}elseif (in_array($apartments[0]->city, $ad_city_sng)) {
                            }elseif ($subj_id >140) {        
                                   $p_application_id = 2;
                                   $p_type           = 'jk-sng';
                                   $p_name           = $apartments[0]->complex_name; 
                                   $p_alias          = 'sng-'.$P_APARTMENT_ID;
                                   $p_category       = 5;
                                   $message_tail     = 'СНГ'; 
                            }

                   //rrb data
                   $cplx_array = complex_data($P_APARTMENT_ID);
                   //echo "<pre>";
                   //print_r($cplx_array);
                   //zoo         
                   $p_created        = date("Y-m-d H:i:s");
                   $p_modified       = date("Y-m-d H:i:s");
                   $p_modified_by    = 42; 
                   $p_elements       = '{}';
                   $zooClass = new zoo_insert();
                   //echo $p_type.'<br>';
                   $el_array=$zooClass->getElementArray($p_type);
                   $el_Complex_Id = $zooClass->getElementIdByName($el_array, 'Complex_Id');
                   $zooClass->del_all($P_APARTMENT_ID, $el_Complex_Id);
                   $CORPSE_HTML_TAB  = get_CORPSE_HTML_TAB();
                   $o_message = prepare_corpses_n($cplx_array, $CORPSE_HTML_TAB);
                   $p_params   = $zooClass->meta_params($P_APARTMENT_ID, $p_category);
                   $item_id = $zooClass->insert_zoo_item(
                                       $p_application_id,
                                       $p_type,
                                       $p_name,
                                       $p_alias,
                                       $p_created,
                                       $p_modified,
                                       $p_modified_by,
                                       $p_elements,
                                       $p_params); 

                   //echo "item_id". $item_id;
                   //echo "<br> item_id class ". $zooClass->getItemId();
                   $zooClass->setItemId($item_id);
                   $out_cat_item = $zooClass->insert_category_item($p_category, $item_id);
                   $zooClass->getZooElements($el_array, $cplx_array);
             
             $o_message =' Данные по комплексу '.$apartments[0]->complex_name.' на сайте '.$message_tail;
             /*конец вставки по МО*/
         
        
         
      /*конец вставки*/       
     }elseif ($P_ACTION_FLAG == '2') {
      /*подготовка для удаления*/      
         
              
              
                  $apartments = rrb_apartment::all( array('conditions' => 'id = '. $P_APARTMENT_ID , 'limit' => 3));
                  $subj_id = get_subject_state_id($P_APARTMENT_ID);  
              
          
                    if ($subj_id == 87 ){    
                           $p_application_id = 2;
                           $p_type           = 'jk-moskva';
                           $p_name           = $apartments[0]->complex_name; 
                           $p_alias          = 'moskva-'.$P_APARTMENT_ID;
                           $p_category       = 1;  
                           $o_message = "Информацмя удаена с сайта. Москва";
                           
                    //}elseif (in_array($apartments[0]->city, $ad_city_mo)) {
                    }elseif ($subj_id == 88 ){
                           $p_application_id = 2;
                           $p_type           = 'jk-moskovskaya-oblast';
                           $p_name           = $apartments[0]->complex_name; 
                           $p_alias          = 'moskovskaya-oblast-'.$P_APARTMENT_ID;
                           $p_category       = 2;
                            $o_message = "Информацмя удаена с сайта. МО";
                    //}elseif (in_array($apartments[0]->city, $ad_city_russia)) {
                     }elseif ($subj_id !=87 and $subj_id !=88 and $subj_id <141) {    
                           $p_application_id = 2;
                           $p_type           = 'jk-russia';
                           $p_name           = $apartments[0]->complex_name; 
                           $p_alias          = 'russia-'.$P_APARTMENT_ID;
                           $p_category       = 4;
                           $o_message = "Информацмя удаена с сайта. Россия";
                    //}elseif (in_array($apartments[0]->city, $ad_city_sng)) {
                     }elseif ($subj_id >140) {          
                           $p_application_id = 2;
                           $p_type           = 'jk-sng';
                           $p_name           = $apartments[0]->complex_name; 
                           $p_alias          = 'sng-'.$P_APARTMENT_ID;
                           $p_category       = 5;
                           $o_message = "Информацмя удаена с сайта. СНГ";
                    }
              
              
              
                $zooClass = new zoo_insert();
                $el_array=$zooClass->getElementArray($p_type);
                $el_Complex_Id = $zooClass->getElementIdByName($el_array, 'Complex_Id');
                $zooClass->del_all($P_APARTMENT_ID, $el_Complex_Id);
         
      /*конец удаления*/         
     }elseif (in_array($P_ACTION_FLAG, $add_arr)) {
                    
         /*Заполняю массивы комплексами*/
                        

                    $cplxids = array();
                    if ($P_ACTION_FLAG=='SyncBtMoscow') {  
                        $p_type           = 'jk-moskva';
                        $p_category       = 1; 
                        $message_tail     = 'Москва'; 
                        
//                        $cond =array('conditions'=>array('city = ?', 'Москва'));
//                        $h_adreses = rrb_address::all($cond); 
//                        foreach($h_adreses as $h_adress) {
//                                $cplxids[]= $h_adress->rrb_housing_id;
                                // echo $h_adress->city;
                    
                        //$cplxids=get_cplx_id_by_subj('jk-moskva');
                    }elseif ($P_ACTION_FLAG=='SyncBtMO') {
                        $p_type           = 'jk-moskovskaya-oblast';
                        $p_category       = 2;
                        $message_tail     = 'МО'; 
                         
                        //$cplxids=get_cplx_id_by_subj('jk-moskovskaya-oblast');
                    }elseif ($P_ACTION_FLAG=='SyncBtRussia') {    
                           $p_type           = 'jk-russia';
                            $p_category       = 4;
                            $message_tail     = 'Россия'; 
                           
//                        $join =   'left join rrb_housing  h on rrb_housing_address.rrb_housing_id =  h.id';
//                        $h_adreses = rrb_address::all(array('joins' => $join,
//                                                     'conditions' => 'rrb_housing_address.district_of_subject != "Московская область"  and rrb_housing_address.city != "Москва"  and h.state_id = 1770',
//                                                   )); 
                         //$cplxids=get_cplx_id_by_subj('jk-russia');
                    }elseif ($P_ACTION_FLAG=='SyncBtSng') {
                        $p_type           = 'jk-sng';
                        $p_category       = 5;
                        $message_tail     = 'СНГ'; 
                        
                        //$cplxids=get_cplx_id_by_subj('jk-sng');
                    }     
                    //конец заполнения id комплексов
                    
                    $zooClass = new zoo_insert();
                    $CORPSE_HTML_TAB  = get_CORPSE_HTML_TAB();
                    $p_application_id = 2;
                    
                    $e=1;
                    $p_limit=30;
                    $p_offset=0;
                    while ($e == 1) {
                            $cplxids = get_cplx_id_by_subj($p_type,$p_limit, $p_offset);
                            if (!isset($cplxids)){
                                exit;
                                $e=0;
                            } else {
                                $p_offset = $p_offset +$p_limit;
                            

                                        foreach($cplxids as $cplxid) {
                                                          $apartments = rrb_apartment::all( array('conditions' => 'id = '. $cplxid , 'limit' => 3));
                                                       if ($P_ACTION_FLAG=='SyncBtMoscow') {  
                                                              $p_name           = $apartments[0]->complex_name; 
                                                              $p_alias          = 'moskva-'.$cplxid;
                                                       }elseif ($P_ACTION_FLAG=='SyncBtMO') {
                                                              $p_name           = $apartments[0]->complex_name; 
                                                              $p_alias          = 'moskovskaya-oblast-'.$cplxid;
                                                       }elseif ($P_ACTION_FLAG=='SyncBtRussia') {
                                                              $p_name           = $apartments[0]->complex_name; 
                                                              $p_alias          = 'russia-'.$cplxid;
                                                       }elseif ($P_ACTION_FLAG=='SyncBtSng') {
                                                              $p_name           = $apartments[0]->complex_name; 
                                                              $p_alias          = 'sng-'.$cplxid;
                                                       }

                                              //rrb data
                                              $cplx_array = complex_data($cplxid);


                                              //zoo         
                                              $p_created        = date("Y-m-d H:i:s");
                                              $p_modified       = date("Y-m-d H:i:s");
                                              $p_modified_by    = 42; 
                                              $p_elements       = '{}';



                                              //echo $p_type.'<br>';
                                              $el_array=$zooClass->getElementArray($p_type);
                                              $el_Complex_Id = $zooClass->getElementIdByName($el_array, 'Complex_Id');
                                              $zooClass->del_all($cplxid, $el_Complex_Id);

                                              prepare_corpses_n($cplx_array, $CORPSE_HTML_TAB);
                                              $p_params   = $zooClass->meta_params($cplxid, $p_category);
                                              $item_id = $zooClass->insert_zoo_item(
                                                                  $p_application_id,
                                                                  $p_type,
                                                                  $p_name,
                                                                  $p_alias,
                                                                  $p_created,
                                                                  $p_modified,
                                                                  $p_modified_by,
                                                                  $p_elements,
                                                                  $p_params); 

                                              $zooClass->setItemId($item_id);
                                              $out_cat_item = $zooClass->insert_category_item($p_category, $item_id);
                                              $zooClass->getZooElements($el_array, $cplx_array);
                                              
                                              $cplx_array  = array();

                                 }    //for each $cplxids  
                            }
                    
                               
                   
                      
                } //while e      
         $o_message = 'Вставленны данные по '.  $message_tail;
     }
      elseif (in_array($P_ACTION_FLAG, $dell_arr)) {
                  
          
         
          
             $cplxids = array();
                    if ($P_ACTION_FLAG=='SyncDelBtMoscow') {
                        $p_type           = 'jk-moskva';
                        $cplxids=get_cplx_id_by_subj('jk-moskva');
                    }elseif ($P_ACTION_FLAG=='SyncDelBtMO') {
                        $p_type           = 'jk-moskovskaya-oblast';
                        $cplxids=get_cplx_id_by_subj('jk-moskovskaya-oblast');
                    }elseif ($P_ACTION_FLAG=='SyncDelBtRussia') { 
                        $p_type           = 'jk-russia';
                        $cplxids=get_cplx_id_by_subj('jk-russia');
                    }elseif ($P_ACTION_FLAG=='SyncDelBtSng') {
                        $p_type           = 'jk-sng';
                        $cplxids=get_cplx_id_by_subj('jk-sng');
                    }
          //print_r($cplxids);
          foreach($cplxids as $cplxid) {
                //echo $cplxid ."<br>";
                $zooClass = new zoo_insert();
                $el_array=$zooClass->getElementArray($p_type);
                $el_Complex_Id = $zooClass->getElementIdByName($el_array, 'Complex_Id');
                $zooClass->del_all($cplxid, $el_Complex_Id);
          }
          
          $o_message = 'Удаление пачкой '.  $p_type;
      }
   

  } catch (Exception $e) {
     $o_message = 'Выброшено глобальное исключение: go '.  $e->getMessage(). "\n";
  }
 return $o_message;    
}

$return = go($P_APARTMENT_ID, $P_ACTION_FLAG);
echo "{success:true,errors:{reason:'".$return."'}}";



?>
