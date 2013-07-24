    <?php	                                       			

    require_once('../../SYS/dbconn.php');
    $query = "
    SELECT 
     t.id
     ,t.name
    ,t.corpse_number
    FROM rrb_housing t 
    where t.apartment_coplex_id = ?";
    $h_id = $_GET["h_id"];
    $connection = conn();
    $connection->query("SET NAMES 'utf8'");
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $h_id);
    /* execute query */
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_bind_result($stmt
             ,$id
            , $name
            , $corpse_number
            //, $apartment_coplex_id
           // , $last_user_id
            
    );
    $hndb_arr = array();
    while (mysqli_stmt_fetch($stmt)) {
        $i++;
        $hndb_arr[] = array(
             'id' => $id
             ,'name' => $name
            , 'corpse_number' => $corpse_number
           // , 'apartment_coplex_id' => $apartment_coplex_id
           // , 'last_user_id' => $last_user_id
            
        );
    }
    mysqli_stmt_close($stmt);
    echo $_GET["callback"] . '({"results":' . json_encode($hndb_arr) .
     '})';
  
?>