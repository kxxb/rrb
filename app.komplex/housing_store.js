/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



var ColsHandbooks =  [
                    {
                        header: 'ID ',
                        readOnly: true,
                        dataIndex: 'id', // this is where the mapped name is important!
                        width: 75,
                        sortable: true,
                        hidden: false
                   }
                  ,{
                    header: 'Значение',
                    readOnly: true,
                    dataIndex: 'name', // this is where the mapped name is important!
                    width: 150,
                    sortable: true,
                    hidden: false
                  }
                  ];

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
