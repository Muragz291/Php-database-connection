<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";


$conn = mysqli_connect($server,$username,$password,$database);

if(  isset($_POST["submitButton"]))
{
    //1. fetch form data
    $fullName = $_POST["firstName"];
    $phone = $_POST["phoneNumber"];
    $email = $_POST["email"];
    //2. submit form data
    $insertData = mysqli_query($conn, "INSERT INTO 
                  contactus(fulltName,email,phonenumber) 
                  VALUES('$fullName','$email','$phone')");

}
if ( isset($insertData))
{
    echo "Data submitted successfully";
}
else{
    echo "Error occurred";
}
?>
