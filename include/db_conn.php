<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "fiekgym";

// Create connection
$con = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>
<?php
function page_protect()
{
    session_start();
    
    global $db;
    

    if (isset($_SESSION['HTTP_USER_AGENT'])) {
        if ($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT'])) {
            session_destroy();
            echo "<meta http-equiv='refresh' content='0; url=../login/'>";
            exit();
        }
    }
    

    if (!isset($_SESSION['user_data']) && !isset($_SESSION['logged']) && !isset($_SESSION['auth_level'])) {
        session_destroy();
        echo "<meta http-equiv='refresh' content='0; url=../login/'>";
        exit();
    } else {
        
    }
    
}
?>