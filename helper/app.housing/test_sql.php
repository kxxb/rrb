<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/*
SELECT t.*
	FROM 
	rrb.rrb_housing t, 
	rrb.rrb_housing_finance f
where t.id = f.rrb_housing_id 
and f.impl_status_id = 50
order by 4, 3*/


$P_APARTMENT_ID = "1";


require_once 'ar-conn.php';


function insert_zoo_index($item_id, $element_id,$value_number, $value_datetime, $value_string ){
         
    $zoo_index =  new zoo_jbzoo_index();
    
    $zoo_index->item_id= $item_id;
    $zoo_index->element_id= $element_id;
    $zoo_index->value_number= $value_number;
    $zoo_index->value_datetime= $value_datetime;
    $zoo_index->value_string= $value_string;
    $zoo_index->save();
    return 1;
    
}


$item_id = 19;

echo insert_zoo_index($item_id,'_itemcreated','NULL','2012-12-19 15:43:42','NULL');
echo "<br>".  insert_zoo_index($item_id,'_itemmodified','NULL','2012-12-19 11:49:02','NULL');
echo "<br>".  insert_zoo_index($item_id,'_itemcategory','NULL','NULL','1');
echo "<br>".  insert_zoo_index($item_id,'_itemauthor','NULL','NULL','42');
echo "<br>".  insert_zoo_index($item_id,'_itemcreated','NULL','NULL','2012-12-19 15:43:42');
echo "<br>".  insert_zoo_index($item_id,'_itemfrontpage','NULL','NULL','0');
echo "<br>".  insert_zoo_index($item_id,'_itemmodified','NULL','NULL','2012-12-19 11:49:02');
echo "<br>".  insert_zoo_index($item_id,'_itemname','NULL','NULL',$apartments[0]->complex_name);
echo "<br>".  insert_zoo_index($item_id,'_itempublish_down','NULL','NULL','0000-00-00 00:00:00');
echo "<br>".  insert_zoo_index($item_id,'_itempublish_up','NULL','NULL','-0001-11-30 00:00:00');
echo "<br>".  insert_zoo_index($item_id,'_itemauthor','42','NULL','NULL');
echo "<br>".  insert_zoo_index($item_id,'_itemcategory','1','NULL','NULL');
echo "<br>".  insert_zoo_index($item_id,'_itemcreated','2012','NULL','NULL');
echo "<br>".  insert_zoo_index($item_id,'_itemfrontpage','0','NULL','NULL');
echo "<br>".  insert_zoo_index($item_id,'_itemmodified','2012','NULL','NULL');
echo "<br>".  insert_zoo_index($item_id,'_itempublish_down','0','NULL','NULL');

//echo insert_($_GET["a_id"]);


function insert_category_item($category_id, $object_id){
    $zoo_category_item = new zoo_category_item();
    $zoo_category_item->category_id = $category_id;
    $zoo_category_item->item_id = $object_id;
    $zoo_category_item->save();
    return 'ok';
}

function insert_($P_APARTMENT_ID){
/////////////////////////////////////////////////////
$item_params =  '{
                    "metadata.title": "",
                    "metadata.description": "",
                    "metadata.keywords": "",
                    "metadata.robots": "",
                    "metadata.author": "",
                    "config.enable_comments": "1",
                    "config.primary_category": "1"
                 }';
 $elements = '{ ';

$p_date_rec =date("Y-m-d H:i:s");



$apartments = rrb_apartment::all( array('conditions' => 'id = '. $P_APARTMENT_ID , 'limit' => 3));
$housings = rrb_housing::all( array('conditions' => 'apartment_coplex_id = '. $P_APARTMENT_ID ));
  /*All id of Corpses this Appartment Complex*/
  $housing_ids = array();
  foreach($housings as $housing ) 
      $housing_ids[]= $housing->id;

