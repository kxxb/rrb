<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



//require_once('../../SYS/sys_constants.php');
$C_MYSQL_SET_NAMES = "SET NAMES 'cp1251'";
/*
 * rrb_apartment_comlex*
 * rrb_housing*
 * rrb_housing_address*
 * rrb_housing_commercial*
 * rrb_housing_finance*
 * rrb_housing_flat_info*
 * rrb_housing_infrastructure*
 * rrb_housing_specification*
 * rrb_investor_builder*
 * rrb_ipoteka_banks*
 * rrb_flats
 */

function uid_rrb_apartment_comlex(
$p_connect, $p_id, $p_complex_name, $p_last_user_id, $p_date_rec,  $p_mode) {
    $v_result = "";
    $query_ui = "CALL uid_rrb_apartment_comlex(?,?,?,?,?,@output);";
    $p_connect->query("SET NAMES 'cp1251'");
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "isiss", $p_id, $p_complex_name, $p_last_user_id, $p_date_rec,  $p_mode
    );
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    } else {
        echo "{success:false,errors:{reason:'Ошибка выполнения процедуры MySql!'}}";
    }
    $stmt = $p_connect->prepare('SELECT @output ');
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $output);
        while (mysqli_stmt_fetch($stmt)) {
            
        }
        if ($output == 'good_insert') {
            $v_result = "{success:true,errors:{reason:'Запись сохранена!'}}";
        }
        if ($output == 'good_update') {
            $v_result = "{success:true,errors:{reason:'Запись изменена!'}}";
        }
        if ($output == 'good_delete') {
            $v_result = "{success:true,errors:{reason:'Запись удалена!'}}";
        }
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $v_result;
}

function uid_rrb_housing(
$p_connect, $p_id, $p_name, $p_corpse_number, $p_apartment_coplex_id,
           $p_last_user_id, $p_date_rec,  $p_mode) {
    $v_result = "";
    $query_ui = "CALL uid_rrb_housing(?,?,?,?,?,?,?,@output);";
    $p_connect->query("SET NAMES 'cp1251'");
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "issiiss", $p_id, $p_name, $p_corpse_number, 
            $p_apartment_coplex_id, $p_last_user_id, $p_date_rec,  $p_mode
    );
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    } else {
        echo "{success:false,errors:{reason:'Ошибка выполнения процедуры MySql!'}}";
    }
    $stmt = $p_connect->prepare('SELECT @output ');
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $output);
        while (mysqli_stmt_fetch($stmt)) {
            
        }
        if ($output == 'good_insert') {
            $v_result = "{success:true,errors:{reason:'Запись сохранена!'}}";
        }
        if ($output == 'good_update') {
            $v_result = "{success:true,errors:{reason:'Запись изменена!'}}";
        }
        if ($output == 'good_delete') {
            $v_result = "{success:true,errors:{reason:'Запись удалена!'}}";
        }
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $v_result;
}

function uid_rrb_housing_address(
$p_connect, $p_id, $p_rrb_housing_id, $p_kladr_code, $p_ot_mkad, $p_longitude_yandex, $p_latitude_yandex, $p_cadastral_number, $p_building_address, $p_house_number, $p_house_letter, $p_house_corps, $p_house_building, $p_house_ownership, $p_state_id, $p_subject_of_state_id, $p_street_type_id, $p_dirrection_id, $p_last_user_id, $p_date_rec,  $p_mode) {
    $v_result = "";
    $query_ui = "CALL uid_rrb_housing_address(?,?,?,?,?,?,?,?,?,?,
                                              ?,?,?,?,?,?,?,?,?,?,@output);";
    //$p_connect->query($C_MYSQL_SET_NAMES);
    $p_connect->query("SET NAMES 'cp1251'");
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "iisisssssssssiiiiiss", $p_id, $p_rrb_housing_id, $p_kladr_code, $p_ot_mkad, $p_longitude_yandex, $p_latitude_yandex, $p_cadastral_number, $p_building_address, $p_house_number, $p_house_letter, $p_house_corps, $p_house_building, $p_house_ownership, $p_state_id, $p_subject_of_state_id, $p_street_type_id, $p_dirrection_id, $p_last_user_id, $p_date_rec,  $p_mode
    );
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    } else {
        echo "{success:false,errors:{reason:'Ошибка выполнения процедуры MySql!'}}";
    }
    $stmt = $p_connect->prepare('SELECT @output ');
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $output);
        while (mysqli_stmt_fetch($stmt)) {
            
        }
        if ($output == 'good_insert') {
            $v_result = "{success:true,errors:{reason:'Запись сохранена!'}}";
        }
        if ($output == 'good_update') {
            $v_result = "{success:true,errors:{reason:'Запись изменена!'}}";
        }
        if ($output == 'good_delete') {
            $v_result = "{success:true,errors:{reason:'Запись удалена!'}}";
        }
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $v_result;
}

