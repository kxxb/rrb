/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


var ipoteka_store = new Ext.data.JsonStore({
root: 'results',
fields: [
 //{name: 'id', mapping:'id', type: 'string'}
 {name: 'id', mapping:'id', type: 'string'}
,{name: 'name', mapping:'name', type: 'string'}

],
proxy: new Ext.data.ScriptTagProxy({
url: '../helper/handbooks/select_handbooks.php'
})
});


var bearing_material_tech_store = new Ext.data.JsonStore({
root: 'results',
fields: [
 //{name: 'id', mapping:'id', type: 'string'}
 {name: 'id', mapping:'id', type: 'string'}
,{name: 'name', mapping:'name', type: 'string'}

],
proxy: new Ext.data.ScriptTagProxy({
url: '../helper/handbooks/select_handbooks.php'
})
});


var contract_type_store = new Ext.data.JsonStore({
root: 'results',
fields: [
 //{name: 'id', mapping:'id', type: 'string'}
 {name: 'id', mapping:'id', type: 'string'}
,{name: 'name', mapping:'name', type: 'string'}

],
proxy: new Ext.data.ScriptTagProxy({
url: '../helper/handbooks/select_handbooks.php'
})
});

//var ipotek_strore = Ext.create( hndb_store);
//var wall_strore = Ext.create(hndb_store);
hndb_universal_store =  Ext.extend(
    Ext.data.JsonStore,{
        initComponent: function(){
               var config = {
                  root: 'results',
                        fields: [
                         //{name: 'id', mapping:'id', type: 'string'}
                         {name: 'id', mapping:'id', type: 'string'}
                        ,{name: 'name', mapping:'name', type: 'string'}

                        ]
                       
                    
                    }; // eo config object
            
            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            hndb_universal_store.superclass.initComponent.apply(this, arguments);
    }
 });
 
// var ipoteka_store = new hndb_universal_store({
//           proxy: new Ext.data.ScriptTagProxy({
//                        url: '../helper/handbooks/select_handbooks.php'
//                        })
//});
//
// var wall_store = new hndb_universal_store({
//           proxy: new Ext.data.ScriptTagProxy({
//                        url: '../helper/handbooks/select_handbooks.php'
//                        })
//});