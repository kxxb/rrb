<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('dbconn.php');

$table_name ="rrb_apartment_comlex";

/*sql creator*/
 $php_part_1="";
 $php_part_2="";
 $php_part_3="";
 $php_part_4="";
 $php_part_5="";
 $php_part_6="";
 $php_part_7="";
 $php_part_call = "";
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
          
          $php_part_1=$php_part_1."\$p_".$field_name .",<br>" ;
          
          $php_part_2 = $php_part_2."?,";
        
          if ($field_type=="int(11)"){
              $php_part_3 = $php_part_3."i";
          }else {
              $php_part_3 = $php_part_3."s";
          }
          
          $php_part_4=$php_part_4."\$p_".$field_name.",<br>";
          
          $php_part_call=$php_part_call."\$_GET[\"p_".$field_name."\"],<br>" ;
        }

        
        
        //echo "\$v_last_user_id=\$_GET[\"u_id\"];<br>";
        //echo "\$v_date_rec=date(\"Y-m-d H:i:s\");<br>";
        echo "function uid_$table_name ( <br>\$p_connect,<br>";
        echo $php_part_1."";
        echo "\$p_last_user_id,<br>\$p_date_rec,<br>\$p_mode) {<br>\$v_result = \"\";<br>";
        echo "\$query_ui = \"CALL rrb.uid_$table_name($php_part_2@output);\";<br>";
        
        echo "\$p_connect->query(\"SET NAMES 'utf8'\");<br>";
        echo "\$stmt = \$p_connect->prepare(\$query_ui);<br>";
        echo "mysqli_stmt_bind_param(\$stmt, \"".$php_part_3."s\",<br>";
        echo "$php_part_4\$p_last_user_id,<br>\$p_date_rec,<br>\$p_mode<br>);<br>";
        
        
        
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
        echo "        \$v_result = \"{success:true,errors:{reason:'Запись сохранена!'}}\";<br>";
        echo "    }  <br>";
        echo "     if (\$output=='good_update') {<br>";
        echo "        \$v_result = \"{success:true,errors:{reason:'Запись изменена!'}}\";<br>";
        echo "    }<br>";
        echo "     if (\$output=='good_delete') {<br>";
        echo "        \$v_result = \"{success:true,errors:{reason:'Запись удалена!'}}\";<br>";
        echo "    }<br>";
        echo "    mysqli_stmt_close(\$stmt); <br>";
        echo "} else {<br>";
        echo "    \$v_result = \"{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}\";<br>";
        echo "}<br>";
        echo "return \$v_result;<br>";
        echo "}<br>";
        echo "<hr>";
        echo  "\$res_$table_name = uid_$table_name (conn(),<br>";
        echo  $php_part_call;
        echo  ");";
        
        
        
        mysqli_stmt_close($stmt);
    /*   
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  */
        
  


?>
