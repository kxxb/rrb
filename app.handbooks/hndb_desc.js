/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
Ext.ns("hndb");

hndb.desc =  Ext.extend(
    Ext.Panel,{
        initComponent: function(){

           var config = {xtype:'panel'
                        //,title:'Пользователи'
                        
                        ,items:[
                              { xtype:'UAEgrid'
                               ,region:'north'
                               ,store: store_hndb_desc
                               ,cm:new Ext.grid.ColumnModel({columns:ColsHndbDesc})  
                               ,height:350
                              }
                             ,{xtype:'panel'
                              ,region:'center'
                              ,border:false
                              ,tpl:new Ext.XTemplate('{handbook_description}')
                             }
                              
                              
                          
                       ]
                     }; // eo config object

            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            hndb.desc.superclass.initComponent.apply(this, arguments);






        }
         
         
    

 });
Ext.reg('hndb_desc', hndb.desc);