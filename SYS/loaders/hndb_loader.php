<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//require_once('dbconn.php');

 $date_rec = date("Y-m-d H:i:s");
 
 $h_id =0;
 ////
                $tmp_id = 0;
                $tmp_date_load = date("Y-m-d H:i:s");
                $tmp_hndb_name ="";
                $tmp_hndb_key = 0;
                $tmp_hndb_key_value =""; 
 
 function insert_h_value($connection_s,
                         $p_id,
                         $p_h_id,
                         $p_tmp_hndb_key_value,
                         $p_last_user_id,
                         $p_date_rec,
                         $p_tmp_hndb_key
                        ){
     
 $v_insert_handbooks_values = "insert into rrb_s_handbooks values
     (?,?,?,?,?,? )";
     try {
                    
                    $connection_s->query("SET NAMES 'utf8'");
                    $stmt_s = $connection_s->prepare($v_insert_handbooks_values);
                    
                        
 
                    $stmt_s->bind_param("iisiss",
                            $p_id,
                            $p_h_id,
                            $p_tmp_hndb_key_value,
                            $p_last_user_id,
                            $p_date_rec,
                            $p_tmp_hndb_key); 


                    /* execute query */

                    mysqli_stmt_execute($stmt_s);
                    mysqli_stmt_close($stmt_s);
            } catch (mysqli_sql_exception $e) {
                echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
            }  
 }               
                
                
                
 function insert_in_hndb($connection_in,
                            $p_id,
                            $p_tmp_hndb_name,
                            $p_last_user_id,
                            $p_date_rec,
                            $p_tmp_hndb_name
         ){
        $o_id = 0;
        $v_insert_handbooks = "insert into rrb_handbooks values 
             (?,?,?,?,?)";

     try {
                    
                    $connection_in->query("SET NAMES 'utf8'");
                    $stmt_in = $connection_in->prepare($v_insert_handbooks);
                    
                     
                    $stmt_in->bind_param("isiss",
                            $p_id,
                            $p_tmp_hndb_name,
                            $p_last_user_id,
                            $p_date_rec,
                            $p_tmp_hndb_name); 


                    /* execute query */

                    mysqli_stmt_execute($stmt_in);
                    $o_id = $connection_in->insert_id;
                    mysqli_stmt_close($stmt_in);
            } catch (mysqli_sql_exception $e) {
                echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
            }  
     return $o_id;
 } 

 function select_tmp_values($connection_s){
     $date_rec = date("Y-m-d H:i:s");
     $v_select_from_tmp = "SELECT
        id,
        date_load,
        hndb_name,
        hndb_key,
        hndb_key_value
     FROM rrb_temp_hnb;";
 
        
        $connection_s->query("SET NAMES 'utf8'");
        $stmt_s = $connection_s->prepare($v_select_from_tmp);
        //$stmt->bind_param("s",$handbooks_id); 


        /* execute query */
        mysqli_stmt_execute($stmt_s);
        
        mysqli_stmt_store_result($stmt_s);
        mysqli_stmt_bind_result($stmt_s, 
                $tmp_id,
                $tmp_date_load,
                $tmp_hndb_name,
                $tmp_hndb_key,
                $tmp_hndb_key_value);
        $i = 0;
         //echo "<hr>".$i." - ".$tmp_hndb_name."<br>";
         $triger_tmp_name =  $tmp_hndb_name;
         //echo "&nbsp;&nbsp;&nbsp;&nbsp;-".$tmp_hndb_key."-".$tmp_hndb_key_value."<br>";
        while (mysqli_stmt_fetch($stmt_s)) {
            if ($triger_tmp_name ==  $tmp_hndb_name){
                  /*insert s_handbooks               */ 
             insert_h_value(conn(),
                         0,
                         $h_id,
                         $tmp_hndb_key_value,
                         1,
                         $date_rec,
                         $tmp_hndb_key
                        );
                //echo "&nbsp;&nbsp;&nbsp;&nbsp;-inserted key $h_id &nbsp; tmp_=".$tmp_hndb_key."-".$tmp_hndb_key_value."<br>";
            } else{
                
                
               
               $h_id =  insert_in_hndb(conn(),
                            0,
                            $tmp_hndb_name,
                            1,
                            $date_rec,
                            $tmp_hndb_name);
               /*insert s_handbooks               */ 
               insert_h_value(conn(),
                         0,
                         $h_id,
                         $tmp_hndb_key_value,
                         1,
                         $date_rec,
                         $tmp_hndb_key
                        );
                $i++;
                //echo "<hr>".$i." - ".$tmp_hndb_name."<br>";
                //echo "&nbsp;&nbsp;&nbsp;&nbsp;-inserted key $h_id &nbsp; tmp_=".$tmp_hndb_key."-".$tmp_hndb_key_value."<br>";
                $triger_tmp_name =  $tmp_hndb_name;
            }
        }
     
 }

 //select_tmp_values(conn()); 
?>
