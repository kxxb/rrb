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
                         ,border: true
                         ,layout:'border'
                         ,items:[
                             
                                {  xtype:'panel'
                                  ,region:'north'
                                  ,height:150
                                  ,items:[{ xtype:'HousingGrid'
                                           ,region:'north'
                                           ,store: rrb_housingStore1
                                           ,cm:new Ext.grid.ColumnModel({columns:ColsHousing})  
                                           ,height:150
                                          }]
                                }
                                ,{xtype:'map_panel'
                                      //, height: 150   
                                      ,region: 'center'
                                      //,title:'Спецификация'  
                                       }
                                
                                
                                
                              
                           ]
                      }; // eo config object
            
            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            app.rootKomplex.superclass.initComponent.apply(this, arguments);

            var h_id =null;
            var v_id =null;
            var v_grid_data;
            var v_grid_handbook_data;
            var grid =  this.items.itemAt(0);
            var map =  this.items.itemAt(1);
              
            
//rrb_housingStore.reload({params: {h_id:  5}});
      var gridAddtBt = function(){
            /*Запускаю своё событие, от кнопки с тулбара*/
         //Ext.Msg.alert('Success','node  ');
          addTab();
        }
      gridAddtBt = gridAddtBt.createDelegate(this);
      
      
//      var coords = [55.802539787861406, 37.84515313804151];
//     
//       
//                
//            map.balloon.open(
//                // Позиция балуна
//                [55.76, 37.64], {
//                    // Свойства балуна
//                    contentBody: 'Москва'
//                }, {
//                    // Опции балуна. В данном примере указываем, что балун не должен иметь кнопку закрытия.
//                    closeButton: false
//                });
//      
      
      //tabs.update();
      
      function addTab(){
        index = 1;  
        tabs.add({
            title: 'New Tab ' + (++index),
            iconCls: 'tabs',
//            html: 'Tab Body ' + (index) + '<br/><br/>'
//                    + 'Ext.example.bogusMarkup',
            items:[  
                                            {xtype:'panel'
                                             
                                             ,html: 'Tab Body '
                                          }
                                    ]
            ,closable:true
        }).show();
    }


   }

 });
Ext.reg('komplex_root', app.rootKomplex);


 var expander = new Ext.ux.grid.RowExpander({
        tpl : new Ext.Template(
            '<hr>', 
            '<p> {name} - {corpse_number}</p>'
        )
    });
    
    
    