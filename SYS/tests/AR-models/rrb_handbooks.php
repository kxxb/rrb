
<?php


class rrb_handbooks extends ActiveRecord\Model { }

class rrb_users extends ActiveRecord\Model { 
    
    static $table_name = 'rrb_user_login';
}

//// initialize ActiveRecord
//// change the connection settings to whatever is appropriate for your mysql server 
//ActiveRecord\Config::initialize(function($cfg)
//{
//    $cfg->set_model_directory('.');
//    $cfg->set_connections(array('development' => 'mysql://root:cat#45@127.0.0.1/rrb;charset=utf8'));
//});





//require_once 'ar-test.php';
//
// class rrb_handbooks extends ActiveRecord\Model
// {
//      static $table_name = 'rrb_handbooks';
// }
//
// 
// $user = rrb_handbooks::find_by_name('ВОЗМОЖНА_ИПОТЕКА');
// echo  $user;
?>
