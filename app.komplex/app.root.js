/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


Ext.ns("app");

//Ext.extend(UniversalReqGrid, Ext.grid.EditorGridPanel);
//var store_it = new app.store_j1({baseParams: {mode: 'AllRequests'}});

proxy_obj = new Ext.data.ScriptTagProxy({
           url: '../helper/app.komplex/komplex_select.php'
        }); 


    app.Pan =  Ext.extend(
    Ext.Panel,{
        initComponent: function(){

           var config = { 
   
            title: 'New Tab '+this.id,
            xtype:'panel',
            height:350,
            id:this.id,
//            tbar:[
//                  '-'
//                ,{
//                 text: 'Новый '
//                 ,tooltip: 'Новый '
//                 ,iconCls:'silk-add'
//                 ,handler: function(){
//                     /*вызываю функцию(объект),
//                      *у которой область видимости
//                      *такая же что и у тулбара.
//                      *То есть тулбар и функция находяться на одном уровне видимости
//                      **/
//                   gridAddtBt.call()
//                 }
//                }],
           // store:rrb_komplex_store,
            
            items:[
                {xtype:'HousingGrid'
                   ,store: this.store
                   ,cm:new Ext.grid.ColumnModel({columns:ColsHousing})   
                   ,region:'center' 
                   ,height:350
                   
                } 
            ]
//            items:[new Ext.DataView( {
//                                    store: this.store,
//                                   // tpl: flats_tpl,
//                                    autoHeight:true,
//                                    height:150,
//                                    emptyText: 'No items to display'
//                                    ,tpl: '<tpl for=".">                              '
//                                          
//                                          +'      <div >                                             '
//                                          +'       <p><b>Номер корпуса:</b> {complex_name} </p>     '
//                                              +'       <p><b>Адрес: </b>{name} </p>  '
//                                            +'       <p><hr></p>           '
//                                          +'     </div>                                           '
//                                          
//
//                                              +'</tpl>'
//                           })]

                   
            ,closable:true
        }
       Ext.apply(this, Ext.apply(this.initialConfig, config));
       app.Pan.superclass.initComponent.apply(this, arguments);
//       
      var lstore = this.store;
      var l_id = this.id;
//      
          var gridAddtBt = function(){
            /*Запускаю своё событие, от кнопки с тулбара*/
        //lstore.reload({params: { test_h_id:2}})
        Ext.MessageBox.alert('Ipoteka','id '+l_id); 
        }
//      
      lstore.reload({params: { test_h_id:l_id}});
//       ,callback: function(r, options, success){
//              if(success && r.length > 0){
//                var row = r[0];
////                alert(row);
////                alert(row.get('name'));
//                Ext.MessageBox.alert('Ipoteka','id '+row.get('name')); 
//              }
//            }
//       });//rrb_komplex_store
   }

 });
   
   Ext.reg('a_pan', app.Pan);




