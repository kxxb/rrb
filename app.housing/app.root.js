/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


Ext.ns("app");

//Ext.extend(UniversalReqGrid, Ext.grid.EditorGridPanel);
//var store_it = new app.store_j1({baseParams: {mode: 'AllRequests'}});


app.rootHousing =  Ext.extend(
    Ext.Panel,{
        initComponent: function(){

           var config = {xtype:'panel'
                         ,border: true
                         ,layout:'border'
                         ,items:[
                                {  xtype:'panel'
                                  ,region:'north'
                                  ,height:150
                                  ,html:'ЖК грид'
                                  ,items:[{ xtype:'HousingGrid'
                                           ,region:'north'
                                           ,store: rrb_apartment_comlexStore
                                           ,cm:new Ext.grid.ColumnModel({columns:ColsApartament})  
                                           ,height:550
                                          }]
                                }
                                ,
                                {  xtype:'panel'
                                  ,region:'west'
                                  ,width:350
                                  ,items: new Ext.DataView({
                                                    store: HousingStore,
                                                    tpl: copse_list,
                                                    itemSelector:'dd',
                                                    overClass:'p-over',
                                                    autoHeight:true,
                                                    emptyText: 'No items to display'
                                                 })
//                                  ,items:[{ xtype:'HousingGrid'
//                                           ,region:'north'
//                                           ,store: HousingStore
//                                           ,cm:new Ext.grid.ColumnModel({columns:ColsHousing})  
//                                           ,height:550
//                                          }]
                                }
                                ,{xtype:'tabpanel'
                                 ,activeTab: 0
                                 ,region:'center'
                                    ,defaults:{
                                        autoScroll: true
                                    }
                                    ,items:[  
                                            {xtype:'panel'
                                             ,title:'Спецификация'
                                             
                                             //,tpl:new Ext.XTemplate(htm_tpl)
                                             ,items: new Ext.DataView({
                                                    store: HousingStore,
                                                    tpl: specification_tpl,
                                                    autoHeight:true,
                                                    emptyText: 'No items to display'
                                                    
                                                 })
                                          }
                                          ,{xtype:'panel'
                                             ,title:'Информация по квартирам'
                                             ,items: new Ext.DataView({
                                                    store: rrb_housing_flat_infoStore,
                                                    tpl: flatinfo_tpl,
                                                    autoHeight:true,
                                                    emptyText: 'No items to display'
                                                 })
                                             //,tpl:new Ext.XTemplate('{security_name}')
                                          }
                                          ,{  xtype:'panel'
                                             ,title:'Инфраструткура'
                                             ,items: new Ext.DataView({
                                                    store: rrb_housing_infrastructureStore,
                                                    tpl: infrastructure_tpl,
                                                    autoHeight:true,
                                                    emptyText: 'No items to display'
                                                 })
                                             //,tpl:new Ext.XTemplate('{security_name}')
                                         }
                                         ,{  xtype:'panel'
                                             ,title:'Банки и ипотека'
                                             ,items: new Ext.DataView({
                                                    store: rrb_ipoteka_banksStore,
                                                    tpl: ipoteka_banks_tpl,
                                                    autoHeight:true,
                                                    emptyText: 'No items to display'
                                                 })
                                             //,tpl:new Ext.XTemplate('{security_name}')
                                          }
                                         ,{  xtype:'panel'
                                             ,title:'Инвестор и застройщик'
                                             ,items: new Ext.DataView({
                                                    store: rrb_investor_builderStore,
                                                    tpl: investor_tpl,
                                                    autoHeight:true,
                                                    emptyText: 'No items to display'
                                                 })
                                             //,tpl:new Ext.XTemplate('{security_name}')
                                          }
                                         ,{  xtype:'panel'
                                             ,title:'Финансовая информация'
                                             ,items: new Ext.DataView({
                                                    store: rrb_housing_financeStore,
                                                    tpl: finance_tpl,
                                                    autoHeight:true,
                                                    emptyText: 'No items to display'
                                                 })
                                             //,tpl:new Ext.XTemplate('{security_name}')
                                          }
                                         ,{  xtype:'panel'
                                             ,title:'Коммерческая информация'
                                             ,items: new Ext.DataView({
                                                    store: rrb_housing_commercialStore,
                                                    tpl: comercial_tpl,
                                                    autoHeight:true,
                                                    emptyText: 'No items to display'
                                                 })
                                             //,tpl:new Ext.XTemplate('{security_name}')
                                          }                                          
                                         ,{  xtype:'panel'
                                             ,title:'Квартиры'
                                             ,items: new Ext.DataView({
                                                    store: rrb_flatsStore,
                                                    tpl: flats_tpl,
                                                    autoHeight:true,
                                                    emptyText: 'No items to display'
                                                 })
                                             //,tpl:new Ext.XTemplate('{security_name}')
                                          }                                          
                                    ]
                                }
                              
                           ]
                      }; // eo config object
            
            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            app.rootHousing.superclass.initComponent.apply(this, arguments);

            var lGridDesc =  this.items.itemAt(1).items.itemAt(0);
            
            var lPanDesc   = this.items.itemAt(2).items.itemAt(0);
            var lPanInfo   = this.items.itemAt(2).items.itemAt(1);
            var lPanInfra   = this.items.itemAt(2).items.itemAt(2);
            
            var h_id =null;
            var v_id =null;
            var v_grid_data;
            var v_grid_handbook_data;
            
            lGridDesc.on('click',function (node, index, e){
                var car_name =HousingStore.getAt(index);
                //car_name.data.id

                rrb_housing_flat_infoStore.reload({params: {h_id: car_name.data.id}});
                rrb_housing_infrastructureStore.reload({params: {h_id: car_name.data.id}});
                rrb_ipoteka_banksStore.reload({params: {h_id: car_name.data.id}});
                rrb_investor_builderStore.reload({params: {h_id: car_name.data.id}});
                rrb_housing_financeStore.reload({params: {h_id: car_name.data.id}});
                rrb_housing_commercialStore.reload({params: {h_id: car_name.data.id}});
                rrb_flatsStore.reload({params: {h_id: car_name.data.id}});                
                //Ext.Msg.alert('Success','node  '+node+' index  '+index+' e  '+car_name.data.id);
            })
            
//             lGridDesc.getSelectionModel().on('rowselect', function(sm, rowIdx, r) {
//                                     h_id = r.data.id;
//                                    // OverwritePanelsDesc(r.data);
//                                    
//    			});
                /*        
             lPanInfo.on('activate', function(){
                 Ext.Msg.alert('Success','JustRefreshStore();');
             });
                           
             lPanInfra.on('activate', function(){
                 Ext.Msg.alert('Success','lPanInfra();');
             });
              */
             
            function OverwritePanelsDesc (data){
               /*активная заявка*/
               //additionalPanel.DisTbar();
                lPanDesc.tpl.overwrite(lPanDesc.body, data);    
               

            }





   }

 });
Ext.reg('housing_root', app.rootHousing);


