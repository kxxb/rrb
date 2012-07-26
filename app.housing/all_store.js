/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


//infrastructure
var rrb_housing_infrastructureStore = new Ext.data.JsonStore({
    root: 'results',
    fields: [
    {
        name: 'id', 
        mapping:'id', 
        type: 'string'
    }
    ,{
        name: 'last_user_id', 
        mapping:'last_user_id', 
        type: 'string'
    }
    ,{
        name: 'date_rec', 
        mapping:'date_rec', 
        type: 'string'
    }
    ,{
        name: 'type_of_infrastructure_id', 
        mapping:'type_of_infrastructure_id', 
        type: 'string'
    }
    ,{
        name: 'rrb_housing_id', 
        mapping:'rrb_housing_id', 
        type: 'string'
    }
    ],
    proxy: new Ext.data.ScriptTagProxy({
        url: '../helper/app.housing/infrastructure_select.php'
    })
});
rrb_housing_infrastructureStore.load();

//apartment_comlex
var rrb_apartment_comlexStore = new Ext.data.JsonStore({
root: 'results',
fields: [
{name: 'id', mapping:'id', type: 'string'}
,{name: 'complex_name', mapping:'complex_name', type: 'string'}
,{name: 'last_user_id', mapping:'last_user_id', type: 'string'}
,{name: 'date_rec', mapping:'date_rec', type: 'string'}
],
proxy: new Ext.data.ScriptTagProxy({
url: '../helper/app.housing/apartament_select.php'
})
});
rrb_apartment_comlexStore.load();

//housing_flat_info

