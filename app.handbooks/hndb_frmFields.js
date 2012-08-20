/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


 var hndb_desFields =   [ {
                               xtype:'textfield',      // textfield
                               fieldLabel:'Название справочника',
                               name:'txtName'
                               ,maxLength: 250
                               ,allowBlank:false
                               ,blankText:'Обязательно для заполнения'
                               ,maxLengthText:'Максимум {0} символов' 
                            }
                            ,{
                                xtype:'htmleditor',
                                height:100,
                                fieldLabel: 'Описание',
                                anchor:'98%'
                                ,maxLength: 1400
                                ,maxLengthText:'Максимум {0} символов' 
                                
                               }
                        ]
                        
                        

 var hndb_Fields =   [ {
                                xtype:'htmleditor',
                                height:100,
                                fieldLabel: 'Значение',
                                anchor:'98%'
                                ,maxLength: 1400
                                ,maxLengthText:'Максимум {0} символов' 
                                
                               }
                        ]                        