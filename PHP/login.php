<?php
    $host = "127.0.0.1";
    $user = "yourUserName";
    $pass = "yourPassword";
    $db = "yourDatabaseName";
    $port = 3307;


include_once 'myWebpage.html'; //add template
require_once 'login.php';  //add login credentials
$conn = mysqli_connect($host, $user, $pass, $db, $port); //create connection to db
if($conn->connect_error) die($conn->connect_error); // quit if it fails

$option = isset($_POST['myRequest']) ? $_POST['myRequest'] : false;
    if ($option){
        $request = $_POST['myRequest'];
        $query = "    select myField, from myTable where mySelection = '" . $request . "';"; // create the query
        $result = mysqli_query($conn, $query); //post the query
        while ($row = mysqli_fetch_assoc($result)) { //extract data from the response //look to see if there is a record
            echo "some html";
            echo $row['myField']; //add the record to your html
        }
    }
    $result->close();
    $conn->close();
?>