var rrb_housing_flat_infoStore = new Ext.data.JsonStore({
root: 'results',
fields: [
{name: 'id', mapping:'id', type: 'string'}
,{name: 'last_user_id', mapping:'last_user_id', type: 'string'}
,{name: 'date_rec', mapping:'date_rec', type: 'string'}
,{name: 'total_area_all_flats', mapping:'total_area_all_flats', type: 'string'}
,{name: 'total_area_studio', mapping:'total_area_studio', type: 'string'}
,{name: 'total_area_1rooms', mapping:'total_area_1rooms', type: 'string'}
,{name: 'total_area_2rooms', mapping:'total_area_2rooms', type: 'string'}
,{name: 'total_area_3rooms', mapping:'total_area_3rooms', type: 'string'}
,{name: 'total_area_4rooms', mapping:'total_area_4rooms', type: 'string'}
,{name: 'total_area_5rooms', mapping:'total_area_5rooms', type: 'string'}
,{name: 'total_area_6rooms', mapping:'total_area_6rooms', type: 'string'}
,{name: 'avg_area_studio', mapping:'avg_area_studio', type: 'string'}
,{name: 'min_area_studio', mapping:'min_area_studio', type: 'string'}
,{name: 'max_area_studio', mapping:'max_area_studio', type: 'string'}
,{name: 'min_area_st_wo_unheat', mapping:'min_area_st_wo_unheat', type: 'string'}
,{name: 'max_area_st_wo_unheat', mapping:'max_area_st_wo_unheat', type: 'string'}
,{name: 'avg_area_1r', mapping:'avg_area_1r', type: 'string'}
,{name: 'min_area_1r', mapping:'min_area_1r', type: 'string'}
,{name: 'max_area_1r', mapping:'max_area_1r', type: 'string'}
,{name: 'min_area_1r_wo_unheat', mapping:'min_area_1r_wo_unheat', type: 'string'}
,{name: 'max_area_1r_wo_unheat', mapping:'max_area_1r_wo_unheat', type: 'string'}
,{name: 'avg_area_2r', mapping:'avg_area_2r', type: 'string'}
,{name: 'min_area_2r', mapping:'min_area_2r', type: 'string'}
,{name: 'max_area_2r', mapping:'max_area_2r', type: 'string'}
,{name: 'min_area_2r_wo_unheat', mapping:'min_area_2r_wo_unheat', type: 'string'}
,{name: 'max_area_2r_wo_unheat', mapping:'max_area_2r_wo_unheat', type: 'string'}
,{name: 'avg_area_3r', mapping:'avg_area_3r', type: 'string'}
,{name: 'min_area_3r', mapping:'min_area_3r', type: 'string'}
,{name: 'max_area_3r', mapping:'max_area_3r', type: 'string'}
,{name: 'min_area_3r_wo_unheat', mapping:'min_area_3r_wo_unheat', type: 'string'}
,{name: 'max_area_3r_wo_unheat', mapping:'max_area_3r_wo_unheat', type: 'string'}
,{name: 'avg_area_4r', mapping:'avg_area_4r', type: 'string'}
,{name: 'min_area_4r', mapping:'min_area_4r', type: 'string'}
,{name: 'max_area_4r', mapping:'max_area_4r', type: 'string'}
,{name: 'min_area_4r_wo_unheat', mapping:'min_area_4r_wo_unheat', type: 'string'}
,{name: 'max_area_4r_wo_unheat', mapping:'max_area_4r_wo_unheat', type: 'string'}
,{name: 'avg_area_5r', mapping:'avg_area_5r', type: 'string'}
,{name: 'min_area_5r', mapping:'min_area_5r', type: 'string'}
,{name: 'max_area_5r', mapping:'max_area_5r', type: 'string'}
,{name: 'min_area_5r_wo_unheat', mapping:'min_area_5r_wo_unheat', type: 'string'}
,{name: 'max_area_5r_wo_unheat', mapping:'max_area_5r_wo_unheat', type: 'string'}
,{name: 'avg_area_6r', mapping:'avg_area_6r', type: 'string'}
,{name: 'min_area_6r', mapping:'min_area_6r', type: 'string'}
,{name: 'max_area_6r', mapping:'max_area_6r', type: 'string'}
,{name: 'min_area_6r_wo_unheat', mapping:'min_area_6r_wo_unheat', type: 'string'}
,{name: 'max_area_6r_wo_unheat', mapping:'max_area_6r_wo_unheat', type: 'string'}
,{name: 'avg_area_n_room', mapping:'avg_area_n_room', type: 'string'}
,{name: 'min_area_n_room', mapping:'min_area_n_room', type: 'string'}
,{name: 'max_area_n_room', mapping:'max_area_n_room', type: 'string'}
,{name: 'min_area_n_wo_unheat', mapping:'min_area_n_wo_unheat', type: 'string'}
,{name: 'max_area_n_wo_unheat', mapping:'max_area_n_wo_unheat', type: 'string'}
,{name: 'total_area_n_rooms', mapping:'total_area_n_rooms', type: 'string'}
,{name: 'total_count_all_flats', mapping:'total_count_all_flats', type: 'string'}
,{name: 'total_count_studio', mapping:'total_count_studio', type: 'string'}
,{name: 'total_count_1_rooms', mapping:'total_count_1_rooms', type: 'string'}
,{name: 'total_count_2_rooms', mapping:'total_count_2_rooms', type: 'string'}
,{name: 'total_count_3_rooms', mapping:'total_count_3_rooms', type: 'string'}
,{name: 'total_count_4_rooms', mapping:'total_count_4_rooms', type: 'string'}
,{name: 'total_count_5_rooms', mapping:'total_count_5_rooms', type: 'string'}
,{name: 'total_count_6_rooms', mapping:'total_count_6_rooms', type: 'string'}
,{name: 'total_count_n_rooms', mapping:'total_count_n_rooms', type: 'string'}
,{name: 'rrb_housing_id', mapping:'rrb_housing_id', type: 'string'}
],
proxy: new Ext.data.ScriptTagProxy({
url: '../helper/app.housing/flat_info/select_flats.php'
})
});
rrb_housing_flat_infoStore.load();


//housing 

