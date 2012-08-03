<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function get_hndb_key($p_connection, $p_hndb_id,$p_value){
    $v_key =-999;
    $query="SELECT id FROM rrb_s_handbooks
            where rrb_handbooks_id = ?
            and hndb_value = ?  ";
     //$p_connection->query("SET NAMES 'utf8'");
     $p_connection->query("SET NAMES 'cp1251'");
        $stmt = $p_connection->prepare($query);
        $stmt->bind_param("is",$p_hndb_id, $p_value); 

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $v_key );
        while (mysqli_stmt_fetch($stmt)) { };
       mysqli_stmt_close($stmt); 
    return $v_key;
}

?>