$cond =array('conditions'=>array('rrb_housing_id in (?)',  $housing_ids));
$h_adreses = rrb_address::all($cond); 
//$h_finances = rrb_finance::all($cond);
$h_builders = rrb_builder::all($cond);
$h_infrastructures = rrb_infrastructure::all($cond);
$h_specifications  = rrb_spec::all($cond);

$dirrection_name = get_hnbdb_value1($h_adreses[0]->dirrection_id);



  $infrastructure_ids = array();
  foreach($h_infrastructures as $h_infrastructure ) 
      $infrastructure_ids[]= $h_infrastructure->type_of_infrastructure_id;


  
  $cond =array('conditions'=>array('id in (?) ',  $infrastructure_ids));
  $infr_names = rrb_handbooks::all($cond);
   foreach($infr_names as $infr_name ) 
     $vokrug .=  $infr_name->hndb_value."<br>";
 
   

  
////////////////////////////////////////////////////////////////////////////// 
//Главное фото ЖК  "60cdd345-2a07-4b98-8995-5144fbdf12ce"
  
   $elements = $elements. '"60cdd345-2a07-4b98-8995-5144fbdf12ce": {
                "0": {
                        "file": "images/for_base/0001.jpg",
                        "title": "Фотография крута",
                        "link": "",
                        "target": "0",
                        "rel": ""
                     }
                },';
   
////////////////////////////////////////////////////////////////////////////// 
//Описание  "4c101429-3f7d-4725-9571-2874a2396ce4"
    
   $elements = $elements. ' "4c101429-3f7d-4725-9571-2874a2396ce4": {
                            "0": {
                            "value": "О комплексе  '.$apartments[0]->complex_name .' можно сказать много хорошего.  "
                            }
                           },';
////////////////////////////////////////////////////////////////////////////// 
//Город "76c51721-e0d3-41c0-a469-29ede6726cae"
  
   $elements = $elements. ' "76c51721-e0d3-41c0-a469-29ede6726cae": {
                                "0": {
                                "value": "'.$h_adreses[0]->city.'"
                                }
                                },';
////////////////////////////////////////////////////////////////////////////// 
//Адрес 650fc167-9e4a-4060-bbbc-6515a75e90c0
    $elements = $elements. ' "650fc167-9e4a-4060-bbbc-6515a75e90c0": {
                            "0": {
                            "value": "'.$h_adreses[0]->building_address.'"
                            }
                            }, ';
  

////////////////////////////////////////////////////////////////////////////// 
//Округ  "b03b9f3b-0145-42a0-8186-a2ef727a0095"
   $elements = $elements. ' "b03b9f3b-0145-42a0-8186-a2ef727a0095": {
                            "0": {
                            "value": "'.$dirrection_name.'"
                            }
                            }, ';
////////////////////////////////////////////////////////////////////////////// 
//Цена за (руб)  "9bf33f10-e2b4-4e83-baa6-50d264a52a1c"  
   
//    $elements = $elements. ' "9bf33f10-e2b4-4e83-baa6-50d264a52a1c": {
//                            "0": {
//                            "value": "от '.$h_finances[0]->min_price.' до '.$h_finances[0]->max_price.'"
//                            }
//                            }, ';
    
////////////////////////////////////////////////////////////////////////////// 
//Срок сдачи ГК "b376d474-e8c9-493a-9c0a-0c5e60a7cd1b"
    
    if ($h_builders[0]->schedul_dt_commiss != null) {
           $elements = $elements. ' "b376d474-e8c9-493a-9c0a-0c5e60a7cd1b": {
                            "0": {
                            "value": "'.$h_builders[0]->schedul_dt_commiss->format('Y-m-d H:i:s').'"
                            }
                            }, ';
  
     }
    
    
 
////////////////////////////////////////////////////////////////////////////// 
//Социалки + "9f21bba0-f1c9-447c-b763-93df10a2bf83"
        $elements = $elements. ' "9f21bba0-f1c9-447c-b763-93df10a2bf83": {
                            "0": {
                            "value": "Тверская 16, стр.1"
                            }
                            }, ';
