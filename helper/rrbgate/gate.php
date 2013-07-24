<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



function load_object($p_comlex_id, $p_conn, $p_joom_conn){
    $o_message = "load_object";
    
    $v_id = ' ';
    $v_title = ' ';
    $v_city = ' ';
    $v_alias = ' ';
    $v_address = ' ';
    $v_okrug = ' ';
    $v_metro = ' ';
    $v_cost_from = ' ';
    $v_cost_till = ' ';
    $v_srok_sdachi = ' ';
    $v_map1 = ' ';
    $v_map2 = ' ';
    $v_vokrug = ' ';
    $v_snippet = ' ';
    $v_fulltext = ' ';
    $v_korpus1 = ' ';
    $v_korpus2 = ' ';
    $v_catid = ' ';
    $v_created = ' ';
    $v_created_by = ' ';
    $v_created_by_alias = ' ';
    $v_modified = ' ';
    $v_modified_by = ' ';
    $v_checked_out_time = ' ';
    $v_checked_out = ' ';
    $v_state = ' ';
    $v_featured = ' ';
    $v_publish_up = ' ';
    $v_publish_down = ' ';
    $v_access = ' ';
    $v_asset_id = ' ';
    $v_version = ' ';
    $v_language = ' ';
    $v_ordering = ' ';
    $v_metakey = ' ';
    $v_metadesc = ' ';
    $v_metadata = ' ';
    $v_parameters = ' ';
    $v_custom_fields = ' ';

    
    /**/
    $v_joom_insert = "
        INSERT INTO `rrbase_joom`.`cg5u4_rrbgates`
        ( `id`, `title`, `city`, `alias`, `address`, `okrug`,
        `metro`, `cost_from`, `cost_till`, `srok_sdachi`, `map1`, `map2`,
        `vokrug`, `snippet`,  `fulltext`, `korpus1`, `korpus2`, 

        `catid`,  `created`,  `created_by`,  `created_by_alias`, `modified`,
        `modified_by`, `checked_out_time`, `checked_out`,  `state`, `featured`,
        `publish_up`, `publish_down`, `access`,  `asset_id`,  `version`, `language`, 
        `ordering`,  `metakey`,  `metadesc`,  `metadata`,  `parameters`, `custom_fields`)
        VALUES 
        (
            ?, ?,?,?,?,?,?,?,?,?,?,?,?,
            ?,?,?,?,?,?,?,?,?,?,?,?,?,?,
            ?,?,?,?,?,?,?,?,?,?,?,?
        ); ";
    
    
    
    try {
                    
                    $p_joom_conn->query("SET NAMES 'utf8'");
                    $stmt_joom = $p_joom_conn->prepare($v_joom_insert);
                 
                    $stmt_joom->bind_param("iisiss",
                            $v_id, $v_title, $v_city, $v_alias, $v_address, $v_okrug,
                            $v_metro,  $v_cost_from, $v_cost_till,$v_srok_sdachi,  $v_map1, $v_map2,
                            $v_vokrug,  $v_snippet, $v_fulltext, $v_korpus1, $v_korpus2,
                            
                            $v_catid, $v_created,  $v_created_by,  $v_created_by_alias,  $v_modified,
                            $v_modified_by, $v_checked_out_time,$v_checked_out, $v_state, $v_featured, 
                            $v_publish_up, $v_publish_down,$v_access,$v_asset_id,$v_version,$v_language,
                            $v_ordering,$v_metakey,$v_metadesc,$v_metadata,$v_parameters,$v_custom_fields
); 


                    /* execute query */

                    mysqli_stmt_execute($stmt_joom);
                    mysqli_stmt_close($stmt_joom);
            } catch (mysqli_sql_exception $e) {
                $o_message .= 'Выброшено исключение в точке load_object.joom_insert:  '.  $e->getMessage();
            } 
    
    return $o_message;
}
?>
