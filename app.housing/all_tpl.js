/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var copse_list = '<tpl for=".">                              '
  +'  <dd  h_name="{housing_name}">             '
  +'      <div >                                             '
  +'       <p><b>Номер корпуса:</b> {corpse_number} </p>     '
      +'       <p><b>Адрес: </b>{name} </p>  '
    +'       <p><hr></p>           '
  +'     </div>                                           '
  +'     </dd>                                           '
  
      +'</tpl>';

//
var specification_tpl ='<tpl for="."><font size="2">'+
'<table cellpading=0 cellspacing=0><tr><td valign="top"><table cellpading=0 cellspacing=0>'+    
    '<tr><td><b>Номер секции</b></td><td>{number_of_sections}</td></tr>'+
    '<tr><td><b>тип застройки</b></td><td>{type_of_building}</td></tr>'+
    '<tr><td><b>площадь земельного участка всей застройки </b></td><td>{total_land_area}</td></tr>'+
    '<tr><td><b>технология и материал несущих конструкций</b></td><td>{bearing_material_tech_name}</td></tr>'+
    '<tr><td><b>общая площадь квартир всех объектов застройки</b></td><td>{total_floor_area}</td></tr>'+
    '<tr><td><b>площадь земельного участка объекта</b></td><td>{land_area_build}</td></tr>'+
    '<tr><td><b>материал наружных стен</b></td><td>{wall_material_name}</td></tr>'+
    '<tr><td><b>тип проектной документации</b></td><td>{proj_doc_type_name}</td></tr>'+
    '<tr><td><b>номер серии</b></td><td>{serial_number}</td></tr>'+
    '<tr><td><b>этажность минимальная</b></td><td>{min_floors}</td></tr>'+
    '<tr><td><b>этажность максимальная</b></td><td>{max_floors}</td></tr>'+
    '<tr><td><b>тип этажности</b></td><td>{floors_type_id_name}</td></tr>'+
'</table></td><td valign="top" ><table cellpading=0 cellspacing=0> '+
    '<tr><td><b>потребительский класс</b></td><td>{consumer_class_id_name}</td></tr>'+
    '<tr><td><b>дом экономического класса </b></td><td>{economy_class_house_id_name}</td></tr>'+
    '<tr><td><b>высота потолка</b></td><td>{ceiling_height}</td></tr>'+
    '<tr><td><b>тип отделки квартир</b></td><td>{finishing_flats_id_name}</td></tr>'+
    '<tr><td><b>уровень отделки квартир</b></td><td>{finishing_level_id_name}</td></tr>'+
    '<tr><td><b>уровень отделки общих помещений</b></td><td>{common_area_finishing_id_name}</td></tr>'+
    '<tr><td><b>остекление лоджий / балконов</b></td><td>{glazed_loggia_id_name}</td></tr>'+
    '<tr><td><b>тип паркинга </b></td><td>{parking_type_id_name}</td></tr>'+
    '<tr><td><b>количество стояночных мест в паркинге</b></td><td>{num_of_parking_place}</td></tr>'+
    '<tr><td><b>лифт (число)</b></td><td>{num_of_Elevator}</td></tr>'+
    '<tr><td><b>сметная стоимость строительства объекта</b></td><td>{estimated_cost_construction}</td></tr>'+
    '<tr><td><b>ограждение территории</b></td><td>{territory_fencing_id_name}</td></tr>'+
    '<tr><td><b>охрана</b></td><td>{security_id_name}</td></tr>'+
'</table></td></tr></table> </font></tpl>';



