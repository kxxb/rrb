<?php

/*
 * Новый универсальный подготовитель данных для вставки в таблицы zoo
 * В этом классе я попытаюсь сделать универсальный  построитель json для вставки 
 * в таблицу items
 * таким образом я хочу уйти от метода плэйсхолдеров 
 */

 


/*Заполнение данными массива комплекса
 * элементы масива называются точно так же как и плэйсхолдеры в шаблоне элементов
 * здесь я составляю массив всего ЖК, данные не проущенны через  json_encode
 */
function complex_data($cplx_id){

try {
        $cplx_array = array();  
        $corps_array = array();
        $i = 0;

        $apartments = rrb_apartment::all( array('conditions' => 'id = '. $cplx_id , 'limit' => 3));
        $housings = rrb_housing::all( array('conditions' => 'apartment_coplex_id = '. $cplx_id ));
          /*All id of Corpses this Appartment Complex*/
          $housing_ids = array();
          foreach($housings as $housing ) 
              $housing_ids[]= $housing->id;

        $cond =array('conditions'=>array('rrb_housing_id in(?) ',  $housing_ids));
        $h_adreses         = rrb_address::all($cond); 
        $h_finances        = rrb_finance::all($cond);
        $h_builders        = rrb_builder::all($cond);
        $h_infrastructures = rrb_infrastructure::all($cond);
        $h_specifications  = rrb_spec::all($cond);
        $h_flat_info       = rrb_housing_flat_info::all($cond);

        $dirrection_name  = get_hnbdb_value($h_adreses[0]->dirrection_id);
        $bearing_material = get_hnbdb_mask($h_specifications[0]->bearing_material_tech);
        //$build_stage      = get_hnbdb_value($h_builders[0]->build_stage_id);

         $build_date = null;
                   switch ($h_builders[0]->build_stage_id):
                        case 43:
                            $build_stage = "Проект";
                            break;
                        case 44:
                            $build_stage = "Проект";
                            break;
                        case 45:
                            $build_stage      = "Строится";
                            break;
                       case 46:
                            $build_stage      = "Строится";
                            break;
                        case 47:
                            $build_stage      = "Построен";
                            break;
                        case 48:
                            $build_stage      = "Сдан ГК";
                            break;
                        case 49:
                            $build_stage      = "Сдан ГК";
                            break;
                        default:
                            $build_stage = "Не понятно пока ещё :) " . $h_builders[0]->build_stage_id;
                    endswitch;



        $contract_type    = get_hnbdb_mask($h_finances[0]->contract_type_id);
        $ipoteka          = get_hnbdb_value($h_finances[0]->ipoteka_id);
        $parking_type     = get_hnbdb_mask($h_specifications[0]->parking_type_id);
        $etajnost_type    = get_hnbdb_value($h_specifications[0]->floors_type_id);
        $srok_sdachi =    substr(nvl($h_builders[0]->commissioning),-4);
        
         if ($h_flat_info[0]->seller_1!=null and nvl(mb_strtoupper($h_flat_info[0]->seller_1, 'UTF-8'))!='Н/Д'){ $sellers .= '{slider=Продавец 1}<p>'. $h_flat_info[0]->seller_1.'</p>{/slider}<br />' ; }
         if ($h_flat_info[0]->seller_2!=null and nvl(mb_strtoupper($h_flat_info[0]->seller_2, 'UTF-8'))!='Н/Д'){ $sellers .= '{slider=Продавец 2}<p> '.$h_flat_info[0]->seller_2.'</p>{/slider}<br />' ; }
         if ($h_flat_info[0]->seller_3!=null and nvl(mb_strtoupper($h_flat_info[0]->seller_3, 'UTF-8'))!='Н/Д'){ $sellers .= '{slider=Продавец 3}<p> '.$h_flat_info[0]->seller_3.'</p>{/slider}<br />' ; }
         if ($h_flat_info[0]->seller_4!=null and nvl(mb_strtoupper($h_flat_info[0]->seller_4, 'UTF-8'))!='Н/Д'){ $sellers .= '{slider=Продавец 4}<p> '.$h_flat_info[0]->seller_4.'</p>{/slider}<br />' ; }
         if ($h_flat_info[0]->seller_5!=null and nvl(mb_strtoupper($h_flat_info[0]->seller_5, 'UTF-8'))!='Н/Д'){ $sellers .= '{slider=Продавец 5}<p> '.$h_flat_info[0]->seller_5.'</p>{/slider}<br />' ; }
         if ($h_flat_info[0]->seller_6!=null and nvl(mb_strtoupper($h_flat_info[0]->seller_6, 'UTF-8'))!='Н/Д'){ $sellers .= '{slider=Продавец 6}<p> '.$h_flat_info[0]->seller_6.'</p>{/slider}<br />' ; }

         
         
           


          $infrastructure_ids = array();
          foreach($h_infrastructures as $h_infrastructure ) 
              $infrastructure_ids[]= $h_infrastructure->type_of_infrastructure_id;



          $cond =array('conditions'=>array('id in (?) ',  $infrastructure_ids));
          $infr_names = rrb_handbooks::all($cond);
           foreach($infr_names as $infr_name ) 
            $vokrug .=  $infr_name->hndb_value."<br>";
             
            $subject_code = null;            
            $subject_code = get_subject_code($cplx_id);
           
            $cplx_array['cplx_name']                = $apartments[0]->complex_name;
            
            //  $cplx_array['image_path']               = 'images/for_base/0001.jpg';
            //$cplx_array['image_path']               = 'http://img0.liveinternet.ru/images/attach/c/3/74/893/74893012_large_3589298_0_280d5_b7fd9668_XL.png';
            //$cplx_array['file_path']                = 'images/sampledata/fruitshop';
            //$cplx_array['gallery']                  = 'mos3';

            
//            //"file": "images\/for_base\/obj\/MOS_OBL\/745256\/001.jpeg",
          // $cplx_array['image_path']               = "images/for_base/obj/MOS_OBL/745256/001.jpeg";
            $cplx_array['image_path']               = 'images/for_base/obj/'.$subject_code.'/'.$apartments[0]->id.'/001.jpeg';
//            //"file": "images\/for_base\/obj\/MOS_OBL\/745256\/files",
            $cplx_array['file_path']                = 'images/for_base/obj/'.$subject_code.'/'.$apartments[0]->id.'/files';
//            //"value": "obj\/MOS_OBL\/745256\/images"
            $cplx_array['gallery']                  = 'obj/'.$subject_code.'/'.$apartments[0]->id.'/images';

            $cplx_array['description']              = 'описание';
            $cplx_array['state']                    = get_hnbdb_value($apartments[0]->state_id);
            
            if ($h_adreses[0]->district_of_subject == 'НАО' ||  $h_adreses[0]->district_of_subject == 'ТАО'){
                $cplx_array['okrug']                    = $h_adreses[0]->district_of_subject;
            }else{
                $cplx_array['okrug']                    = $dirrection_name;
            }
            $cplx_array['direction']                = $dirrection_name;
            if ($h_adreses[0]->subject_of_state_id == 87 || $h_adreses[0]->subject_of_state_id == 88){
               $cplx_array['rayon']                    = nvl($h_adreses[0]->region);
            } else {
               $cplx_array['rayon']                    = nvl(get_hnbdb_mask($h_adreses[0]->subject_of_state_id));
            }
            
            $cplx_array['naseleny_punkt']           = $h_adreses[0]->city;
            $cplx_array['ot_mkad']                  = $h_adreses[0]->ot_mkad;
            $cplx_array['metro']                    = nvl($h_adreses[0]->subway_station);
            $cplx_array['railway']                  = nvl($h_adreses[0]->railway_station);
            $cplx_array['addres']                   = $h_adreses[0]->building_address;
            $cplx_array['coordinats']               =  str_replace (',' , '.' ,$h_adreses[0]->longitude_yandex ).','.str_replace (',' , '.' ,$h_adreses[0]->latitude_yandex);
            $cplx_array['google_coordinats']        =  str_replace (',' , '.' ,$h_adreses[0]->latitude_yandex ).','.str_replace (',' , '.' ,$h_adreses[0]->longitude_yandex);
            $cplx_array['ya_coordinats']            = $h_adreses[0]->longitude_yandex.','.$h_adreses[0]->latitude_yandex;
            $cplx_array['balun']                    = $apartments[0]->complex_name;

            $cplx_array['complex_type']             = nvl($bearing_material);
            
            $cplx_array['deadline']                 = $srok_sdachi;
            $cplx_array['construction_stage']       = nvl($build_stage);
            $cplx_array['parking']                  = nvl($parking_type);
            $cplx_array['contact_type']             = nvl($contract_type);
            $cplx_array['sellers']                  = nvl($sellers);
            //$cplx_array['ipoteka']                  = nvl($ipoteka);
            $cplx_array['ipoteka']                  = nvl($h_finances[0]->ipoteka_conditions);
            $cplx_array['rassrochka']               = nvl($h_finances[0]->leasing_conditions);
            $cplx_array['zastoyshik']               = nvl($h_builders[0]->investor);
            $cplx_array['comment_txt']              = nvl($h_finances[0]->comment_txt);
            $out_studio = array();
            $out_studio = calculate_price_diapazon(conn(), $cplx_id);
            $cplx_array['cena_kavartiry']           = 'от '.$out_studio[1].' до '.$out_studio[3];
            //$cplx_array['korpus_type']              = get_hnbdb_value($h_specifications[0]->type_of_building));
            $cplx_array['korpus_type']              = $bearing_material;
            $cplx_array['type_parking']             = $parking_type;
            $cplx_array['type_proj_documentation']  = get_hnbdb_value($h_specifications[0]->proj_doc_type);
            $cplx_array['seria']                    = nvl($h_specifications[0]->serial_number);
            $cplx_array['otdelka']                  = get_hnbdb_mask($h_specifications[0]->finishing_flats_id);
            
            if ($h_specifications[0]->min_floors==='99999' ){
               $cplx_array['etajnost']                 = "<img width='16' height='16' src='http://kod-design.ru/templates/beez_20/images/minus.png' alt='check'>";
            } else {
              $cplx_array['etajnost']                 = 'мин. '.nvl($h_specifications[0]->min_floors).' макс. '.  nvl($h_specifications[0]->max_floors) ;
            }
            $cplx_array['etajnost_type']            = $etajnost_type;

            //$corpses


            /*Отображаются только продающиеся корпуса (идентификация по полю «SALE_STATUS» - В ПРОДАЖЕ). */
               $join =   'left join rrb.rrb_housing_finance f on rrb_housing.id = f.rrb_housing_id';
               $housings   = rrb_housing::all(array('joins' => $join,
                                              'conditions' => 'apartment_coplex_id = '.$cplx_id.' and f.impl_status_id = 50',
                                              'order' => '4, 3'
                                            ));

          /*All id of Corpses this Appartment Complex*/
            $housing_ids = array();

            foreach($housings as $housing ) {

                    $cond =array('conditions'=>array("rrb_housing_id =".$housing->id));
                    $h_adreses            = rrb_address::all($cond); 
                    // $h_finances           = rrb_finance::all($cond);
                    $h_builders           = rrb_builder::all($cond);
                    $h_infrastructures    = rrb_infrastructure::all($cond);
                    $h_specifications     = rrb_spec::all($cond);
                    $h_flat_info          = rrb_housing_flat_info::all($cond);
                    $h_finance            = rrb_housing_finance::all($cond);


                    switch ($h_builders[0]->build_stage_id):
                        case 43:
                            $build_stage = "Проект";
                            break;
                        case 44:
                            $build_stage = "Проект";
                            break;
                        case 45:
                            $build_stage  = "Строится";
                            break;
                       case 46:
                            $build_stage  = "Строится";
                            break;
                        case 47:
                            $build_stage  = "Построен";
                            break;
                        case 48:
                            $build_stage  = "Сдан ГК";
                            break;
                        case 49:
                            $build_stage  = "Сдан ГК";
                            break;
                        default:
                            $build_stage = "Не понятно пока ещё :) " . $h_builders[0]->build_stage_id;
                    endswitch;

                    $build_date = null;
                    if ($h_builders[0]->schedul_dt_commiss  != null) {
                      $build_date = $h_builders[0]->schedul_dt_commiss->format('Y-m-d'); 
                    }
                    /*элементы, которых нет в шаблоне
                     * используются для построение таблички с информацией по корпусам
                     */
                    $corps_array[$i]['corpse_id']      = $housing->id;
                    $corps_array[$i]['corpse_number']  = $housing->corpse_number;

                    /*далее идут элементы, которые есть в шаблоне*/
                    $corps_array[$i]['addres']           = $housing->name;
                    $corps_array[$i]['korpus_type']      = get_hnbdb_mask($h_specifications[0]->bearing_material_tech);
                                                            
                     if (nvl($h_specifications[0]->serial_number)=='Н/Д'){ 
                     $corps_array[$i]['seria']= " <img width='16' height='16' src='http://kod-design.ru/templates/beez_20/images/minus.png' alt='check'>";
                    } else {
                      $corps_array[$i]['seria']=   $h_specifications[0]->serial_number;
                    };
                    $corps_array[$i]['num_floors']         = 'мин. '.$h_specifications[0]->min_floors .' макс. '.  $h_specifications[0]->max_floors;
                    $corps_array[$i]['construction_stage'] = $build_stage;
                    $corps_array[$i]['deadline']            = nvl($h_builders[0]->commissioning);
                    $corps_array[$i]['otdelka']        = get_hnbdb_mask($h_specifications[0]->finishing_flats_id);
                    
                    if (nvl($h_specifications[0]->min_floors)==='Н/Д' ){
                        $corps_array[$i]['etajnost']                 = "<img width='16' height='16' src='http://kod-design.ru/templates/beez_20/images/minus.png' alt='check'>";
                     } else {
                       $corps_array[$i]['etajnost']                 = 'мин. '.nvl($h_specifications[0]->min_floors).' макс. '.  nvl($h_specifications[0]->max_floors) ;
                     }
                    
                    //$corps_array[$i]['etajnost']      = 'мин. '.$h_specifications[0]->min_floors .' макс. '.  $h_specifications[0]->max_floors;

                    
            
            if(nvl($h_flat_info[0]->min_area_studio)=='Н/Д'||$h_flat_info[0]->min_area_studio=='99999'||$h_flat_info[0]->min_area_studio=='0'){
                $v_str = "<td align='center'><img width='16' height='16' src='http://kod-design.ru/templates/beez_20/images/minus.png' alt='check'></td>";
                $corps_array[$i]['ploshad_studio_tpl']      = $v_str;
            } else {
                $v_str = '<td>от <strong>'.nvl($h_flat_info[0]->min_area_studio).
                         '</strong><br/>до <strong>'.$h_flat_info[0]->max_area_studio.'</strong></td>';
                $corps_array[$i]['ploshad_studio_tpl']      = $v_str;
            }
            
            if(nvl($h_flat_info[0]->min_area_1r)==='Н/Д'||$h_flat_info[0]->min_area_1r==='99999'||$h_flat_info[0]->min_area_1r==='0'){
                $v_str = "<td align='center'><img width='16' height='16' src='http://kod-design.ru/templates/beez_20/images/minus.png' alt='check'></td>";
                $corps_array[$i]['ploshad_1komn_tpl']      = $v_str;
            } else {
                $v_str = '<td>от <strong>'.$h_flat_info[0]->min_area_1r.
                         '</strong><br/>до <strong>'.$h_flat_info[0]->max_area_1r.'</strong></td>';
                $corps_array[$i]['ploshad_1komn_tpl']      = $v_str;
            }
            
            if(nvl($h_flat_info[0]->min_area_2r)==='Н/Д'||$h_flat_info[0]->min_area_2r==='99999' ||$h_flat_info[0]->min_area_2r==='0'){
                $v_str = "<td align='center'><img width='16' height='16' src='http://kod-design.ru/templates/beez_20/images/minus.png' alt='check'></td>";
                $corps_array[$i]['ploshad_2komn_tpl']      = $v_str;
            } else {
                $v_str = '<td>от <strong>'.$h_flat_info[0]->min_area_2r.'</strong><br/>до <strong>'.$h_flat_info[0]->max_area_2r.'</strong></td>';
                $corps_array[$i]['ploshad_2komn_tpl']      = $v_str;
            }

            if(nvl($h_flat_info[0]->min_area_3r)==='Н/Д' ||$h_flat_info[0]->min_area_3r==='99999'||$h_flat_info[0]->min_area_3r==='0'){
                $v_str = "<td align='center'><img width='16' height='16' src='http://kod-design.ru/templates/beez_20/images/minus.png' alt='check'></td>";
                $corps_array[$i]['ploshad_3komn_tpl']      = $v_str;
            } else {
                $v_str = '<td>от <strong>'.$h_flat_info[0]->min_area_3r.'</strong><br/>до <strong>'.$h_flat_info[0]->max_area_3r.'</strong></td>';
                $corps_array[$i]['ploshad_3komn_tpl']      = $v_str;
            }
            
            
            if(nvl($h_flat_info[0]->min_area_n_room)==='Н/Д'||$h_flat_info[0]->min_area_n_room==='99999'||$h_flat_info[0]->min_area_n_room==='0'){
                $v_str = "<td align='center'><img width='16' height='16' src='http://kod-design.ru/templates/beez_20/images/minus.png' alt='check'></td>";
                $corps_array[$i]['ploshad_mnogokomn_tpl']      = $v_str;
            } else {
                $v_str = '<td>от <strong>'.$h_flat_info[0]->min_area_n_room.'</strong><br/>до <strong>'.$h_flat_info[0]->max_area_n_room.'</strong></td>';
                $corps_array[$i]['ploshad_mnogokomn_tpl']      = $v_str;
            }
            
            
            $out_studio = array();
            $out_studio = calculate_flat_data(conn(), $housing->id, 'студия' );
            
             if($out_studio[19]=="99999"||nvl($out_studio[19]=='Н/Д')||$out_studio[19]==='0'){
                $v_str = "<td align='center'><img width='16' height='16' src='/templates/beez_20/images/minus.png' alt='check'></td>";
                $corps_array[$i]['costkvm_studio_tpl']      = $v_str;
            } else {
               // $v_str = "<td>от <strong>$$out_studio[9]</strong><br/>до <strong>$$out_studio[10]</strong></td>";
                $v_str = "<td align='center'><img width='16' height='16' src='/templates/beez_20/images/minus.png' alt='check'></td>";
                $corps_array[$i]['costkvm_studio_tpl']      =$v_str;
            }
            
             if(nvl($out_studio[11]=='Н/Д')||$out_studio[11]==='99999'||$out_studio[11]==='0'){
                $v_str = "<td align='center'><img width='16' height='16' src='/templates/beez_20/images/minus.png' alt='check'></td>";
                $corps_array[$i]['costflat_studio_tpl']      = $v_str;
            } else {
                $v_str = "<td>от <strong>$out_studio[11]</strong><br/>до <strong>$out_studio[13]</strong></td>";
                $corps_array[$i]['costflat_studio_tpl']      = $v_str;
            }

            $out_1 = array();
            $out_1 = calculate_flat_data(conn(), $housing->id, 1 );         
            
            if(nvl($out_1[19]=='Н/Д')||$out_1[19]==='99999'||$out_1[19]==='0'){
                $v_str = "<td align='center'><img width='16' height='16' src='/templates/beez_20/images/minus.png' alt='check'></td>";
                //$v_str = '<td align="center"><img width="16" height="16" src="http://kod-design.ru/templates/beez_20/images/minus.png" alt="check"></td>';
                $corps_array[$i]['costkvm_1komn_tpl']      = $v_str;
            } else {
                $v_str = "<td>от <strong>$out_1[19]</strong><br/>до <strong>$out_1[20]</strong></td>";
                $corps_array[$i]['costkvm_1komn_tpl']      = $v_str;
            }
            
             if(nvl($out_1[11]=='Н/Д')||$out_1[11]==='99999'||$out_1[11]==='0'){
                $v_str = '<td align="center"><img width="16" height="16" src="http://kod-design.ru/templates/beez_20/images/minus.png" alt="check"></td>';
                $corps_array[$i]['costflat_1komn_tpl']      = $v_str;
            } else {
                $v_str = "<td>от <strong>$out_1[11]</strong><br/>до <strong>$out_1[13]</strong></td>";
                $corps_array[$i]['costflat_1komn_tpl']      = $v_str;
            }
            
            $out_2 = array();
            $out_2 = calculate_flat_data(conn(), $housing->id, 2 );            
            if(nvl($out_2[19]=='Н/Д')||$out_2[19]==='99999'||$out_2[19]==='0'){
                $v_str = '<td align="center"><img width="16" height="16" src="http://kod-design.ru/templates/beez_20/images/minus.png" alt="check"></td>';
                $corps_array[$i]['costkvm_2komn_tpl']      = $v_str;
            } else {
                $v_str = "<td>от <strong>$out_2[19]</strong><br/>до <strong>$out_2[20]</strong></td>";
                $corps_array[$i]['costkvm_2komn_tpl']      = $v_str;
            }
            
             if(nvl($out_2[11]=='Н/Д')||$out_2[11]==='99999'||$out_2[11]==='0'){
                $v_str = '<td align="center"><img width="16" height="16" src="http://kod-design.ru/templates/beez_20/images/minus.png" alt="check"></td>';
                $corps_array[$i]['costflat_2komn_tpl']      = $v_str;
            } else {
                $v_str = "<td>от <strong>$out_2[11]</strong><br/>до <strong>$out_2[13]</strong></td>";
                $corps_array[$i]['costflat_2komn_tpl']      = $v_str;
            }            

            
            $out_3 = array();
            $out_3 = calculate_flat_data(conn(), $housing->id, 3 );            
            if(nvl($out_3[19]=='Н/Д')||$out_3[19]==='99999'||$out_3[19]==='0'){
                $v_str = '<td align="center"><img width="16" height="16" src="http://kod-design.ru/templates/beez_20/images/minus.png" alt="check"></td>';
                $corps_array[$i]['costkvm_3komn_tpl']      = $v_str;
            } else {
                $v_str = "<td>от <strong>$out_3[19]</strong><br/>до <strong>$out_3[20]</strong></td>";
                $corps_array[$i]['costkvm_3komn_tpl']      = $v_str;
            }
            
             if(nvl($out_3[11]=='Н/Д')||$out_3[11]==='99999'||$out_3[11]==='0'){
                $v_str = '<td align="center"><img width="16" height="16" src="http://kod-design.ru/templates/beez_20/images/minus.png" alt="check"></td>';
                $corps_array[$i]['costflat_3komn_tpl']      = $v_str;
            } else {
                $v_str = "<td>от <strong>$out_3[11]</strong><br/>до <strong>$out_3[13]</strong></td>";
                $corps_array[$i]['costflat_3komn_tpl']      = $v_str;
            }            
            

            $out_4 = array();
            $out_4 = calculate_flat_data(conn(), $housing->id, 4 );            
            if(nvl($out_4[19]=='Н/Д')||$out_4[19]==='99999'||$out_4[19]==='0'){
                $v_str = '<td align="center"><img width="16" height="16" src="http://kod-design.ru/templates/beez_20/images/minus.png" alt="check"></td>';
                $corps_array[$i]['costkvm_mnogokomn_tpl']      = $v_str;
            } else {
                $v_str = "<td>от <strong>$out_4[19]</strong><br/>до <strong>$out_4[20]</strong></td>";
                $corps_array[$i]['costkvm_mnogokomn_tpl']      = $v_str;
            }
            
             if(nvl($out_4[11]=='Н/Д')||$out_4[11]==='99999'||$out_4[11]==='0'){
                $v_str = '<td align="center"><img width="16" height="16" src="http://kod-design.ru/templates/beez_20/images/minus.png" alt="check"></td>';
                $corps_array[$i]['costflat_mnogokomn_tpl']      = $v_str;
            } else {
                $v_str = "<td>от <strong>$out_4[11]</strong><br/>до <strong>$out_4[13]</strong></td>";
                $corps_array[$i]['costflat_mnogokomn_tpl']      = $v_str;
            }            
            
                    
                    
                    
                    $corps_array[$i]['ploshad_studio_from']      = $h_flat_info[0]->min_area_studio;
                    $corps_array[$i]['ploshad_studio_to']        = $h_flat_info[0]->max_area_studio;
                    $corps_array[$i]['ploshad_1komn_from']       = $h_flat_info[0]->min_area_1r;
                    $corps_array[$i]['ploshad_1komn_to']         = $h_flat_info[0]->max_area_1r;
                    $corps_array[$i]['ploshad_2komn_from']       = $h_flat_info[0]->min_area_2r;
                    $corps_array[$i]['ploshad_2komn_to']         = $h_flat_info[0]->max_area_2r;
                    $corps_array[$i]['ploshad_3komn_from']       = $h_flat_info[0]->min_area_3r;
                    $corps_array[$i]['ploshad_3komn_to']         = $h_flat_info[0]->max_area_3r;
                    $corps_array[$i]['ploshad_mnogokomn_from']   = $h_flat_info[0]->min_area_n_room;
                    $corps_array[$i]['ploshad_mnogokomn_to']     = $h_flat_info[0]->max_area_n_room;

                    $out_studio = array();
                    $out_studio = calculate_flat_data(conn(), $housing->id, 'студия' );
                    $corps_array[$i]['costkvm_studio_from']      = $out_studio[9];
                    $corps_array[$i]['costkvm_studio_to']        = $out_studio[10];
                    $corps_array[$i]['costflat_studio_from']     = $out_studio[1];
                    $corps_array[$i]['costflat_studio_to']       = $out_studio[3];

                    $out_1 = array();
                    $out_1 = calculate_flat_data(conn(), $housing->id, 1 );            
                    $corps_array[$i]['costkvm_1komn_from']       = $out_1[9];
                    $corps_array[$i]['costkvm_1komn_to']         = $out_1[10];
                    $corps_array[$i]['costflat_1komn_from']      = $out_1[1];
                    $corps_array[$i]['costflat_1komn_to']        = $out_1[3];
                    $out_2 = array();
                    $out_2 = calculate_flat_data(conn(), $housing->id, 2 );            
                    $corps_array[$i]['costkvm_2komn_from']       = $out_2[9];
                    $corps_array[$i]['costkvm_2komn_to']         = $out_2[10];
                    $corps_array[$i]['costflat_2komn_from']      = $out_2[1];
                    $corps_array[$i]['costflat_2komn_to']        = $out_2[3];

                    $out_3 = array();
                    $out_3 = calculate_flat_data(conn(), $housing->id, 3 );            
                    $corps_array[$i]['costkvm_3komn_from']       = $out_3[9];
                    $corps_array[$i]['costkvm_3komn_to']         = $out_3[10];
                    $corps_array[$i]['costflat_3komn_from']      = $out_3[1];
                    $corps_array[$i]['costflat_3komn_to']        = $out_3[3];

                    $out_4 = array();
                    $out_4 = calculate_flat_data(conn(), $housing->id, 4 );            
                    $corps_array[$i]['costkvm_mnogokomn_from']   = $out_4[9];
                    $corps_array[$i]['costkvm_mnogokomn_to']     = $out_4[10];
                    $corps_array[$i]['costflat_mnogokomn_from']  = $out_4[1];
                    $corps_array[$i]['costflat_mnogokomn_to']    = $out_4[3];
//                    
//                    
//                    

                    $corps_array[$i]['ipoteka_korpus']           = nvl(get_hnbdb_value($h_finance[0]->ipoteka_id));
                    $corps_array[$i]['tip_dogovora_korpus']      = nvl(get_hnbdb_value($h_finance[0]->contract_type_id));
                    $corps_array[$i]['prodavcy_korpus']          = 'продавцы корпуса';
                    //end corpses
                    $i++;
          }
            $cplx_array['corpses'] = $corps_array;
            $cplx_array['complex_id']               = $cplx_id;


} catch (Exception $e) {
     $o_message = 'Выброшено глобальное исключение: complex_data('.$cplx_id.') '.  $e->getMessage(). "\n";
  }    
   
 return $cplx_array;
}



?>