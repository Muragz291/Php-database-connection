<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";


$conn = mysqli_connect($server,$username,$password,$database);

if(  isset($_POST["submitButton"]))
{
    //1. fetch form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phonenumber"];
    $message = $_POST["message"];
    //2. submit form data
    $insertData = mysqli_query($conn, "INSERT INTO 
                  contactus(firstName,lastName,email,phonenumber,message) 
                  VALUES('$firstName','$lastName','$email','$phone','$message')");

}
if ( isset($insertData))
{
    echo "Data submitted successfully";
}
else{
    echo "Error occurred";
}
?>