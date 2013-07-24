<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('../../SYS/dbconn.php');

//$h_id =  "6,5,8";
$ipoteka_id = $_GET["ipoteka_id"];
$bearing_material_tech = $_GET["bearing_material_tech"];
$contract_type_id = $_GET["contract_type_id"];

$emty_flag = 0;

$v_param_select ="";
if ($ipoteka_id!=null){
  $emty_flag =1;
  $v_param_select =  "
   SELECT rrb_housing_id FROM rrb.rrb_housing_finance
    where ipoteka_id = $ipoteka_id";
}

if ($bearing_material_tech!=null){
  $emty_flag =1;  
  if ($v_param_select !=""){$v_param_select=" union "; }
  $v_param_select = $v_param_select. "
      SELECT rrb_housing_id FROM rrb.rrb_housing_specification
    where bearing_material_tech = $bearing_material_tech";
}

if ($contract_type_id!=null){
  $emty_flag =1;  
  if ($v_param_select !=""){$v_param_select=" union "; }
  $v_param_select = $v_param_select. "
     SELECT rrb_housing_id FROM rrb.rrb_housing_finance
    where contract_type_id = $contract_type_id";
}

$v_param_select = $v_param_select. " order by 1  ";







//$h_id = $_GET["h_id"];
$connection = conn();
$connection->query("SET NAMES 'utf8'");


/**/

$stmt = $connection->prepare($v_param_select);
//$stmt->bind_param("s", $h_id);
/* execute query */
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
mysqli_stmt_bind_result($stmt, $hid);

$hndb_arr = array();
while (mysqli_stmt_fetch($stmt)) {
    $i++;
     if ($i==1){
         $h_id = $h_id.$hid;
     }else{
        $h_id = $h_id.",".$hid;
     }
}

/**/




if ($emty_flag ==1){


$v_sql =" 
          select  a.id,          
                 a.complex_name, 
                 h.name,                      
                 h.corpse_number   
                ,cti.hndb_value as contract_type_id_name
               ,wmi.hndb_value as wall_material_id_name 
               ,ii.hndb_value as  ipoteka_id_name    
         from rrb_apartment_comlex a, rrb_housing h, rrb_housing_specification s
   left join 
	        rrb_s_handbooks wmi 		on
            wmi.id = s.bearing_material_tech
        and wmi.rrb_handbooks_id  = 13
   , rrb_housing_finance t
    left join 
	        rrb_s_handbooks cti 		on
            cti.id = t.contract_type_id
        and cti.rrb_handbooks_id  = 14
   left join 
	        rrb_s_handbooks ii 		on
            ii.id = t.ipoteka_id
        and ii.rrb_handbooks_id  = 2
  where a.id =  h.apartment_coplex_id
       and h.id =  t.rrb_housing_id
       and h.id =  s.rrb_housing_id     
       and   h.id in  ($h_id) 

   ";
}else{
    $v_sql =" 
          select  a.id,          
                 a.complex_name, 
                 h.name,                      
                 h.corpse_number   
                ,cti.hndb_value as contract_type_id_name
               ,wmi.hndb_value as wall_material_id_name 
               ,ii.hndb_value as  ipoteka_id_name    
         from rrb_apartment_comlex a, rrb_housing h, rrb_housing_specification s
   left join 
	        rrb_s_handbooks wmi 		on
            wmi.id = s.bearing_material_tech
        and wmi.rrb_handbooks_id  = 13
   , rrb_housing_finance t
    left join 
	        rrb_s_handbooks cti 		on
            cti.id = t.contract_type_id
        and cti.rrb_handbooks_id  = 14
   left join 
	        rrb_s_handbooks ii 		on
            ii.id = t.ipoteka_id
        and ii.rrb_handbooks_id  = 2
  where a.id =  h.apartment_coplex_id
       and h.id =  t.rrb_housing_id
       and h.id =  s.rrb_housing_id     

   ";
    
}
    


$test_h_id  = $_GET["test_h_id"];
if ($test_h_id  != null){
   
    $v_sql =" 
          select  a.id,          
                 a.complex_name, 
                 h.name,                      
                 h.corpse_number   
                ,cti.hndb_value as contract_type_id_name
               ,wmi.hndb_value as wall_material_id_name 
               ,ii.hndb_value as  ipoteka_id_name    
         from rrb_apartment_comlex a, rrb_housing h, rrb_housing_specification s
   left join 
	        rrb_s_handbooks wmi 		on
            wmi.id = s.bearing_material_tech
        and wmi.rrb_handbooks_id  = 13
   , rrb_housing_finance t
    left join 
	        rrb_s_handbooks cti 		on
            cti.id = t.contract_type_id
        and cti.rrb_handbooks_id  = 14
   left join 
	        rrb_s_handbooks ii 		on
            ii.id = t.ipoteka_id
        and ii.rrb_handbooks_id  = 2
  where a.id =  h.apartment_coplex_id
       and h.id =  t.rrb_housing_id
       and h.id =  s.rrb_housing_id     
       and   a.id in  ($test_h_id) 

   ";
    
    
    
}

$stmt = $connection->prepare($v_sql);
//$stmt->bind_param("s", $h_id);
/* execute query */
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
mysqli_stmt_bind_result($stmt, $id, $complex_name, $name, $corpse_number
       ,$contract_type_id_name
               ,$bearing_material_tech_name 
               ,$ipoteka_id_name    
        );

$hndb_arr = array();
while (mysqli_stmt_fetch($stmt)) {
    $i++;
    $hndb_arr[] = array(
        'id' => $id,
        'complex_name'=>$complex_name, 
        'name'=>$name, 
        'corpse_number'=>$corpse_number,
        'contract_type_id_name' => $contract_type_id_name,
        'bearing_material_tech_name' =>$bearing_material_tech_name ,
        'ipoteka_id_name' =>$ipoteka_id_name   
        );
}
mysqli_stmt_close($stmt);
echo $_GET["callback"] . '({"results":' . json_encode($hndb_arr) .
 '})';



?>
