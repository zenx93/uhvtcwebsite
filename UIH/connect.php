<?
// $servername = "127.0.0.1";
$servername="localhost:3306";
$username = "gpoqxzyf_uhvtc";
$password = "~*p57Ks^!F?W";
$dbname = "gpoqxzyf_UHVTC";     

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";