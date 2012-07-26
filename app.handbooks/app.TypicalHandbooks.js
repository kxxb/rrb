/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


Ext.ns("app");

//Ext.extend(UniversalReqGrid, Ext.grid.EditorGridPanel);
//var store_it = new app.store_j1({baseParams: {mode: 'AllRequests'}});

app.TypicalHandbooksLayaout =  Ext.extend(
    Ext.Panel,{
        initComponent: function(){

           var config = {xtype:'panel'
                         ,border: false
                         ,layout:'border'
                         ,items:[
                                {  xtype:'panel'
                                  ,region:'west'
                                  ,width:350
                                  ,items:[{
                                    xtype:'hndb_desc'
                                  }]
                                }
                              ,{
                                  xtype:'panel'
                                 ,region:'center'
                                 ,items:[{xtype:'hndb_value'}]
                              }
                           ]
                      }; // eo config object
            
            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            app.TypicalHandbooksLayaout.superclass.initComponent.apply(this, arguments);
            store_handboks.reload({params: { handbooks_id:0, start:0, limit:100}})

            var lGridDesc =  this.items.itemAt(0).items.itemAt(0).items.itemAt(0);
            var lPanDesc   = this.items.itemAt(0).items.itemAt(0).items.itemAt(1);
            var lGridHndb =  this.items.itemAt(1).items.itemAt(0).items.itemAt(0);
            var h_id =null;
            var v_id =null;
            var v_grid_data;
            var v_grid_handbook_data;
              
            
             lGridDesc.getSelectionModel().on('rowselect', function(sm, rowIdx, r) {
                                    h_id = r.data.id;
                                     OverwritePanelsDesc(r.data);
                                     SetGridData(r.data);
                                    store_handboks.load({params: { handbooks_id:h_id}})  
    			});

             lGridHndb.getSelectionModel().on('rowselect', function(sm, rowIdx, r) {
                                     SetGridHandbookData(r.data);
                                     v_id = r.data.id;
                                    
    			});   
            

            
             function SetGridHandbookData(data){
                  v_grid_handbook_data = data;
                  
              };
              
              function SetGridData(data){
                  v_grid_data = data;
              };
              
            lGridDesc.on('addTb', function(){
               h_id =null; 
               
               winHndbDesc.show();
               winHndbDesc.items.itemAt(0).items.itemAt(0).setValue('');
               winHndbDesc.items.itemAt(0).items.itemAt(1).setValue('');
            });
            lGridDesc.on('editTb', function(){
                if (h_id == null) {
                   Ext.Msg.alert('edit', 'choose handbook');     
                } else {
                    winHndbDesc.show();
                    winHndbDesc.items.itemAt(0).items.itemAt(0).setValue(v_grid_data.name);
                    winHndbDesc.items.itemAt(0).items.itemAt(1).setValue(v_grid_data.handbook_description);
                }

            });



            lGridHndb.on('addTb', function(){
                if (h_id == null) {
                   Ext.Msg.alert('edit', 'Выберите справочник из списка слева');     
                } else {   
                   v_id =null; 
               
                  winHndb.show();
                  winHndb.items.itemAt(0).items.itemAt(0).setValue('');
               }
               
            });
            lGridHndb.on('editTb', function(){
              if (h_id == null) {  
                  Ext.Msg.alert('edit', 'Выберите справочник из списка слева');     
                } else {   
                    if (v_id == null) {
                       Ext.Msg.alert('edit', 'Выберите значение из списка');     
                    } else {
                        winHndb.show();
                        winHndb.items.itemAt(0).items.itemAt(0).setValue(v_grid_handbook_data.name);
                        
                    }
                }      
            });
            
            
            
            
            function OverwritePanelsDesc (data){
               /*активная заявка*/
               //additionalPanel.DisTbar();
                lPanDesc.tpl.overwrite(lPanDesc.body, data);    
               

            }


/*Окно для создания справочника*/

 winHndbDesc = new  hndb.win({
      title:'Созадние или редактирование справочника'
     ,width: 675
     ,height: 200
     ,items:[{xtype:'hndb_UIfrm'
           ,items: hndb_desFields  
         }]
 });
 

 winHndbDesc.on('frmCancel',function(){
    winHndbDesc.close();
 })
 
 winHndbDesc.on('frmSave',function(){
    fn_submitForm();
 })
function fn_submitForm(){
   
   var theForm = winHndbDesc.items.itemAt(0).getForm();
   if( theForm.isValid() == true)
   {
       
       Ext.Ajax.request({
                  url: '../helper/handbooks/uid_handbdesc.php',
                  method: 'GET',
                  params: {
                           h_name            : winHndbDesc.items.itemAt(0).items.itemAt(0).getValue()
                          ,h_description     : winHndbDesc.items.itemAt(0).items.itemAt(1).getValue()
                          ,h_id              : h_id
                          ,u_id              : gUserId
                          ,h_mode            :'UI'

                         },

                  success: function ( result, request ) {
                      var jsonData = Ext.util.JSON.decode(result.responseText);
                      var resultMessage = jsonData.errors.reason;
                      Ext.MessageBox.alert('Заявка',resultMessage);
                      store_hndb_desc.reload();
                      theForm.reset();
                      winHndbDesc.hide();
               },
                  failure: function ( result, request ) {
                   var jsonData = Ext.util.JSON.decode(result.responseText);
                   var resultMessage = jsonData.errors.reason;
                   Ext.MessageBox.alert('Справочник',resultMessage);
                   store_hndb_desc.reload();
                   theForm.reset();
                   winHndbDesc.hide();
               }
       });
   }else{
    Ext.MessageBox.alert('Справочник','Проверьте правильность заполнения формы');
   }
   }; 
         
 /*окно для наполнения справочника*/     
 
 
winHndb = new  hndb.win({
      title:'Наполнение и редактирование справочника'
     ,width: 675
     ,height: 200
     ,items:[{xtype:'hndb_UIfrm'
           ,items: hndb_Fields  
         }]
 });         



 winHndb.on('frmCancel',function(){
    winHndb.close();
 });
 
 winHndb.on('frmSave',function(){
    fn_submitHandbookForm();
 });

function fn_submitHandbookForm(){
   
   
   var theForm = winHndb.items.itemAt(0).getForm();
   if( theForm.isValid() == true)
   {
       
       Ext.Ajax.request({
                  url: '../helper/handbooks/uid_handbook.php',
                  method: 'GET',
                  params: {
                           h_value           : winHndb.items.itemAt(0).items.itemAt(0).getValue()
                          ,h_id              : h_id
                          ,v_id              : v_id    
                          ,u_id              : gUserId
                          ,h_mode            :'UI'

                         },

                  success: function ( result, request ) {
                      var jsonData = Ext.util.JSON.decode(result.responseText);
                      var resultMessage = jsonData.errors.reason;
                      Ext.MessageBox.alert('Справочник',resultMessage);
                      store_handboks.load({params: { handbooks_id:h_id}})
                      theForm.reset();
                      winHndb.hide();
               },
                  failure: function ( result, request ) {
                   var jsonData = Ext.util.JSON.decode(result.responseText);
                   var resultMessage = jsonData.errors.reason;
                   Ext.MessageBox.alert('Справочник',resultMessage);
                   store_handboks.load({params: { handbooks_id:h_id}})
                   theForm.reset();
                   winHndb.hide();
               }
       });
   }else{
    Ext.MessageBox.alert('Справочник','Проверьте правильность заполнения формы');
   }
   }; 




   }

 });
Ext.reg('hndb_typical_layout', app.TypicalHandbooksLayaout);