/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


app.usersTab =  Ext.extend(
    Ext.Panel,{
        initComponent: function(){

           var config = {xtype:'panel'
                        //,title:'Пользователи'
                        ,items:[
                              
                              { xtype:'usersgridall'
                               ,region:'north'
                               ,store: this.store
                               ,cm:this.cm
                               ,height:550
                               
                              }
                             
                              
                              
                          
                       ]
                     }; // eo config object

            
            Ext.apply(this, Ext.apply(this.initialConfig, config));
            app.usersTab.superclass.initComponent.apply(this, arguments);

        var lGrid = this.items.itemAt(0);
        
        
        var v_cid = 0;
        lGrid.on('addTb', function(){
         Ext.Msg.alert('add ', 'add Users');   
        });
        lGrid.on('editTb', function(){
            if (v_cid == 0) {
               Ext.Msg.alert('edit', 'choose user');     
            } else {
                Ext.Msg.alert('edit', 'client '+ v_cid);     
            }
         
        });

        lGrid.getSelectionModel().on('rowselect', function(sm, rowIdx, r) {
                                    v_cid = r.data.cid;
        
    			});

        }

 });
Ext.reg('usersTab', app.usersTab);
// }}}