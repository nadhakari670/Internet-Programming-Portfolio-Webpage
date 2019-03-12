<?php

$host = 'localhost';
$user = 'root';
$pwd = '';
$dbname = 'portfolio';

$conn = new mysqli($host, $user, $pwd, $dbname);

if ($conn===false){
    die("Connection Failed: ".$conn->connect_error);
}

$fname = $conn->real_escape_string($_REQUEST['fname']);
$lname = $conn->real_escape_string($_REQUEST['lname']);
$email = $conn->real_escape_string($_REQUEST['email']);

$sql = "INSERT INTO contacts (fname, lname, email) VALUES ('$fname', '$lname' , '$email')";


if($conn->query($sql) === TRUE){
        echo '<script type="text/javascript">';
        echo 'alert("Contact added to the database. Thank you for visiting!");';
        echo 'location.href = "Portfolio.html";';
        echo '</script>';
}else{
        echo '<script type="text/javascript">';
        echo 'alert("Sorry. Cannot be added to database at the moment.");';
        echo 'window.location.href = "Portfolio.html";';
        echo '</script>'; 
}

$conn->close();
    
?>
