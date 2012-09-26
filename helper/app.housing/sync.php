<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$o_meesage ='';

try{
require_once 'ar-conn.php';



 function prepare_korpse($i, $P_APARTMENT_ID){
/*
    
2.1. Наименование корпуса	rrb_housing	
2.2. Тип дома	   rrb_housing_specification	type_of_building
2.3. Номер серии (если нет, то индивидуальный проект)		serial_number
2.4. Этажность (мин. макс.)		min_floors
2.5. Срок строительства: до	rrb_investor_builder	schedul_dt_commiss
2.6.Стадия строительства (проект, строится, построен, сдан ГК). Для каждого корпуса указывается	rrb_investor_builder	build_stage_id
стадия.		
2.7. Диапазон площадей квартир в корпусе: 1-комн., 2-комн. и др. (от ___ до)		
2.8. Полная цена на 1-комн., 2-комн и др. – (от ____ до )		
*/

$apartments = rrb_apartment::find('all', array('conditions' => 'id = '. $P_APARTMENT_ID , 'limit' => 3));
$housings = rrb_housing::find('all', array('conditions' => 'apartment_coplex_id = '. $P_APARTMENT_ID ));
  /*All id of Corpses this Appartment Complex*/
  $housing_ids = array();
  foreach($housings as $housing ) 
      $housing_ids[]= $housing->id;
  $cond =array('conditions'=>array('rrb_housing_id in(?) ',  $housing_ids));
$h_adreses = rrb_address::all($cond); 
$h_finances = rrb_finance::all($cond);
$h_builders = rrb_builder::all($cond);
$h_infrastructures = rrb_infrastructure::all($cond);
$h_specifications  = rrb_spec::all($cond);

$build_date = null;

if ($h_builders[$i]->schedul_dt_commiss  != null) {
      $build_date = $h_builders[$i]->schedul_dt_commiss->format('Y-m-d H:i:s'); 
               
      }

$korps_tmp ='<table width="100%">
	     <tbody>
		<tr>
			<td width="40%">
				Наименование корпуса</td>
			<td>
				'.$housings[$i]->name.'</td>
		</tr>
                <tr>
			<td width="40%">
				Тип дома</td>
			<td>
				'. get_hnbdb_value($h_specifications[$i]->type_of_building).'</td>
		</tr>
                <tr>
			<td width="40%">
				Номер серии (если нет, то индивидуальный проект)</td>
			<td>
				'.$h_specifications[$i]->serial_number.'</td>
		</tr>
                 <tr>
			<td width="40%">
				Этажность (мин. макс.)</td>
			<td>
				мин. '.$h_specifications[$i]->min_floors .' макс. '.
                                        $h_specifications[$i]->max_floors .'
                                </td>
		</tr>
                 <tr>
			<td width="40%">
				Срок строительства: до</td>
			<td>
				'. $build_date.'</td>
		</tr>
                 <tr>
			<td width="40%">
				Стадия строительства </td>
			<td>
				'.get_hnbdb_value($h_builders[$i]->build_stage_id).'</td>
		</tr>
                 <tr>
			<td width="40%">
				Диапазон площадей квартир в корпусе: </td>
			<td>
				Значение</td>
		</tr>
                  <tr>
			<td width="40%">
				Полная цена на 1-комн., 2-комн и др. – (от ____ до ) </td>
			<td>
				Значение</td>
		</tr>
 	</tbody>
     </table>';   
return $korps_tmp;
   };

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

///////////////////////////////////////////////////////////////////////////////
//
//////////////////////////////////////////////////////////////////////////////


$P_APARTMENT_ID =  $_GET["a_id"];
$p_date_rec =date("Y-m-d H:i:s");
  

$apartments = rrb_apartment::find('all', array('conditions' => 'id = '. $P_APARTMENT_ID , 'limit' => 3));
$housings = rrb_housing::find('all', array('conditions' => 'apartment_coplex_id = '. $P_APARTMENT_ID ));
  /*All id of Corpses this Appartment Complex*/
  $housing_ids = array();
  foreach($housings as $housing ) 
      $housing_ids[]= $housing->id;
  $cond =array('conditions'=>array('rrb_housing_id in(?) ',  $housing_ids));
$h_adreses = rrb_address::all($cond); 
$h_finances = rrb_finance::all($cond);
$h_builders = rrb_builder::all($cond);
$h_infrastructures = rrb_infrastructure::all($cond);
$h_specifications  = rrb_spec::all($cond);



$dirrection_name = get_hnbdb_value($h_adreses[0]->dirrection_id);



  $infrastructure_ids = array();
  foreach($h_infrastructures as $h_infrastructure ) 
      $infrastructure_ids[]= $h_infrastructure->type_of_infrastructure_id;


  
  $cond =array('conditions'=>array('id in (?) ',  $infrastructure_ids));
  $infr_names = rrb_handbooks::all($cond);
   foreach($infr_names as $infr_name ) 
     $vokrug .=  $infr_name->hndb_value."<br>";
 
   
   /*
  catid
19 НОВОСТРОЙКИ МОСКВЫ
21 НОВОСТРОЙКИ МОСКОВСКОЙ ОБЛАСТИ
22 НОВОСТРОЙКИ НОВОЙ МОСКВЫ
23 НОВОСТРОЙКИ РОССИИ
24 НОВОСТРОЙКИ СНГ
	
*/
 
   
   $korps_tmp1= prepare_korpse(0, $P_APARTMENT_ID);
   $korps_tmp2= prepare_korpse(1, $P_APARTMENT_ID);
 
 try{
     $rrbgate_joom_object_d = rrbgate_joom::find($apartments[0]->id);
     $rrbgate_joom_object_d->delete();
    } catch (Exception $e) {
        null;
       // Ничего не делай если не смог удалить 
    }
$rrbgate_joom_object = new rrbgate_joom();

$rrbgate_joom_object->id= $apartments[0]->id;
$rrbgate_joom_object->title= $apartments[0]->complex_name;
$rrbgate_joom_object->city= $h_adreses[0]->city;
$rrbgate_joom_object->alias= 'null';
$rrbgate_joom_object->address= $h_adreses[0]->building_address;
$rrbgate_joom_object->okrug= $dirrection_name;
$rrbgate_joom_object->metro= "null";
$rrbgate_joom_object->cost_from= $h_finances[0]->min_price;
$rrbgate_joom_object->cost_till= $h_finances[0]->max_price;
if ($h_builders[0]->schedul_dt_commiss != null) {
  $rrbgate_joom_object->srok_sdachi= $h_builders[0]->schedul_dt_commiss->format('Y-m-d H:i:s');
}
$rrbgate_joom_object->map1= $h_adreses[0]->longitude_yandex;
$rrbgate_joom_object->map2= $h_adreses[0]->latitude_yandex;
$rrbgate_joom_object->vokrug= $vokrug;
$rrbgate_joom_object->snippet= "null";
$rrbgate_joom_object->fulltext= "О комплексе  ".$apartments[0]->complex_name ." можно сказать много хорошего. ";
$rrbgate_joom_object->korpus1= $korps_tmp1;
$rrbgate_joom_object->korpus2= $korps_tmp2;
$rrbgate_joom_object->catid= 21;
$rrbgate_joom_object->created= $p_date_rec;
$rrbgate_joom_object->created_by= 42;
$rrbgate_joom_object->created_by_alias= null;
$rrbgate_joom_object->modified= $p_date_rec;
$rrbgate_joom_object->modified_by= 42;
$rrbgate_joom_object->checked_out_time= $p_date_rec ;
$rrbgate_joom_object->checked_out= 42;
$rrbgate_joom_object->state= 1;
$rrbgate_joom_object->featured= 0;
//$rrbgate_joom_object->publish_up=$p_date_null;
$rrbgate_joom_object->publish_down=$p_date_rec ;
$rrbgate_joom_object->access= 1;
$rrbgate_joom_object->asset_id= 62;
$rrbgate_joom_object->version= null;
$rrbgate_joom_object->language= null;
$rrbgate_joom_object->ordering= 1;
$rrbgate_joom_object->metakey= null;
$rrbgate_joom_object->metadesc= null;
$rrbgate_joom_object->metadata= "null";
$rrbgate_joom_object->parameters= "null";
$rrbgate_joom_object->custom_fields= '{"image1":"images\/for_base\/0002.jpg","image1_caption":"Ghbdtn","image1_credit":"sdgfasdg","link1":"www.yandex.ru","link1_text":"www.yandex.ru123325"}';
$rrbgate_joom_object->save();



$o_meesage = 'Данные выставлены на сайт.';

 } catch (Exception $e) {
       
        $o_meesage = 'Выброшено глобальное исключение: '.  $e->getMessage(). "\n";
    }

    
    echo "{success:true,errors:{reason:'".$o_meesage."'}}";
    ?>

 