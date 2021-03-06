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
//                  '-'
//                ,{
//                 text: 'Новый '
//                 ,tooltip: 'Новый '
//                 ,iconCls:'silk-add'
//                 ,handler: function(){
//                     /*вызываю функцию(объект),
//                      *у которой область видимости
//                      *такая же что и у тулбара.
//                      *То есть тулбар и функция находяться на одном уровне видимости
//                      **/
//                   gridAddtBt.call()
//                 }
//                }
//                ,'-'
//                ,{
//                 text: 'Редактировать'
//                 ,tooltip: 'Редактировать'
//                 ,iconCls:'silk-application-view-list'
//                 ,handler: function(){
//                     /*вызываю функцию(объект),
//                      *у которой область видимости
//                      *такая же что и у тулбара.
//                      *То есть тулбар и функция находяться на одном уровне видимости
//                      **/
//                   gridEditBt.call()
//                 }
//               }
               '-'
               ,{
                 text: 'На сайт'
                 ,tooltip: 'На сайт'
                 ,iconCls:'silk-add'
                 ,handler: function(){
                     /*вызываю функцию(объект),
                      *у которой область видимости
                      *такая же что и у тулбара.
                      *То есть тулбар и функция находяться на одном уровне видимости
                      **/
                   gridSyncBt.call()
                 }
               }
               ,'-'
               ,{
                 text: 'Убрать с сайта'
                 ,tooltip: 'Убрать с сайта'
                 ,iconCls:'silk-delete'
                 ,handler: function(){
                     /*вызываю функцию(объект),
                      *у которой область видимости
                      *такая же что и у тулбара.
                      *То есть тулбар и функция находяться на одном уровне видимости
                      **/
                   gridSyncDelBt.call()
                 }
               }
               ,'-'
               ,'-'
               ,{
                 text: 'На сайт Москва'
                 ,tooltip: 'На сайт Москва'
                 ,iconCls:'silk-add'
                 ,handler: function(){
                     /*вызываю функцию(объект),
                      *у которой область видимости
                      *такая же что и у тулбара.
                      *То есть тулбар и функция находяться на одном уровне видимости
                      **/
                   gridSyncBtMoscow.call()
                   
                 }
               }
               ,'-'
               ,{
                 text: 'На сайт MO'
                 ,tooltip: 'На сайт MO'
                 ,iconCls:'silk-add'
                 ,handler: function(){
                     /*вызываю функцию(объект),
                      *у которой область видимости
                      *такая же что и у тулбара.
                      *То есть тулбар и функция находяться на одном уровне видимости
                      **/
                   gridSyncBtMO.call()
                   
                 }
               }
               ,'-'
               ,{
                 text: 'На сайт Россия'
                 ,tooltip: 'На сайт Россия'
                 ,iconCls:'silk-add'
                 ,handler: function(){
                     /*вызываю функцию(объект),
                      *у которой область видимости
                      *такая же что и у тулбара.
                      *То есть тулбар и функция находяться на одном уровне видимости
                      **/
                   gridSyncBtRussia.call()
                   
                 }
               }
               ,'-'
               ,{
                 text: 'На сайт СНГ'
                 ,tooltip: 'На сайт СНГ'
                 ,iconCls:'silk-add'
                 ,handler: function(){
                     /*вызываю функцию(объект),
                      *у которой область видимости
                      *такая же что и у тулбара.
                      *То есть тулбар и функция находяться на одном уровне видимости
                      **/
                   gridSyncBtSng.call()
                 }
               }
               ,'-'
               ,{
                 text: 'Убрать с сайта Москва'
                 ,tooltip: 'Убрать с сайта Москва'
                 ,iconCls:'silk-delete'
                 ,handler: function(){
                     /*вызываю функцию(объект),
                      *у которой область видимости
                      *такая же что и у тулбара.
                      *То есть тулбар и функция находяться на одном уровне видимости
                      **/
                   gridSyncDelBtMoscow.call()
                   
                 }
               },'-'
               ,{
                 text: 'Убрать с сайта МО'
                 ,tooltip: 'Убрать с сайта МО'
                 ,iconCls:'silk-delete'
                 ,handler: function(){
                     /*вызываю функцию(объект),
                      *у которой область видимости
                      *такая же что и у тулбара.
                      *То есть тулбар и функция находяться на одном уровне видимости
                      **/
                   gridSyncDelBtMO.call()
                 }
               },'-'
               ,{
                 text: 'Убрать с сайта Россия'
                 ,tooltip: 'Убрать с сайта Россия'
                 ,iconCls:'silk-delete'
                 ,handler: function(){
                     /*вызываю функцию(объект),
                      *у которой область видимости
                      *такая же что и у тулбара.
                      *То есть тулбар и функция находяться на одном уровне видимости
                      **/
                   gridSyncDelBtRussia.call()
                   
                 }
               },'-'
               ,{
                 text: 'Убрать с сайта СНГ'
                 ,tooltip: 'Убрать с сайта СНГ'
                 ,iconCls:'silk-delete'
                 ,handler: function(){
                     /*вызываю функцию(объект),
                      *у которой область видимости
                      *такая же что и у тулбара.
                      *То есть тулбар и функция находяться на одном уровне видимости
                      **/
                   gridSyncDelBtSng.call()
                 }
               }
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
    
      var gridSyncBt = function(){
            /*Запускаю своё событие, от кнопки с тулбара*/
         this.fireEvent('syncTb');
        }
    gridSyncBt = gridSyncBt.createDelegate(this);
    
    var gridSyncDelBt = function(){
            /*Запускаю своё событие, от кнопки с тулбара*/
         this.fireEvent('sync_del_Tb');
        }
    gridSyncDelBt = gridSyncDelBt.createDelegate(this);
    
    
    /*
     gridSyncBtMoscow.call()
    gridSyncBtMO.call()
    gridSyncBtRussia.call()
    gridSyncBtSng.call()
    
      
    
    gridSyncDelBtMoscow.call()
    gridSyncDelBtMO.call()
    gridSyncDelBtRussia.call()
    gridSyncDelBtSng.call()
     
     * 
     */
    
    var gridSyncBtMoscow = function(){
            /*Запускаю своё событие, от кнопки с тулбара*/
         this.fireEvent('SyncBtMoscow');
        }
    gridSyncBtMoscow = gridSyncBtMoscow.createDelegate(this);
    
    
    var gridSyncBtMO = function(){
            /*Запускаю своё событие, от кнопки с тулбара*/
         this.fireEvent('SyncBtMO');
        }
    gridSyncBtMO = gridSyncBtMO.createDelegate(this);
    
    var gridSyncBtRussia = function(){
            /*Запускаю своё событие, от кнопки с тулбара*/
         this.fireEvent('SyncBtRussia');
        }
    gridSyncBtRussia = gridSyncBtRussia.createDelegate(this);
    
    var gridSyncBtSng = function(){
            /*Запускаю своё событие, от кнопки с тулбара*/
         this.fireEvent('SyncBtSng');
        }
    gridSyncBtSng = gridSyncBtSng.createDelegate(this);
    
    
    
    /*
    gridSyncDelBtMoscow.call()
    gridSyncDelBtMO.call()
    gridSyncDelBtRussia.call()
    gridSyncDelBtSng.call()
     * 
     */
    var gridSyncDelBtMoscow = function(){
            /*Запускаю своё событие, от кнопки с тулбара*/
         this.fireEvent('SyncDelBtMoscow');
        }
    gridSyncDelBtMoscow = gridSyncDelBtMoscow.createDelegate(this);
    
    
    var gridSyncDelBtMO = function(){
            /*Запускаю своё событие, от кнопки с тулбара*/
         this.fireEvent('SyncDelBtMO');
        }
    gridSyncDelBtMO = gridSyncDelBtMO.createDelegate(this);
    
    var gridSyncDelBtRussia = function(){
            /*Запускаю своё событие, от кнопки с тулбара*/
         this.fireEvent('SyncDelBtRussia');
        }
    gridSyncDelBtRussia = gridSyncDelBtRussia.createDelegate(this);
    
    var gridSyncDelBtSng = function(){
            /*Запускаю своё событие, от кнопки с тулбара*/
         this.fireEvent('SyncDelBtSng');
        }
    gridSyncDelBtSng = gridSyncDelBtSng.createDelegate(this);
    
    
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
                    dataIndex: 'name', // this is where the mapped name is important!
                    width: 450,
                    sortable: true,
                    hidden: false
                  },{
                    header: 'Номер корпуса',
                    readOnly: true,
                    dataIndex: 'corpse_number', // this is where the mapped name is important!
                    width: 50,
                    sortable: true,
                    hidden: false
                  }
                  
                  ];
                  
                  
 var ColsFlats =  [
                    
                  {
                    header: 'Секция',
                    readOnly: true,
                    dataIndex: 'section', // this is where the mapped name is important!
                    width: 50,
                    sortable: true,
                    hidden: false
                  },{
                    header: 'Этаж',
                    readOnly: true,
                    dataIndex: 'floor_numb', // this is where the mapped name is important!
                    width: 50,
                    sortable: true,
                    hidden: false
                  }
                  ,{
                    header: 'количество комнат в квартире',
                    readOnly: true,
                    dataIndex: 'quant_rooms_in_flat', // this is where the mapped name is important!
                    width: 75,
                    sortable: true,
                    hidden: false
                  }
                  ,{
                    header: 'общая площадь квартиры',
                    readOnly: true,
                    dataIndex: 'total_flat_area', // this is where the mapped name is important!
                    width: 75,
                    sortable: true,
                    hidden: false
                  }
                
                   ,{
                    header: 'жилая площадь квартиры',
                    readOnly: true,
                    dataIndex: 'live_area', // this is where the mapped name is important!
                    width: 75,
                    sortable: true,
                    hidden: false
                  }
                   ,{
                    header: 'площадь кухни',
                    readOnly: true,
                    dataIndex: 'kitchen_area', // this is where the mapped name is important!
                    width: 75,
                    sortable: true,
                    hidden: false
                  }
                   ,{
                    header: 'площадь балкона',
                    readOnly: true,
                    dataIndex: 'balcony_area', // this is where the mapped name is important!
                    width: 75,
                    sortable: true,
                    hidden: false
                  }
                   ,{
                    header: 'общая стоимость квартиры при 100% оплате',
                    readOnly: true,
                    dataIndex: 'price_whoole_payment', // this is where the mapped name is important!
                    width: 75,
                    sortable: true,
                    hidden: false
                  }
                 
                           ,{
                    header: 'описание',
                    readOnly: true,
                    dataIndex: 'flat_descripton', // this is where the mapped name is important!
                    width: 75,
                    sortable: true,
                    hidden: false
                  }
                           ,{
                    header: 'наименование продавца',
                    readOnly: true,
                    dataIndex: 'saler_name', // this is where the mapped name is important!
                    width: 120,
                    sortable: true,
                    hidden: false
                  }
                              ,{
                    header: 'контакты продавцаа',
                    readOnly: true,
                    dataIndex: 'saler_contact', // this is where the mapped name is important!
                    width: 100,
                    sortable: true,
                    hidden: false
                  }
                  
                   
                  
                              ,{
                    header: 'ссылка на источник',
                    readOnly: true,
                    dataIndex: 'link_to_source_inf', // this is where the mapped name is important!
                    width: 75,
                    sortable: true,
                    hidden: false
                  }
                  
                              ,{
                    header: 'дата сбора информации',
                    readOnly: true,
                    dataIndex: 'collect_information_dt', // this is where the mapped name is important!
                    width: 75,
                    sortable: true,
                    hidden: false
                  }
                                     ,{
                    header: 'дата отчета по этапу',
                    readOnly: true,
                    dataIndex: 'report_on_phase_dt', // this is where the mapped name is important!
                    width: 75,
                    sortable: true,
                    hidden: false
                  }
                  ];
                  
                  			