<!-- changes made php & contact us-form action=index.php method=p -->
<?php
include('process.php')
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
                    <a href="index.php" class="nav-link active">Home</a>
                    <a href="aboutus.php" class="nav-link">About Us</a>
                    <a href="enroll.php" class="nav-link">Register now</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End navigation bar -->










    <main class="p-5 mt-5 mb-4 bg-light">
        <h1>Welcome Lukeblaze!</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia animi, mollitia ullam magni repudiandae ad incidunt dolores molestias recusandae. Inventore velit laudantium, deserunt nobis, pariatur voluptatibus totam numquam reiciendis, incidunt delectus ipsum! Mollitia quisquam repellendus repellat assumenda beatae? 
        </p>
        <button class="btn btn-primary">Learn More</button>
    </main>

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h1>Header 1</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ducimus nisi voluptates quia, deserunt pariatur obcaecati aliquam officiis tempore sunt eligendi voluptatum accusantium temporibus amet. Officiis optio omnis repellendus quod sint, itaque nisi consectetur maiores aut maxime, non nihil. Aut, dolores. Quos libero, consequatur possimus illo commodi in iure corrupti!</p>
                        <button class="btn btn-primary">Learn More</button>
                    
                </div>
                <div class="col-lg-4">
                    <h1>Header 2</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ducimus nisi voluptates quia, deserunt pariatur obcaecati aliquam officiis tempore sunt eligendi voluptatum accusantium temporibus amet. Officiis optio omnis repellendus quod sint, itaque nisi consectetur maiores aut maxime, non nihil. Aut, dolores. Quos libero, consequatur possimus illo commodi in iure corrupti!</p>
                        <button class="btn btn-primary">Learn More</button>
                    
                </div>
                <div class="col-lg-4">
                    <h1>Header 3</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ducimus nisi voluptates quia, deserunt pariatur obcaecati aliquam officiis tempore sunt eligendi voluptatum accusantium temporibus amet. Officiis optio omnis repellendus quod sint, itaque nisi consectetur maiores aut maxime, non nihil. Aut, dolores. Quos libero, consequatur possimus illo commodi in iure corrupti!</p>
                        <button class="btn btn-primary">Learn More</button>
                    
                </div>
            </div>

            <!-- contact us page here -->
            <div class="row pt-5"></div>
            <h1>Contact us</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nam debitis natus quibusdam! Sit, esse nobis? Repellendus magni laboriosam eius placeat culpa, illum ullam ut reiciendis vitae ipsum.            
            </p>
            <form action="index.php" method="POST">
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text"  name="firstName" class="form-control" placeholder="Enter your first name">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name="lastName" class="form-control" placeholder="Enter your last name">
                </div>
            </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" name="phonenumber" class="form-control" placeholder="Enter your phone number">
                    </div>
            </div>
                <div class="row">
                    <div class="col-lg-12">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea  name="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <br>
                <button type="submit" name="submitButton" class="btn btn-primary">Send a Message</button>
            </form>

            <!-- End contact us page -->
            <!-- About us page here-->
                
            






            <!-- End About us page -->
            <hr>
            <footer>
                &copy;Company 2022
            </footer>
           
        </div>
    
    







   <!-- <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>