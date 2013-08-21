/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


var store_handbooks = new Ext.data.JsonStore({
        root: 'results',
        totalProperty: 'totalCount',
        
        fields: [
                {name: 'id', mapping:'id', type: 'int'},
                {name: 'name', mapping:'name', type: 'string'}
        ],  
        proxy: new Ext.data.ScriptTagProxy({
            url: '../helper/handbooks/select_handbooks.php'
        }) 
    });


win_handbooks =  Ext.extend(
    Ext.data.JsonStore,{
        initComponent: function(){

           var config = {
                        root: 'results',
                        totalProperty: 'totalCount'
                        ,fields: [
                                {name: 'id', mapping:'id', type: 'int'},
                                {name: 'name', mapping:'name', type: 'string'}
                        ]
                  
                }; // eo config object
            // Применяем config
            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            win_handbooks.superclass.initComponent.apply(this, arguments);
  } // eo function initComponent
});

