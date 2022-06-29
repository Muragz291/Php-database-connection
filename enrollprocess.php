<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";


$conn = mysqli_connect($server,$username,$password,$database);

if(  isset($_POST["submitButton"]))
{
    //1. fetch form data
    $fullName = $_POST["fullName"];
    $phone = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $course = $_POST["course"];
    //2. submit form data
    $insertData = mysqli_query($conn, "INSERT INTO 
                  enrollment(fullName,email,phonenumber,gender,course) 
                  VALUES('$fullName','$email','$phone','$gender','$course')");

}
if ( isset($insertData))
{
    echo "Data submitted successfully";
}
else{
    echo "Error occurred";
}
?>
