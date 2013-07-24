<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


//function get_client_tree($guid){
//        require_once('dbconn.php');
//        $connection = conn();
//        $connection->query("SET NAMES 'utf8'");
//        $stmt = $connection->prepare("SELECT name, middle_name FROM  rrl_users where id = ?");
//        $stmt->bind_param("s", $guid); 
//
//        /* execute query */
//        mysqli_stmt_execute($stmt);
//        mysqli_stmt_store_result($stmt);
//        mysqli_stmt_bind_result($stmt, $name, $middle_name  );
//        while (mysqli_stmt_fetch($stmt)) {
//            $user_name  =  $user_name. "'Здравсвуйте, <b>".$name." ".$middle_name." </b>' ";
//        }
//        mysqli_stmt_close($stmt);
//        return $user_name;
//}

function get_tree(){
        require_once('dbconn.php');
        $company_i = 0;
        $issue_i = 0;
        $v_result = "[";
        $sql_companys = "SELECT distinct c.organiztion_name, c.cid  FROM rrl.rrl_issue t, rrl.rrl_clients c ".
                            " where t.client_id = c.cid";
        
        $sql_issue =  "select t.id, t.pid, t.dispatch_numb, status_id ".
                      "    from  rrl.rrl_issue t  ".
                      "  where t.client_id = ? ";
        $connection = conn();
        $connection->query("SET NAMES 'utf8'");
        $stmt = $connection->prepare($sql_companys);
        
        
        /* execute query */
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $organization_name, $cid  );
        while (mysqli_stmt_fetch($stmt)) {
            if ($company_i == 0){
              $v_result = $v_result .  " { ".
                                       "     text:'$organization_name',   ".
                                       "     id:'$cid', ". 
                                       "     cls:'folder',    ".
                                       "     children:[";
                
            } else {
                $v_result = $v_result .  " ,{ ".
                                       "     text:'$organization_name',   ".
                                       "     id:'$cid', ". 
                                       "     cls:'folder',    ".
                                       "     children:[";
                
            }
            $company_i++;
            $issue_i =0;
            
                /*dispatch */
                $conn_issue = conn();
                $conn_issue->query("SET NAMES 'utf8'");
                $stmt_issue = $conn_issue->prepare($sql_issue);
                $stmt_issue->bind_param("s", $cid); 
                /* execute query */
                mysqli_stmt_execute($stmt_issue);
                mysqli_stmt_store_result($stmt_issue);
                mysqli_stmt_bind_result($stmt_issue, $iid, $ipid, $disp_numb, $status_id  );
                while (mysqli_stmt_fetch($stmt_issue)) {
                    if ($issue_i == 0){
                      $v_result = $v_result .  " { ".
                                               "     text:'$disp_numb',   ".
                                               "     id:'$iid', ". 
                                               "     leaf:true   ".
                                               " } ";

                    } else {
                        $v_result = $v_result .  " ,{ ".
                                               "     text:'$disp_numb',   ".
                                               "     id:'$iid', ". 
                                               "     leaf:true".
                                               " } ";

                    }
                    $issue_i++;


                }
               mysqli_stmt_close($stmt_issue);
            $v_result = $v_result . "]}";
            
//            $user_name  =  $user_name. "'Здравсвуйте, <b>".$name." ".$middle_name." </b>' ";
        }
        $v_result = $v_result . "]";
        mysqli_stmt_close($stmt);
        return $v_result;
    
}
//
//function get_issue_by_company($cid){
//        require_once('dbconn.php');
//        $sql_issue =  "select t.id, t.pid, t.dispatch_numb, status_id ".
//                      "    from  rrl.rrl_issue t  ".
//                      "  where t.client_id = ? ";
//        $conn_issue = conn();
//        $conn_issue->query("SET NAMES 'utf8'");
//        $stmt_issue = $conn_issue->prepare($sql_issue);
//        $stmt_issue->bind_param("s", $cid); 
//
//        /* execute query */
//        mysqli_stmt_execute($stmt_issue);
//        mysqli_stmt_store_result($stmt_issue);
//        mysqli_stmt_bind_result($stmt_issue, $iid, $ipid, $disp_numb, $status_id  );
//        while (mysqli_stmt_fetch($stmt_issue)) {
//            $user_name  =  $user_name. "'Здравсвуйте, <b>".$name." ".$middle_name." </b>' ";
//        }
//        mysqli_stmt_close($stmt_issue);
//        return $user_name;
//    
//}


?>
