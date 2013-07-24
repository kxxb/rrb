<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../dbconn.php');

$table_name ="rrb_housing_flat_info";

/*sql creator*/
 $php_part_1="";
 $php_part_2="";
 $php_part_3="";
 $php_part_4="";
 $php_part_5="";
 $php_part_6="";
 $php_part_7="";
/*end sql creator*/

$tpl ="       <TABLE CELLSPACING='0' COLS='2' BORDER='0'>
	<COLGROUP WIDTH='581'></COLGROUP>
	<COLGROUP WIDTH='165'></COLGROUP>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>общая площадь всех квартир объекта</TD>
		<TD ALIGN='LEFT'>total_area_all_flats</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>общая площадь квартир-студий</TD>
		<TD ALIGN='LEFT'>total_area_studio</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>общая площадь 1-комнатных квартир</TD>
		<TD ALIGN='LEFT'>total_area_1rooms</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>общая площадь 2-комнатных квартир</TD>
		<TD ALIGN='LEFT'>total_area_2rooms</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>общая площадь 3-комнатных квартир</TD>
		<TD ALIGN='LEFT'>total_area_3rooms</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>общая площадь 4-комнатных квартир</TD>
		<TD ALIGN='LEFT'>total_area_4rooms</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>общая площадь 5-комнатных квартир</TD>
		<TD ALIGN='LEFT'>total_area_5rooms</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>общая площадь 6-комнатных квартир</TD>
		<TD ALIGN='LEFT'>total_area_6rooms</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>студии, средн (кв. м)</TD>
		<TD ALIGN='LEFT'>avg_area_studio</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь студии</TD>
		<TD ALIGN='LEFT'>min_area_studio</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь студии</TD>
		<TD ALIGN='LEFT'>max_area_studio</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь студии без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>min_area_st_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь студии без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>max_area_st_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>1комн., сред. (кв.м)</TD>
		<TD ALIGN='LEFT'>avg_area_1r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь 1-нокомнатных квартир</TD>
		<TD ALIGN='LEFT'>min_area_1r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь 1-нокомнатных квартир</TD>
		<TD ALIGN='LEFT'>max_area_1r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь 1-нокомнатных квартир без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>min_area_1r_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь 1-нокомнатных квартир без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>max_area_1r_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>2комн., сред. (кв.м)</TD>
		<TD ALIGN='LEFT'>avg_area_2r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь 2-хкомнатных квартир</TD>
		<TD ALIGN='LEFT'>min_area_2r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь 2-хкомнатных квартир</TD>
		<TD ALIGN='LEFT'>max_area_2r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь 2-хкомнатных квартир без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>min_area_2r_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь 2-хкомнатных квартир без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>max_area_2r_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>3комн., сред. (кв.м)</TD>
		<TD ALIGN='LEFT'>avg_area_3r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь 3-хкомнатных квартир</TD>
		<TD ALIGN='LEFT'>min_area_3r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь 3-хкомнатных квартир</TD>
		<TD ALIGN='LEFT'>max_area_3r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь 3-хкомнатных квартир без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>min_area_3r_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь 3-хкомнатных квартир без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>max_area_3r_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>Средняя площадь 4-комнатных квартир (кв.м)</TD>
		<TD ALIGN='LEFT'>avg_area_4r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь 4-хкомнатных квартир</TD>
		<TD ALIGN='LEFT'>min_area_4r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь 4-хкомнатных квартир</TD>
		<TD ALIGN='LEFT'>max_area_4r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь 4-хкомнатных квартир без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>min_area_4r_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь 4-хкомнатных квартир без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>max_area_4r_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>Средняя площадь 5-комнатных квартир (кв.м)</TD>
		<TD ALIGN='LEFT'>avg_area_5r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь 5-тикомнатных квартир</TD>
		<TD ALIGN='LEFT'>min_area_5r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь 5-тикомнатных квартир</TD>
		<TD ALIGN='LEFT'>max_area_5r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь 5-тикомнатных квартир без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>min_area_5r_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь 5-тикомнатных квартир без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>max_area_5r_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>Средняя площадь 6-комнатных квартир (кв.м)</TD>
		<TD ALIGN='LEFT'>avg_area_6r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь 6-хкомнатных квартир</TD>
		<TD ALIGN='LEFT'>min_area_6r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь 6-хкомнатных квартир</TD>
		<TD ALIGN='LEFT'>max_area_6r</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь 6-тикомнатных квартир без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>min_area_6r_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь 6-тикомнатных квартир без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>max_area_6r_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>многокомн., сред. (кв.м)</TD>
		<TD ALIGN='LEFT'>avg_area_n_room</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>многокомн., мин. (кв.м)</TD>
		<TD ALIGN='LEFT'>min_area_n_room</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>многокомн., макс. (кв.м)</TD>
		<TD ALIGN='LEFT'>max_area_n_room</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>минимальная площадь многокомн. квартир без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>min_area_n_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>максимальная площадь многокомн. квартир без учета неотапливаемых помещений</TD>
		<TD ALIGN='LEFT'>max_area_n_wo_unheat</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>Общая площадь многокомн. квартир (кв.м)</TD>
		<TD ALIGN='LEFT'>total_area_n_rooms</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>общее количество квартир объекта</TD>
		<TD ALIGN='LEFT'>total_count_all_flats</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>количество всех квартир-студий объекта</TD>
		<TD ALIGN='LEFT'>total_count_studio</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>количество всех 1-нокомнатных квартир объекта</TD>
		<TD ALIGN='LEFT'>total_count_1_rooms</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>количество всех 2-хкомнатных квартир объекта</TD>
		<TD ALIGN='LEFT'>total_count_2_rooms</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>количество всех 3-хкомнатных квартир объекта</TD>
		<TD ALIGN='LEFT'>total_count_3_rooms</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>количество всех 4-хкомнатных квартир объекта</TD>
		<TD ALIGN='LEFT'>total_count_4_rooms</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>количество всех 5-хкомнатных квартир объекта</TD>
		<TD ALIGN='LEFT'>total_count_5_rooms</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>количество всех 6-хкомнатных квартир объекта</TD>
		<TD ALIGN='LEFT'>total_count_6_rooms</TD>
	</TR>
	<TR>
		<TD HEIGHT='17' ALIGN='LEFT'>Количество многокомн. (шт.)</TD>
		<TD ALIGN='LEFT'>total_count_n_rooms</TD>
	</TR>
</TABLE>";
 
$query = "desc $table_name;";
        
        
        $connection = conn();
        $connection->query("SET NAMES 'utf8'");
        $stmt = $connection->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                $field_name, $field_type, 
                $field_nullable, $field_key, 
                $field_default, $field_extra);
       
        
         
        //$users_arr = array();
        while (mysqli_stmt_fetch($stmt)) {
          $i++;
          
          $php_part_1=$php_part_1.str_replace($field_name,'{'.$field_name.'}',$tpl);
          
          
        }

        
        echo $php_part_1."";
        
        
        
        mysqli_stmt_close($stmt);
    /*   
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  */
        
  


?>
