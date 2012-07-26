<?

function conn(){

$hostname = "localhost";
$username = "root";
$password = "cat#45";
$dbName = "rrb";

    $mysqli = new mysqli($hostname, $username, $password, $dbName);
    if (mysqli_connect_errno(  )) {
            printf("Connect failed: %s\n", mysqli_connect_error(  ));
            exit (  );
    } 
  return $mysqli;                
}                

function conn_kladr(){

$hostname = "localhost";
$username = "root";
$password = "cat#45";
$dbName = "kladr";

    $mysqli = new mysqli($hostname, $username, $password, $dbName);
    if (mysqli_connect_errno(  )) {
            printf("Connect failed: %s\n", mysqli_connect_error(  ));
            exit (  );
    } 
  return $mysqli;                
}            
                
                


                             
 ?>