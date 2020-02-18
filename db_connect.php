
<?php 
$servername="localhost";
$username="root";
$password="";
$database="chatapp";
//database connect
$conn = mysqli_connect($servername, $username, $password, $database);
//check connection
if(!$conn){
    die("failed to connect". mysqli_connect_error());

}

?>