////////////////////////////////////////////////////////////////////////////// 
//Координаты "982fa670-91d2-4f85-9226-822ae34ab582"
          $elements = $elements. ' "982fa670-91d2-4f85-9226-822ae34ab582": {
                            "0": {
                            "value": "'.$h_adreses[0]->building_address.'"
                            }
                            }, ';  
////////////////////////////////////////////////////////////////////////////// 
//Яндекс.Карты "551d22eb-25f2-4f58-90de-0b50f944b0db"
          
         
      $elements = $elements. ' "551d22eb-25f2-4f58-90de-0b50f944b0db": {
                            "0": {
                            "location": "'.$h_adreses[0]->longitude_yandex.','.$h_adreses[0]->latitude_yandex.'",
                            "width": "",
                            "height": "",
                            "zoom": "",
                            "ballun": "'.$apartments[0]->complex_name.'"
                            }
                            }, ';      
      
      
  
   
   
//////////////////////////////////////////////////////////////////////////////// 
////Корпус 1   "5ed498b1-fede-44e3-b20e-f819fe3b5996"
//    $korps_tmp1= prepare_korpse(0, $P_APARTMENT_ID);
//   $elements = $elements. ' "5ed498b1-fede-44e3-b20e-f819fe3b5996": {
//        "0": {
//        "value": "Описание корпуса 1"
//        }
//        },';
//   
//////////////////////////////////////////////////////////////////////////////// 
////Корпус 2 "6230ddbe-99d7-45cb-858e-1973ebf3d550"
//  $korps_tmp2= prepare_korpse(1, $P_APARTMENT_ID);
//    $elements = $elements. ' "6230ddbe-99d7-45cb-858e-1973ebf3d550": {
//        "0": {
//        "value": "Описание корпуса 2"
//        }
//        }';
    
//Закрываем JSON документ    
    $elements = $elements.'}';
 
   try{
     $rrbgate_joom_object_d = rrbgate_joom::find($apartments[0]->id);
     $rrbgate_joom_object_d->delete();
    } catch (Exception $e) {
        null;
       // Ничего не делай если не смог удалить 
    }
$rrb_zoo_item = new zoo_item();

// $item_id = $apartments[0]->id;
$rrb_zoo_item->application_id = 2;
$rrb_zoo_item->type= 'zhiloj-kompleks';
$rrb_zoo_item->name = $apartments[0]->complex_name;
$rrb_zoo_item->alias = 'name'.$apartments[0]->id;
$rrb_zoo_item->created = $p_date_rec;
$rrb_zoo_item->modified = $p_date_rec;
$rrb_zoo_item->modified_by = 42;
//$rrb_zoo_item->publish_up =  $p_date_rec;
// $rrb_zoo_item->publish_down = ;
$rrb_zoo_item->priority = '1';
$rrb_zoo_item->hits = '0';
$rrb_zoo_item->state = '1';
$rrb_zoo_item->access = '1';
$rrb_zoo_item->created_by = '42';
$rrb_zoo_item->created_by_alias = '';
$rrb_zoo_item->searchable = '1';
$rrb_zoo_item->elements = $elements; 
$rrb_zoo_item->params = $item_params;

$rrb_zoo_item->save();

///////////////////////////////////////////////////////////////////
//Привязка данного объекта к определённой категории
$category_id = 1;

//echo "<br>". insert_category_item($category_id, $P_APARTMENT_ID);

}


function get_hnbdb_value1($key){
    $value_name ='';
    try{
            $value_name =  rrb_handbooks::find('all', array('conditions' => 'id = '.$key));
            $value_name  = $value_name[0]->hndb_value;
       } catch (Exception $e) {
            $value_name = 'пусто ';
       }
  return $value_name;
}
  
?>