app.rootKomplex =  Ext.extend(
    Ext.Panel,{
        initComponent: function(){

           var config = {items:[ {
                             activeTab: 0
                            ,xtype:'tabpanel'
                            ,defaults:{  autoScroll: true}
                            ,items:[ 
                               {xtype:'panel'
                               ,title:'Параметры' 
                               ,items:[
                                  {  xtype:'dash_panel'

                                    ,items:[{
                                         xtype:'frm_Dash'
                                         ,region:'north'
                                        ,items:dashFields
                                    }] }    
                                 ,{xtype:'HousingGrid'
                                   ,store: rrb_komplex_store
                                   ,cm:new Ext.grid.ColumnModel({columns:ColsHousing})   
                                   ,region:'center' 
                                   ,height:350
                                }   
                                ]
                               },
                               {xtype:'a_pan'
                                   ,id:12
                                ,store: 
                                    //rrb_komplex_store
                                    new Ext.data.Store({
                                    root: 'results',
                                    
                                    baseParams:{test_h_id:1},
                                    fields: [
                                     {name: 'id', mapping:'id', type: 'string'}
                                     ,{name: 'complex_name', mapping:'complex_name', type: 'string'}
                                    ,{name: 'name', mapping:'name', type: 'string'}
                                    ,{name: 'corpse_number', mapping:'corpse_number', type: 'string'}
                                    ,{name: 'contract_type_id_name', mapping:'contract_type_id_name', type: 'string'}
                                    ,{name: 'bearing_material_tech_name', mapping:'bearing_material_tech_name', type: 'string'}
                                    ,{name: 'ipoteka_id_name', mapping:'ipoteka_id_name', type: 'string'}


                                    ],
                                    proxy:proxy_obj
                                  
                                })   
                               }

                               

                                ]}
                        
                         ]}; // eo config object
            
            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            app.rootKomplex.superclass.initComponent.apply(this, arguments);

           
            var tabs  =  this.items.itemAt(0);
            var dash1 =  this.items.itemAt(0).items.itemAt(1);
            var dash =  this.items.itemAt(0).items.itemAt(0).items.itemAt(0);
            
        
            var grid =  this.items.itemAt(0).items.itemAt(0).items.itemAt(1);
              
         dash1.on('activate', function(){
                dash1.store.reload({params: { test_h_id:dash1.id}});
                Ext.MessageBox.alert('Ipoteka', dash1.id);
             });   
      
      
    ipoteka_store.load({params: { handbooks_id:2}
    });  
    bearing_material_tech_store.load({params: { handbooks_id:13}});
    contract_type_store.load({params: { handbooks_id:14}}); 
    
    dash.items.itemAt(0).items.itemAt(0).on('select', function(f,r,i){
                                      //frmIpoteka.call();
                                      rrb_komplex_store.reload({params: { ipoteka_id:r.data.id}});
                                    //Ext.MessageBox.alert('Ipoteka','id d'+r.data.id+' name '+r.data.name);
                                    //reqText.setValue(r.data.type_desc);
                                  });
                                  
                                  
   dash.items.itemAt(0).items.itemAt(1).on('select', function(f,r,i){
                                      //frmIpoteka.call();
                                      rrb_komplex_store.reload({params: { bearing_material_tech:r.data.id}});
                                    //Ext.MessageBox.alert('Ipoteka','id d'+r.data.id+' name '+r.data.name);
                                    //reqText.setValue(r.data.type_desc);
                                  });                                  
   dash.items.itemAt(0).items.itemAt(2).on('select', function(f,r,i){
                                      //frmIpoteka.call();
                                      rrb_komplex_store.reload({params: { contract_type_id:r.data.id}});
                                    //Ext.MessageBox.alert('Ipoteka','id d'+r.data.id+' name '+r.data.name);
                                    //reqText.setValue(r.data.type_desc);
                                  }); 
     
     
     
    
                        
        grid.on('rowdblclick', function(grid, index, rec) {
                        var row_label = grid.getSelectionModel().getSelected().id;
                        // Ext.MessageBox.alert('Ipoteka','id d'+row_label);
                         addTab(row_label);

        });
     
  

      
    
      
      function addTab(row_label){
        index = 2;  
        tabs.add({
            xtype:'a_pan',
            id:row_label
//            title: 'New Tab '+row_label,
//            xtype:'panel',
//            height:150,
//            html:'new items'+row_label
//            ,closable:true
//            ,store: new Ext.data.Store({
//                                    root: 'results',
//                                    fields: [
//                                     {name: 'id', mapping:'id', type: 'string'}
//                                     ,{name: 'complex_name', mapping:'complex_name', type: 'string'}
//                                    ,{name: 'name', mapping:'name', type: 'string'}
//                                    ,{name: 'corpse_number', mapping:'corpse_number', type: 'string'}
//                                    ,{name: 'contract_type_id_name', mapping:'contract_type_id_name', type: 'string'}
//                                    ,{name: 'bearing_material_tech_name', mapping:'bearing_material_tech_name', type: 'string'}
//                                    ,{name: 'ipoteka_id_name', mapping:'ipoteka_id_name', type: 'string'}
//
//
//                                    ],
//                                    proxy: new Ext.data.ScriptTagProxy({
//                                    url: '../helper/app.komplex/komplex_select.php'
//                                    })
//                                })
           
            
        }
        
    ).show();
    }


   }

 });
Ext.reg('komplex_root', app.rootKomplex);



    
   
   
   
  var vv= new Ext.DataView( {
                                    store: this.store,
                                   // tpl: flats_tpl,
                                    autoHeight:true,
                                    height:150,
                                    emptyText: 'No items to display'
                                    ,tpl: '<tpl for=".">                              '
                                          
                                          +'      <div >                                             '
                                          +'       <p><b>Номер корпуса:</b> {complex_name} </p>     '
                                              +'       <p><b>Адрес: </b>{name} </p>  '
                                            +'       <p><hr></p>           '
                                          +'     </div>                                           '
                                          

                                              +'</tpl>'
//                                    
                           });