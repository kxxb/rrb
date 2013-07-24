/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


Ext.ns("app");

var xg = Ext.grid;


/*Universal add edit grid*/
app.UAEGrid =  Ext.extend(xg.EditorGridPanel,{
    initComponent: function(){
        var config ={
                 selModel: new Ext.grid.RowSelectionModel({
                  singleSelect:false
                })
                ,loadMask:true
                ,split: true
                ,anchor:'100%'
                ,width :'100%'
                ,tbar:[
                  '-'
                ,{
                 text: 'Новый '
                 ,tooltip: 'Новый '
                 ,iconCls:'silk-add'
                 ,handler: function(){
                     /*вызываю функцию(объект),
                      *у которой область видимости
                      *такая же что и у тулбара.
                      *То есть тулбар и функция находяться на одном уровне видимости
                      **/
                   gridAddtBt.call()
                 }
                }
                ,'-'
                ,{
                 text: 'Редактировать'
                 ,tooltip: 'Редактировать'
                 ,iconCls:'silk-application-view-list'
                 ,handler: function(){
                     /*вызываю функцию(объект),
                      *у которой область видимости
                      *такая же что и у тулбара.
                      *То есть тулбар и функция находяться на одном уровне видимости
                      **/
                   gridEditBt.call()
                 }
               }
               ,'-'
                ]
                
            };

     // apply config
    Ext.apply(this, Ext.apply(this.initialConfig, config));
    
    
    var gridAddtBt = function(){
            /*Запускаю своё событие, от кнопки с тулбара*/
         this.fireEvent('addTb');
        }
      gridAddtBt = gridAddtBt.createDelegate(this);
    
    var gridEditBt = function(){
            /*Запускаю своё событие, от кнопки с тулбара*/
         this.fireEvent('editTb');
        }
      gridEditBt = gridEditBt.createDelegate(this);
    
    
    this.bbar = new Ext.PagingToolbar({
                    pageSize: 25
                    ,store: this.store
                    ,displayInfo: true
                    ,displayMsg: 'Показанно{0} - {1} из {2}'
                    ,emptyMsg: "Нет записей"

                 });
                 

    
    app.UAEGrid.superclass.initComponent.apply(this, arguments);

// load the store at the latest possible moment
        this.on({
            afterlayout:{
                scope:this,
                single:true,
                fn:function() {

                    this.store.load({

                        params:{
                             start:0
                            ,limit:25
                        }
                    });
               }

        }
    });
    
   } // eo function initComponent

});
Ext.reg('UAEgrid', app.UAEGrid);

//}}}



var ColsHandbooks =  [
                    {
                        header: 'ID ',
                        readOnly: true,
                        dataIndex: 'id', // this is where the mapped name is important!
                        width: 75,
                        sortable: true,
                        hidden: false
                   }
                  ,{
                    header: 'Значение',
                    readOnly: true,
                    dataIndex: 'name', // this is where the mapped name is important!
                    width: 250,
                    sortable: true,
                    hidden: false
                  }
                  ,{
                    header: 'Маска',
                    readOnly: true,
                    dataIndex: 'hndb_mask', // this is where the mapped name is important!
                    width: 850,
                    sortable: true,
                    hidden: false
                  }
                  ];

var ColsHndbDesc =  [
                    {
                        header: 'ID ',
                        readOnly: true,
                        dataIndex: 'id', // this is where the mapped name is important!
                        width: 75,
                        sortable: true,
                        hidden: false
                   }
                  ,{
                    header: 'Название',
                    readOnly: true,
                    dataIndex: 'name', // this is where the mapped name is important!
                    width: 850,
                    sortable: true,
                    hidden: false
                  }
                   
                  
                  ];





var store_handboks = new Ext.data.JsonStore({
        root: 'results',
        totalProperty: 'totalCount',
        baseParams: {handbooks_id:0
                    
        },
        
        fields: [
                {name: 'id', mapping:'id', type: 'int'},
                {name: 'name', mapping:'name', type: 'string'},
                {name: 'hndb_mask', mapping:'hndb_mask', type: 'string'}

        ],  

        // load using script tags for cross domain, if the data in on the same domain as
        // this page, an HttpProxy would be better
        proxy: new Ext.data.ScriptTagProxy({
            url: '../helper/handbooks/select_handbooks.php'
        })
    });
    
    

var store_hndb_desc = new Ext.data.JsonStore({
        root: 'results',
        totalProperty: 'totalCount',
        
        fields: [
                {name: 'id', mapping:'id', type: 'int'},
                {name: 'name', mapping:'name', type: 'string'},
                {name: 'handbook_description', mapping:'handbook_description', type: 'string'}
                

        ],  

        // load using script tags for cross domain, if the data in on the same domain as
        // this page, an HttpProxy would be better
        proxy: new Ext.data.ScriptTagProxy({
            url: '../helper/handbooks/select_handbdesc.php'
        })
    });

