<html>
        <head>
            <title>
                 start page    
            </title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php


require_once 'dbconn.php';

$u_ip = "127.0.0.1";
$login_date = date("Y-m-d H:i:s");
$logout_date = null;
$login_status = 1;
$user_id = 2;

$l_name = "%оскв%";
$l_socr  = "%г%";
$l_code =" 400200%";

$mysqli_conn = conn_kladr();  

            $stmt_i = $mysqli_conn->prepare("SELECT name, socr, code FROM kladr.kladr where name like ? and socr like ? limit 0,20 ");
            $stmt_i->bind_param("ss", $l_name, $l_socr);

            mysqli_stmt_execute($stmt_i);
            mysqli_stmt_store_result($stmt_i);
            mysqli_stmt_bind_result($stmt_i, 
                 $name, $socr, $code );
  while (mysqli_stmt_fetch($stmt_i)) {
            
            echo $socr.". ".$name." code- ".$code."<br>";
            
          
        }
        
        mysqli_stmt_close($stmt_i);
        
 echo "<hr>";        
        
        $mysqli_conn1 = conn_kladr();  
            $stmt_i = $mysqli_conn1->prepare("SELECT name, socr, code FROM kladr.street where code like ? and  socr like ? limit 0,20 ");
            $stmt_i->bind_param("ss", $l_code, $l_socr);
            /* execute prepared statement */
            mysqli_stmt_execute($stmt_i);
            mysqli_stmt_store_result($stmt_i);
            mysqli_stmt_bind_result($stmt_i, 
                 $name, $socr, $code );
  while (mysqli_stmt_fetch($stmt_i)) {
            echo $socr.". ".$name." code- ".$code."<br>";
        }
        
        mysqli_stmt_close($stmt_i);
        
?>
</body>
</html>