function uid_rrb_housing_commercial(
$p_connect, $p_id, $p_last_user_id, $p_date_rec, $p_comercial_available, $p_commercial_area, $p_rrb_housing_id,  $p_mode) {
    $v_result = "";
    $query_ui = "CALL uid_rrb_housing_commercial(?,?,?,?,?,?,?,@output);";
    //$p_connect->query($C_MYSQL_SET_NAMES);
    $p_connect->query("SET NAMES 'cp1251'");
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "iisisis", $p_id, $p_last_user_id, $p_date_rec, $p_comercial_available, $p_commercial_area, $p_rrb_housing_id,  $p_mode
    );
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    } else {
        echo "{success:false,errors:{reason:'Ошибка выполнения процедуры MySql!'}}";
    }
    $stmt = $p_connect->prepare('SELECT @output ');
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $output);
        while (mysqli_stmt_fetch($stmt)) {
            
        }
        if ($output == 'good_insert') {
            $v_result = "{success:true,errors:{reason:'Запись сохранена!'}}";
        }
        if ($output == 'good_update') {
            $v_result = "{success:true,errors:{reason:'Запись изменена!'}}";
        }
        if ($output == 'good_delete') {
            $v_result = "{success:true,errors:{reason:'Запись удалена!'}}";
        }
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $v_result;
}

function uid_rrb_housing_finance(
$p_connect, $p_id, $p_last_user_id, $p_date_rec, $p_contract_type_id, $p_leasing_id, $p_leasing_conditions, $p_ipoteka_id, $p_ipoteka_conditions, $p_min_price, $p_avg_unit_price, $p_max_price, $p_avg_unit_price_1r, $p_avg_unit_price_2r, $p_avg_unit_price_3r, $p_avg_unit_price_4r, $p_avg_unit_price_5r, $p_avg_unit_price_6r, $p_avg_unit_price_nr, $p_total_flats_sale, $p_total_1r_flats_sale, $p_total_2r_flats_sale, $p_total_3r_flats_sale, $p_total_4r_flats_sale, $p_total_5r_flats_sale, $p_total_6r_flats_sale, $p_total_nr_flats_sale, $p_koefficent, $p_rates_sales_quarterly, $p_rates_sales_from_start, $p_avg_area_of_flat, $p_tot_area_flat_in_offer, $p_total_whole_price_in_offer, $p_tot_area_1r_flat_offer, $p_total_1r_whole_price_offer, $p_tot_area_2r_flat_offer, $p_total_2r_whole_price_offer, $p_tot_area_3r_flat_offer, $p_total_3r_whole_price_offer, $p_tot_area_nr_flat_offer, $p_total_nr_whole_price_offer, $p_quotas_id, $p_update_category_id, $p_info_source, $p_collect_information_dt, $p_report_on_phase_dt, $p_impl_status_id, $p_input_in_db_dt, $p_comment_txt, $p_rrb_housing_id,  $p_mode) {
    $v_result = "";
    $query_ui = "CALL uid_rrb_housing_finance(?,?,?,?,?,?,?,?,?,?,
                                              ?,?,?,?,?,?,?,?,?,?,
                                              ?,?,?,?,?,?,?,?,?,?,
                                              ?,?,?,?,?,?,?,?,?,?,
                                              ?,?,?,?,?,?,?,?,?,?,@output);";
    //$p_connect->query($C_MYSQL_SET_NAMES);
    $p_connect->query("SET NAMES 'cp1251'");
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "iisiisisssssssssssssssssssssssssssssssssiisssissis", $p_id, $p_last_user_id, $p_date_rec, $p_contract_type_id, $p_leasing_id, $p_leasing_conditions, $p_ipoteka_id, $p_ipoteka_conditions, $p_min_price, $p_avg_unit_price, $p_max_price, $p_avg_unit_price_1r, $p_avg_unit_price_2r, $p_avg_unit_price_3r, $p_avg_unit_price_4r, $p_avg_unit_price_5r, $p_avg_unit_price_6r, $p_avg_unit_price_nr, $p_total_flats_sale, $p_total_1r_flats_sale, $p_total_2r_flats_sale, $p_total_3r_flats_sale, $p_total_4r_flats_sale, $p_total_5r_flats_sale, $p_total_6r_flats_sale, $p_total_nr_flats_sale, $p_koefficent, $p_rates_sales_quarterly, $p_rates_sales_from_start, $p_avg_area_of_flat, $p_tot_area_flat_in_offer, $p_total_whole_price_in_offer, $p_tot_area_1r_flat_offer, $p_total_1r_whole_price_offer, $p_tot_area_2r_flat_offer, $p_total_2r_whole_price_offer, $p_tot_area_3r_flat_offer, $p_total_3r_whole_price_offer, $p_tot_area_nr_flat_offer, $p_total_nr_whole_price_offer, $p_quotas_id, $p_update_category_id, $p_info_source, $p_collect_information_dt, $p_report_on_phase_dt, $p_impl_status_id, $p_input_in_db_dt, $p_comment_txt, $p_rrb_housing_id,  $p_mode
    );
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    } else {
        echo "{success:false,errors:{reason:'Ошибка выполнения процедуры MySql!'}}";
    }
    $stmt = $p_connect->prepare('SELECT @output ');
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $output);
        while (mysqli_stmt_fetch($stmt)) {
            
        }
        if ($output == 'good_insert') {
            $v_result = "{success:true,errors:{reason:'Запись сохранена!'}}";
        }
        if ($output == 'good_update') {
            $v_result = "{success:true,errors:{reason:'Запись изменена!'}}";
        }
        if ($output == 'good_delete') {
            $v_result = "{success:true,errors:{reason:'Запись удалена!'}}";
        }
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $v_result;
}

