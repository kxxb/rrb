<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../dbconn.php');

$table_name ="rrb_housing_specification";

/*js creator*/
 $php_part_1="";
 $php_part_2="";
 $php_part_3="";
 $php_part_4="";
/*end js creator*/


$query = "desc $table_name;";
        
        
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
           $php_part_1=$php_part_1."t.".$field_name ."<br>" ;
          }else {
           $php_part_1=$php_part_1.",t.".$field_name ."<br>" ;
          }
          if ($i==1){
           $php_part_2=$php_part_2."$".$field_name ."<br>" ;
          }else {
           $php_part_2=$php_part_2.",$".$field_name ."<br>" ;
          }
          if ($i==1){
           $php_part_3=$php_part_3."'".$field_name ."'=>$".$field_name."<br>" ;
          }else {
           $php_part_3=$php_part_3.",'".$field_name ."'=>$".$field_name."<br>" ;
          }
          
        }

        echo "require_once('../../SYS/dbconn.php');<br>";
        echo "\$query = \"<br>";
        echo  "SELECT ". $php_part_1."";
        echo " FROM $table_name t \";<br>";
        echo "\$h_id = \$_GET[\"h_id\"];<br>";
        echo "\$connection = conn();<br>";
        echo "\$connection->query(\"SET NAMES 'utf8'\");<br>";
        echo "\$stmt = \$connection->prepare(\$query);<br>";
        echo "\$stmt->bind_param(\"s\",\$h_id); <br>";


        echo "/* execute query */<br>";
        echo "mysqli_stmt_execute(\$stmt);<br>";
        
        echo "mysqli_stmt_store_result(\$stmt);<br>";
        echo "mysqli_stmt_bind_result(\$stmt, <br>";
        echo $php_part_2.");<br>";
        
        echo "\$hndb_arr = array(); <br>";
        echo "while (mysqli_stmt_fetch(\$stmt)) {  <br>";
        echo "    \$i++; <br>";
        echo "    \$hndb_arr[]= array( <br>";
        echo $php_part_3;                
       echo "         ); <br>";
            
          
       echo " } <br>";
       echo " mysqli_stmt_close(\$stmt); <br>";
       echo " echo \$_GET[\"callback\"].'({\"results\":'.json_encode(\$hndb_arr). <br>";
       echo "         '})';   <br>";
        
        
        
        
        
        mysqli_stmt_close($stmt);
    /*   
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  */
        
  


?>
