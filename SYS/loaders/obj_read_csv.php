<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.

 *  */

require_once('../dbconn.php');
require_once('obj_loader.php');



function  load_csv_obj($p_file_name, $p_connection){
$fp = fopen($p_file_name,'r') or die("can't open file");


$v_id = null;

$v_date_rec=  date("Y-m-d H:i:s");
$v_batch_number=  "1";
$v_val ;
//print "<table border=1>\n";
while($csv_line = fgetcsv($fp,0,";")) {
   // print '<tr>';
    for ($k = 0, $j = count($csv_line); $k < $j; $k++) {
        if ($csv_line[$k]==null) {
        $v_val ='is null';    
        }else {
         $v_val = $csv_line[$k];
        }
$i++;       //if
if ($i == 1){ $v_n_comon= $v_val; }
if ($i == 2){ $v_n_kvartal= $v_val; }
if ($i == 3){ $v_report_kvartal= $v_val; }
if ($i == 4){ $v_OBJECTID= $v_val; }
if ($i == 5){ $v_komplex= $v_val; }
if ($i == 6){ $v_ADDRESS= $v_val; }
if ($i == 7){ $v_km_mkad= $v_val; }
if ($i == 8){ $v_direction= $v_val; }
if ($i == 9){ $v_SUBJECT= $v_val; }
if ($i == 10){ $v_KOD_OKATO= $v_val; }
if ($i == 11){ $v_Kod_cadastre= $v_val; }
if ($i == 12){ $v_SUBJECT_rayon= $v_val; }
if ($i == 13){ $v_REGION= $v_val; }
if ($i == 14){ $v_SETTLEMENT= $v_val; }
if ($i == 15){ $v_CITY= $v_val; }
if ($i == 16){ $v_VGT= $v_val; }
if ($i == 17){ $v_STREET_TYPE= $v_val; }
if ($i == 18){ $v_STREET= $v_val; }
if ($i == 19){ $v_HOUSE_NUM= $v_val; }
if ($i == 20){ $v_LETTER= $v_val; }
if ($i == 21){ $v_BUILDING= $v_val; }
if ($i == 22){ $v_STRUCTURE= $v_val; }
if ($i == 23){ $v_ESTATE= $v_val; }
if ($i == 24){ $v_LONGITUDE= $v_val; }
if ($i == 25){ $v_LATITUDE= $v_val; }
if ($i == 26){ $v_CADASTRE_NUM= $v_val; }
if ($i == 27){ $v_SECTION_COUNT= $v_val; }
if ($i == 28){ $v_TYPE_DEVELOP= $v_val; }
if ($i == 29){ $v_AREA_DEV= $v_val; }
if ($i == 30){ $v_AREA_ALL_OBJECT= $v_val; }
if ($i == 31){ $v_AREA_LOT= $v_val; }
if ($i == 32){ $v_TECHNOLOGY= $v_val; }
if ($i == 33){ $v_MATERIAL_WALL= $v_val; }
if ($i == 34){ $v_PROJECT_TYPE= $v_val; }
if ($i == 35){ $v_PROJECT_NUMBER= $v_val; }
if ($i == 36){ $v_FLOOR_QNT_MIN= $v_val; }
if ($i == 37){ $v_FLOOR_QNT_MAX= $v_val; }
if ($i == 38){ $v_FLOOR_TYPE= $v_val; }
if ($i == 39){ $v_CLASS_TYPE= $v_val; }
if ($i == 40){ $v_CLASS= $v_val; }
if ($i == 41){ $v_HEIGHT_FLOOR= $v_val; }
if ($i == 42){ $v_FINISHING_TYPE_FLAT= $v_val; }
if ($i == 43){ $v_FINISHING_LEVEL_FLAT= $v_val; }
if ($i == 44){ $v_FINISHING_LEVEL_INSIDE= $v_val; }
if ($i == 45){ $v_GLAZING= $v_val; }
if ($i == 46){ $v_PARKING_TYPE= $v_val; }
if ($i == 47){ $v_PARKING_COUNT= $v_val; }
if ($i == 48){ $v_LIFT= $v_val; }
if ($i == 49){ $v_ESTIMATE= $v_val; }
if ($i == 50){ $v_FENCE= $v_val; }
if ($i == 51){ $v_SECURITY= $v_val; }
if ($i == 52){ $v_AREA_OBJECT= $v_val; }
if ($i == 53){ $v_AREA_OBJECT_STUDIO= $v_val; }
if ($i == 54){ $v_AREA_OBJECT_1= $v_val; }
if ($i == 55){ $v_AREA_OBJECT_2= $v_val; }
if ($i == 56){ $v_AREA_OBJECT_3= $v_val; }
if ($i == 57){ $v_AREA_OBJECT_4= $v_val; }
if ($i == 58){ $v_AREA_OBJECT_5= $v_val; }
if ($i == 59){ $v_AREA_OBJECT_6= $v_val; }
if ($i == 60){ $v_arae_studio_avg= $v_val; }
if ($i == 61){ $v_AREA_OBJECT_STUDIO_MIN= $v_val; }
if ($i == 62){ $v_AREA_OBJECT_STUDIO_MAX= $v_val; }
if ($i == 63){ $v_AREA_OBJECT_STUDIO_NOT_HEAT_MIN= $v_val; }
if ($i == 64){ $v_AREA_OBJECT_STUDIO_NOT_HEAT_MAX= $v_val; }
if ($i == 65){ $v_Area_object_1_av= $v_val; }
if ($i == 66){ $v_AREA_OBJECT_1_MIN= $v_val; }
if ($i == 67){ $v_AREA_OBJECT_1_MAX= $v_val; }
if ($i == 68){ $v_AREA_OBJECT_1_NOT_HEAT_MIN= $v_val; }
if ($i == 69){ $v_AREA_OBJECT_1_NOT_HEAT_MAX= $v_val; }
if ($i == 70){ $v_Area_object_2_av= $v_val; }
if ($i == 71){ $v_AREA_OBJECT_2_MIN= $v_val; }
if ($i == 72){ $v_AREA_OBJECT_2_MAX= $v_val; }
if ($i == 73){ $v_AREA_OBJECT_2_NOT_HEAT_MIN= $v_val; }
if ($i == 74){ $v_AREA_OBJECT_2_NOT_HEAT_MAX= $v_val; }
if ($i == 75){ $v_Area_object_3_av= $v_val; }
if ($i == 76){ $v_AREA_OBJECT_3_MIN= $v_val; }
if ($i == 77){ $v_AREA_OBJECT_3_MAX= $v_val; }
if ($i == 78){ $v_AREA_OBJECT_3_NOT_HEAT_MIN= $v_val; }
if ($i == 79){ $v_AREA_OBJECT_3_NOT_HEAT_MAX= $v_val; }
if ($i == 80){ $v_Area_object_4_av= $v_val; }
if ($i == 81){ $v_AREA_OBJECT_4_MIN= $v_val; }
if ($i == 82){ $v_AREA_OBJECT_4_MAX= $v_val; }
if ($i == 83){ $v_AREA_OBJECT_4_NOT_HEAT_MIN= $v_val; }
if ($i == 84){ $v_AREA_OBJECT_4_NOT_HEAT_MAX= $v_val; }
if ($i == 85){ $v_Area_object_5_av= $v_val; }
if ($i == 86){ $v_AREA_OBJECT_5_MIN= $v_val; }
if ($i == 87){ $v_AREA_OBJECT_5_MAX= $v_val; }
if ($i == 88){ $v_AREA_OBJECT_5_NOT_HEAT_MIN= $v_val; }
if ($i == 89){ $v_AREA_OBJECT_5_NOT_HEAT_MAX= $v_val; }
if ($i == 90){ $v_Area_object_6_av= $v_val; }
if ($i == 91){ $v_AREA_OBJECT_6_MIN= $v_val; }
if ($i == 92){ $v_AREA_OBJECT_6_MAX= $v_val; }
if ($i == 93){ $v_AREA_OBJECT_6_NOT_HEAT_MIN= $v_val; }
if ($i == 94){ $v_AREA_OBJECT_6_NOT_HEAT_MAX= $v_val; }
if ($i == 95){ $v_Area_object_mnogo= $v_val; }
if ($i == 96){ $v_Area_object_mnogo_av= $v_val; }
if ($i == 97){ $v_Area_object_mnogo_min= $v_val; }
if ($i == 98){ $v_Area_object_mnogo_max= $v_val; }
if ($i == 99){ $v_Studio= $v_val; }
if ($i == 100){ $v_Quantity_object= $v_val; }
if ($i == 101){ $v_QUANTITY_OBJECT_STUDIO= $v_val; }
if ($i == 102){ $v_Quantity_object_1= $v_val; }
if ($i == 103){ $v_Quantity_object_2= $v_val; }
if ($i == 104){ $v_Quantity_object_3= $v_val; }
if ($i == 105){ $v_Quantity_object_4= $v_val; }
if ($i == 106){ $v_Quantity_object_5= $v_val; }
if ($i == 107){ $v_Quantity_object_6= $v_val; }
if ($i == 108){ $v_Quantity_object_mnogo= $v_val; }
if ($i == 109){ $v_COMMERCE_PLACE= $v_val; }
if ($i == 110){ $v_AREA_COMMERCE= $v_val; }
if ($i == 111){ $v_DEVELOPER= $v_val; }
if ($i == 112){ $v_CONTACTS= $v_val; }
if ($i == 113){ $v_URL_INFO= $v_val; }
if ($i == 114){ $v_BUILDER= $v_val; }
if ($i == 115){ $v_Investor= $v_val; }
if ($i == 116){ $v_architect= $v_val; }
if ($i == 117){ $v_DATE_PERMIT= $v_val; }
if ($i == 118){ $v_NUMBER_PERMIT= $v_val; }
if ($i == 119){ $v_BEGIN_SALE= $v_val; }
if ($i == 120){ $v_BEGIN_BUILT= $v_val; }
if ($i == 121){ $v_CONST_STAGE= $v_val; }
if ($i == 122){ $v_CONST_STATUS= $v_val; }
if ($i == 123){ $v_EXPL_PLAN= $v_val; }
if ($i == 124){ $v_EXPL_FACT= $v_val; }
if ($i == 125){ $v_impl_end= $v_val; }
if ($i == 126){ $v_expl_start= $v_val; }
if ($i == 127){ $v_delay_sheduly= $v_val; }
if ($i == 128){ $v_EXPL_DATE= $v_val; }
if ($i == 129){ $v_EXPL_NUMBER= $v_val; }
if ($i == 130){ $v_INFR_TYPE= $v_val; }
if ($i == 131){ $v_CONTRACT_TYPE= $v_val; }
if ($i == 132){ $v_INSTALLMENT_PLAN= $v_val; }
if ($i == 133){ $v_MORTGAGE= $v_val; }
if ($i == 134){ $v_Price_min_object= $v_val; }
if ($i == 135){ $v_Price_avg_object= $v_val; }
if ($i == 136){ $v_Price_max_object= $v_val; }
if ($i == 137){ $v_Price_avg_1= $v_val; }
if ($i == 138){ $v_Price_avg_2= $v_val; }
if ($i == 139){ $v_Price_avg_3= $v_val; }
if ($i == 140){ $v_Price_avg_4= $v_val; }
if ($i == 141){ $v_Price_avg_5= $v_val; }
if ($i == 142){ $v_Price_avg_6= $v_val; }
if ($i == 143){ $v_Price_avg_mnogo= $v_val; }
if ($i == 144){ $v_Quantity_sell_object= $v_val; }
if ($i == 145){ $v_Quantity_sell_1= $v_val; }
if ($i == 146){ $v_Quantity_sell_2= $v_val; }
if ($i == 147){ $v_Quantity_sell_3= $v_val; }
if ($i == 148){ $v_Quantity_sell_4= $v_val; }
if ($i == 149){ $v_Quantity_sell_5= $v_val; }
if ($i == 150){ $v_Quantity_sell_6= $v_val; }
if ($i == 151){ $v_total_n_rooms= $v_val; }
if ($i == 152){ $v_koefficent= $v_val; }
if ($i == 153){ $v_sale_temp_kavrtal= $v_val; }
if ($i == 154){ $v_sale_temp_from_start= $v_val; }
if ($i == 155){ $v_avg_flat_area= $v_val; }
if ($i == 156){ $v_total_area_offer= $v_val; }
if ($i == 157){ $v_total_whoole_price= $v_val; }
if ($i == 158){ $v_total_area_offer_1r= $v_val; }
if ($i == 159){ $v_total_wh_price_1r= $v_val; }
if ($i == 160){ $v_total_area_offer_2r= $v_val; }
if ($i == 161){ $v_total_wh_price_2r= $v_val; }
if ($i == 162){ $v_total_area_offer_3r= $v_val; }
if ($i == 163){ $v_total_wh_price_3r= $v_val; }
if ($i == 164){ $v_total_area_offer_nr= $v_val; }
if ($i == 165){ $v_total_wh_price_nr= $v_val; }
if ($i == 166){ $v_quotas= $v_val; }
if ($i == 167){ $v_update_category= $v_val; }
if ($i == 168){ $v_SOURCE_DESC= $v_val; }
if ($i == 169){ $v_DATE_RESEARCH= $v_val; }
if ($i == 170){ $v_DATE_IN_BASE= $v_val; }
if ($i == 171){ $v_SALE_STATUS= $v_val; }
if ($i == 172){ $v_insert_date= $v_val; }
if ($i == 173){ $v_comment_text= $v_val; }



}
    

$i=0;

$query_ui = "INSERT INTO rrb_temporary_load VALUES
(
'".$v_id."',
'".$v_date_rec."',
'".$v_batch_number."',
'".$v_n_comon."',
'".$v_n_kvartal."',
'".$v_report_kvartal."',
'".$v_OBJECTID."',
'".$v_komplex."',
'".$v_ADDRESS."',
'".$v_km_mkad."',
'".$v_direction."',
'".$v_SUBJECT."',
'".$v_KOD_OKATO."',
'".$v_Kod_cadastre."',
'".$v_SUBJECT_rayon."',
'".$v_REGION."',
'".$v_SETTLEMENT."',
'".$v_CITY."',
'".$v_VGT."',
'".$v_STREET_TYPE."',
'".$v_STREET."',
'".$v_HOUSE_NUM."',
'".$v_LETTER."',
'".$v_BUILDING."',
'".$v_STRUCTURE."',
'".$v_ESTATE."',
'".$v_LONGITUDE."',
'".$v_LATITUDE."',
'".$v_CADASTRE_NUM."',
'".$v_SECTION_COUNT."',
'".$v_TYPE_DEVELOP."',
'".$v_AREA_DEV."',
'".$v_AREA_ALL_OBJECT."',
'".$v_AREA_LOT."',
'".$v_TECHNOLOGY."',
'".$v_MATERIAL_WALL."',
'".$v_PROJECT_TYPE."',
'".$v_PROJECT_NUMBER."',
'".$v_FLOOR_QNT_MIN."',
'".$v_FLOOR_QNT_MAX."',
'".$v_FLOOR_TYPE."',
'".$v_CLASS_TYPE."',
'".$v_CLASS."',
'".$v_HEIGHT_FLOOR."',
'".$v_FINISHING_TYPE_FLAT."',
'".$v_FINISHING_LEVEL_FLAT."',
'".$v_FINISHING_LEVEL_INSIDE."',
'".$v_GLAZING."',
'".$v_PARKING_TYPE."',
'".$v_PARKING_COUNT."',
'".$v_LIFT."',
'".$v_ESTIMATE."',
'".$v_FENCE."',
'".$v_SECURITY."',
'".$v_AREA_OBJECT."',
'".$v_AREA_OBJECT_STUDIO."',
'".$v_AREA_OBJECT_1."',
'".$v_AREA_OBJECT_2."',
'".$v_AREA_OBJECT_3."',
'".$v_AREA_OBJECT_4."',
'".$v_AREA_OBJECT_5."',
'".$v_AREA_OBJECT_6."',
'".$v_arae_studio_avg."',
'".$v_AREA_OBJECT_STUDIO_MIN."',
'".$v_AREA_OBJECT_STUDIO_MAX."',
'".$v_AREA_OBJECT_STUDIO_NOT_HEAT_MIN."',
'".$v_AREA_OBJECT_STUDIO_NOT_HEAT_MAX."',
'".$v_Area_object_1_av."',
'".$v_AREA_OBJECT_1_MIN."',
'".$v_AREA_OBJECT_1_MAX."',
'".$v_AREA_OBJECT_1_NOT_HEAT_MIN."',
'".$v_AREA_OBJECT_1_NOT_HEAT_MAX."',
'".$v_Area_object_2_av."',
'".$v_AREA_OBJECT_2_MIN."',
'".$v_AREA_OBJECT_2_MAX."',
'".$v_AREA_OBJECT_2_NOT_HEAT_MIN."',
'".$v_AREA_OBJECT_2_NOT_HEAT_MAX."',
'".$v_Area_object_3_av."',
'".$v_AREA_OBJECT_3_MIN."',
'".$v_AREA_OBJECT_3_MAX."',
'".$v_AREA_OBJECT_3_NOT_HEAT_MIN."',
'".$v_AREA_OBJECT_3_NOT_HEAT_MAX."',
'".$v_Area_object_4_av."',
'".$v_AREA_OBJECT_4_MIN."',
'".$v_AREA_OBJECT_4_MAX."',
'".$v_AREA_OBJECT_4_NOT_HEAT_MIN."',
'".$v_AREA_OBJECT_4_NOT_HEAT_MAX."',
'".$v_Area_object_5_av."',
'".$v_AREA_OBJECT_5_MIN."',
'".$v_AREA_OBJECT_5_MAX."',
'".$v_AREA_OBJECT_5_NOT_HEAT_MIN."',
'".$v_AREA_OBJECT_5_NOT_HEAT_MAX."',
'".$v_Area_object_6_av."',
'".$v_AREA_OBJECT_6_MIN."',
'".$v_AREA_OBJECT_6_MAX."',
'".$v_AREA_OBJECT_6_NOT_HEAT_MIN."',
'".$v_AREA_OBJECT_6_NOT_HEAT_MAX."',
'".$v_Area_object_mnogo."',
'".$v_Area_object_mnogo_av."',
'".$v_Area_object_mnogo_min."',
'".$v_Area_object_mnogo_max."',
'".$v_Studio."',
'".$v_Quantity_object."',
'".$v_QUANTITY_OBJECT_STUDIO."',
'".$v_Quantity_object_1."',
'".$v_Quantity_object_2."',
'".$v_Quantity_object_3."',
'".$v_Quantity_object_4."',
'".$v_Quantity_object_5."',
'".$v_Quantity_object_6."',
'".$v_Quantity_object_mnogo."',
'".$v_COMMERCE_PLACE."',
'".$v_AREA_COMMERCE."',
'".$v_DEVELOPER."',
'".$v_CONTACTS."',
'".$v_URL_INFO."',
'".$v_BUILDER."',
'".$v_Investor."',
'".$v_architect."',
'".$v_DATE_PERMIT."',
'".$v_NUMBER_PERMIT."',
'".$v_BEGIN_SALE."',
'".$v_BEGIN_BUILT."',
'".$v_CONST_STAGE."',
'".$v_CONST_STATUS."',
'".$v_EXPL_PLAN."',
'".$v_EXPL_FACT."',
'".$v_impl_end."',
'".$v_expl_start."',
'".$v_delay_sheduly."',
'".$v_EXPL_DATE."',
'".$v_EXPL_NUMBER."',
'".$v_INFR_TYPE."',
'".$v_CONTRACT_TYPE."',
'".$v_INSTALLMENT_PLAN."',
'".$v_MORTGAGE."',
'".$v_Price_min_object."',
'".$v_Price_avg_object."',
'".$v_Price_max_object."',
'".$v_Price_avg_1."',
'".$v_Price_avg_2."',
'".$v_Price_avg_3."',
'".$v_Price_avg_4."',
'".$v_Price_avg_5."',
'".$v_Price_avg_6."',
'".$v_Price_avg_mnogo."',
'".$v_Quantity_sell_object."',
'".$v_Quantity_sell_1."',
'".$v_Quantity_sell_2."',
'".$v_Quantity_sell_3."',
'".$v_Quantity_sell_4."',
'".$v_Quantity_sell_5."',
'".$v_Quantity_sell_6."',
'".$v_total_n_rooms."',
'".$v_koefficent."',
'".$v_sale_temp_kavrtal."',
'".$v_sale_temp_from_start."',
'".$v_avg_flat_area."',
'".$v_total_area_offer."',
'".$v_total_whoole_price."',
'".$v_total_area_offer_1r."',
'".$v_total_wh_price_1r."',
'".$v_total_area_offer_2r."',
'".$v_total_wh_price_2r."',
'".$v_total_area_offer_3r."',
'".$v_total_wh_price_3r."',
'".$v_total_area_offer_nr."',
'".$v_total_wh_price_nr."',
'".$v_quotas."',
'".$v_update_category."',
'".$v_SOURCE_DESC."',
'".$v_DATE_RESEARCH."',
'".$v_DATE_IN_BASE."',
'".$v_SALE_STATUS."',
'".$v_insert_date."',
'".$v_comment_text."');";


$p_connection->query("SET NAMES 'cp1251'");
    if ($results_insupditems=$p_connection->query($query_ui) ) {
        echo "{success:true}";
     } else   {echo 'polniy 3.14zdec  mrd_category '.$p_connection->error. " | sql = ".$query_ui;}

 
    //end of insert 
}
//print '</table>\n';


fclose($fp) or die("can't close file");

data_pump($p_connection);


}

load_csv_obj("base2.csv", conn() );
//load_csv_obj("objects_base_wo_duble.csv");

?>