function uid_rrb_housing_flat_info( 
        $p_connect, $p_id, $p_last_user_id, $p_date_rec, $p_total_area_all_flats, 
        $p_total_area_studio, $p_total_area_1rooms, $p_total_area_2rooms, 
        $p_total_area_3rooms, $p_total_area_4rooms, $p_total_area_5rooms, 
        $p_total_area_6rooms, $p_avg_area_studio, $p_min_area_studio, 
        $p_max_area_studio, $p_min_area_st_wo_unheat, $p_max_area_st_wo_unheat, 
        $p_avg_area_1r, $p_min_area_1r, $p_max_area_1r, $p_min_area_1r_wo_unheat, 
        $p_max_area_1r_wo_unheat, $p_avg_area_2r, $p_min_area_2r, $p_max_area_2r, 
        $p_min_area_2r_wo_unheat, $p_max_area_2r_wo_unheat, $p_avg_area_3r, $p_min_area_3r,
        $p_max_area_3r, $p_min_area_3r_wo_unheat, $p_max_area_3r_wo_unheat, 
        $p_avg_area_4r, $p_min_area_4r, $p_max_area_4r, $p_min_area_4r_wo_unheat, 
        $p_max_area_4r_wo_unheat, $p_avg_area_5r, $p_min_area_5r, $p_max_area_5r, 
        $p_min_area_5r_wo_unheat, $p_max_area_5r_wo_unheat, $p_avg_area_6r, $p_min_area_6r, 
        $p_max_area_6r, $p_min_area_6r_wo_unheat, $p_max_area_6r_wo_unheat, $p_avg_area_n_room, 
        $p_min_area_n_room, $p_max_area_n_room, $p_min_area_n_wo_unheat, $p_max_area_n_wo_unheat,
        $p_total_area_n_rooms, $p_total_count_all_flats, $p_total_count_studio, 
        $p_total_count_1_rooms, $p_total_count_2_rooms, $p_total_count_3_rooms,
        $p_total_count_4_rooms, $p_total_count_5_rooms, $p_total_count_6_rooms, 
        $p_total_count_n_rooms, $p_rrb_housing_id,  $p_mode) {
    $v_result = "";
    $query_ui = "CALL uid_rrb_housing_flat_info(?,?,?,?,?,?,?,?,?,?,
                                                ?,?,?,?,?,?,?,?,?,?,
                                                ?,?,?,?,?,?,?,?,?,?,
                                                ?,?,?,?,?,?,?,?,?,?,
                                                ?,?,?,?,?,?,?,?,?,?,
                                                ?,?,?,?,?,?,?,?,?,?,
                                                ?,?,?,@output);";
    //$p_connect->query($C_MYSQL_SET_NAMES);
    $p_connect->query("SET NAMES 'cp1251'");
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "iisssssssssssssssssssssssssssssssssssssssssssssssssssssssssssis", 
            $p_id, $p_last_user_id, $p_date_rec, $p_total_area_all_flats,
            $p_total_area_studio, $p_total_area_1rooms, $p_total_area_2rooms,
            $p_total_area_3rooms, $p_total_area_4rooms, $p_total_area_5rooms, 
            $p_total_area_6rooms, $p_avg_area_studio, $p_min_area_studio, 
            $p_max_area_studio, $p_min_area_st_wo_unheat, $p_max_area_st_wo_unheat,
            $p_avg_area_1r, $p_min_area_1r, $p_max_area_1r, $p_min_area_1r_wo_unheat, 
            $p_max_area_1r_wo_unheat, $p_avg_area_2r, $p_min_area_2r, $p_max_area_2r, 
            $p_min_area_2r_wo_unheat, $p_max_area_2r_wo_unheat, $p_avg_area_3r, 
            $p_min_area_3r, $p_max_area_3r, $p_min_area_3r_wo_unheat, $p_max_area_3r_wo_unheat, 
            $p_avg_area_4r, $p_min_area_4r, $p_max_area_4r, $p_min_area_4r_wo_unheat, 
            $p_max_area_4r_wo_unheat, $p_avg_area_5r, $p_min_area_5r, $p_max_area_5r,
            $p_min_area_5r_wo_unheat, $p_max_area_5r_wo_unheat, $p_avg_area_6r, $p_min_area_6r, 
            $p_max_area_6r, $p_min_area_6r_wo_unheat, $p_max_area_6r_wo_unheat, 
            $p_avg_area_n_room, $p_min_area_n_room, $p_max_area_n_room, $p_min_area_n_wo_unheat,
            $p_max_area_n_wo_unheat, $p_total_area_n_rooms, $p_total_count_all_flats,
            $p_total_count_studio, $p_total_count_1_rooms, $p_total_count_2_rooms, 
            $p_total_count_3_rooms, $p_total_count_4_rooms, $p_total_count_5_rooms, 
            $p_total_count_6_rooms, $p_total_count_n_rooms, $p_rrb_housing_id,  $p_mode
    );
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    } else {
        echo "{success:false,errors:{reason:'Ошибка выполнения процедуры MySql!'}}";
    }
    $stmt = $p_connect->prepare('SELECT @output ');
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $output);
        while (mysqli_stmt_fetch($stmt)) {
            
        }
        if ($output == 'good_insert') {
            $v_result = "{success:true,errors:{reason:'Запись сохранена!'}}";
        }
        if ($output == 'good_update') {
            $v_result = "{success:true,errors:{reason:'Запись изменена!'}}";
        }
        if ($output == 'good_delete') {
            $v_result = "{success:true,errors:{reason:'Запись удалена!'}}";
        }
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $v_result;
}

