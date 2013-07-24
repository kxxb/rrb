<?php	                                       			

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../dbconn.php');

$table_name ="rrb_housing";

/*js creator*/
 $js_part_1="";
 $js_part_2="";
 $js_part_3="";
 $js_part_4="";
/*end js creator*/


$query = "desc $table_name;";
        
        
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
          
          
          
          if ($i==1){
           $js_part_1=$js_part_1."{name: '".$field_name ."', mapping:'".$field_name ."', type: 'string'}<br>" ;
          }else {
           $js_part_1=$js_part_1.",{name: '".$field_name ."', mapping:'".$field_name ."', type: 'string'}<br>" ;
          }
        
          
        }

        echo "var ".$table_name."Store = new Ext.data.JsonStore({<br>";
        echo "root: 'results',<br>";
        echo "fields: [<br>";
        
        echo $js_part_1."";
        echo "],<br>";
        echo "proxy: new Ext.data.ScriptTagProxy({<br>";
        echo "    url: '../helper/app.housing/housing_select.php'<br>";
        echo "})<br>";
        echo "});<br>";
        echo $table_name."Store.load();<br>";
        
        
        mysqli_stmt_close($stmt);
    /*   
        echo $_GET["callback"].'({"totalCount":"'.$total_count.'",'.
                '"results":'.json_encode($users_arr).
                '})';  
  */
        
  


?>
