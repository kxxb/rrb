<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('dbconn.php');

$table_name ="rrb_ipoteka_banks";

/*sql creator*/
 $php_part_1="";
 $php_part_2="";
 $php_part_3="";
 $php_part_4="";
 $php_part_5="";
 $php_part_6="";
 $php_part_7="";
/*end sql creator*/


$query = "desc rrb.$table_name;";
        
        
        $connection = conn();
        $connection->query("SET NAMES 'utf8'");
        $stmt = $connection->prepare($query);
        

        /* execute query */
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, 
                $field_name, $field_type, 
                $field_nullable, $field_key, 
                $field_default, $field_extra);
       
        
         
        //$users_arr = array();
        while (mysqli_stmt_fetch($stmt)) {
          $i++;
          
          $php_part_1=$php_part_1."\$v_".$field_name ."=&nbsp \$_GET[\"p_".$field_name."\"];<br>" ;
          
          $php_part_2 = $php_part_2."?,";
        
          if ($field_type=="int(11)"){
              $php_part_3 = $php_part_3."i";
          }else {
              $php_part_3 = $php_part_3."s";
          }
          
          $php_part_4=$php_part_4."\$v_".$field_name.",<br>";
          
        }

        echo "require_once('../../SYS/dbconn.php');<br>";
        echo $php_part_1."";
        //echo "\$v_last_user_id=\$_GET[\"u_id\"];<br>";
        //echo "\$v_date_rec=date(\"Y-m-d H:i:s\");<br>";
        echo "\$v_mode=\$_GET[\"p_mode\"];<br>";
        
        echo "\$query_ui = \"CALL rrb.uid_$table_name($php_part_2@output);\";<br>";
        echo "\$connection = conn();<br>";
        echo "\$connection->query(\"SET NAMES 'utf8'\");<br>";
        echo "\$stmt = \$connection->prepare(\$query_ui);<br>";
        echo "mysqli_stmt_bind_param(\$stmt, \"".$php_part_3."s\",<br>";
        echo "$php_part_4\$v_last_user_id,<br>\$v_date_rec,<br>\$v_mode<br>);<br>";
        
        
        
        echo "if (\$results_insupdhndb=mysqli_stmt_execute(\$stmt) ) {<br>";
        echo "  mysqli_stmt_close(\$stmt); <br>";
        echo "} else  {<br>";
        echo "echo \"{success:false,errors:{reason:'Ошибка выполнения процедуры MySql!'}}\";<br>";
        echo "}<br>";
        echo "\$stmt = \$connection->prepare('SELECT @output ');<br>";
        echo "if (\$results_insupdhndb=mysqli_stmt_execute(\$stmt) ) {<br>";
        echo "    mysqli_stmt_store_result(\$stmt);<br>";
        echo "    mysqli_stmt_bind_result(\$stmt, \$output);<br>";
        echo " while (mysqli_stmt_fetch(\$stmt)) {<br>";
        echo "     }<br>";
        echo "    if (\$output=='good_insert') {<br>";
        echo "        echo \"{success:true,errors:{reason:'Запись сохранена!'}}\";<br>";
        echo "    }  <br>";
        echo "     if (\$output=='good_update') {<br>";
        echo "        echo \"{success:true,errors:{reason:'Запись изменена!'}}\";<br>";
        echo "    }<br>";
        echo "     if (\$output=='good_delete') {<br>";
        echo "        echo \"{success:true,errors:{reason:'Запись удалена!'}}\";<br>";
        echo "    }<br>";
        echo "    mysqli_stmt_close(\$stmt); <br>";
        echo "} else {<br>";
        echo "    echo \"{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}\";<br>";
        echo "}<br>";
        
        
        
        mysqli_stmt_close($stmt);
    /*   
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  */
        
  


?>
