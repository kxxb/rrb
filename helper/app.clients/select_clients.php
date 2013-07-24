<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


//function select_clients($start, $limit){
   
        require_once('../../SYS/dbconn.php');
        
        $sql = " SELECT                                              ".
               "     rrl_clients.cid,                                ".
               "     rrl_clients.organiztion_name,                   ".
               "     rrl_clients.actual_address,                     ".
               "     rrl_clients.legal_address,                      ".   
               "     rrl_clients.org_phone,                          ".
               "     case when rrl_clients.cell_phone = '' then 'n/a' else rrl_clients.cell_phone end as cell_phone,                         ".
               "     rrl_clients.email,                              ".
               "     rrl_clients.contact_person,                     ".
               "     rrl_clients.client_source_id,                   ".
               "     rrl_s_handbooks.name as client_source_name,     ".   
               "     rrl_clients.last_user_id,                       ".   
               "     DATE_FORMAT(rrl_clients.date_rec, '%d.%m.%Y '),              ".    
               "     CONCAT(rrl_users.name, ' ',                     ".   
               "       rrl_users.middle_name) as user_name,           ".    
               " (select count(*) from rrl.rrl_clients) as  c        ".   
               " FROM                                                ".
               "     rrl.rrl_clients,                                ".
               "     rrl.rrl_users,                                  ".
               "     rrl.rrl_s_handbooks                             ".       
               " where                                               ".
               "     rrl_clients.last_user_id = rrl_users.id         ".   
               " and rrl_s_handbooks.rrl_handbooks_id = 1            ".   
               " and rrl_s_handbooks.id = rrl_clients.client_source_id ".
               " order by 1 ". 
               " limit ?,?                                            ";
            
        $start = $_GET["start"];
        $limit = $_GET["limit"];;
        $result = "";
        
        
        
        $connection = conn();
        $connection->query("SET NAMES 'utf8'");
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("ss", $start, $limit); 

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $cid, $organiztion_name, $actual_address,
                $legal_address,$org_phone,$cell_phone, $email, $contact_person,
                $client_source_id, $client_source_name, $last_user_id,$date_rec,
                $user_name,$total_count);
       
        
         
        $clients_arr = array();
        while (mysqli_stmt_fetch($stmt)) {
            $i++;
            $clients_arr[]= array(
                'cid' => $cid, 
                'organiztion_name' => $organiztion_name, 
                'actual_address' => $actual_address,
                'legal_address' => $legal_address,
                'org_phone' => $org_phone,
                'cell_phone' => $cell_phone, 
                'email' => $email, 
                'contact_person' => $contact_person,
                'client_source_id' => $client_source_id, 
                'client_source_name' => $client_source_name, 
                'last_user_id' => $last_user_id,
                'date_rec'=>$date_rec,
                'user_name' => $user_name
                );
            
          
        }
        
        mysqli_stmt_close($stmt);
       
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode( $clients_arr).
                '})';  
  
       
   
       // echo json_encode( $clients_arr);
             
    
//}


?>
