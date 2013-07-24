<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class zoo_insert {    

    private $itemId=0;
    

/* 1 
 *  Вставка значений в таблицу zoo_items
 *  out item_id
 */
    public function insert_zoo_item(
            $p_application_id,
            $p_type,
            $p_name,
            $p_alias,
            $p_created,
            $p_modified,
            $p_modified_by,
            $p_elements,
            $p_params
            ){
    try{
        $rrb_zoo_item = new zoo_item();
            // $rrb_zoo_item->id = $apartments[0]->id;
        $rrb_zoo_item->application_id  = $p_application_id; // 2;
        $rrb_zoo_item->type            = $p_type;           // 'jk-moskva';
        $rrb_zoo_item->name            = $p_name;           // $apartments[0]->complex_name;
        $rrb_zoo_item->alias           = $p_alias;          // 'name'.$apartments[0]->id;
        $rrb_zoo_item->created         = $p_created;        // $p_date_rec;
        $rrb_zoo_item->modified        = $p_modified;       // $p_date_rec;
        $rrb_zoo_item->modified_by     = $p_modified_by;    // 42;
        //$rrb_zoo_item->publish_up =  $p_date_rec;
        // $rrb_zoo_item->publish_down = ;
        $rrb_zoo_item->priority        = '1';
        $rrb_zoo_item->hits            = '0';
        $rrb_zoo_item->state           = '1';
        $rrb_zoo_item->access          = '1';
        $rrb_zoo_item->created_by      = '42';
        $rrb_zoo_item->created_by_alias= '';
        $rrb_zoo_item->searchable      = '1';
        $rrb_zoo_item->elements        = $p_elements; 
        $rrb_zoo_item->params          = $p_params;
        $rrb_zoo_item->save();
        //устанаваливаю item id 
        $this->setItemId($rrb_zoo_item->id);
        return $rrb_zoo_item->id;
        } catch (Exception $e) {
            return $e->getMessage();
           // Ничего не делай если не смог удалить 
        }
    }

    
public function update_zoo_item($p_item_id,$p_elements){
  try{
    $rrb_zoo_item = zoo_item::find_by_pk($p_item_id);
    $rrb_zoo_item->elements        = $p_elements; 
    $rrb_zoo_item->save();
    return 1;
    } catch (Exception $e) {
        print_r($e->getMessage());
    }
}
    
    
    public function setItemId($p_itemId){
         $this->itemId = $p_itemId;
    }

     public function  setItemIdForDelete($p_element_id, $p_complex_id){
        $items = zoo_jbzoo_index::all( array('conditions' =>array('element_id = ? AND value_number = ?', $p_element_id, $p_complex_id) , 'limit' => 1));
        $this->itemId  = $items[0]->id;
    }

     public function getItemId(){
        return $this->itemId;
    }


    
    
 public function getElementArray($p_type){
    if ($p_type==='jk-moskva'){
      $p_file_name='jk-moskva.config';
    }elseif ($p_type==='jk-moskovskaya-oblast'){
      $p_file_name='jk-moskovskaya-oblast.config';
    }elseif ($p_type==='jk-russia'){
      $p_file_name='jk-russia.config';
    }elseif ($p_type==='jk-sng'){
     $p_file_name='jk-sng.config';
    }
    $fp = file_get_contents($p_file_name) or die("can't open file");
    $el_array=json_decode($fp, true);
    return $el_array;
}

public function getElementIdByName($el_array, $el_name){
    $i=0;
    $el_inx = array_keys($el_array[elements]);
    foreach ($el_array[elements] as $element){
    if ($element[name]==$el_name)
              return $el_inx[$i];
         $i++;
     }
   
}


public function getZooElements($el_array, $plx_array){
 $i=0;
 $result = array();
 $el_inx = array_keys($el_array[elements]);
 foreach ($el_array[elements] as $element){

     if ($element[name]==='Главное фото ЖК'){
        $result[$el_inx[$i]] = $this->getMainPhoto($el_inx[$i],$plx_array);
     }
     
     if ($element[name]==='Описание'){
        $result[$el_inx[$i]] = $this->getDescription($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Метро'){
        $result[$el_inx[$i]] = $this->getSubway($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Страна'){
        $result[$el_inx[$i]] = $this->getState($el_inx[$i],$plx_array);
     }
     
     if ($element[name]==='Округ'){
        $result[$el_inx[$i]] = $this->getOkrug($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Направление'){
        $result[$el_inx[$i]] = $this->getDirection($el_inx[$i],$plx_array);
     }
     
     if ($element[name]==='Регион'){
        $result[$el_inx[$i]] = $this->getRegion($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Населенный пункт'){
        $result[$el_inx[$i]] = $this->getNaselenyPunkt($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Км от МКАД'){
        $result[$el_inx[$i]] = $this->getOtmkad($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Район'){
        $result[$el_inx[$i]] = $this->getRayon($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Метро'){
        $result[$el_inx[$i]] = $this->getSubway($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Ближайшее метро'){
        $result[$el_inx[$i]] = $this->getSubway($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Ж/Д станция'){
        $result[$el_inx[$i]] = $this->getRailway($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Паркинг'){
        $result[$el_inx[$i]] = $this->getParking($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Тип договора'){
        $result[$el_inx[$i]] = $this->getContractType($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Ипотека и рассрочка'){
        $result[$el_inx[$i]] = $this->getIpotekaRassrochka($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Ипотека'){
        $result[$el_inx[$i]] = $this->getIpoteka($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Рассрочка'){
        $result[$el_inx[$i]] = $this->getRassrochka($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Застройщик'){
        $result[$el_inx[$i]] = $this->getZastoyshik($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Продавцы'){
        $result[$el_inx[$i]] = $this->getSellers($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Площадь'){
        $result[$el_inx[$i]] = $this->getArea($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Диапазон цен в ЖК'){
        $result[$el_inx[$i]] = $this->getPriceDiapazon($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Цена квартиры'){
        $result[$el_inx[$i]] = $this->getPriceFlat($el_inx[$i],$plx_array);
        
     }
     if ($element[name]==='Цена за кв.м.'){
        $result[$el_inx[$i]] = $this->getPriceKvm($el_inx[$i], $plx_array);
        
     }
     if ($element[name]==='Комментарии'){
        $result[$el_inx[$i]] = $this->getComments($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Социалки +'){
        $result[$el_inx[$i]] = $this->getSocial($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Рэйтинг'){
        $result[$el_inx[$i]] = $this->getRaiting($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Социальные закладки'){
        $result[$el_inx[$i]] = $this->getSocialBookmarks($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Файлы'){
        $result[$el_inx[$i]] = $this->getAtachFiles($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Яндекс.Карты'){
        $result[$el_inx[$i]] = $this->getYaMaps($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Google'){
        $result[$el_inx[$i]] = $this->getGoogleMaps($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Галерея'){
        $result[$el_inx[$i]] = $this->getGallery($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Тип корпуса'){
        $result[$el_inx[$i]] = $this->getCorpseType($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Серия'){
        $result[$el_inx[$i]] = $this->getSeriya($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Этажность'){
        $result[$el_inx[$i]] = $this->getEtajnost($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Стадия строительства'){
        $result[$el_inx[$i]] = $this->getStadiyaStoitelstva($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Срок сдачи ГК'){
        $result[$el_inx[$i]] = $this->getDeadline($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Отделка'){
        $result[$el_inx[$i]] = $this->getOtdelka($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Complex_Id'){
        $result[$el_inx[$i]] = $this->getComplexId($el_inx[$i],$plx_array);
     }
     if ($element[name]==='Access'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Author'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Categories'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Comments Link'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Creation Date'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Edit'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Frontpage Enabled'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Hits'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Item Link'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Modification Date'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Name'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Print'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Publish Down Date'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Publish Up Date'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Previous/Next Link'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Searchable'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='State'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }
     if ($element[name]==='Tags'){
        //$result[$el_inx[$i]] = getSubway($plx_array);
     }    
     
     $i++;
 }
  $result= json_encode($result,JSON_FORCE_OBJECT|JSON_PRETTY_PRINT);
  $this->update_zoo_item($this->getItemId(), $result);




}
    
    


public function insertIndexses($p_value, $element_id){
       $value = $p_value;
       if (is_numeric($value)){
           $value_number  = $value;
       }
       $value_datetime = null;
       $value_string = $value;
       $item_id = $this->getItemId(); 
      $this->insert_zoo_search_index($item_id, $element_id, $value);
      $this->insert_zoo_index($item_id, $element_id, $value_number, $value_datetime, $value_string);
    return 1;
}

/* 2
 * Вставка значений в таблицу zoo_search_index 
 */
public function insert_zoo_search_index($item_id, $element_id,$value){
    try{ 
         
    $zoo_index =  new zoo_search_index();
    $zoo_index->item_id= $item_id;
    $zoo_index->element_id= $element_id;
    $zoo_index->value= $value;
    $zoo_index->save();
    return 1;
    } catch (Exception $e) {
        return 0;
       // Ничего не делай если не смог удалить 
    }
}


/* 3
 * Вставка значений в таблицу zoo_index 
 */

public function insert_zoo_index($item_id, $element_id,$value_number=0, $value_datetime, $value_string='' ){
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
/* 4
 * Вставка значений в таблицу zoo_category_item 
 */
public function insert_category_item($category_id, $item_id){
    try{ 
    
    $zoo_category_item = new zoo_category_item();
    $zoo_category_item->category_id = $category_id;
    $zoo_category_item->item_id = $item_id;
    $zoo_category_item->save();
    return 1;
    } catch (Exception $e) {
        return 0;
       // Ничего не делай если не смог удалить 
    }
}




/*Функция удаления всех данных по комплексу из таблиц zoo*/
public function del_all($p_complex_id, $p_element_id){
     // $zoo_index =  new zoo_jbzoo_index();
  //try{
 
    
    $items = zoo_jbzoo_index::all( array('conditions' =>array('element_id = ? AND value_number = ?', $p_element_id, $p_complex_id) , 'limit' => 1));
    
    $p_item_id = $items[0]->item_id;
    
    zoo_corpse::table()->delete(array('complex_id' => array($p_complex_id)));
    zoo_item::table()->delete(array('id' => array($p_item_id)));
    zoo_search_index::table()->delete(array('item_id' => array($p_item_id)));
    zoo_category_item::table()->delete(array('item_id' => array($p_item_id)));;
    zoo_jbzoo_index::table()->delete(array('item_id' => array($p_item_id)));
    return $p_item_id;
//    } catch (Exception $e) {
//        return $e->getMessage();
//      // Ничего не делай если не смог удалить 
//    }
}


/*
 * Старая функция создания меты
 * 
 */

public function meta_params($p_complex_id, $p_primary_category){
    $apartments = rrb_apartment::all( array('conditions' => 'id = '. $p_complex_id , 'limit' => 3));
    $params='{
 	"metadata.title": "'.$apartments[0]->complex_name.'",
 	"metadata.description": "'.$apartments[0]->complex_name.'",
 	"metadata.keywords": "'.$apartments[0]->complex_name.'",
 	"metadata.robots": "'.$apartments[0]->complex_name.'",
 	"metadata.author": "'.$apartments[0]->complex_name.'",
 	"config.enable_comments": "1",
 	"config.primary_category": "'.$p_primary_category.'"
 }';
    return $params;
}


/////////////////////////
    
    public function getMainPhoto($element_id,$plx_array){
            $arr = array(
                "file"=> $plx_array['image_path'],
                "title"=> "",
                "link"=> "",
                "target"=> "0",
                "rel"=> ""
         );
         $arr1 = array(0=>$arr);
         return $arr1;
    }

    public function getDescription($element_id,$plx_array){
           $this->insertIndexses($value, $element_id);    
           $value = $plx_array['description'];
           
           $arr = array(
                "value"=> $value
             );
          $arr1 = array(0=>$arr);

        return $arr1;
    }


    public function getState($element_id,$plx_array){
           $value = $plx_array['state'];
           $this->insertIndexses($value, $element_id); 

           $arr = array(
                "value"=> $value
             );
          $arr1 = array(0=>$arr);

        return $arr1;
    }


    public function getOkrug($element_id,$plx_array){
           $value = $plx_array['okrug'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
          $arr1 = array(0=>$arr);

        return $arr1;
    }

    public function getDirection($element_id,$plx_array){
           $value = $plx_array['direction'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
          $arr1 = array(0=>$arr);

        return $arr1;
    }

    public function getRegion($element_id,$plx_array){
           $value = $plx_array['rayon'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
          $arr1 = array(0=>$arr);

        return $arr1;
    }

    public function getNaselenyPunkt($element_id,$plx_array){
           $value = $plx_array['naseleny_punkt'];
            $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
          $arr1 = array(0=>$arr);

        return $arr1;
    }


    public function getSubway($element_id,$plx_array){
           $value = $plx_array['metro'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
          $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getRailway($element_id,$plx_array){
           $value = $plx_array['railway'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getOtmkad($element_id,$plx_array){
           $value = $plx_array['ot_mkad'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getRayon($element_id,$plx_array){
           $value = $plx_array['rayon'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getParking($element_id,$plx_array){
           $value = $plx_array['parking'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getContractType($element_id,$plx_array){
//        $vals =array();
//        $i=0;
//        foreach ($plx_array[corpses]as $corpse){
//                $vals[$i]= array("value"=> (string)$corpse['tip_dogovora_korpus']);
//                 $this->insertIndexses($corpse['tip_dogovora_korpus'], $element_id); 
//                ++$i;
//        }
//        return $vals;
        
           $value = $plx_array['contact_type'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getIpotekaRassrochka($element_id,$plx_array){
            
         
        
           $i=0;
           $arr = array();
            if ($plx_array['ipoteka']!='н/д'){
                $arr[$i]="ipoteka"; 
                 $this->insertIndexses('Рассрочка', $element_id); 
                ++$i;
            }
            if ($plx_array['rassrochka']!='н/д'){
                $arr[$i]="rassrochka"; 
                 $this->insertIndexses('Ипотека', $element_id); 
            }

           $arr1 = array("option"=>$arr,
                         "check"=> "1"  
                            );
        return $arr1;
        
    }

    public function getIpoteka($element_id,$plx_array){
           $value = $plx_array['ipoteka'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getRassrochka($element_id,$plx_array){
           $value = $plx_array['rassrochka'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getZastoyshik($element_id,$plx_array){
           $value = $plx_array['zastoyshik'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getSellers($element_id,$plx_array){
           $value = $plx_array['sellers'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getPriceDiapazon($element_id,$plx_array){
           $value = $plx_array['cena_kavartiry'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getPriceFlat($element_id, $plx_array){
        $vals =array();
        $i=0;
        $k=0;
        foreach ($plx_array[corpses]as $corpse){
                $vals[$i]= array("value"=> (string)$corpse['costflat_studio_from']);
                 $this->insertIndexses($corpse['costflat_studio_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costflat_studio_to']);
                  $this->insertIndexses($corpse['costflat_studio_to'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costflat_1komn_from']);
                  $this->insertIndexses($corpse['costflat_1komn_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costflat_1komn_to']);
                  $this->insertIndexses($corpse['costflat_1komn_to'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costflat_2komn_from']);
                  $this->insertIndexses($corpse['costflat_2komn_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costflat_2komn_to']);
                  $this->insertIndexses($corpse['costflat_2komn_to'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costflat_3komn_from']);
                  $this->insertIndexses($corpse['costflat_3komn_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costflat_3komn_to']);
                  $this->insertIndexses($corpse['costflat_3komn_to'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costflat_mnogokomn_from']);
                  $this->insertIndexses($corpse['costflat_mnogokomn_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costflat_mnogokomn_to']);
                  $this->insertIndexses($corpse['costflat_mnogokomn_to'], $element_id); 
                ++$i;
                ++$k;
        }
        return $vals;


    }

    public function getPriceKvm($element_id,$plx_array){
        $vals =array();
        $i=0;
        $k=0;
        foreach ($plx_array[corpses]as $corpse){
                $vals[$i]= array("value"=> (string)$corpse['costkvm_studio_from']);
                  $this->insertIndexses($corpse['costkvm_studio_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costkvm_studio_to']);
                  $this->insertIndexses($corpse['costkvm_studio_to'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costkvm_1komn_from']);
                  $this->insertIndexses($corpse['costkvm_1komn_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costkvm_1komn_to']);
                  $this->insertIndexses($corpse['costkvm_1komn_to'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costkvm_2komn_from']);
                  $this->insertIndexses($corpse['costkvm_2komn_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costkvm_2komn_to']);
                  $this->insertIndexses($corpse['costkvm_2komn_to'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costkvm_3komn_from']);
                  $this->insertIndexses($corpse['costkvm_3komn_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costkvm_3komn_to']);
                  $this->insertIndexses($corpse['costkvm_3komn_to'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costkvm_mnogokomn_from']);
                  $this->insertIndexses($corpse['costkvm_mnogokomn_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['costkvm_mnogokomn_to']);
                  $this->insertIndexses($corpse['costkvm_mnogokomn_to'], $element_id); 
                ++$i;
                ++$k;
        }
        return $vals;
    }

    public function getArea($element_id,$plx_array){
        $vals =  array();
        $i=0;
        $k=0;
        foreach ($plx_array[corpses]as $corpse){
                $vals[$i]= array("value"=> (string)$corpse['ploshad_studio_from']);
                  $this->insertIndexses($corpse['ploshad_studio_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['ploshad_studio_to']);
                  $this->insertIndexses($corpse['ploshad_studio_to'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['ploshad_1komn_from']);
                  $this->insertIndexses($corpse['ploshad_1komn_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['ploshad_1komn_to']);
                  $this->insertIndexses($corpse['ploshad_1komn_to'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['ploshad_2komn_from']);
                  $this->insertIndexses($corpse['ploshad_2komn_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['ploshad_2komn_to']);
                  $this->insertIndexses($corpse['ploshad_2komn_to'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['ploshad_3komn_from']);
                  $this->insertIndexses($corpse['ploshad_3komn_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['ploshad_3komn_to']);
                  $this->insertIndexses($corpse['ploshad_3komn_to'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['ploshad_mnogokomn_from']);
                  $this->insertIndexses($corpse['ploshad_mnogokomn_from'], $element_id); 
                ++$i;
                $vals[$i]= array("value"=> (string)$corpse['ploshad_mnogokomn_to']);
                  $this->insertIndexses($corpse['ploshad_mnogokomn_to'], $element_id); 
                ++$i;
                ++$k;
        }
        return $vals;
    }

    public function getComments($element_id,$plx_array){
           $value = $plx_array['comment_txt'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getSocial($element_id,$plx_array){
           $value = 1;
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }
    public function getRaiting($element_id,$plx_array){
           $value = 0;
           //$this->insertIndexses($value, $element_id); 
           $arr = array(
                "votes"=> $value,
                "value"=> $value  
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }
    public function getSocialBookmarks($element_id,$plx_array){
           $value = 1;
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getAtachFiles($element_id,$plx_array){
          $arr = array(
                "file"=> $plx_array['file_path'],
                "title"=> "",
                "download_limit"=> "",
                "hits"=> "0"
         );
         $arr1 = array(0=>$arr);
         return $arr1; 
    }

    public function getYaMaps($element_id,$plx_array){
        $arr = array(
                "location"=> $plx_array['coordinats'],
                "width"=> "",
                "height"=> "",
                "height"=> "",
                "zoom"=> "0",
                 "ballun"=> $plx_array['balun']
         );
         //$arr1 = array(0=>$arr);
         return $arr; 
    }

    public function getGoogleMaps($element_id,$plx_array){
        $this->insertIndexses($plx_array['google_coordinats'], $element_id); 
        $arr = array(
                "location"=> $plx_array['google_coordinats']
                
         );
         //$arr1 = array(0=>$arr);
         return $arr; 
    }
    
    public function getGallery($element_id,$plx_array){
        $arr = array(
                "value"=> $plx_array['gallery']
         );
         return $arr; 
    }

    public function getCorpseType($element_id,$plx_array){
           $value = $plx_array['korpus_type'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getSeriya($element_id,$plx_array){
           $value = $plx_array['seria'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getEtajnost($element_id,$plx_array){
           $value = $plx_array['etajnost_type'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getStadiyaStoitelstva($element_id,$plx_array){
           $value = $plx_array['construction_stage'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getDeadline($element_id,$plx_array){
           $value = $plx_array['deadline'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getOtdelka($element_id,$plx_array){
           $value = $plx_array['otdelka'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

    public function getComplexId($element_id,$plx_array){
           $value = $plx_array['complex_id'];
           $this->insertIndexses($value, $element_id); 
           $arr = array(
                "value"=> $value
             );
           $arr1 = array(0=>$arr);
        return $arr1;
    }

}

?>
