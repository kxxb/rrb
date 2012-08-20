/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
Ext.ns("hndb");

hndb.values =  Ext.extend(
    Ext.Panel,{
        initComponent: function(){

           var config = {xtype:'panel'
                        //,title:'Пользователи'
                        
                        ,items:[
                              { xtype:'UAEgrid'
                               
                               ,store: store_handboks
                               ,height:500       
                               ,cm:new Ext.grid.ColumnModel({columns:ColsHandbooks})  
                              }
                             
                              
                              
                          
                       ]
                     }; // eo config object

            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            hndb.values.superclass.initComponent.apply(this, arguments);

       

        }
         
    

 });
Ext.reg('hndb_value', hndb.values);