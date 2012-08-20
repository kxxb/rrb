<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('../dbconn.php');

$v_string ="ДЕТСКИЕ ДОШКОЛЬНЫЕ УЧРЕЖДЕНИЯ, ОБЩЕОБРАЗОВАТЕЛЬНЫЕ ШКОЛЫ, ДЕТСКИЕ ПЛОЩАДКИ";


function get_appartment_id($p_connect, $p_complex_name){
     $output =0;
    $query_ui = "CALL get_apart_id(?,@output);";
    //$p_connect->query("SET NAMES 'cp1251'");
    $p_connect->query("SET NAMES 'utf8'");
    $stmt = $p_connect->prepare($query_ui);
    mysqli_stmt_bind_param($stmt, "s",  $p_complex_name);
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
    } else {
        echo "{success:false,errors:{reason:'Ошибка выполнения процедуры MySql!'}}";
    }
    $stmt = $p_connect->prepare('SELECT @output ');
    if ($results_insupdhndb = mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        mysqli_stmt_bind_result($stmt, $output);
        while (mysqli_stmt_fetch($stmt)) {
            
        }
        
        mysqli_stmt_close($stmt);
    } else {
        $v_result = "{success:false,errors:{reason:'Ошибка выполнения результирующего запроса MySql!'}}";
    }
    return $output;
 }


echo "apartment_id =  ".get_appartment_id(conn(), "Лукин1о");

//$tmp = explode(",", $v_string); 
//$p_conn = conn();
//for ($k = 0, $j = count($tmp); $k < $j; $k++) {
//    echo "<br>".$tmp[$k]."%";
//    echo "key ". get_hndb_key_($p_conn, 16, trim($tmp[$k]));
//    
//}



//
//    
//    $v_len = strlen(strstr($v_string, ",",true));
//    echo "len $v_len";
//    echo "<br>1 -".strstr($v_string, ",",true);
//    echo "<br>2 -".strstr(substr($v_string, $v_len+1, strlen($v_string)),",",true);
//    $v_len = $v_len + strlen(strstr(substr($v_string, $v_len+1, strlen($v_string)),",",true));
//    echo "<br>3 -".strstr(substr($v_string, $v_len+1, strlen($v_string)),",",true);
//    $v_result ="";
//    $v = 0;
//for ($k = 0, $j = $v_len_str; $k < $j; ){
//     
//     $v_result = $v_result ."<br>".  strstr($v_string, ",",true);
//     $k = $k + strlen(strstr($v_string, ",",true));
//     $v_string =  substr(trim($v_string), $k+1, $v_len_str);
//     
//    
//} 
//echo $v_result;

?>
