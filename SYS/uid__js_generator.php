<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('dbconn.php');

$table_name ="rrb_housing_flat_info";

/*js creator*/
 $js_part_1="";
 $js_part_2="";
 $js_part_3="";
 $js_part_4="";
/*end js creator*/


$query = "desc rrb.$table_name;";
        
        
        $connection = conn();
        $connection->query("SET NAMES 'utf8'");
        $stmt = $connection->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                $field_name, $field_type, 
                $field_nullable, $field_key, 
                $field_default, $field_extra);
       
        
         
        //$users_arr = array();
        while (mysqli_stmt_fetch($stmt)) {
          $i++;
          
          
          
          if ($i==1){
           $js_part_1=$js_part_1."p_".$field_name ."&nbsp;&nbsp;&nbsp;:&nbsp;winHndbDesc.items.itemAt(0).items.itemAt($i).getValue()<br>" ;
          }else {
           $js_part_1=$js_part_1.",p_".$field_name ."&nbsp;&nbsp;&nbsp;:&nbsp;&nbspwinHndbDesc.items.itemAt(0).items.itemAt($i).getValue()<br>" ;
          }
        
          
        }

        
        echo "params: {<br>";
        echo $js_part_1."";
        echo ",u_id              : gUserId<br>";
        echo ",h_mode            :'UI'<br>";
        echo "},<br>";
        
        
        
        mysqli_stmt_close($stmt);
    /*   
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  */
        
  


?>
