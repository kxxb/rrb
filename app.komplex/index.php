
<?

require_once '../SYS/sys_constants.php';
require_once '../SYS/user_manage.php';


session_start();
$login_id = $_SESSION['uid'];
$user_ip = $_SERVER['REMOTE_ADDR'];
$user_id =  login_check($login_id,  $user_ip);


if ($user_id != null) {

    require_once('../SYS/menu_creater.php');
    require_once('../SYS/hello_user.php');
    ?>
    <html>
        <head>
            <title>
                <? echo $C_PROJECT_NAME; ?> - komplex    
            </title>
            
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

            <!-- ** CSS ** -->
            <!-- base library -->

            <link rel="stylesheet" type="text/css" href="../js/ext-3.2.1/resources/css/ext-all.css" />


            <!-- ** Javascript ** -->
            <!-- base library -->

            

            <script type="text/javascript" src="../js/ext-3.2.1/adapter/ext/ext-base.js"></script>
            <script type="text/javascript" src="../js/ext-3.2.1/ext-all-debug-w-comments.js"></script>
            <script type="text/javascript" src="../js/ext-3.2.1/ux/RowExpander.js"></script>

      
       
    
            <script type="text/javascript" src="app.root.js"></script>
            <script type="text/javascript" src="hndb_stores.js"></script>
            <script type="text/javascript" src="app.Dashboard.js"></script>
            
            <script type="text/javascript" src="housing_grid.js"></script>
           
            <script language="javascript" >
                gUserId = <?echo $user_id?>;
                
                Ext.ns("app");    // extablish a namespace for all my component parts
                Ext.BLANK_IMAGE_URL = '../js/ext-3.2.1/resources/images/default/s.gif';
                
                Ext.onReady(function(){
                    Ext.state.Manager.setProvider(new Ext.state.CookieProvider());
                    Ext.QuickTips.init();


          <? echo menu_builder(); ?>
                     var tb = new Ext.Toolbar();
                     tb.add({
                         text:'Задачи',
                         iconCls: 'bmenu',  // <-- icon
                         menu: menu  // assign menu by instance
                     });




                     var viewport = new Ext.Viewport({
                         layout: 'border',
                         renderTo: Ext.getBody(),
                         items: [
                             {
                                 region: 'north',
                                 xtype: 'panel',
                                 height:28,
                                 tbar:tb
                             },// eof    region: 'north',
                             {region: 'center'
                                 /*здесь будут все табы*/
                                 ,xtype :'komplex_root'
                                 
                                 
                                 
                        


                             } // eof region: 'center'
                             ,{region: 'south',
                                 /*пустое пространство*/
                                 height:28,
                                 items: [{
                                         html:' <? echo $C_COPYRIGHT_TEXT?>'
                                     }
                                 ]
                             } // eof region: 'south'
                         ] //eof viewport items
                     });//eof viewport
                 });
            
            </script>

   

        </head>   
        <body>   

        </body>
    </html>



<?
} else {
    ?>
    <script>
        window.location = '../index.php';
     
    </script>     


<?
}?>