<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../dbconn.php');

/*
 rrb_apartment_comlex;
rrb_flats;
rrb_housing;
rrb_housing_address;
 rrb_housing_commercial;
rrb_housing_finance;
rrb_housing_flat_info;
rrb_housing_infrastructure;
rrb_housing_specification;
rrb_investor_builder;

 */

$table_name ="rrb_investor_builder";

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
             
           $php_part_1=$php_part_1." ".$field_name ."= OLD.".$field_name ."<br>" ;
          }else {
           $php_part_1=$php_part_1.", ".$field_name ."= OLD.".$field_name ."<br>" ;
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

        echo "DELIMITER $$<br>";
        echo "CREATE TRIGGER bu_$table_name BEFORE UPDATE  ON $table_name<br>";
        echo  "FOR EACH ROW BEGIN<br>";
        echo "   INSERT INTO arch_$table_name SET <br>";
        echo    $php_part_1."";
        echo ",operation_name = \"UPDATE\"<br>";
        echo " ,who_activate    = NEW.LAST_USER_ID<br>";
        echo ",when_operation = now();<br>";
        echo "END; <br>";

        echo "<hr>";
        echo "DELIMITER $$<br>";
        echo "CREATE TRIGGER bd_$table_name BEFORE DELETE  ON $table_name<br>";
        echo  "FOR EACH ROW BEGIN<br>";
        echo "   INSERT INTO arch_$table_name SET <br>";
        echo    $php_part_1."";
        echo ",operation_name = \"DELETE\"<br>";
        echo " ,who_activate    = 0<br>";
        echo ",when_operation = now();<br>";
        echo "END; <br>";

        
        
        
        mysqli_stmt_close($stmt);
    /*   
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  */
        
  



  
  

?>
