<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 require_once('../../SYS/dbconn.php');

 /*
  *mode 
  *  UI - update insert
  *  D  - delete
  */
 
 $id= $_GET["v_id"];
 $rrb_handbooks_id=$_GET["h_id"];
 $hndb_value=$_GET["h_value"];
 $hndb_mask=$_GET["h_mask"];
 $last_user_id=$_GET["u_id"];
 $date_rec=date("Y-m-d H:i:s");
 $mode=$_GET["h_mode"];
 
 
 //$id= ;
 /*$rrb_handbooks_id=5;
 $hndb_value="test 5 ky";
 $last_user_id=1;
 $date_rec=date("Y-m-d H:i:s");
 $mode="U";
 */
 
 
 
$query_ui = "CALL uid_handbooks(?,?,?,?,?,?,?,@output);";
        
        $connection = conn();
        $connection->query("SET NAMES 'utf8'");
        $stmt = $connection->prepare($query_ui);
        mysqli_stmt_bind_param($stmt, "iississ",
                $id, 
                $rrb_handbooks_id,
                $hndb_value,
                $hndb_mask,
                $last_user_id,
                $date_rec,
                $mode); 
        
        if ($results_insupdhndb=mysqli_stmt_execute($stmt) ) {
          mysqli_stmt_close($stmt); 
        } else  {
            echo "{success:false,errors:{reason:'Ошибка выполнения процедуры MySql!'}}";
        }
        $stmt = $connection->prepare('SELECT @output ');
        if ($results_insupdhndb=mysqli_stmt_execute($stmt) ) {
            mysqli_stmt_store_result($stmt);
            mysqli_stmt_bind_result($stmt, $output);
             while (mysqli_stmt_fetch($stmt)) {
                //echo $output;
            }
            if ($output=='good_insert') {
                echo "{success:true,errors:{reason:'Запись сохранена!'}}";
            }  
             if ($output=='good_update') {
                echo "{success:true,errors:{reason:'Запись изменена!'}}";
            }
             if ($output=='good_delete') {
                echo "{success:true,errors:{reason:'Запись удалена!'}}";
            }
            mysqli_stmt_close($stmt); 
        } else {
            echo "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
        }
  
?>
