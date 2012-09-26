<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$o_meesage ='';

try{
require_once 'ar-conn.php';


$P_APARTMENT_ID =  $_GET["a_id"];

 try{
     $rrbgate_joom_object_d = rrbgate_joom::find($P_APARTMENT_ID);
     $rrbgate_joom_object_d->delete();
    } catch (Exception $e) {
       $o_meesage = 'Не смог снять данные!';
    }


$o_meesage = 'Данные сняты с сайта.';

 } catch (Exception $e) {
       
        $o_meesage = 'Выброшено глобальное исключение: '.  $e->getMessage(). "\n";
    }

    
    echo "{success:true,errors:{reason:'".$o_meesage."'}}";
    ?>

 