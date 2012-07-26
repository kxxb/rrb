/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


Ext.ns("app");

//Ext.extend(UniversalReqGrid, Ext.grid.EditorGridPanel);
//var store_it = new app.store_j1({baseParams: {mode: 'AllRequests'}});



app.rootKomplex =  Ext.extend(
    Ext.Panel,{
        initComponent: function(){

           var config = {xtype:'panel'
                         ,border: false
                         ,layout:'border'
                         ,items:[
                                {  xtype:'panel'
                                  ,region:'north'
                                  ,height:150
                                  ,items:[{ xtype:'HousingGrid'
                                           ,region:'north'
                                           ,store: HousingStore
                                           ,cm:new Ext.grid.ColumnModel({columns:ColsHousing})  
                                           ,height:550
                                          }]
                                }
                                
                              
                           ]
                      }; // eo config object
            
            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            app.rootKomplex.superclass.initComponent.apply(this, arguments);

            var h_id =null;
            var v_id =null;
            var v_grid_data;
            var v_grid_handbook_data;
              
            




   }

 });
Ext.reg('komplex_root', app.rootKomplex);