function uid_rrb_housing_infrastructure(
$p_connect, $p_id, $p_last_user_id, $p_date_rec, $p_type_of_infrastructure_id, $p_rrb_housing_id,  $p_mode) {
    $v_result = "";
    $query_ui = "CALL uid_rrb_housing_infrastructure(?,?,?,?,?,?,@output);";
    //$p_connect->query($C_MYSQL_SET_NAMES);
    $p_connect->query("SET NAMES 'cp1251'");
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "iisiis", $p_id, $p_last_user_id, $p_date_rec, $p_type_of_infrastructure_id, $p_rrb_housing_id,  $p_mode
    );
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    } else {
        echo "{success:false,errors:{reason:'Ошибка выполнения процедуры uid_rrb_housing_infrastructure!'}}";
    }
    $stmt = $p_connect->prepare('SELECT @output ');
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $output);
        while (mysqli_stmt_fetch($stmt)) {
            
        }
        if ($output == 'good_insert') {
            $v_result = "{success:true,errors:{reason:'Запись сохранена!'}}";
        }
        if ($output == 'good_update') {
            $v_result = "{success:true,errors:{reason:'Запись изменена!'}}";
        }
        if ($output == 'good_delete') {
            $v_result = "{success:true,errors:{reason:'Запись удалена!'}}";
        }
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $v_result;
}