var HousingStore = new Ext.data.JsonStore({
        root: 'results',
        fields: [
            {name: 'housing_name', mapping:'housing_name', type: 'string'},
            {name: 'corpse_number', mapping:'corpse_number', type: 'string'},
            {name: 'id', mapping:'id', type: 'string'},
            {name: 'number_of_sections', mapping:'number_of_sections', type: 'string'},
            {name: 'type_of_building', mapping:'type_of_building', type: 'string'},
            {name: 'total_land_area', mapping:'total_land_area', type: 'string'},
            {name: 'total_floor_area', mapping:'total_floor_area', type: 'string'},
            {name: 'land_area_build', mapping:'land_area_build', type: 'string'},
            {name: 'bearing_material_tech', mapping:'bearing_material_tech', type: 'string'},
            {name: 'wall_material', mapping:'wall_material', type: 'string'},
            {name: 'proj_doc_type', mapping:'proj_doc_type', type: 'string'},
            {name: 'serial_number', mapping:'serial_number', type: 'string'},
            {name: 'min_floors', mapping:'min_floors', type: 'string'},
            {name: 'max_floors', mapping:'max_floors', type: 'string'},
            {name: 'floors_type_id', mapping:'floors_type_id', type: 'string'},
            {name: 'consumer_class_id', mapping:'consumer_class_id', type: 'string'},
            {name: 'economy_class_house_id', mapping:'economy_class_house_id', type: 'string'},
            {name: 'ceiling_height', mapping:'ceiling_height', type: 'string'},
            {name: 'finishing_flats_id', mapping:'finishing_flats_id', type: 'string'},
            {name: 'finishing_level_id', mapping:'finishing_level_id', type: 'string'},
            {name: 'common_area_finishing_id', mapping:'common_area_finishing_id', type: 'string'},
            {name: 'glazed_loggia_id', mapping:'glazed_loggia_id', type: 'string'},
            {name: 'parking_type_id', mapping:'parking_type_id', type: 'string'},
            {name: 'num_of_parking_place', mapping:'num_of_parking_place', type: 'string'},
            {name: 'num_of_Elevator', mapping:'num_of_Elevator', type: 'string'},
            {name: 'estimated_cost_construction', mapping:'estimated_cost_construction', type: 'string'},
            {name: 'territory_fencing_id', mapping:'territory_fencing_id', type: 'string'},
            {name: 'security_id', mapping:'security_id', type: 'string'},
            {name: 'last_user_id', mapping:'last_user_id', type: 'string'},
            {name: 'date_rec', mapping:'date_rec', type: 'string'},
            {name: 'rrb_housing_id', mapping:'rrb_housing_id', type: 'string'},
            {name: 'material_name', mapping:'material_name', type: 'string'},
            {name: 'wall_material_name', mapping:'wall_material_name', type: 'string'},
            {name: 'proj_doc_name', mapping:'proj_doc_name', type: 'string'},
            {name: 'floor_type_name', mapping:'floor_type_name', type: 'string'},
            {name: 'consumer_cl_name', mapping:'consumer_cl_name', type: 'string'},
            {name: 'economy_cl_name', mapping:'economy_cl_name', type: 'string'},
            {name: 'finish_fl_name', mapping:'finish_fl_name', type: 'string'},
            {name: 'finish_level_name', mapping:'finish_level_name', type: 'string'},
            {name: 'finish_c_area_name', mapping:'finish_c_area_name', type: 'string'},
            {name: 'glazed_log_name', mapping:'glazed_log_name', type: 'string'},
            {name: 'parking_name', mapping:'parking_name', type: 'string'},
            {name: 'fencing_name', mapping:'fencing_name', type: 'string'},
            {name: 'security_name', mapping:'security_name', type: 'string'}
        ],
        proxy: new Ext.data.ScriptTagProxy({
            url: '../helper/app.housing/housing_select.php'
        })
    });
HousingStore.load();

//rrb_housing_commercial

var rrb_housing_commercialStore = new Ext.data.JsonStore({
root: 'results',
fields: [
{name: 'id', mapping:'id', type: 'string'}
,{name: 'last_user_id', mapping:'last_user_id', type: 'string'}
,{name: 'date_rec', mapping:'date_rec', type: 'string'}
,{name: 'comercial_available', mapping:'comercial_available', type: 'string'}
,{name: 'commercial_area', mapping:'commercial_area', type: 'string'}
,{name: 'rrb_housing_id', mapping:'rrb_housing_id', type: 'string'}
],
proxy: new Ext.data.ScriptTagProxy({
url: '../helper/app.housing/commercial_select.php'
})
});
rrb_housing_commercialStore.load();

