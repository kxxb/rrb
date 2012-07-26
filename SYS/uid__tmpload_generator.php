<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('dbconn.php');

$table_name ="rrb_temporary_load";

/*sql creator*/
 $php_part_1="";
 $php_part_2="";
 $php_part_3="";
 $php_part_4="";
 $php_part_5="";
 $php_part_6="";
 $php_part_7="";
/*end sql creator*/


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
          
            $j++;  
              
            $php_part_1=$php_part_1." '\".\$v_".$field_name .".\"',<br>" ;
         
        }

        
        echo $php_part_1."";
        
        
        mysqli_stmt_close($stmt);
    /*   
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  */
        
  


?>
