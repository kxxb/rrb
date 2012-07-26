<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 require_once('../../SYS/dbconn.php');

$query = "
    
SELECT t.id,
       t.issue_id,
       t.vehicle_number,
        t.gw_mt,
        t.vehicle_type,
        t.bl,
        t.CASH_ADVANCE_PAID,
        t.remarks,
       i.dispatch_numb, 
(select count(*) FROM rrl.rrl_vehicle_details t) as c
FROM rrl.rrl_vehicle_details t, rrl.rrl_issue i
where t.issue_id = i.id
and t.issue_id = ?
limit ?,?
        ";





        $issue_id = $_GET["issue_id"];
        $start = $_GET["start"];
        $limit = $_GET["limit"];;
        $connection = conn();
        $connection->query("SET NAMES 'utf8'");
        $stmt = $connection->prepare($query);
        $stmt->bind_param("sss",$issue_id, $start, $limit); 


        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                $id, $issue_id, $vehicle_number, $gw_mt, $vehicle_type, $bl, $CASH_ADVANCE_PAID, 
                $remarks, $dispatch_numb,$total_count);
       
        
         
        $users_arr = array();
        while (mysqli_stmt_fetch($stmt)) {
            $i++;
            $users_arr[]= array(
                'id'=>$id, 
                'issue_id'=>$issue_id, 
                'vehicle_number'=>$vehicle_number, 
                'gw_mt'=>$gw_mt, 
                'vehicle_type'=>$vehicle_type, 
                'bl'=>$bl, 
                'CASH_ADVANCE_PAID'=>$CASH_ADVANCE_PAID, 
                'remarks'=>$remarks, 
                'dispatch_numb'=>$dispatch_numb
                
                );
            
          
        }
        
        mysqli_stmt_close($stmt);
       
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  
?>
