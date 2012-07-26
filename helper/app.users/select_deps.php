<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 require_once('../../SYS/dbconn.php');

$query = "
      SELECT 
        d.id,
        d.name as dep_name,
        (select count(*) FROM rrl.rrl_dep) as c  
        FROM  rrl.rrl_dep d 
        limit ?,?
        ";





        $start = $_GET["start"];
        $limit = $_GET["limit"];;
        $connection = conn();
        $connection->query("SET NAMES 'utf8'");
        $stmt = $connection->prepare($query);
        $stmt->bind_param("ss", $start, $limit); 

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $id, $dep_name,$total_count);
       
        
         
        $dep_arr = array();
        while (mysqli_stmt_fetch($stmt)) {
            $i++;
            $dep_arr[]= array(
                'id'=>$id, 
                'dep_name'=>$dep_name
                );
            
          
        }
        
        mysqli_stmt_close($stmt);
       
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($dep_arr).
                '})';  
  
?>