function uid_rrb_housing_specification($p_connect, 
        $p_id, $p_number_of_sections, $p_type_of_building, 
        $p_total_land_area, $p_total_floor_area, $p_land_area_build, 
        $p_bearing_material_tech, $p_wall_material, $p_proj_doc_type,
        $p_serial_number, $p_min_floors, $p_max_floors, 
        $p_floors_type_id, $p_consumer_class_id, $p_economy_class_house_id, 
        $p_ceiling_height, $p_finishing_flats_id, $p_finishing_level_id, 
        $p_common_area_finishing_id, $p_glazed_loggia_id, $p_parking_type_id, 
        $p_num_of_parking_place, $p_num_of_Elevator, $p_estimated_cost_construction, 
        $p_territory_fencing_id, $p_security_id, $p_last_user_id, 
        $p_date_rec, $p_rrb_housing_id,  $p_mode) {
    $v_result = "";
    $query_ui = "CALL uid_rrb_housing_specification(?,?,?,?,?,?,?,?,?,?,
                                                    ?,?,?,?,?,?,?,?,?,?,
                                                    ?,?,?,?,?,?,?,?,?,?,@output);";
    //$p_connect->query($C_MYSQL_SET_NAMES);
    $p_connect->query("SET NAMES 'cp1251'");
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "iiisssiiisiiiiisiiiiisssiiisis", 
            $p_id, $p_number_of_sections, $p_type_of_building, 
            $p_total_land_area, $p_total_floor_area, $p_land_area_build, 
            $p_bearing_material_tech, $p_wall_material, $p_proj_doc_type, 
            $p_serial_number, $p_min_floors, $p_max_floors, 
            $p_floors_type_id, $p_consumer_class_id, $p_economy_class_house_id, 
            $p_ceiling_height, $p_finishing_flats_id, $p_finishing_level_id, 
            $p_common_area_finishing_id, $p_glazed_loggia_id, $p_parking_type_id, 
            $p_num_of_parking_place, $p_num_of_Elevator, $p_estimated_cost_construction, 
            $p_territory_fencing_id, $p_security_id, $p_last_user_id, 
            $p_date_rec, $p_rrb_housing_id,  $p_mode
    );
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    } else {
        echo "{success:false,errors:{reason:'Ошибка выполнения процедуры uid_rrb_housing_specification!'}}";
    }
    $stmt = $p_connect->prepare('SELECT @output ');
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $output);
        while (mysqli_stmt_fetch($stmt)) {
            
        }
        if ($output == 'good_insert') {
            $v_result = "{success:true,errors:{reason:'Запись сохранена!'}}";
        }
        if ($output == 'good_update') {
            $v_result = "{success:true,errors:{reason:'Запись изменена!'}}";
        }
        if ($output == 'good_delete') {
            $v_result = "{success:true,errors:{reason:'Запись удалена!'}}";
        }
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $v_result;
}

function uid_rrb_investor_builder(
$p_connect, $p_id, $p_last_user_id, $p_date_rec, $p_investor_id, $p_investor_contact, $p_investor_site, $p_general_contractor_id, $p_customer_of_object_id, $p_architect_id, $p_building_permits_date, $p_building_permits_number, $p_date_sale_start, $p_date_start_build, $p_build_stage_id, $p_build_status_id, $p_schedul_dt_commiss, $p_fact_dt_commiss, $p_End_of_implementation, $p_Commissioning, $p_Postponement_entry, $p_commissioning_dt, $p_commissioning_num, $p_rrb_housing_id,  $p_mode) {
    $v_result = "";
    $query_ui = "CALL uid_rrb_investor_builder(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,@output);";
    //$p_connect->query($C_MYSQL_SET_NAMES);
    $p_connect->query("SET NAMES 'cp1251'");
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "iisissiiissssiisssssssis", $p_id, $p_last_user_id, $p_date_rec, $p_investor_id, $p_investor_contact, $p_investor_site, $p_general_contractor_id, $p_customer_of_object_id, $p_architect_id, $p_building_permits_date, $p_building_permits_number, $p_date_sale_start, $p_date_start_build, $p_build_stage_id, $p_build_status_id, $p_schedul_dt_commiss, $p_fact_dt_commiss, $p_End_of_implementation, $p_Commissioning, $p_Postponement_entry, $p_commissioning_dt, $p_commissioning_num, $p_rrb_housing_id,  $p_mode
    );
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    } else {
        echo "{success:false,errors:{reason:'Ошибка выполнения процедуры MySql!'}}";
    }
    $stmt = $connection->prepare('SELECT @output ');
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $output);
        while (mysqli_stmt_fetch($stmt)) {
            
        }
        if ($output == 'good_insert') {
            $v_result = "{success:true,errors:{reason:'Запись сохранена!'}}";
        }
        if ($output == 'good_update') {
            $v_result = "{success:true,errors:{reason:'Запись изменена!'}}";
        }
        if ($output == 'good_delete') {
            $v_result = "{success:true,errors:{reason:'Запись удалена!'}}";
        }
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $v_result;
}