//finance 
var rrb_housing_financeStore = new Ext.data.JsonStore({
root: 'results',
fields: [
{name: 'id', mapping:'id', type: 'string'}
,{name: 'last_user_id', mapping:'last_user_id', type: 'string'}
,{name: 'date_rec', mapping:'date_rec', type: 'string'}
,{name: 'contract_type_id', mapping:'contract_type_id', type: 'string'}
,{name: 'leasing_id', mapping:'leasing_id', type: 'string'}
,{name: 'leasing_conditions', mapping:'leasing_conditions', type: 'string'}
,{name: 'ipoteka_id', mapping:'ipoteka_id', type: 'string'}
,{name: 'ipoteka_conditions', mapping:'ipoteka_conditions', type: 'string'}
,{name: 'min_price', mapping:'min_price', type: 'string'}
,{name: 'avg_unit_price', mapping:'avg_unit_price', type: 'string'}
,{name: 'max_price', mapping:'max_price', type: 'string'}
,{name: 'avg_unit_price_1r', mapping:'avg_unit_price_1r', type: 'string'}
,{name: 'avg_unit_price_2r', mapping:'avg_unit_price_2r', type: 'string'}
,{name: 'avg_unit_price_3r', mapping:'avg_unit_price_3r', type: 'string'}
,{name: 'avg_unit_price_4r', mapping:'avg_unit_price_4r', type: 'string'}
,{name: 'avg_unit_price_5r', mapping:'avg_unit_price_5r', type: 'string'}
,{name: 'avg_unit_price_6r', mapping:'avg_unit_price_6r', type: 'string'}
,{name: 'avg_unit_price_nr', mapping:'avg_unit_price_nr', type: 'string'}
,{name: 'total_flats_sale', mapping:'total_flats_sale', type: 'string'}
,{name: 'total_1r_flats_sale', mapping:'total_1r_flats_sale', type: 'string'}
,{name: 'total_2r_flats_sale', mapping:'total_2r_flats_sale', type: 'string'}
,{name: 'total_3r_flats_sale', mapping:'total_3r_flats_sale', type: 'string'}
,{name: 'total_4r_flats_sale', mapping:'total_4r_flats_sale', type: 'string'}
,{name: 'total_5r_flats_sale', mapping:'total_5r_flats_sale', type: 'string'}
,{name: 'total_6r_flats_sale', mapping:'total_6r_flats_sale', type: 'string'}
,{name: 'total_nr_flats_sale', mapping:'total_nr_flats_sale', type: 'string'}
,{name: 'koefficent', mapping:'koefficent', type: 'string'}
,{name: 'rates_sales_quarterly', mapping:'rates_sales_quarterly', type: 'string'}
,{name: 'rates_sales_from_start', mapping:'rates_sales_from_start', type: 'string'}
,{name: 'avg_area_of_flat', mapping:'avg_area_of_flat', type: 'string'}
,{name: 'tot_area_flat_in_offer', mapping:'tot_area_flat_in_offer', type: 'string'}
,{name: 'total_whole_price_in_offer', mapping:'total_whole_price_in_offer', type: 'string'}
,{name: 'tot_area_1r_flat_offer', mapping:'tot_area_1r_flat_offer', type: 'string'}
,{name: 'total_1r_whole_price_offer', mapping:'total_1r_whole_price_offer', type: 'string'}
,{name: 'tot_area_2r_flat_offer', mapping:'tot_area_2r_flat_offer', type: 'string'}
,{name: 'total_2r_whole_price_offer', mapping:'total_2r_whole_price_offer', type: 'string'}
,{name: 'tot_area_3r_flat_offer', mapping:'tot_area_3r_flat_offer', type: 'string'}
,{name: 'total_3r_whole_price_offer', mapping:'total_3r_whole_price_offer', type: 'string'}
,{name: 'tot_area_nr_flat_offer', mapping:'tot_area_nr_flat_offer', type: 'string'}
,{name: 'total_nr_whole_price_offer', mapping:'total_nr_whole_price_offer', type: 'string'}
,{name: 'quotas_id', mapping:'quotas_id', type: 'string'}
,{name: 'update_category_id', mapping:'update_category_id', type: 'string'}
,{name: 'info_source', mapping:'info_source', type: 'string'}
,{name: 'collect_information_dt', mapping:'collect_information_dt', type: 'string'}
,{name: 'report_on_phase_dt', mapping:'report_on_phase_dt', type: 'string'}
,{name: 'impl_status_id', mapping:'impl_status_id', type: 'string'}
,{name: 'input_in_db_dt', mapping:'input_in_db_dt', type: 'string'}
,{name: 'comment_txt', mapping:'comment_txt', type: 'string'}
,{name: 'rrb_housing_id', mapping:'rrb_housing_id', type: 'string'}
],
proxy: new Ext.data.ScriptTagProxy({
url: '../helper/app.housing/finance_select.php'
})
});
rrb_housing_financeStore.load();

//investor_builder

