<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 require_once('../../SYS/dbconn.php');

  $query = "SELECT t.id, t.hndb_value  FROM rrb.rrb_s_handbooks t
            where t.rrb_handbooks_id =  ?  ";
        $handbooks_id = $_GET["handbooks_id"];
        
        $connection = conn();
        $connection->query("SET NAMES 'utf8'");
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s",$handbooks_id); 


        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                $id, $name);
       
        
         
        $users_arr = array();
        while (mysqli_stmt_fetch($stmt)) {
            $i++;
            $users_arr[]= array(
                'id'=>$id, 
                'name'=>$name
                );
            
          
        }
        
        mysqli_stmt_close($stmt);
    /*   
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  */
        
        echo $_GET["callback"].'({"totalCount":10,"results":'.json_encode($users_arr).
                '})';  
  
?>
