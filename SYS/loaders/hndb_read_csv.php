<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
require_once('../dbconn.php');
require_once('hndb_loader.php');

function take_handbook($file_name) {
    
    
    /*удаление*/
$connection = conn();
$query_d = "truncate table rrb_temp_hnb;";

 if ($results_insupditems=$connection->query($query_d) ) {
        echo "{success:true}";
     } else   {echo 'polniy 3.14zdec  mrd_category '.$connection->error. " | sql = ".$query_ui;}

     
     
        $fp = fopen($file_name,'r') or die("can't open file");
        $v_id = null;

        $v_date_load=  date("Y-m-d H:i:s");
        $v_batch_number=  "1";
        $v_val ;
        //print "<table border=1>\n";
        while($csv_line = fgetcsv($fp,100000, ",")) {
           // print '<tr>';
            for ($k = 0, $j = count($csv_line); $k < $j; $k++) {
                if ($csv_line[$k]==null) {
                $v_val ='is null';    
                }else {
                 $v_val = $csv_line[$k];
                }
            $i++;        
            if ($i == 1){ $v_hndb_name= $v_val; }
            if ($i == 2){ $v_hndb_key= $v_val; }
            if ($i == 3){ $v_hndb_key_value= $v_val; }

            }

        $i=0;    
        $v_insert = "insert into rrb_temp_hnb values(
        '".$v_id."',
        '".$v_date_load."',
        '".$v_hndb_name."',
        '".$v_hndb_key."',
        '".$v_hndb_key_value."')";

        
        $connection->query("SET NAMES 'utf8'");
            if ($results_insupditems=$connection->query($v_insert) ) {
               null; // echo "row = success<br>";
             } else   {echo 'polniy 3.14zdec  mrd_category '.$connection->error. " | sql = ".$v_insert;}

        } 

        fclose($fp) or die("can't close file");

        ///insert all from tmp tables
        select_tmp_values(conn());
}
?>