var rrb_investor_builderStore = new Ext.data.JsonStore({
root: 'results',
fields: [
{name: 'id', mapping:'id', type: 'string'}
,{name: 'last_user_id', mapping:'last_user_id', type: 'string'}
,{name: 'date_rec', mapping:'date_rec', type: 'string'}
,{name: 'investor_id', mapping:'investor_id', type: 'string'}
,{name: 'investor_contact', mapping:'investor_contact', type: 'string'}
,{name: 'investor_site', mapping:'investor_site', type: 'string'}
,{name: 'general_contractor_id', mapping:'general_contractor_id', type: 'string'}
,{name: 'customer_of_object_id', mapping:'customer_of_object_id', type: 'string'}
,{name: 'architect_id', mapping:'architect_id', type: 'string'}
,{name: 'building_permits_date', mapping:'building_permits_date', type: 'string'}
,{name: 'building_permits_number', mapping:'building_permits_number', type: 'string'}
,{name: 'date_sale_start', mapping:'date_sale_start', type: 'string'}
,{name: 'date_start_build', mapping:'date_start_build', type: 'string'}
,{name: 'build_stage_id', mapping:'build_stage_id', type: 'string'}
,{name: 'build_status_id', mapping:'build_status_id', type: 'string'}
,{name: 'schedul_dt_commiss', mapping:'schedul_dt_commiss', type: 'string'}
,{name: 'fact_dt_commiss', mapping:'fact_dt_commiss', type: 'string'}
,{name: 'End_of_implementation', mapping:'End_of_implementation', type: 'string'}
,{name: 'Commissioning', mapping:'Commissioning', type: 'string'}
,{name: 'Postponement_entry', mapping:'Postponement_entry', type: 'string'}
,{name: 'commissioning_dt', mapping:'commissioning_dt', type: 'string'}
,{name: 'commissioning_num', mapping:'commissioning_num', type: 'string'}
,{name: 'rrb_housing_id', mapping:'rrb_housing_id', type: 'string'}
],
proxy: new Ext.data.ScriptTagProxy({
url: '../helper/app.housing/investor_builder_select.php'
})
});
rrb_investor_builderStore.load();

//ipoteka_banks
var rrb_ipoteka_banksStore = new Ext.data.JsonStore({
root: 'results',
fields: [
{name: 'id', mapping:'id', type: 'string'}
,{name: 'last_user_id', mapping:'last_user_id', type: 'string'}
,{name: 'date_rec', mapping:'date_rec', type: 'string'}
,{name: 'bank_id', mapping:'bank_id', type: 'string'}
,{name: 'rrb_housing_id', mapping:'rrb_housing_id', type: 'string'}
],
proxy: new Ext.data.ScriptTagProxy({
url: '../helper/app.housing/ipoteka_banks_select.php'
})
});
rrb_ipoteka_banksStore.load();

//flats

var rrb_flatsStore = new Ext.data.JsonStore({
root: 'results',
fields: [
{name: 'id', mapping:'id', type: 'string'}
,{name: 'last_user_id', mapping:'last_user_id', type: 'string'}
,{name: 'date_rec', mapping:'date_rec', type: 'string'}
,{name: 'section', mapping:'section', type: 'string'}
,{name: 'floor_numb', mapping:'floor_numb', type: 'string'}
,{name: 'quant_rooms_in_flat', mapping:'quant_rooms_in_flat', type: 'string'}
,{name: 'total_flat_area', mapping:'total_flat_area', type: 'string'}
,{name: 'live_area', mapping:'live_area', type: 'string'}
,{name: 'kitchen_area', mapping:'kitchen_area', type: 'string'}
,{name: 'balcony_area', mapping:'balcony_area', type: 'string'}
,{name: 'price_whoole_payment', mapping:'price_whoole_payment', type: 'string'}
,{name: 'price_lease_payment', mapping:'price_lease_payment', type: 'string'}
,{name: 'flat_descripton', mapping:'flat_descripton', type: 'string'}
,{name: 'saler_name', mapping:'saler_name', type: 'string'}
,{name: 'saler_contact', mapping:'saler_contact', type: 'string'}
,{name: 'link_to_source_inf', mapping:'link_to_source_inf', type: 'string'}
,{name: 'collect_information_dt', mapping:'collect_information_dt', type: 'string'}
,{name: 'report_on_phase_dt', mapping:'report_on_phase_dt', type: 'string'}
,{name: 'rrb_housing_id', mapping:'rrb_housing_id', type: 'string'}
],
proxy: new Ext.data.ScriptTagProxy({
url: '../helper/app.housing/flats_select.php'
})
});
rrb_flatsStore.load();