/* * *************************************** */

function uid_ipoteka_banks(
$p_connect, $p_id, $p_last_user_id, $p_date_rec, $p_bank_id, $p_rrb_housing_id, $p_date_rec, $p_mode
) {
    $v_result = "";
    $query_ui = "CALL uid_rrb_ipoteka_banks(?,?,?,?,?,?,@output);";
    //$p_connect->query($C_MYSQL_SET_NAMES);
    $p_connect->query("SET NAMES 'cp1251'");
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "iisiis", $p_id, $p_last_user_id, $p_date_rec, $p_bank_id, $p_rrb_housing_id,  $p_mode
    );
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения процедуры MySql!'}}";
    }
    $stmt = $connection->prepare('SELECT @output ');
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $output);
        while (mysqli_stmt_fetch($stmt)) {
            
        }
        if ($output == 'good_insert') {
            $v_result = "{success:true,errors:{reason:'Запись сохранена!'}}";
        }
        if ($output == 'good_update') {
            $v_result = "{success:true,errors:{reason:'Запись изменена!'}}";
        }
        if ($output == 'good_delete') {
            $v_result = "{success:true,errors:{reason:'Запись удалена!'}}";
        }
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $v_result;
}

function uid_rrb_flats(
$p_connect, $p_id, $p_last_user_id, $p_date_rec, $p_section, $p_floor_numb, $p_quant_rooms_in_flat, $p_total_flat_area, $p_live_area, $p_kitchen_area, $p_balcony_area, $p_price_whoole_payment, $p_price_lease_payment, $p_flat_descripton, $p_saler_name, $p_saler_contact, $p_link_to_source_inf, $p_collect_information_dt, $p_report_on_phase_dt, $p_rrb_housing_id, $p_last_user_id, $p_date_rec, $p_mode) {
    $v_result = "";
    $query_ui = "CALL uid_rrb_flats(?,?,?,?,?,?,?,?,?,?,
                                    ?,?,?,?,?,?,?,?,?,?,@output);";
    //$p_connect->query($C_MYSQL_SET_NAMES);
    $p_connect->query("SET NAMES 'cp1251'");
    
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "iissssssss
                                   ssssssssis", $p_id, $p_last_user_id, $p_date_rec, $p_section, $p_floor_numb, $p_quant_rooms_in_flat, $p_total_flat_area, $p_live_area, $p_kitchen_area, $p_balcony_area, $p_price_whoole_payment, $p_price_lease_payment, $p_flat_descripton, $p_saler_name, $p_saler_contact, $p_link_to_source_inf, $p_collect_information_dt, $p_report_on_phase_dt, $p_rrb_housing_id, $p_last_user_id, $p_date_rec, $p_mode
    );
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    } else {
        echo "{success:false,errors:{reason:'Ошибка выполнения процедуры MySql!'}}";
    }
    $stmt = $p_connect->prepare('SELECT @output ');
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $output);
        while (mysqli_stmt_fetch($stmt)) {
            
        }
        if ($output == 'good_insert') {
            $v_result = "{success:true,errors:{reason:'Запись сохранена!'}}";
        }
        if ($output == 'good_update') {
            $v_result = "{success:true,errors:{reason:'Запись изменена!'}}";
        }
        if ($output == 'good_delete') {
            $v_result = "{success:true,errors:{reason:'Запись удалена!'}}";
        }
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $v_result;
}

?>
