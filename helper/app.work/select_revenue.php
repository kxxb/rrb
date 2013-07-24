<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 require_once('../../SYS/dbconn.php');

$query = "
    
select t.id,
       t.revenue_description,
       t.revenue_rate,
       t.currency_id,
       t.quant,
       t.total_ammount,
       t.issue_id,
       z.am, 
    (select count(*) FROM rrl.rrl_revenue_details t) as c
FROM rrl.rrl_revenue_details t,
(SELECT z.issue_id,
   sum(z.total_ammount) as am
 FROM rrl.rrl_revenue_details z
 group by z.issue_id) z
where t.issue_id = z.issue_id
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
                $id, $revenue_description, $revenue_rate, $currency_id, $quant, $total_ammount, 
                $issue_id, $total_revenue, $total_count);
       
        
         
        $users_arr = array();
        while (mysqli_stmt_fetch($stmt)) {
            $i++;
            $users_arr[]= array(
                'id'=>$id, 
                'revenue_description'=>$revenue_description, 
                'revenue_rate'=>$revenue_rate, 
                'currency_id'=>$currency_id, 
                'quant'=>$quant, 
                'total_ammount'=>$total_ammount, 
                'issue_id'=>$issue_id, 
                'total_revenue'=>$total_revenue
                
                
                );
            
          
        }
        
        mysqli_stmt_close($stmt);
       
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  
?>
