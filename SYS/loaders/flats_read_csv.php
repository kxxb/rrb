<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
require_once('../dbconn.php');
require_once('flats_loader.php');

function take_flats($file_name) {
        /*удаление*/

$query_d = "truncate table rrb_temporary_flats;";


$connection = conn();
 if ($results_insupditems=$connection->query($query_d) ) {
        echo "{success:true}";
     } else   {echo 'polniy 3.14zdec  mrd_category '.$connection->error. " | sql = ".$query_ui;}

    
    
        $fp = fopen($file_name,'r') or die("can't open file");
        $v_id = null;

        $v_date_load=  date("Y-m-d H:i:s");
        $v_batch_number=  "1";
        $v_val ;
        //print "<table border=1>\n";
        while($csv_line = fgetcsv($fp,100000, ";")) {
           // print '<tr>';
            for ($k = 0, $j = count($csv_line); $k < $j; $k++) {
                if ($csv_line[$k]==null) {
                $v_val ='is null';    
                }else {
                 $v_val = $csv_line[$k];
                }
            $i++;        
            if ($i == 1){ $v_rrb_housing_id= $v_val; }
            if ($i == 2){ $v_address= $v_val; }
            if ($i == 3){ $v_section= $v_val; }
            if ($i == 4){ $v_floor_numb= $v_val; }
            if ($i == 5){ $v_quant_rooms_in_flat= $v_val; }
            if ($i == 6){ $v_total_flat_area= $v_val; }
            if ($i == 7){ $v_live_area= $v_val; }
            if ($i == 8){ $v_kitchen_area= $v_val; }
            if ($i == 9){ $v_balcony_area= $v_val; }
            if ($i == 10){ $v_price_whoole_payment= $v_val; }
            if ($i == 11){ $v_price_lease_payment= $v_val; }
            if ($i == 12){ $v_flat_descripton= $v_val; }
            if ($i == 13){ $v_saler_name= $v_val; }
            if ($i == 14){ $v_saler_contact= $v_val; }
            if ($i == 15){ $v_link_to_source_inf= $v_val; }
            if ($i == 16){ $v_collect_information_dt= $v_val; }
            if ($i == 17){ $v_report_on_phase_dt= $v_val; }
            
            

            }

        $i=0;    
        $v_insert = "insert into rrb_temporary_flats values(
        '".$v_id."',
        '".$v_date_load."',
        '".$v_rrb_housing_id."',
        '".$v_address."',
        '".$v_section."',
        '".$v_floor_numb."',
        '".$v_quant_rooms_in_flat."',
        '".$v_total_flat_area."',
        '".$v_live_area."',
        '".$v_kitchen_area."',
        '".$v_balcony_area."',
        '".$v_price_whoole_payment."',
        '".$v_price_lease_payment."',
        '".$v_flat_descripton."',
        '".$v_saler_name."',
        '".$v_saler_contact."',
        '".$v_link_to_source_inf."',
        '".$v_collect_information_dt."',
        '".$v_report_on_phase_dt."')";

       

        
        $connection->query("SET NAMES 'utf8'");
            if ($results_insupditems=$connection->query($v_insert) ) {
               null; // echo "row = success<br>";
             } else   {echo 'polniy 3.14zdec  mrd_category '.$connection->error. " | sql = ".$v_insert;}

        } 

        fclose($fp) or die("can't close file");

        ///insert all from tmp tables
       // select_tmp_values(conn());
        echo load_rrb_housing_investor_builder(conn());
}
?>