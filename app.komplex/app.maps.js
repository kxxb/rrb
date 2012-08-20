/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 
Ext.ns("app");
 
 map = new Ext.Panel({
        autoScroll: true,
        id: "YMapsID",
        height: 150,
        //width :200,
        listeners: {afterrender: 
                function(){
        ymaps.ready(function () { 
          //var map = new ymaps.Map(document.getElementById("YMapsID"), {
          var map = new ymaps.Map("YMapsID", {
          center: [55.76, 37.64],
            zoom: 10,
            behaviors: ["default", "scrollZoom"]
            }); 
           });
          }
       }
});

app.MapPanel =  Ext.extend(
    Ext.Panel,{
        initComponent: function(){
               var config = {
                    autoScroll: true,
                    xtype:'panel',
                    id: "YMapsID",
                    listeners: {afterrender: 
                            function(){
                       ymaps.ready(function () { 
                       var  map = new ymaps.Map(document.getElementById("YMapsID"), {
                      //var map = new ymaps.Map("YMapsID", {
                      center: [55.76, 37.64],
                        zoom: 10,
                        behaviors: ["default", "scrollZoom"]
                        }); 
                       });
                      }
                   }
                      }; // eo config object
            
            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            app.MapPanel.superclass.initComponent.apply(this, arguments);
        

        
  
      

  }
 });
 
 Ext.reg('map_panel', app.MapPanel);
