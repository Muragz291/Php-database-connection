<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";


$conn = mysqli_connect($server,$username,$password,$database);

if(  isset($_POST["submitButton"]))
{
    //1. fetch form data
    $email = $_POST["email"];
    //2. submit form data
    $insertData = mysqli_query($conn, "INSERT INTO 
                  subscribers(email) 
                  VALUES('$email')");

}
if ( isset($insertData))
{
    echo "subscribed successfully";
}
else{
    echo "Error occurred";
}
?>