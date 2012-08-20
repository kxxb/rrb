/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


Ext.ns("hndb");

hndb.win =  Ext.extend(
    Ext.Window,{
        initComponent: function(){

           var config = {
                   closable:true
                  ,closeAction: "hide"
                  ,plain:true
                  ,layout: 'fit'
                  
                }; // eo config object
            // Применяем config
            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            hndb.win.superclass.initComponent.apply(this, arguments);
            
            var frmReq = this.items.itemAt(0);
            var win = this;
            
            
             frmReq.on('frmCancel',function(){
                 win.hide();
                // frmRequestCancel.call();
             });
             
             frmReq.on('frmSave',function(){
                 frmRequestSave.call();
             });
             
              var frmRequestCancel = function(){
                    /*Запускаю своё событие, от кнопки с тулбара*/
                 this.fireEvent('frmCancel');
                }
              frmRequestCancel = frmRequestCancel.createDelegate(this);
           
             var frmRequestSave = function(){
                    /*Запускаю своё событие, от кнопки с тулбара*/
                 this.fireEvent('frmSave');
                }
              frmRequestSave = frmRequestSave.createDelegate(this);
           
   } // eo function initComponent
});
Ext.reg('hndb_win', hndb.win);


