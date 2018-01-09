<?PHP

$user_name = "root";
$password = "";
$database = "survey";
$server = "127.0.0.1";

mysqli_connect( $server, $user_name, $password, $database);

print "Połączono z bazą danych:";

?>