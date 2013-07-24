<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

#require_once '../ar-conn.php';
require_once 'ar-test.php';

print_r(rrb_handbooks::first()->attributes());
echo "<hr>";
print_r(rrb_users::first()->attributes());
echo "<hr>";
print_r(rrb_users::find('all',array('conditions' => array('id in (?)','126,130'))));


?>