var flatinfo_tpl ='<tpl for=".">'+
'	<TABLE CELLSPACING="0" COLS="8" BORDER="0">		'+
'		<COLGROUP WIDTH="126"></COLGROUP>	'+
'		<COLGROUP WIDTH="85"></COLGROUP>	'+
'		<COLGROUP WIDTH="72"></COLGROUP>	'+
'		<COLGROUP WIDTH="85"></COLGROUP>	'+
'		<COLGROUP WIDTH="96"></COLGROUP>	'+
'		<COLGROUP WIDTH="98"></COLGROUP>	'+
'		<COLGROUP WIDTH="112"></COLGROUP>	'+
'		<COLGROUP WIDTH="118"></COLGROUP>	'+
'		<TR>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="62" ALIGN="LEFT"><BR></TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT" VALIGN=TOP>количество квартир</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT" VALIGN=TOP>общая площадь</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT" VALIGN=TOP>средняя площадь</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT" VALIGN=TOP>минимальная </TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT" VALIGN=TOP>максимальная</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT" VALIGN=TOP>минимальная без учета неотапливаемых помещений</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT" VALIGN=TOP>максимальная без учета неотапливаемых помещений</TD>	'+
'		</TR>	'+
'		<TR>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT">1 комнатные</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="RIGHT">{total_count_1_rooms}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{total_area_1r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{avg_area_1r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_1r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_1r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_1r_wo_unheat}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_1r_wo_unheat}</TD>	'+
'		</TR>	'+
'		<TR>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT">2 комнатные</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="RIGHT">{total_count_2_rooms}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{total_area_2r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{avg_area_2r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_2r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_2r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_2r_wo_unheat}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_2r_wo_unheat}</TD>	'+
'		</TR>	'+
'		<TR>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT">3 комнатные</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="RIGHT">{total_count_3_rooms}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{total_area_3r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{avg_area_3r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_3r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_3r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_3r_wo_unheat}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_3r_wo_unheat}</TD>	'+
'		</TR>	'+
'		<TR>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT">4 комнатные</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="RIGHT">{total_count_4_rooms}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{total_area_4r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{avg_area_4r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_4r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_4r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_4r_wo_unheat}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_4r_wo_unheat}</TD>	'+
'		</TR>	'+
'		<TR>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT">5 комнатные</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="RIGHT">{total_count_5_rooms}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{total_area_5r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{avg_area_5r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_5r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_5r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_5r_wo_unheat}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_5r_wo_unheat}</TD>	'+
'		</TR>	'+
'		<TR>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT">6 комнатные</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="RIGHT">{total_count_6_rooms}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{total_area_6r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{avg_area_6r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_6r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_6r}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_6r_wo_unheat}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_6r_wo_unheat}</TD>	'+
'		</TR>	'+
'		<TR>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT">многокомнотные</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="RIGHT">{total_count_n_rooms}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{total_area_n_room}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{avg_area_n_room}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_n_room}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_n_room}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_n_wo_unheat}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_n_wo_unheat}</TD>	'+
'		</TR>	'+
'		<TR>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT">студии</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="RIGHT">{total_count_studio}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{total_area_studio}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{avg_area_studio}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_studio}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_studio}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{min_area_st_wo_unheat}</TD>	'+
'		<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT">{max_area_st_wo_unheat}</TD>	'+
'		</TR>	'+
'		</TABLE>	'+
'</tpl>';

var infrastructure_tpl ='<tpl for="."><font size="2"><table>'+
'<tr><td><b>Тип инфраструктуры: </b></td><td>{type_of_infrastructure_name}</td></tr>'+

'</table></font></tpl>';

var ipoteka_banks_tpl ='<tpl for=".">'
                        +'</tpl>';
var investor_tpl ='<tpl for=".">	<TABLE CELLSPACING="0" COLS="2" BORDER="0">	'	
+'		<COLGROUP WIDTH="455"></COLGROUP>	'
+'		<COLGROUP WIDTH="174"></COLGROUP>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">застройщик (инвестор / заказчик)</TD>	'
+'		<TD ALIGN="LEFT">{investor_id}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">контакты застройщика (инвестора / заказчика)</TD>	'
+'		<TD ALIGN="LEFT">{investor_contact}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">web-сайт застройщика (инвестора / заказчика) или жилого комплекса</TD>	'
+'		<TD ALIGN="LEFT">{investor_site}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">генеральный подрядчик</TD>	'
+'		<TD ALIGN="LEFT">{general_contractor_id}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">Инвестор (заказчик) объекта</TD>	'
+'		<TD ALIGN="LEFT">{customer_of_object_id}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">Архитектор</TD>	'
+'		<TD ALIGN="LEFT">{architect_id}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">дата выдачи разрешения на строительство</TD>	'
+'		<TD ALIGN="LEFT">{building_permits_date}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">номер разрешения на строительство</TD>	'
+'		<TD ALIGN="LEFT">{building_permits_number}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">дата начала продаж (год, месяц)</TD>	'
+'		<TD ALIGN="LEFT">{date_sale_start}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">дата начала строительства (год, месяц)</TD>	'
+'		<TD ALIGN="LEFT">{date_start_build}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">стадия строительства</TD>	'
+'		<TD ALIGN="LEFT">{build_stage_id}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">статус строительства</TD>	'
+'		<TD ALIGN="LEFT">{build_status_id}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">запланированный срок ввода в эксплуатацию</TD>	'
+'		<TD ALIGN="LEFT">{schedul_dt_commiss}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">фактический срок ввода в эксплуатацию</TD>	'
+'		<TD ALIGN="LEFT">{fact_dt_commiss}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">Окончание реализации</TD>	'
+'		<TD ALIGN="LEFT">{End_of_implementation}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">Ввод в эксплуатацию</TD>	'
+'		<TD ALIGN="LEFT">{Commissioning}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">Перенос сроков ввода</TD>	'
+'		<TD ALIGN="LEFT">{Postponement_entry}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">дата выдачи разрешения на ввод в эксплуатацию</TD>	'
+'		<TD ALIGN="LEFT">{commissioning_dt}</TD>	'
+'		</TR>	'
+'		<TR>	'
+'		<TD HEIGHT="17" ALIGN="LEFT">номер разрешения на ввод в эксплуатацию</TD>	'
+'		<TD ALIGN="LEFT">{commissioning_num}</TD>	'
+'		</TR>	'
+'		</TABLE>	</tpl>';

