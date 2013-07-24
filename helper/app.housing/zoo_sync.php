<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$o_meesage ='';
CONST impl_status_id = 50; //В ПРОДАЖЕ

try{
require_once 'ar-conn.php';


function insert_zoo_index($item_id, $element_id,$value_number, $value_datetime, $value_string ){
    try{ 
         
    $zoo_index =  new zoo_jbzoo_index();
    $zoo_index->item_id= $item_id;
    $zoo_index->element_id= $element_id;
    $zoo_index->value_number= $value_number;
    $zoo_index->value_datetime= $value_datetime;
    $zoo_index->value_string= $value_string;
    $zoo_index->save();
    return 1;
    } catch (Exception $e) {
        return 0;
       // Ничего не делай если не смог удалить 
    }
}

function prepare_korpse($P_APARTMENT_ID){

    
  $style_table = 'style = "width:100%;" ';
  $style_td = 'style = "width:10%;" ';
  
  /*Отображаются только продающиеся корпуса (идентификация по полю «SALE_STATUS» - В ПРОДАЖЕ). */
       $join =   'left join rrb.rrb_housing_finance f on rrb_housing.id = f.rrb_housing_id';
       $housings   = rrb_housing::all(array('joins' => $join,
                                      'conditions' => 'apartment_coplex_id = '.$P_APARTMENT_ID.' and f.impl_status_id = 50',
                                      'order' => '4, 3'
                                    ));

  /*All id of Corpses this Appartment Complex*/
  $housing_ids = array();
  
  foreach($housings as $housing ) {
      
      //$housing_ids[]= $housing->id;
  
  $cond =array('conditions'=>array("rrb_housing_id =".$housing->id));
  $h_adreses            = rrb_address::all($cond); 
  // $h_finances           = rrb_finance::all($cond);
  $h_builders           = rrb_builder::all($cond);
  $h_infrastructures    = rrb_infrastructure::all($cond);
  $h_specifications     = rrb_spec::all($cond);
  $h_flat_info         = rrb_housing_flat_info::all($cond);
  $h_finance         =  rrb_housing_finance::all($cond);

  $build_date = null;

   if ($h_builders[$i]->schedul_dt_commiss  != null) {
      $build_date = $h_builders[$i]->schedul_dt_commiss->format('Y-m-d H:i:s'); 
    }

    $korps_tmp .='<table  border=1 '.$style_table.'><tbody>';  
      //$housing_ids[]= $housing->id;
    //  echo $housing->id.'<br>';
  //    echo $housing->name.'<br>';
//      echo $housing->corpse_number.'<br>';
       $korps_tmp.= '<tr>
			<td '.$style_td.'>Адрес</td>
			<td>'.$housing->name.'</td>
		</tr>';
       
       
       $korps_tmp.= '<tr>
			<td '.$style_td.'>Тип дома</td>
			<td>'.get_hnbdb_value($h_specifications[0]->type_of_building).'</td>
		</tr>';
       $korps_tmp.= '<tr>
			<td '.$style_td.'>Тип проектной документации</td>
			<td>'.get_hnbdb_value($h_specifications[0]->proj_doc_type).'</td>
		</tr>';
       
       $korps_tmp.= '<tr>
			<td '.$style_td.'>Серия</td>
			<td>'.$h_specifications[0]->serial_number.'</td>
		</tr>';
       
       $korps_tmp.= '<tr>
			<td '.$style_td.'>Отделка</td>
			<td>'.get_hnbdb_value($h_specifications[0]->finishing_flats_id).'</td>
		</tr>';
       $korps_tmp.= '<tr>
			<td '.$style_td.'>Этажность</td>
			<td>мин. '.$h_specifications[0]->min_floors .' макс. '.  $h_specifications[0]->max_floors .'</td>
		</tr>';
       
       $korps_tmp.= '<tr>
			<td '.$style_td.'>Стадия строительства</td>
			<td>'.get_hnbdb_value($h_builders[0]->build_stage_id).'</td>
		</tr>';
       
       $korps_tmp.= '<tr>
			<td '.$style_td.'>Срок сдачи ГК</td>
			<td>'. $build_date.'</td>
		</tr>';
        $korps_tmp.= '<tr><td '.$style_td.' colspan="2">Площади квартир по проекту:</td></tr>';
       
        $korps_tmp.= '<tr>
			<td '.$style_td.'>Студии  </td>
			<td>от '.$h_flat_info[0]->min_area_studio.'  до '.$h_flat_info[0]->max_area_studio.'  </td>
		</tr>';
        
        $korps_tmp.= '<tr>
			<td '.$style_td.'>1-комн. </td>
			<td>от '.$h_flat_info[0]->min_area_1r.'  до '.$h_flat_info[0]->max_area_1r.'  </td>
		</tr>';
       
        $korps_tmp.= '<tr>
			<td '.$style_td.'>2-комн. </td>
			<td>от '.$h_flat_info[0]->min_area_2r.'  до '.$h_flat_info[0]->max_area_2r.'  </td>
		</tr>';        
        
        $korps_tmp.= '<tr>
			<td '.$style_td.'>3-комн. </td>
			<td>от '.$h_flat_info[0]->min_area_3r.'  до '.$h_flat_info[0]->max_area_3r.'  </td>
		</tr>';        
        
        $korps_tmp.= '<tr>
			<td '.$style_td.'>Многокомн. </td>
			<td>от '.$h_flat_info[0]->min_area_n_room.'  до '.$h_flat_info[0]->max_area_n_room.'  </td>
		</tr>';        
        
         
       $korps_tmp.= '<tr><td '.$style_td.' colspan="2">Цена за кв. м, руб.</td></tr>';
       
       $korps_tmp.= '<tr>
			<td '.$style_td.'>Студии  </td>
			<td>от ____  до _____  </td>
		</tr>';
        
        $korps_tmp.= '<tr>
			<td '.$style_td.'>1-комн. </td>
			<td>от ____  до _____
                      </td>
		</tr>';
       
        $korps_tmp.= '<tr>
			<td '.$style_td.'>2-комн. </td>
			<td>от ____  до _____
                       </td>
		</tr>';        
        
        $korps_tmp.= '<tr>
			<td '.$style_td.'>3-комн. </td>
			<td>от ____  до _____
                            </td>
		</tr>';        
        
        $korps_tmp.= '<tr>
			<td '.$style_td.'>Многокомн. </td>
			<td>от ____  до _____
                           </td>
		</tr>';        
       
       
       $korps_tmp.= '<tr><td '.$style_td.' colspan="2">Цена за квартиру, руб.</td></tr>';


        $korps_tmp.= '<tr>
			<td '.$style_td.'>Студии  </td>
			<td>от ____  до _____  </td>
		</tr>';
        
        $korps_tmp.= '<tr>
			<td '.$style_td.'>1-комн. </td>
			<td>от ____  до _____
                      </td>
		</tr>';
       
        $korps_tmp.= '<tr>
			<td '.$style_td.'>2-комн. </td>
			<td>от ____  до _____
                       </td>
		</tr>';        
        
        $korps_tmp.= '<tr>
			<td '.$style_td.'>3-комн. </td>
			<td>от ____  до _____
                            </td>
		</tr>';        
        
        $korps_tmp.= '<tr>
			<td '.$style_td.'>Многокомн. </td>
			<td>от ____  до _____
                           </td>
		</tr>';        
        


        
         $korps_tmp.= '<tr>
			<td '.$style_td.'>Ипотека </td>
			<td>'.get_hnbdb_value($h_finance[0]->ipoteka_id).'</td>
		</tr>'; 
        

          $korps_tmp.= '<tr>
			<td '.$style_td.'>Тип договора </td>
			<td>'.get_hnbdb_value($h_finance[0]->contract_type_id).'</td>
		</tr>';       
        
              $korps_tmp.= '<tr>
			<td '.$style_td.'>Продавец</td>
			<td>наименование продавца</td>
		</tr>';     
          
                $korps_tmp.= '<tr>
			<td '.$style_td.'>Контакты продавца</td>
			<td>КОНТАКТЫ_ПРОДАВЦА</td>
		</tr>';   
       $korps_tmp.= '</tbody></table>'; 
    
       /**
        id, complex_id, korpse_id, korpse_name, korpse_desc
        */
       
       $j_zoo_corpse = new zoo_corpse();
       $j_zoo_corpse->complex_id = $P_APARTMENT_ID;
       $j_zoo_corpse->korpse_id = $housing->id;
       $j_zoo_corpse->korpse_name = 'Корпус '. $housing->corpse_number;
       $j_zoo_corpse->korpse_desc = $korps_tmp;
       $j_zoo_corpse->save();
       
       $korps_tmp='';
       
    }
   //return $korps_tmp;
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



function insert_category_item($category_id, $object_id){
    $zoo_category_item = new zoo_category_item();
    $zoo_category_item->category_id = $category_id;
    $zoo_category_item->item_id = $object_id;
    $zoo_category_item->save();
    return 'ok';
}


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
 //$elements = '{ ';
$P_APARTMENT_ID =  $_GET["a_id"];
$p_date_rec =date("Y-m-d H:i:s");



$apartments = rrb_apartment::all( array('conditions' => 'id = '. $P_APARTMENT_ID , 'limit' => 3));
$housings = rrb_housing::all( array('conditions' => 'apartment_coplex_id = '. $P_APARTMENT_ID ));
  /*All id of Corpses this Appartment Complex*/
  $housing_ids = array();
  foreach($housings as $housing ) 
      $housing_ids[]= $housing->id;

$cond =array('conditions'=>array('rrb_housing_id in(?) ',  $housing_ids));
$h_adreses = rrb_address::all($cond); 
//$h_finances = rrb_finance::all($cond);
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
 
    
   
   if ( $h_builders[0]->schedul_dt_commiss != null ) $sroc_sdachi = $h_builders[0]->schedul_dt_commiss->format('Y-m-d H:i:s');
   
    $elements ='   {
 	"60cdd345-2a07-4b98-8995-5144fbdf12ce":  {
 		"0":  {
 			"file": "images\/for_base\/0001.jpg",
 			"title": "\u0424\u043e\u0442\u043e\u0433\u0440\u0430\u0444\u0438\u044f \u043a\u0440\u0443\u0442\u0430",
 			"link": "",
 			"target": "0",
 			"rel": ""
 		}
 	},
 	"4c101429-3f7d-4725-9571-2874a2396ce4":  {
 		"0":  {
 			"value": "\u0432\u0430\u043e\u044b\u0435\u043e\u044b\u043f\u0430\u043e\u044b\u043f\u0430\u043e\u044b\u043f\u043e<br \/>\r\n\u0432\u0430\u044b\u043f\u0444\u044b\u0432\u0430\u043f\u0444\u0430\u044b\u0432\u0430\u0440\u0432\u044b\u0440\u0432\u0430\u044b\u0440 \u0432\u0430\u044b\u0440 \u044b\u0432\u0430\u0440 \u044b\u0432\u0430\u0440\u044b\u0432\u0430\u0440 \u044b\u0432\u0430\u0440 \u0444\u0432\u0430 \u0440<br \/>\r\n\u0444\u0432\u0430\u0440 \u044b\u0432\u0430\u0440 \u0444\u0432\u0430\u0440 \u0444\u0432\u0430\u0440 \u044b\u0432\u0430\u0440 \u044b\u0432\u0430\u0440\u0444\u0432\u0430\u0440\u044b\u0432\u0430 \u0440<br \/>\r\n\u044b\u0432\u0430\u0440 \u044b\u0432\u0430\u0440\u044b\u0432\u0430\u0440\u044b\u0432\u0430\u0440\u044b\u0432\u0430\u0440\u0444\u044b\u0432\u0430\u0440 \u044b\u0432\u0430\u0440\u044b\u0432\u0430\u0440 \u044b\u0432\u0440 \u044b\u0432\u0430\u0440\u044b \u044b\u0432\u0430\u0440 \u044b\u0432\u0430\u0440\u044b\u0432\u0430\u0440 \u044b\u0432\u0440 \u044b\u0432\u0430\u0440\u0444\u0432\u0430 \u044b\u0432\u0430\u0440 \u0432\u044b\u0430\u0440 \u0444 \u043f\u043b\u0432\u043f\u043d\u0440\u043b \u0432\u0435\u043d \u043b\u0432\u0435\u043d\u043b \u044b\u043e \u0432\u043f\u0430\u043e<br \/>\r\n\u0432\u0430\u043f\u043e \u0432\u0430\u043f\u043e \u0432\u0430\u043e \u0432\u0430\u043f\u043e \u0432\u0430\u043f\u043e \u0432 \u043e\u0432\u043f\u0430\u043e \u0432\u043f\u0440\u043e "
 		}
 	},
 	"76c51721-e0d3-41c0-a469-29ede6726cae":  {
 		"0":  {
 			"value": '.json_encode($h_adreses[0]->city).'
 		}
 	},
 	"bd284948-dc4a-48b4-b081-faa2982a3c8b":  {
 		"0":  {
 			"value": '.json_encode($h_adreses[0]->city .'Naselennyi punkt').'
 		}
 	},
 	"650fc167-9e4a-4060-bbbc-6515a75e90c0":  {
 		"0":  {
 			"value": '.json_encode($h_adreses[0]->building_address.'adres').'
 		}
 	},
 	"b03b9f3b-0145-42a0-8186-a2ef727a0095":  {
 		"0":  {
 			"value": '.json_encode($h_adreses[0]->building_address.'okrug').'
 		}
 	},
 	"c4aae995-4dc3-4bf8-9ec8-f48794cc75c3":  {
 		"0":  {
 			"value": '.json_encode($dirrection_name.'napravlenie').'
 		}
 	},
 	"d3932470-51e9-4fcd-9205-b5ee84c3bd9e":  {
 		"0":  {
 			"value": '.json_encode($h_adreses[0]->ot_mkad.'km ot mkad').'
 		}
 	},
 	"4c749dae-12ae-49d1-a960-05862a5aa834":  {
 		"0":  {
 			"value": '.json_encode($h_adreses[0]->region.'rayon').'
 		}
 	},
 	"4e902814-8e27-4060-913b-da18b4d0ce5a":  {
 		"0":  {
 			"value": '.json_encode($h_adreses[0]->building_address.'metro').'
 		},
 		"1":  {
 			"value": "eshe metro"
 		}
 	},
 	"c80cf299-978b-49b1-969c-e56f35913408":  {
 		"0":  {
 			"value": '.json_encode($h_adreses[0]->building_address.'jd stanciya').'
 		}
 	},
 	"d9f27895-c83d-4d97-aedf-b76080b5eb7c":  {
 		"0":  {
 			"value": "'. $srok_sdachi .'srok sdachi"
 		}
 	},
 	"ca6248fc-dc08-41bd-beac-2ec27b6b3692":  {
 		"0":  {
 			"value": '.json_encode($h_adreses[0]->building_address.'tip kompleksa').'
 		}
 	},
 	"f89de27e-3388-43a2-acdd-e1476e39a946":  {
 		"0":  {
 			"value": '.json_encode($h_adreses[0]->building_address.'stadiya stroitelstva').'
 		}
 	},
 	"8d43b790-dae4-424e-979d-b5c74533c0bd":  {
 		"0":  {
 			"value": '.json_encode($h_adreses[0]->building_address.'tip dogovora').'
 		}
 	},
 	"10d74460-04a3-49e1-88d8-d102146795d8":  {
 		"0":  {
 			"value": '.json_encode($h_adreses[0]->building_address.'prodavec').'
 		}
 	},
 	"56c319d2-414a-4262-a2c4-eb8becd3d87d":  {
 		"0":  {
 			"value": '.json_encode($h_adreses[0]->building_address.'ipoteka').'
 		}
 	},
 	"341a5167-4286-47ca-bd32-331ccd7ad730":  {
 
 	},
 	"9f21bba0-f1c9-447c-b763-93df10a2bf83":  {
 		"value": "1"
 	},
 	"15b23f74-510a-4a1d-bc34-f4fffa7b7e33":  {
 		"votes": 0,
 		"value": 0
 	},
 	"ac30381a-b9ae-4fc2-97d2-caf90fa36413":  {
 		"value": "1"
 	},
 	"982fa670-91d2-4f85-9226-822ae34ab582":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"551d22eb-25f2-4f58-90de-0b50f944b0db":  {
                "location": "'.$h_adreses[0]->longitude_yandex.','.$h_adreses[0]->latitude_yandex.'",
                "width": "",
                "height": "",
                "zoom": "",
                "ballun": '.json_encode($apartments[0]->complex_name).'
 		
 	},
 	"d1bf147a-063d-4955-bfbf-9375744efb27":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"b62240c6-b10f-4d55-ac51-1064433444f2":  {
 		"value": "mos3"
 	},
 	"d42430a1-3b7e-4ef6-b3e7-c30549257a5c":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"e13808c5-1599-4a5c-a743-038058243c03":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"1f48a165-a24b-4635-9b09-a3adc01174e7":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"f1791840-0d49-425c-b912-16e1801e42d0":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"4a9ee8f0-b282-4b13-9df8-832498a2dcc8":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"96e8de5e-a9bf-4fda-bb2b-02fa6aef46c9":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"ff35216a-f722-49a4-b47d-33b2d5831e96":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"cc2a280a-20ea-4667-9d8a-1d6246ecd515":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"4010b6b9-2e40-4dcf-b499-65d53671d2d8":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"95959960-67f5-410d-a7ec-c00cb31491f7":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"7dbe0983-90be-4b37-a397-2277672e7ac5":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"11e6c0cf-a002-4c3b-9ffc-c85835f38b8e":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"2f3969a3-f9fb-4d89-bc12-6064fd816ef4":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"37083e8e-43e1-493e-9cb8-92193df4bc3f":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"bc3b1875-09a1-4a6d-a26c-520cea76d0eb":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"bb7064b6-4566-41f4-b40c-0417dd19def4":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"90cfc9e0-6701-4a6a-b475-f6a3a52b13fd":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"04e22160-61f6-4126-a4c2-b7a040e4a3f2":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"6d92ce45-afb2-4631-8824-812dccd4e116":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"ef5ec4a4-c2e8-4b7b-91af-8643b69f54c7":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"ee96218f-1490-4813-ac12-059858c8f570":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"9bbe0510-86ec-42c7-9e87-9cb4294313f6":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"c37e91d7-4ffb-424a-ba78-b8991161a2b0":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"39c6c62d-8869-461d-b711-d8e15786f825":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"5ec5f373-a4e9-4346-9171-c84bddc282c4":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"38035929-a28f-423b-90c8-54fcd080bb18":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"0b671e6a-07e4-481c-9a1c-73ecf3d0128c":  {
 		"0":  {
 			"value": ""
 		}
 	},
 	"72d13fe0-3955-463f-b98e-4e1b1d468d61":  {
 		"0":  {
 			"value": "'. $P_APARTMENT_ID.'"
 		}
 	}
 }';
    
    
 
//   try{
//     zoo_item::table()->delete(array('item_id' => array($item_id)));  
//     $rrbgate_joom_object_d = rrbgate_joom::find($apartments[0]->id);
//     $rrbgate_joom_object_d->delete();
//    } catch (Exception $e) {
//        null;
//       // Ничего не делай если не смог удалить 
//    }
$rrb_zoo_item = new zoo_item();

// $rrb_zoo_item->id = $apartments[0]->id;
$rrb_zoo_item->application_id = 2;
$rrb_zoo_item->type= 'jk-moskva';
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

try{
            zoo_jbzoo_index::table()->delete(array('item_id' => array($item_id)));
            //zoo_category_item::table()->delete(array('item_id' => array($item_id)));
        } catch (Exception $e) {
            null;
           // Ничего не делай если не смог удалить 
        }


    
        

$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itemcreated','NULL','2012-12-19 15:43:42','NULL');
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itemmodified','NULL','2012-12-19 11:49:02','NULL');
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itemcategory','NULL','NULL','1');
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itemauthor','NULL','NULL','42');
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itemcreated','NULL','NULL','2012-12-19 15:43:42');
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itemfrontpage','NULL','NULL','0');
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itemmodified','NULL','NULL','2012-12-19 11:49:02');
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itemname','NULL','NULL',$apartments[0]->complex_name);
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itempublish_down','NULL','NULL','0000-00-00 00:00:00');
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itempublish_up','NULL','NULL','-0001-11-30 00:00:00');
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itemauthor','42','NULL','NULL');
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itemcategory','1','NULL','NULL');
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itemcreated','2012','NULL','NULL');
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itemfrontpage','0','NULL','NULL');
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itemmodified','2012','NULL','NULL');
$dummy =  insert_zoo_index($rrb_zoo_item->id,'_itempublish_down','0','NULL','NULL');

 
$dummy = prepare_korpse($P_APARTMENT_ID);
$dummy = insert_category_item($category_id,$rrb_zoo_item->id);
 

//echo prepare_korpse("1");


$o_meesage = 'Данные выставлены на сайт.zoo';

 } catch (Exception $e) {
       
        $o_meesage = 'Выброшено глобальное исключение: zoo '.  $e->getMessage(). "\n";
    }

    
    echo "{success:true,errors:{reason:'".$o_meesage."'}}";

?>
