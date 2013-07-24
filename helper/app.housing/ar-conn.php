<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../../SYS/php-activerecord/ActiveRecord.php'; 

 $connections = array(
   //'development' => 'mysql://root:cat#45@rrb.bestmakers.ru/rrb;charset=utf8',
   //'joomla'      => 'mysql://root:cat#45@rrb.bestmakers.ru/rrbase_joom;charset=utf8',
    'development' => 'mysql://root:@localhost/rrb;charset=utf8',
    'joomla'      => 'mysql://root@localhost/rrbase_zoo;charset=utf8',
    'pgsql' => 'pgsql://username:password@localhost/development',
    'sqlite' => 'sqlite://my_database.db',
    'oci' => 'oci://username:passsword@localhost/xe'
  );

 
 
  ActiveRecord\Config::initialize(function($cfg) use ($connections)
 {
     $cfg->set_model_directory('armodels');
     $cfg->set_connections($connections);
     $cfg->set_default_connection("development");
//     $cfg->set_connections(array(
//         'development' => 'mysql://root:cat#45@localhost/rrb;charset=utf8'));
     
 });
?>
