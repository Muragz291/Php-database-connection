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
    echo "Data submitted successfully";
}
else{
    echo "Error occurred";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <title>bootstap-gridlayout</title>
</head>
<body>
        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
            <div class="container-fluid">
               <a href="#" class="navbar-brand">Zalego Academy</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false" >
                   <span class="navbar-toggler-icon"></span>
               </button>
                   
               <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
                   <div class="navbar-nav">
                       <a href="index.php" class="nav-link">Home</a>
                       <a href="aboutus.php" class="nav-link active">About Us</a>
                       <a href="#" class="nav-link">Contact Us</a>
                   </div>
               </div>
           </div>
       </nav>
       <!-- End navigation bar -->
   
    
    <!-- About Us page here -->
<div class="row pt-5 bg-light col-lg-12 mt-5 mb-5">
    <h1>About Us</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint suscipit autem voluptates recusandae optio quos expedita. Inventore numquam laudantium eius molestiae quod, in, atque nulla odio.</p>
</div>

        <div class="row">
            <table>
           <h2>Our Program</h2>
               <tr>
                   <td>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis ut assumenda iste placeat voluptate fugiat, quae eum blanditiis dicta molestias, quasi veniam fuga esse accusantium dolore saepe fugit hic quam repellat ipsam! Expedita et vel exercitationem eveniet. Ex quia rem quisquam cupiditate maxime id quis architecto, saepe fuga, distinctio praesentium?</p>
                   </td>
                   <td>
                    <img src="7.webp" alt="good image">
                   </td>
               </tr>
           </table>
        </div>
        
        <div class="row mt-5">
            <div class="mb-5">
            <h2>The Programs</h2></div>
            
            <div class="col-lg-4 card-body shadow-lg">
                <h3>Skill Discovery</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ducimus nisi voluptates quia, deserunt pariatur obcaecati aliquam officiis tempore sunt eligendi voluptatum accusantium temporibus amet. Officiis optio omnis repellendus quod sint, itaque nisi consectetur maiores aut maxime, non nihil. Aut, dolores. Quos libero, consequatur possimus illo commodi in iure corrupti!</p>
                    <button class="btn btn-primary mb-3">View Details</button>
                
            </div>
            <div class="col-lg-4 card-body shadow-lg mt-3">
                <h4>Upskilling Program</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ducimus nisi voluptates quia, deserunt pariatur obcaecati aliquam officiis tempore sunt eligendi voluptatum accusantium temporibus amet. Officiis optio omnis repellendus quod sint, itaque nisi consectetur maiores aut maxime, non nihil. Aut, dolores. Quos libero, consequatur possimus illo commodi in iure corrupti!</p>
                    <button class="btn btn-primary mb-3">View Details</button>  
            </div>


            <div class="col-lg-4 card-body shadow-lg mt-3">
                <h5>Path finding Program</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ducimus nisi voluptates quia, deserunt pariatur obcaecati aliquam officiis tempore sunt eligendi voluptatum accusantium temporibus amet. Officiis optio omnis repellendus quod sint, itaque nisi consectetur maiores aut maxime, non nihil. Aut, dolores. Quos libero, consequatur possimus illo commodi in iure corrupti!</p>
                    <button class="btn btn-primary mb-3">View Details</button>
            </div>

            <div class="text-secondary text-center mb-3">
                <h6>Subscribe to get information, latest news about<br>
                    Zalego Academy</h6>
            </div>
        </div>
            <div class=" row ">
                <form action="aboutus.php" method="POST">
                    <table>
                    <tr>
                        <td>
                            <label for="email" class="form-label"></label>
                            <input type="email" name="email" class="form-control" placeholder="Your email address">
                        </td>

                        <td>
                            <button name='submitButton' class="btn btn-primary">Subscribe</button>
                        </td>
                    </tr>
                </table>
            </form>
            </div>
    
    <!-- End About Us page -->
       <!-- <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>

</body>
