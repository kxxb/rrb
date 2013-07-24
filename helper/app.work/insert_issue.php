<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../../SYS/dbconn.php');

$iu_sql = "
INSERT INTO rrl.rrl_issue VALUES 
(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
  ON DUPLICATE KEY ".
        "    UPDATE  ".
      " id = ?, ".
      "  pid = ?, ".
      "  dispatch_numb = ?, ".
      "  issue_date = ?, ".
      "  dist_from = ?, ".
      "  etd	= ?, ".
      "  dist_to = ?, ".
      "  eta= ?, ".
      "  type_of_shipment= ?, ".
      "  prparet_by= ?,  ".
      "  last_user_id= ?, ".
      "  date_rec= ?,  ".
      "  vehicle_type= ?, ".
      "  client_id= ?, ".
      "  status_id= ?  ";

$id= $_POST["id"];
$pid= $_POST["pid"];
$dispatch_numb= $_POST["dispatch_numb"];
$issue_date= $_POST["issue_date"];
$dist_from= $_POST["dist_from"];
$etd= $_POST["etd"];
$dist_to= $_POST["dist_to"];
$eta= $_POST["eta"];
$type_of_shipment= $_POST["type_of_shipment"];
$prparet_by= $_POST["prparet_by"];
$last_user_id= $_POST["last_user_id"];
$date_rec= $_POST["date_rec"];
$vehicle_type= $_POST["vehicle_type"];
$client_id= $_POST["client_id"];
$status_id= $_POST["status_id"];


try {
    
    
        $connection = conn();
        $connection->query("SET NAMES 'utf8'");
        $stmt = $connection->prepare($iu_sql);
        $stmt->bind_param("sssssssssssssss",
                $id,
                $pid,
                $dispatch_numb,
                $issue_date,
                $dist_from,
                $etd,
                $dist_to,
                $eta,
                $type_of_shipment,
                $prparet_by,
                $last_user_id,
                $date_rec,
                $vehicle_type,
                $client_id,
                $status_id ); 


        /* execute query */
        
mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
    $v_result = "Сохранил";
    echo "{success:true,errors:{reason:'"+$v_result+"'}}";        
} catch (mysqli_sql_exception $e) {
    echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
}  
    
?>
