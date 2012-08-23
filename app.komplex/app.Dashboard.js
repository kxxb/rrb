/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
Ext.ns("app");



app.DashPanel =  Ext.extend(
    Ext.Panel,{
        initComponent: function(){
               var config = {
                     autoScroll: true
                    ,xtype:'panel'
                    
                    }; // eo config object
            
            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            app.DashPanel.superclass.initComponent.apply(this, arguments);
    }
 });
 
 Ext.reg('dash_panel', app.DashPanel);

app.frmDash =  Ext.extend(
    Ext.FormPanel,{
        initComponent: function(){

           var config = {
                    frame: true,
                    bodyStyle: 'padding:5px'
                     //,width: 850
                    ,anchor:'100%'
//                    ,buttons: [{
//                        text: 'Сохранить',
//                        handler: function(){
//                           frmSave.call();
//                            
//                         }
//                     }
//                   , {
//                        text: 'Отмена',
//                        handler: function(){
//                           frmCancel.call();
////                            NewRequestWin.items.itemAt(0).getForm().reset();
////                            NewRequestWin.hide();
////                            StoreClRequests.reload();
//                        }
//                    }]
                }; // eo config object
            // Применяем config
            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            app.frmDash.superclass.initComponent.apply(this, arguments);
            
            
              var frmIpoteka = function(p_id){
                    /*Запускаю своё событие, от кнопки с тулбара*/
                     Ext.MessageBox.alert('Ipoteka','id '+p_id+' name ');
                 //this.fireEvent('frmIpoteka',p_id);
                }
              //frmIpoteka = frmIpoteka.createDelegate(this);
           
             var frmSave = function(){
                    /*Запускаю своё событие, от кнопки с тулбара*/
                 this.fireEvent('frmSave');
                }
              frmSave = frmSave.createDelegate(this);
           
   } // eo function initComponent
});
Ext.reg('frm_Dash', app.frmDash);


//var wall_material_store =  hndb_store.load({params: { handbooks_id:3}});


var dashFields =   [ {
                                //the width of this field in the HBox layout is set directly
                                //the other 2 items are given flex: 1, so will share the rest of the space
                                xtype: 'combo',
                                //width:450,
                                store: ipoteka_store,
                                displayField: 'name',
                                valueField: 'id',
                                typeAhead: true,
                                editable:true,
                                mode:'local',
                                forceSelection: true,
                                triggerAction: 'all',
                                fieldLabel: 'ВОЗМОЖНА ИПОТЕКА',
                                selectOnFocus: true
//                                ,listeners: {
//                                  select: function(f,r,i){
//                                      //frmIpoteka.call();
//                                    //Ext.MessageBox.alert('Ipoteka','id '+r.data.id+' name '+r.data.name);
//                                    //reqText.setValue(r.data.type_desc);
//                                  }
//                                }
                            }
                            ,{
                                //the width of this field in the HBox layout is set directly
                                //the other 2 items are given flex: 1, so will share the rest of the space
                                xtype: 'combo',
                               
                                store: bearing_material_tech_store,
                                displayField: 'name',
                                valueField: 'id',
                                typeAhead: true,
                                editable:true,
                                mode:'local',
                                forceSelection: true,
                                triggerAction: 'all',
                                fieldLabel: 'ТЕХНОЛОГИЯ И МАТЕРИАЛ НЕСУЩИХ КОНСТРУКЦИЙ',
                                selectOnFocus: true
//                                ,listeners: {
//                                  select: function(f,r,i){
//                                   // Ext.MessageBox.alert('Walll','id '+r.data.id+' name '+r.data.name);
//                                    //reqText.setValue(r.data.type_desc);
//                                  }
//                                }
                            }
                            ,{
                                //the width of this field in the HBox layout is set directly
                                //the other 2 items are given flex: 1, so will share the rest of the space
                                xtype: 'combo',
                                store: contract_type_store,
                                displayField: 'name',
                                valueField: 'id',
                                typeAhead: true,
                                editable:true,
                                mode:'local',
                                forceSelection: true,
                                triggerAction: 'all',
                                fieldLabel: 'ТИП ЗАКЛЮЧАЕМОГО ДОГОВОРА С ПОКУПАТЕЛЕМ',
                                selectOnFocus: true
//                                ,listeners: {
//                                  select: function(f,r,i){
//                                  //  Ext.MessageBox.alert('Walll','id '+r.data.id+' name '+r.data.name);
//                                    //reqText.setValue(r.data.type_desc);
//                                  }
//                                }
                            }
                            
                        ]