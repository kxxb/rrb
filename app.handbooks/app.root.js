/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


Ext.ns("app");

//Ext.extend(UniversalReqGrid, Ext.grid.EditorGridPanel);
//var store_it = new app.store_j1({baseParams: {mode: 'AllRequests'}});

app.root_tab =  Ext.extend(
    Ext.TabPanel,{
        initComponent: function(){

           var config = {
                plain:true
                ,activeTab: 0

                ,defaults:{
                    autoScroll: true
                }
                ,items:[
                    {xtype:'hndb_typical_layout'
                    ,title :'Типовые справочники'
                    
                    //,cm:new Ext.grid.ColumnModel({columns:UsersColumns})
                    //,store:store_users
                    }
                    ,
                    {xtype:'panel'
                     ,title :'КЛАДР'
                     ,html:'кладр'
                     //,cm:new Ext.grid.ColumnModel({columns:depColumns})
                     //,store:store_deps
                    }
                ]
            }; // eo config object

            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            app.root_tab.superclass.initComponent.apply(this, arguments);

        }

 });
Ext.reg('root_tab', app.root_tab);
// }}}