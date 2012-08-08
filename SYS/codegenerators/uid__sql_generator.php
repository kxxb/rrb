<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../dbconn.php');

$table_name ="rrb_housing_flat_info";

/*sql creator*/
 $sql_part_1="";
 $sql_part_2="";
 $sql_part_3="";
 $sql_part_4="";
/*end sql creator*/


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
          
          $sql_part_1=$sql_part_1."IN p_".$field_name ."&nbsp". $field_type.",<br>" ;
          
          if ($i==1){
           $sql_part_2=$sql_part_2."". $field_name ."<br>" ;
          }else {
           $sql_part_2=$sql_part_2."". ",".$field_name ."<br>" ;   
          }
          
          if ($i==1){
           $sql_part_3=$sql_part_3."". "p_".$field_name ."<br>" ;
          }else {
           $sql_part_3=$sql_part_3."". ", p_".$field_name ."<br>" ;   
          }
          
          if ($i==1){
           $sql_part_4=$sql_part_4."". $field_name . " = p_".$field_name ."<br>" ;
          }else {
           $sql_part_4=$sql_part_4."". ",".$field_name . " = p_".$field_name ."<br>" ;   
          }
        
          
        }

        
        echo "DELIMITER $$<br>";
        echo "CREATE DEFINER=`root`@`localhost` PROCEDURE `uid_$table_name`(<br>";
        echo $sql_part_1."";
        echo "IN p_mode varchar(2),<br>OUT o_result varchar(200)<br>)<br>";
        echo "BEGIN<br>";
        echo "DECLARE CONTINUE HANDLER FOR SQLSTATE '23000' SET o_result ='exit';<br>";
        echo "SET o_result = 'good_insert';<br>";
        echo "INSERT INTO $table_name <br> (<br>";
        echo $sql_part_2;
        echo ")<br>VALUES<br> (";
        echo $sql_part_3;
        echo ");<br>";
        echo "if o_result = 'exit' then<br>";
        echo "update $table_name set<br>";
        echo $sql_part_4.";";
        echo "set o_result = 'good_update';<br>end if;<br>";
        
        echo "if p_mode = 'D' then<br>";
        echo "delete from $table_name where id = p_id;<br>";
        echo "set o_result = 'good_delete';<br>";
        echo "end if;<br>";
        echo "END<br>";
        
        
        
        mysqli_stmt_close($stmt);
    /*   
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  */
        
  


?>