var finance_tpl ='<tpl for=".">'+
'	<TABLE CELLSPACING="0" COLS="8" BORDER="0">				'+
'		<COLGROUP WIDTH="261"></COLGROUP>			'+
'		<COLGROUP WIDTH="87"></COLGROUP>			'+
'		<COLGROUP WIDTH="85"></COLGROUP>			'+
'		<COLGROUP WIDTH="87"></COLGROUP>			'+
'		<COLGROUP WIDTH="88"></COLGROUP>			'+
'		<COLGROUP SPAN="2" WIDTH="85"></COLGROUP>			'+
'		<COLGROUP WIDTH="116"></COLGROUP>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT"><FONT FACE="Times New Roman"><BR></FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT"><B><FONT FACE="Times New Roman">1 комн. кв-ра</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT"><B><FONT FACE="Times New Roman">2 комн. кв-ра</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT"><B><FONT FACE="Times New Roman">3 комн. кв-ра</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT"><B><FONT FACE="Times New Roman">4 комн. кв-ра</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT"><B><FONT FACE="Times New Roman">5 комн. кв-ра</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="LEFT"><B><FONT FACE="Times New Roman">6 комн. кв-ра</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><B><FONT FACE="Times New Roman">Мн. комн. кв-ра</FONT></B></TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="32" ALIGN="LEFT"><B><FONT FACE="Times New Roman">Средняя удельная цена  руб./кв.м.</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><FONT FACE="Times New Roman">{avg_unit_price_1r}</FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><FONT FACE="Times New Roman">{avg_unit_price_2r}</FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><FONT FACE="Times New Roman">{avg_unit_price_3r}</FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><FONT FACE="Times New Roman">{avg_unit_price_4r}</FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><FONT FACE="Times New Roman">{avg_unit_price_5r}</FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><FONT FACE="Times New Roman">{avg_unit_price_6r}</FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><FONT FACE="Times New Roman">{avg_unit_price_nr}</FONT></TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="32" ALIGN="LEFT" BGCOLOR="#83CAFF"><B><FONT FACE="Times New Roman">Всего квартир в продаже (шт.)</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF"><FONT FACE="Times New Roman">{total_1r_flats_sale}</FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF"><FONT FACE="Times New Roman">{total_2r_flats_sale}</FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF"><FONT FACE="Times New Roman">{total_3r_flats_sale}</FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF"><FONT FACE="Times New Roman">{total_4r_flats_sale}</FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF"><FONT FACE="Times New Roman">{total_5r_flats_sale}</FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF"><FONT FACE="Times New Roman">{total_6r_flats_sale}</FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF"><FONT FACE="Times New Roman">{total_nr_flats_sale}</FONT></TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="32" ALIGN="LEFT"><B><FONT FACE="Times New Roman">Суммарная площадь  в предложении, кв. м</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER">{tot_area_1r_flat_offer}</TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER">{tot_area_2r_flat_offer}</TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER">{tot_area_3r_flat_offer}</TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><BR></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><BR></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><BR></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER">{tot_area_nr_flat_offer}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="32" ALIGN="LEFT" BGCOLOR="#83CAFF"><B><FONT FACE="Times New Roman" COLOR="#000000">Суммарная полная цена , руб.</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF">{total_1r_whole_price_offer}</TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF">{total_2r_whole_price_offer}</TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF">{total_3r_whole_price_offer}</TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF"><FONT COLOR="#000000"><BR></FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF"><FONT COLOR="#000000"><BR></FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF"><FONT COLOR="#000000"><BR></FONT></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF">{total_nr_whole_price_offer}</TD>		'+
'		</TR>			'+
'	</TABLE>				'+
'	<br>				'+
'	<TABLE CELLSPACING="0" COLS="2" BORDER="0">				'+
'		<COLGROUP WIDTH="299"></COLGROUP>			'+
'		<COLGROUP WIDTH="587"></COLGROUP>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT"><B><FONT FACE="Times New Roman">Мин. Цена</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><FONT FACE="Times New Roman">{min_price}</FONT></TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT" BGCOLOR="#83CAFF"><B><FONT FACE="Times New Roman">Средняя удельная цена по объекту, руб./кв.м.</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF"><FONT FACE="Times New Roman">{avg_unit_price}</FONT></TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT"><B><FONT FACE="Times New Roman">Макс. Цена кв.м)</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><FONT FACE="Times New Roman">{max_price}</FONT></TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT" BGCOLOR="#83CAFF"><B><FONT FACE="Times New Roman">Всего квартир в продаже (шт.)</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF"><FONT FACE="Times New Roman">{total_flats_sale}</FONT></TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT"><B><FONT FACE="Times New Roman">Коэф.</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><FONT FACE="Times New Roman">{koefficent}</FONT></TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT" BGCOLOR="#83CAFF"><B><FONT FACE="Times New Roman">Оценка темпов продаж за квартал</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF">{rates_sales_quarterly}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT"><B><FONT FACE="Times New Roman">Оценка темпов продаж с начала реализации</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER">{rates_sales_from_start}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT" BGCOLOR="#83CAFF"><B><FONT FACE="Times New Roman">Средняя площадь квартиры в объекте, кв. м</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF">{avg_area_of_flat}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT"><B><FONT FACE="Times New Roman">Суммарная площадь кв-р в предложении, кв. м</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER">{tot_area_flat_in_offer}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT" BGCOLOR="#83CAFF"><B><FONT FACE="Times New Roman">Суммарная полная цена квартир, руб.</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF">{total_whole_price_in_offer}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT"><B><FONT FACE="Times New Roman">тип заключаемого договора с покупателем</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER">{contract_type_id}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT" BGCOLOR="#83CAFF"><B><FONT FACE="Times New Roman">наличие рассрочки</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF">{leasing_id}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT"><B><FONT FACE="Times New Roman">условия рассрочки</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER">{leasing_conditions}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT" BGCOLOR="#83CAFF"><B><FONT FACE="Times New Roman">наличие ипотеки</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF">{ipoteka_id}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT"><B><FONT FACE="Times New Roman">условия ипотеки</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER"><FONT FACE="Times New Roman">{ipoteka_conditions}</FONT></TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT" BGCOLOR="#83CAFF"><B><FONT FACE="Times New Roman">Квотирование (да/нет)</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF">{quotas_id}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT"><B><FONT FACE="Times New Roman">Категория обновляемости объекта (корпуса)». </FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER">{update_category_id}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="34" ALIGN="LEFT" BGCOLOR="#83CAFF"><B><FONT FACE="Times New Roman">источник информации об объекте</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF">{info_source}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT"><B><FONT FACE="Times New Roman">дата сбора информации</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER">{collect_information_dt}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT" BGCOLOR="#83CAFF"><B><FONT FACE="Times New Roman">дата отчета по этапу</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF">{report_on_phase_dt}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT"><B><FONT FACE="Times New Roman">статус реализации</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER">{impl_status_id}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="17" ALIGN="LEFT" BGCOLOR="#83CAFF"><B><FONT FACE="Times New Roman">Дата ввода в базу</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER" BGCOLOR="#83CAFF">{input_in_db_dt}</TD>		'+
'		</TR>			'+
'		<TR>			'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" HEIGHT="38" ALIGN="LEFT"><B><FONT FACE="Times New Roman">Комментарий</FONT></B></TD>		'+
'			<TD STYLE="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" ALIGN="CENTER">{comment_txt}</TD>		'+
'		</TR>			'+
'	</TABLE>				'+


                        '</tpl>';
var comercial_tpl ='<tpl for=".">'

                        +'</tpl>';

var flats_tpl ='<tpl for=".">'
                        +'</tpl>';