<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 require_once('../../SYS/dbconn.php');

$query = "
SELECT t.id, t.handbook_name, t.handbook_description  FROM rrb_handbooks t ";





        $hand_id = $_GET["hand_id"];
        $connection = conn();
        $connection->query("SET NAMES 'utf8'");
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s",$hand_id); 


        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                $id, $name, $handbook_desc);
       
        
         
        $hndb_arr = array();
        while (mysqli_stmt_fetch($stmt)) {
            $i++;
            $hndb_arr[]= array(
                'id'=>$id, 
                'name'=>$name, 
                'handbook_description'=>$handbook_desc
                );
            
          
        }
        mysqli_stmt_close($stmt);
        echo $_GET["callback"].'({"results":'.json_encode($hndb_arr).
                '})';  
  
?>
