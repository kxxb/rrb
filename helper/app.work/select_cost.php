<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 require_once('../../SYS/dbconn.php');

$query = "
    
    SELECT t.id,
           t.cost_det_description,
           t.cost_rate,
           t.quant,
           t.cost_ammount,
           t.agent_id,
           t.issue_id,
           t.currency_id,  
           z.am, 
           (z.am - t.cost_ammount) as profit,
    round(((z.am - t.cost_ammount)/z.am)*100) as profitablity,
      a.agent_name,
      (select count(*) FROM rrl.rrl_cost_details t) as c
      FROM rrl.rrl_cost_details t, rrl.rrl_agents a,
    (SELECT z.issue_id,
       sum(z.total_ammount) as am
     FROM rrl.rrl_revenue_details z
     group by z.issue_id) z
    where t.issue_id = z.issue_id
    and a.id = t.agent_id
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
                $id, $cost_det_description, $cost_rate, $quant, $cost_ammount, $agent_id, 
                $issue_id, $currency_id, $total_ammount, $profit, $profitablity, 
                $agent_name, $total_count);
       
        
         
        $users_arr = array();
        while (mysqli_stmt_fetch($stmt)) {
            $i++;
            $users_arr[]= array(
                'id'=>$id, 
                'cost_det_description'=>$cost_det_description, 
                'cost_rate'=>$cost_rate, 
                'quant'=>$quant, 
                'cost_ammount'=>$cost_ammount, 
                'agent_id'=>$agent_id, 
                'issue_id'=>$issue_id, 
                'currency_id'=>$currency_id, 
                'total_ammount'=>$total_ammount, 
                'profit'=>$profit, 
                'profitablity'=>$profitablity, 
                'agent_name'=>$agent_name
                
                );
            
          
        }
        
        mysqli_stmt_close($stmt);
       
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  
?>
