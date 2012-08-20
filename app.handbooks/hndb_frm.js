/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


Ext.ns("hndb");

hndb.frmUI =  Ext.extend(
    Ext.FormPanel,{
        initComponent: function(){

           var config = {
                    frame: true,
                    bodyStyle: 'padding:5px'
                    //width: 850,
                    ,anchor:'95%'
                    ,buttons: [{
                        text: 'Сохранить',
                        handler: function(){
                           frmSave.call();
                            
                         }
                     }
                   , {
                        text: 'Отмена',
                        handler: function(){
                           frmCancel.call();
//                            NewRequestWin.items.itemAt(0).getForm().reset();
//                            NewRequestWin.hide();
//                            StoreClRequests.reload();
                        }
                    }]
                }; // eo config object
            // Применяем config
            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            hndb.frmUI.superclass.initComponent.apply(this, arguments);
            
            
              var frmCancel = function(){
                    /*Запускаю своё событие, от кнопки с тулбара*/
                 this.fireEvent('frmCancel');
                }
              frmCancel = frmCancel.createDelegate(this);
           
             var frmSave = function(){
                    /*Запускаю своё событие, от кнопки с тулбара*/
                 this.fireEvent('frmSave');
                }
              frmSave = frmSave.createDelegate(this);
           
   } // eo function initComponent
});
Ext.reg('hndb_UIfrm', hndb.frmUI);