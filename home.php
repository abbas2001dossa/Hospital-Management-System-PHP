
<!DOCTYPE html>
<html lang="en">
<head>

  <title> MEDIC ONLINE </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Bootstrap JavaScript plugins -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    /* width */
    ::-webkit-scrollbar {
    width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
    background: #555; 
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
    background: #850; border-radius: 20px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
    background: #85; 
    }
    </style>
</head>
<body>
    
    <!-- navbar -->
    <nav class="navbar sticky-top navbar-dark bg-dark navbar-expand-lg mb-0 ">
        <a class="navbar-brand" href="#" style="font-size: xx-large; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-shadow: 3px 3px #ff0000;height:80px; position: relative;
        text-decoration: wavy;"> <b><i> MEDIC ONLINE </i></b></a>

        <div class="collapse navbar-collapse">
            <ul class="mr-auto navbar-nav">
                <li class="nav-item active">
                    <a href="home.php" class="nav-link"> Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i> Contact </a>
                </li>
                
                <li>
                    <a class="nav-link" href="infoDesk.html"><i class="fa fa-th-list fa-fw mr-1"></i> Information Desk  </a>
                </li>
                <li>
                    <a class="nav-link" href="AllBookings.html"><i class="fa fa-th-list fa-fw mr-1"></i> All Bookings  </a>

                </li>

            </ul>
            
            
            <form class="form-inline my-2 my-lg-0" style="float: right;">
                <a class="btn btn-outline-success my-2 my-sm-0" href="login.php"  id="login" style="background-color: rgb(253, 145, 14); color:black ; font-size: 15px;height: 35px;">
                    Login 
                </a>
                <a class="btn btn-outline-success my-2 my-sm-0"  href="signup.php" style="background-color: rgb(253, 145, 14); color:black ; font-size: 15px;height: 35px; margin-left: 35px;">
                    Sign Up
                </a>
            </form>
            <!-- <script>
               

                $(document).ready(function(){
                    
                    $('#login').click(function(){
                        window.location.href="login.php";
                    });

                    $('#signup').click(function(){
                        window.open("signup.php");
                    });

                });
            </script>     -->
        </div>
    </nav>

    <div id="title" >
        <img src="images/fav.png" alt="" width="5%" height="5%" style="margin-bottom:26px;margin-right:10px;">
        <span style="font-size:45px; margin-top:2px;"><b><i> MEDIC ONLINE </i></b></span>
    </div>

    <!-- image below nav -->
    <div class="background container-fluid mt-2">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div id="showi" class="container" style="width:400px;height:120px;display:none;">
            <h1><b><i> Check out our different programmes </i></b></h1>
            <button id="letsGo" type="button"> Lets Go </button>
        </div>    
        <div class="carousel-inner">
            <div class="carousel-item active">
        
                <img src="images/hosp (3).jpg" class="bckg d-block w-100" alt="Image 1"> 
                <div id="showi" class="container" style="width:200px;height:80px;bottom:50px">
                    <!-- <h1><b><i>   </i></b></h1> -->
                    <button id="letsGo" type="button" style="width:200px;height:80px;position:absolute;right:2px;top:2px;"> Learn More  <i class="fas fa-thumbs-up fa-fw"></i></button>
                </div>
                
            </div>
            <div class="carousel-item">
                <img src="images/hosp (1).jpg" class="bckg d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="images/hosp (2).jpg" class="bckg d-block w-100" alt="Image 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>

        
        <!-- JavaScript code using jQuery to add event listener to "next" button -->
        <script>
            var rotationAngle=0 ; 
            $(document).ready(function() {
                $('.carousel-control-next').click(function() {
                    $('#myCarousel').carousel('next');
                    $('#showi').show();
                    rotationAngle=0 ; 
                    $('#showi').animate(rotateAntiClockwise());
                    $('#showi').animate({
                        right: '250px'
                    });

                });
                $('.carousel-control-prev').click(function() {
                    $('#myCarousel').carousel('prev');
                    $('#showi').show();
                    rotationAngle=0 ; 
                    $('#showi').animate(rotateAntiClockwise());
                
                });

                var showi = document.getElementById("showi");
                var letsGo = document.getElementById("letsGo");
                function rotateAntiClockwise() {
                    
                    rotationAngle -= 30; // Decrement the rotation angle by 10 degrees
                    showi.style.transform = `rotate(${rotationAngle}deg)`; // Update the transform property of the div
                    if (rotationAngle > -360) { // Check if the rotation is complete
                    setTimeout(rotateAntiClockwise, 50); // Call the function again after 50 milliseconds
                    }

                    showi.style.backgroundColor= "rgba(255, 255, 255, 0.5)";
                    showi.style.color = "black";
                    letsGo.style.color="black";
                }
            });
        </script>







    </div>   
    
    <!-- Cities we operate in   -->
    <div class="container-fluid text-center bg-light shadow-5" style="margin-top: 150px;">
            
        <h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> LOCATIONS   </h1>
        
        <!-- generalising -->
        <?php
            include "conn.php";

            $result = mysqli_query($conn , "SELECT COUNT(*) as total FROM location;");
            $result2 = mysqli_query($conn , "select * from location;");
            $count =0 ;
             
        ?>
        <div class="row mt-5 " style="margin-left: 0px;">
            
            <?php
                while ($row = mysqli_fetch_array($result2)){
                    $count++;
                    if ($count > 4 ){
                        echo '<div class="row mt-5 " style="margin-left: 0px;">';
                        $count=0;
                    }    

            ?>
            
            <div class="col-sm-3 ">
               
                <div>
                <span class="translate-middle badge rounded-pill badge-success" style="font-size: 13px; margin-left: 70px; ">
                        <?php echo $row['country']; ?>
                </span>
                </div>
                <div class="card ml-5 bg-dark" style="width: 300px; height: 300px; margin: 0px; padding: 0px; border: 7px solid  rgb(0, 0, 0); border-radius: 15px; ">
           
                    <!-- <img class="card-img-top" src="images/news (1).jpg" alt="Card image cap"> -->
                    <div class="card-body">
                      
                      <h2 class="card-title border-success" style="font-size:34px; border: 2px solid green; color:red; font-weight:900px; text-shadow: 2px 2px 4px #000000;
                        "> <?php echo  $row['city']; ?> </h2>
                      
                      <h2 style="margin-top:15px; color:red; text-shadow: 2px 2px 4px #000000;"> ADDRESS : </h2>
                      <h4 class="text-light" style="margin-top:5px;">
                        <?php echo $row['address']; ?>
                      </h4>
                    
                      <h2 style="margin-top:15px; color:red; text-shadow: 2px 2px 4px #000000;"> DESCRIPTION : </h2>
                      <h4 class="text-light" style="margin-top:5px;">
                        <?php echo $row['description']; ?>
                      </h4>

                      
                      <a href="home.php"> <button class="btn align-self-end  btn-primary mt-5" style="width:200px;"> Learn More </button></a>
                    </div>
                </div>
            </div>   

            <?php
                if ($count > 4){
                    echo '</div>';
                }
                } // closing the while loop 
                mysqli_close($conn);
            ?>
            
        </div>


    </div> 

    
    <!-- News and Events  -->
    <div class="container-fluid text-center bg-light shadow-5" style="margin-top: 150px;">
            
        <h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> News And Events </h1>

        <div class="row mt-5 " style="margin-left: 0px;">
            <div class="col-sm-4 mr-0  ">
               
                <div>
                <span class="translate-middle badge rounded-pill badge-danger" style="font-size: 13px; margin-left: 180px; ">
                        PAKISTAN
                </span>
                </div>
                <div class="card ml-5 bg-dark" style="width: 430px; height: 350px; margin: 0px; padding: 0px; border: 7px solid  rgb(0, 0, 0); border-radius: 15px; ">
           
                    <img class="card-img-top" src="images/news (1).jpg" alt="Card image cap">
                    <div class="card-body">
                      <h3 class="card-title text-light"> Micro Biology Tests  </h3>
                      
                    <a href="booking.html"> <button class="btn align-self-end  btn-primary"> Learn More </button></a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-4">
                <div>
                    <span class="translate-middle badge rounded-pill badge-danger" style="font-size: 13px; margin-left: 180px; ">
                            UNITED KINGDOM 
                    </span>
                    </div>
                <div class="card ml-5 bg-dark" style="width: 430px; height: 350px; margin: 0px; padding: 0px; border: 7px solid  rgb(0, 0, 0); border-radius: 15px;">

                    <img class="card-img-top" src="images/news (2).jpg" alt="Card image cap">
                    <div class="card-body">
                      <h3 class="card-title text-light"> Blood Tests  </h3>
                      <a href="booking.html"> <button class="btn align-self-end  btn-primary"> Learn More </button></a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-4">
                <div>
                    <span class="translate-middle badge rounded-pill badge-danger" style="font-size: 13px; margin-left: 180px; ">
                            NEWZEALAND
                    </span>
                </div>
                <div class="card ml-5 bg-dark" style="width: 430px; height: 350px; margin: 0px; padding: 0px; border: 7px solid  rgb(0, 0, 0); border-radius: 15px;">

                    <img class="card-img-top" src="images/news (3).jpg" alt="Card image cap">
                    <div class="card-body">
                      <h3 class="card-title text-light"> Modern Ambulances </h3>
                      <a href="booking.html"> <button class="btn align-self-end  btn-primary"> Learn More </button></a>
                    </div>
                  </div>
            </div>
            
        </div>
    </div>    
    

    <!-- patient Success Stories  -->
    <!-- News and Events  -->
    <div class="container-fluid text-center bg-light shadow-5" style="margin-top: 150px;">
            
        <h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> Patient Success Stories </h1>

        <div class="row mt-5 " style="margin-left: 0px;">
            <div class="col-sm-4 mr-0  ">
               
                <div>
                <span class="translate-middle badge rounded-pill badge-danger" style="font-size: 13px; margin-left: 180px; ">
                        PAKISTAN
                </span>
                </div>
                <div class="card ml-5 bg-dark" style="width: 430px; height: 380px; margin: 0px; padding: 0px; border: 7px solid  rgb(0, 0, 0); border-radius: 15px; ">
           
                    <img class="card-img-top" src="images/patient (2).jpg" alt="Card image cap">
                    <div class="card-body">
                      <h3 class="card-title text-light"> Meet Ahmed Baloch, who battled through corona virus.  </h3>
                      
                    <a href="booking.html"> <button class="btn align-self-end  btn-primary"> Read More </button></a>
                    </div>
                  </div>
            </div>
            
            <div class="col-sm-4">
                <div>
                    <span class="translate-middle badge rounded-pill badge-danger" style="font-size: 13px; margin-left: 280px; ">
                            PAKISTAN
                    </span>
                </div>
                <div class="card ml-5 bg-dark" style="width: 430px; height: 380px; margin: 0px; padding: 0px; border: 7px solid  rgb(0, 0, 0); border-radius: 15px;">

                    <img class="card-img-top" src="images/patient (1).jpg" alt="Card image cap">
                    <div class="card-body">
                      <h3 class="card-title text-light"> Cancer ? No cure but the will to fight !  </h3>
                      <a href="booking.html"> <button class="btn align-self-end  btn-primary"> Read More </button></a>
                    </div>
                  </div>
            </div>
            
        </div>
    </div>


    <!-- contact details  -->
    <div id="contact" class="top-picks container-fluid mt-5 bg-light my-5 ">
        <div class="row justify-content-md-center py-5 px-xl-5">
            <div class="col-md-6 col-12 py-5">
                <div class="text-center">
                    <h2 class="section-title px-5 mb-3">
                       For any Queries, you can contact us on this chat box ! 
                    </h2>
                </div>
                <form action="A1.html">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-4" placeholder="Enter your query -" style="border:2px solid black ; width:600px;height:100px;font-size: 15px;">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4" style="width: 100px;font-size: 15px;">
                                Enter 
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 pt-5 " style="font-size: 15px;">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-danger font-weight-bold border border-dark "> MEDIC ONLINE </h1>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti pariatur dolor, corporis odit nihil quo amet labore voluptatibus hic explicabo ut nobis rem doloribus recusandae exercitationem aliquid praesentium, dolore libero!</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>N5 , Bhens Colony, Karachi, FAST</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i> www.nu.edu.pk </p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 678920</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-light mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="A1.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i> Information Desk </a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light  py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-light">
                    &copy; <a class="text-light font-weight-semi-bold" href="#"> MEDIC ONLINE </a>. All Rights Reserved. Designed
                    by Abbas Dossa
                </p>
            </div>
           
        </div>
    </div>
    <!-- Footer End -->

</body>
</html>    