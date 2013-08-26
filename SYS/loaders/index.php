
<?

require_once '../sys_constants.php';
require_once '../user_manage.php';


session_start();
$login_id = $_SESSION['uid'];
$user_ip = $_SERVER['REMOTE_ADDR'];
$user_id =  login_check($login_id,  $user_ip);
if ($user_id != null) {

    require_once('../menu_creater.php');
    require_once('../hello_user.php');
    ?>
    <html>
        <head>
            <title>
                Loaders
            </title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

            <!-- ** CSS ** -->
            <!-- base library -->
       </head>  
        <body>   
  <div>TO load data use :</div><br>
        
        <a href="flats_loader_form.php">Квартиры</a><br>
        <a href="obj_loader_form.php">Объекты</a><br>
        <a href="hndb_loader_form.php">Справочники</a><br>
        </body>
    </html>

<?
} else {
    ?>
    <script>
        window.location = '../../index.php';
     
    </script>     


<?
}?>