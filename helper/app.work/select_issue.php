<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 require_once('../../SYS/dbconn.php');

$query = "
    
SELECT 
    t.id,
    t.pid,
    t.dispatch_numb,
    DATE_FORMAT(t.issue_date, '%d.%m.%Y ') as issue_date,
    t.dist_from,
    DATE_FORMAT(t.etd, '%d.%m.%Y ') as etd,
    t.dist_to,
    DATE_FORMAT(t.eta, '%d.%m.%Y ') as eta,
    t.type_of_shipment,
    t.prparet_by,
    t.last_user_id,
    t.vehicle_type,
    u.name,
    u.last_name,
    
    (select count(*) FROM rrl.rrl_issue t) as c  
FROM
    rrl.rrl_issue t,
    rrl.rrl_users u
where
    t.prparet_by = u.id
and t.id = ?
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
                $id, $pid, $dispatch_numb, $issue_date, $dist_from, $etd, 
                $dist_to, $eta, $type_of_shipment, $prparet_by, 
                $last_user_id, $vehicle_type, $name, $last_name, $total_count);
       
        
         
        $users_arr = array();
        while (mysqli_stmt_fetch($stmt)) {
            $i++;
            $users_arr[]= array(
                'id'=>$id, 
                'pid'=>$pid, 
                'dispatch_numb'=>$dispatch_numb, 
                'issue_date'=>$issue_date, 
                'dist_from'=>$dist_from, 
                'etd'=>$etd, 
                'dist_to'=>$dist_to, 
                'eta'=>$eta, 
                'type_of_shipment'=>$type_of_shipment, 
                'prparet_by'=>$prparet_by, 
                'last_user_id'=>$last_user_id, 
                'vehicle_type'=>$vehicle_type,
                'name'=>$name,
                'last_name'=>$last_name
                
                );
            
          
        }
        
        mysqli_stmt_close($stmt);
       
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  
?>
