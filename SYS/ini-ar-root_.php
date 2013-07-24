
<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$o_meesage ='';

try{
require_once 'ar-conn.php';


function get_hnbdb_value($key){

$value_name =  rrb_handbooks::find('all', array('conditions' => 'id = '.$key));
$value_name  = $value_name[0]->hndb_value;
return $value_name;
}

///////////////////////////////////////////////////////////////////////////////
//
//////////////////////////////////////////////////////////////////////////////


$P_APARTMENT_ID =  2;
$p_date_rec =date("Y-m-d H:i:s");
  

$apartments = rrb_apartment::find('all', array('conditions' => 'id = '. $P_APARTMENT_ID , 'limit' => 3));
$housings = rrb_housing::find('all', array('conditions' => 'apartment_coplex_id = '. $P_APARTMENT_ID ));


$cond =array('conditions'=>array('id in(?) ',  array(1,2,51,52)));
$asss = rrbgate_joom::all($cond);
 //$dirrection_name = get_hnbdb_value($h_adreses[0]->dirrection_id);


foreach ($housings as $housing)
   echo $housing->name."<br>";


  foreach ($asss as $housin)
   echo $housin->title."<br>";



$o_meesage = 'Данные выставлены на сайт.';

 } catch (Exception $e) {
       
        $o_meesage = 'Выброшено глобальное исключение: '.  $e->getMessage(). "\n";
    }

    
    echo "{success:true,errors:{reason:'$o_meesage'}}";
    ?>

 
