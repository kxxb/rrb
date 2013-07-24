<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 require_once('../../SYS/dbconn.php');

 
 

 /*
  *     SELECT t.id,
       t.client_id,
       c.organiztion_name,
       c.actual_address,
       c.org_phone,  
       c.contact_person,
       t.is_invoice_send, 
      (select count(*) FROM rrl.rrl_cost_details t) as c
      FROM rrl.rrl_issue_client t, rrl.rrl_clients c
    where t.client_id = c.cid
    and t.issue_id = ?
    order by  t.is_invoice_send
    limit ?,?
  * 
  */
 
 
 
 
$query = "
    (select 'FORWARDING OFFICE:', 0,0,'RRL MOSCOW', 'Moscow Russia','2155555','Null',5 )
    union 
    (SELECT (select CASE t.is_invoice_send  when   0 then
            'CLIENT DETAILS : '
           else 'ORIGINAL INVOICE SEND TO:'
           END ) as det, 
           t.id,
           t.client_id,
           c.organiztion_name,
           c.actual_address,
           c.org_phone,  
           c.contact_person,
           t.is_invoice_send 
     FROM rrl.rrl_issue_client t, rrl.rrl_clients c
    where t.client_id = c.cid
    and t.issue_id = ?
    order by  t.is_invoice_send
    
    limit 0,2)

        ";





        $issue_id = $_GET["issue_id"];
        $connection = conn();
        $connection->query("SET NAMES 'utf8'");
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s",$issue_id); 


        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                $det, $id, $client_id, $organiztion_name, $actual_address,
                $org_phone, $contact_person, $is_invoice_send);
       
        $total_count = 2;
         
        $users_arr = array();
        while (mysqli_stmt_fetch($stmt)) {
            $i++;
            $users_arr[]= array(
                'det'=>$det, 
                'id'=>$id, 
                'client_id'=>$client_id, 
                'organiztion_name'=>$organiztion_name, 
                'actual_address'=>$actual_address, 
                'org_phone'=>$org_phone, 
                'contact_person'=>$contact_person, 
                'is_invoice_send'=>$is_invoice_send
                
                );
            
          
        }
        
        mysqli_stmt_close($stmt);
       
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  
?>
