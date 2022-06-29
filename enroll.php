
<DOCTYPE html>
<html lang= "en">
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
        <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        <ul style="list-style-type: none">
        <li>
        <span><i class="fa fa-calendar-check"></i></span>
            <span>20th July 2022</span>
        </li>
        <li>
          <span><i class="fa fa-location-pin"></i></span>
            <span>Zalego ACademy,<br> Devan Plaza</span>
        </li>
       </ul>
    </main>
        <div class="container-fluid">
           <div class="row">
            <p class="text-center color-black">Looking for a place to kickstart your career in techology? Whether youre a local, new in townor just cruising through we've got loads of great tips and evets for you.</p>
            <h3 class="text-center color-dark font-large mt-4">Sign up today ?</h3>
           </div>
            </div>
            <?php include("enrollprocess.php")?>

            <!-- Register now  page here -->
         <div class="container-fluid pt-5 shadow">
         <div class="row ">
            <form action="enroll.php" method="POST">
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="fullName" class="form-label">Full Name:</label>
                    <input type="text"  name="fullName" class="form-control" placeholder="Enter your full name">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="phoneNumber" class="form-label">Phone Number:</label>
                    <input type="text" name="phoneNumber" class="form-control" placeholder="+2547.....">
                </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">Email Address:</label>
                        <input type="email" name="email" class="form-control" placeholder="Please enter your email">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="gender" class="form-label">What's your gender?</label>
                        <div>
                        <select name="gender" class="form-select" aria-label="Default select example">
                            <option selected>--Select your gender-- </option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
               
                </div>
                       </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p>In order to complete your regiristration to the bootcamp, you are required to select one course you will be undertaking. Please NOTE that this will be your learning track during the 2-weeks immersion.</p>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-lg-6 mt-3">
                            <label for="course" class="form-label">What's your preferred course?</label>
                            <select  name="course"class="form-select" aria-label="Default select example">
                                <option selected>--Select your course-- </option>
                                <option value="Cyber security">Cyber security</option>
                                <option value="Website Development">Website Development</option>
                            </select>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>You agree by providing informtion you understand all our data privacy and rotection policy outlined in our Terms & condition and the Privacy Policy statements.</p>
                        </div>
                    </div>
                    <div class="form-check m-3 pl-6">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">Agree terms and conditions </label>
</div>
<table>
    <tr>
        <td>
        <button name='submitButton' class="btn btn-primary">submit application</button>
        </td>
    </tr>
 </table>
            </form>
         </div>
           
  <div class="text-secondary text-center mb-3 mt-4">
                <h6>Subscribe to get information, latest news about<br>
                    Zalego Academy</h6>
            </div>
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
                
            
              
           
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
         <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
         <script src="https://kit.fontawesome.com/b3c74f86fe.js" crossorigin="anonymous"></script>
         </body>
         </html>

            <!-- End contact us page -->
 

 