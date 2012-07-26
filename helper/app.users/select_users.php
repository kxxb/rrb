<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 require_once('../../SYS/dbconn.php');

$query = "
      SELECT 
        u.id,
        u.login,
        u.pass,
        u.name,
        u.middle_name,
        u.last_name,
        u.rrl_dep_id,
        d.name as dep_name,
        u.user_status,
        case when u.user_status = 1 then 'Active'
             when u.user_status = 0 then 'Passive'
             else 'Undefine'
             end as user_status_name,     
        DATE_FORMAT(u.user_start_date,  '%d.%m.%Y ') as user_satrt_date,
        DATE_FORMAT( u.user_birthday,  '%d.%m.%Y ') as user_birthday,
        (select count(*) FROM rrl.rrl_users) as c  
        FROM rrl.rrl_users u, rrl.rrl_dep d 
        where u.rrl_dep_id = d.id
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
        mysqli_stmt_bind_result($stmt, 
                $id, $login, $pass, $name, $middle_name, $last_name, 
                $rrl_dep_id, $dep_name, $user_status, $user_status_name, 
                $user_satrt_date, $user_birthday,$total_count);
       
        
         
        $users_arr = array();
        while (mysqli_stmt_fetch($stmt)) {
            $i++;
            $users_arr[]= array(
                'id'=>$id, 
                'login'=>$login, 
                'pass'=>$pass, 
                'name'=>$name, 
                'middle_name'=>$middle_name, 
                'last_name'=>$last_name, 
                'rrl_dep_id'=>$rrl_dep_id, 
                'dep_name'=>$dep_name, 
                'user_status'=>$user_status, 
                'user_status_name'=>$user_status_name, 
                'user_satrt_date'=>$user_satrt_date, 
                'user_birthday'=>$user_birthday
                );
            
          
        }
        
        mysqli_stmt_close($stmt);
       
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  
?>
