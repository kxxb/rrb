/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/*Справочники */
 var HandbooksDescStore = new Ext.data.JsonStore({
        root: 'results',
        fields: [
                {name: 'id', mapping:'id', type: 'string'},
                {name: 'name', mapping:'name', type: 'string'},
                {name: 'handbook_description', mapping:'handbook_description', type: 'string'}
        ],
        proxy: new Ext.data.ScriptTagProxy({
            url: '../helper/handbooks/select_handbdesc.php'
        })
    });
HandbooksDesc.load();



/*Справочники состав*/
 var SHandbooksStore = new Ext.data.JsonStore({
        root: 'results',
        fields: [
                {name: 'id', mapping:'id', type: 'string'},
                {name: 'name', mapping:'name', type: 'string'}
        ],
        proxy: new Ext.data.ScriptTagProxy({
            url: '../helper/handbooks/select_handbooks.php?handbooks_id='
        })
    });
SHandbooksStore.load();
