<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 
 require_once('../helper/handbooks/hndb_utilits.php');
 require_once('dbconn.php');
 
 $p_connect = conn();
            $p_id = null;
            $p_last_user_id = 1;
            $p_date_rec = date("Y-m-d H:i:s");
            $p_mode = "UI";
            $p_hndb_id = 2;
            $p_value = "НЕТ";
            $k=1;
            $p_complex_name ="coplex test";
            
              $v_result =$v_result."<br>get_hndb_key =". get_hndb_key($p_connect, $p_hndb_id,$p_value);
                      
             echo $v_result; 
            
?>
