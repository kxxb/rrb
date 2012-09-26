
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


 require_once '../php-activerecord/ActiveRecord.php'; 
 
 ActiveRecord\Config::initialize(function($cfg)
 {
     $cfg->set_model_directory('AR-models');
     $cfg->set_connections(array(
         'development' => 'mysql://root:cat#45@localhost/rrb;charset=utf8'));
     
 });
 
 


 
?>
