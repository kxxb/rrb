/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


Ext.ns("app");

var xg = Ext.grid;
/*Universal add edit grid*/
app.HousingGrid =  Ext.extend(xg.EditorGridPanel,{
    initComponent: function(){
        var config ={
                 selModel: new Ext.grid.RowSelectionModel({
                  singleSelect:false
                })
                ,loadMask:true
                ,split: true
                ,anchor:'100%'
                
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
                 

    
    app.HousingGrid.superclass.initComponent.apply(this, arguments);

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
Ext.reg('HousingGrid', app.HousingGrid);

//}}}



var ColsHousing =  [
                    
                  {
                    header: 'Название Корпуса',
                    readOnly: true,
                    dataIndex: 'housing_name', // this is where the mapped name is important!
                    width: 150,
                    sortable: true,
                    hidden: false
                  },{
                    header: 'Номер корпуса',
                    readOnly: true,
                    dataIndex: 'corpse_number', // this is where the mapped name is important!
                    width: 150,
                    sortable: true,
                    hidden: false
                  }
                  
                  ];