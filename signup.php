
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
  <link rel="stylesheet" href="css/toggle.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/signup.js"></script>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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


    /* booking.html */

.section {
	/* position: relative; */
	height: 100vh;
  margin-top: 600px;
  margin-bottom:900px;
  /* color: white ;
   */
  /* background-image: url(images/background.png); */
}

.section .section-center {
  margin-top: 600px;
  margin-bottom:900px;
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
}

#booking {
	font-family: 'Raleway', sans-serif;
}

.booking-form {
	position: relative;
	/* max-width: 2200px; */
	width: 100%;
	margin: auto;
	padding: 40px;
	overflow: hidden;
	background-size: cover;
	border-radius: 5px;
	z-index: 20;
  /* color: white; */
}

.booking-form::before {
	content: '';
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	top: 0;
	background: rgba(0, 0, 0, 0.7);
	z-index: -1;
}

.booking-form .form-header {
	text-align: center;
	position: relative;
	margin-bottom: 30px;
}

.booking-form .form-header h1 {
	font-weight: 700;
	text-transform: capitalize;
	font-size: 42px;
	margin: 0px;
	color: #fff;
}

.booking-form .form-group {
	position: relative;
	margin-bottom: 30px;
}

.booking-form .fc {
	/* background-color: rgba(255, 255, 255, 0.2); */
	height: 60px;
	padding: 0px 25px;
	border: none;
	border-radius: 40px;
    font-size: 15px;
    font-weight: bolder;
	color: #fff;
	-webkit-box-shadow: 0px 0px 0px 2px transparent;
	box-shadow: 0px 0px 0px 2px transparent;
	-webkit-transition: 0.2s;
	transition: 0.2s;
}

.booking-form input[type="date"].fc+.form-label {
	opacity: 1;
	top: 10px;
}



.booking-form select.fc:invalid {
	color: rgba(255, 255, 255, 0.5);
}

.booking-form select.fc+.select-arrow {
	position: absolute;
	right: 15px;
	top: 50%;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
	width: 32px;
	line-height: 32px;
	height: 32px;
	text-align: center;
	pointer-events: none;
	color: rgba(255, 255, 255, 0.5);
	font-size: 14px;
}

.booking-form select.fc+.select-arrow:after {
	content: '\279C';
	display: block;
	-webkit-transform: rotate(90deg);
	transform: rotate(90deg);
}

.booking-form select.fc option {
	/* color: #000; */
}

.booking-form .form-label {
	position: absolute;
	top: -10px;
	left: 25px;
	opacity: 0;
	/* color: #ff8846; */
	font-size: 11px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 1.3px;
	height: 15px;
	line-height: 15px;
	-webkit-transition: 0.2s all;
	transition: 0.2s all;
}

.booking-form .form-group.input-not-empty .fc {
	padding-top: 16px;
}

.booking-form .form-group.input-not-empty .form-label {
	opacity: 1;
	top: 10px;
}

.booking-form .submit-btn {
	color: #fff;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);

	background-color: orange;
	font-weight: 700;
	height: 60px;
	padding: 10px 30px;
	width: 100%;
	border-radius: 40px;
	border: none;
	text-transform: uppercase;
	font-size: 16px;
	letter-spacing: 1.3px;
}

.booking-form .submit-btn:hover,
.booking-form .submit-btn:focus {
	opacity: 0.9;
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

    <!-- alert -->
    <div class="alert" id="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong> Notice </strong> Leave the inputs as it is if it doesnt match for you. 
    </div>

    <div id="title" style="margin-top:300px; border: 2px solid grey ;">
        <img src="images/fav.png" alt="" width="5%" height="5%" style="margin-bottom:26px;margin-right:10px;">
        <span style="font-size:45px; margin-top:2px;"><b><i> SIGN UP FORM  </i></b></span>
    </div>

    <!-- image below nav -->
    <div class="background container-fluid mt-3 ml-0 mr-0 w-100" style="height:'50%' ; ">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">   
        <div class="carousel-inner" style="max-height: 400px;">
            <div class="carousel-item active">
        
                <img src="images/login.jpg" class="bckg d-block w-100" alt="Image 1" > 
            </div>
        </div>
        </div>
    </div>   
       

    

    <!-- form start -->
    <div id="booking" class="section" style=" height: 100%;">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1 style="color:orange; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);"> SIGN UP   </h1>
						</div>
						<form id="myForm" method="post" >
                                
                            <!-- patient and  doctor  -->
                            <div class="form-group designation" >
								<div id="patientD">
                                    <label for=""> PATIENT </label>
                                    <input   id="patientb" name="patientb" type="checkbox"  style="color:black;">
                                       
                                </div>
                                <div id="doctorD">
                                    <label for=""> DOCTOR </label>
                                    <input type="checkbox" name="doctor" id="doctor" value="doctor">
                                </div>
                            </div>
                            
                            

							<div class="form-group" style="color:black;">
								<input class="fc" id="name" name="name" type="text" placeholder="Name " style="color:black;">
							</div>
                            <div class="form-group" style="color:black;">
								<input class="fc" type="text" id="address" name="address" placeholder="Address "style="color:black;">
							</div>
                            
							
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<input class="fc" id="email" name="email" type="email" placeholder="Enter your Email"style="color:black;">
										<span class="form-label">Email</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="fc" type="tel" id="phone" name="phone" placeholder="Enter you Phone"style="color:black;">
										<span class="form-label">Phone</span>
									</div>
								</div>
                                <div class="col-md-4">
                                    <div class="form-group" style="color:black;">
                                        <input class="fc" type="text" id="cnic" name="cnic" placeholder="CNIC "style="color:black;">
                                    </div>
                                </div>
							</div>

                            
                            <div class="row" id="docStuff" >
								<div class="col-md-4">
									<div class="form-group">
										<input class="fc" id="dept" name="dept" type="text" placeholder="Enter your department :"style="color:black;">
										<span class="form-label"> Department</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="fc" type="text" id="designation" name="designation" placeholder="Enter you Designation"style="color:black;">
										<span class="form-label"> Designation  </span>
									</div>
								</div>
                                <div class="col-md-4">
									<div class="form-group">
										<input class="fc" type="text" id="city" name="city" placeholder="Enter your city "style="color:black;">
										<span class="form-label"> City </span>
									</div>
								</div>
							</div>

                            <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="fc" type="password" id="pass" name="pass" placeholder="Enter your password" style="color:black;">
										<span class="form-label"> password </span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="fc" type="password" id="repass" name="repass" placeholder="Re enter you password" style="color:black;">
										<span class="form-label">Confirm password </span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<a><button type="submit" id="submit" name="submit" class="submit-btn">Sign Up Now</button> </a> 
							</div>
						</form>
					</div>
				</div>
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

<?php
    include "conn.php";

    if ( isset($_POST['submit'])){
        echo '<script>console.log("submit clicked ");</script>';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cnic = $_POST['cnic'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $designation = $_POST['designation'];
        $department = $_POST['dept'];
        $city = $_POST['city'];

        if(isset($_POST['patient'])){
            echo '<script>console.log("patient clicked");</script>';
            $patient = $_POST['patient'];
            if ( $pass == $repass){
                
                $a = "PAT-";
                
                // getting numbers
                $result = mysqli_query($conn, 'SELECT * FROM users ORDER BY userId DESC LIMIT 1');
                // Fetch the row as an associative array
                $row = mysqli_fetch_assoc($result);
                if ( $row == null){
                    echo '<script>console.log(" NULL HE ");</script>';
                    $number = 1;
                }
                else{
                    
                    $number = intval(substr($row['userId'], -1));
                    $number = $number + 1 ;
                }

                $userId = $a . strval($number);
                echo '<script>console.log("user id is :'. $userId. '");</script>';

                // create the SQL query to insert the variables into the table
                // $sql = ;

                // if (mysqli_query($conn , "INSERT INTO users (userId, name, address, cnic, phone, email, department, designation, password) 
                // VALUES ('" . $userId . "','" . $name . "', '" . $address . "', '" . $cnic . "', '" . $phone . "','" . $email . "','" . $department . "', '" . $designation . "', '" . $pass . "')"))
                // {
                //     echo '<script>console.log("Query executed ");</script>';
                // }
                // else{
                //     echo '<script>console.log("Query NOT executed ");</script>';
              
                // }

                $stmt = $conn->prepare("INSERT INTO users (userId, name, address, cnic, phone, email, department, designation, password , city) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ? , ?)");

                $stmt->bind_param("ssssssssss", $userId, $name, $address, $cnic, $phone, $email, $department, $designation, $pass , $city);

                if ($stmt->execute()) {
                    echo '<script>console.log("Query  executed ");</script>';
                    echo '<script>window.location.href="patient.php";</script>';
                } else {
                // echo "Query NOT executed";
                    echo '<script>console.log("Query NOT executed ");</script>';
                }

                mysqli_close();

            }
            else{
                echo 
                '<script>
                    var alert = document.getElementById("alert");
                    alert.innerHTML = " WARNING : Passwords not matched !   RE-ENTER FORM - ";
                    alert.style.backgroundColor = "red" ;

                </script>';

            }
            

            
            
            

        }

        if(isset($_POST['doctor'])){
            $patient = $_POST['doctor'];
            echo '<script>console.log("doctor selekcted ");</script>';
            if ( $pass == $repass){
                $a = "DOC-";
                
                // getting numbers
                $query = "SELECT * FROM users WHERE userId LIKE 'DOC-%' ORDER BY userId DESC LIMIT 1;";
                $result = mysqli_query($conn, $query );
                
                // Fetch the row as an associative array
                $row = mysqli_fetch_assoc($result);
                
                if ( $row == null){
                    echo '<script>console.log(" NULL HE ");</script>';
                    $number = 1;
                }
                else{
                    
                    $number = intval(substr($row['userId'], -1));
                    $number = $number + 1 ;
                }

                $userId = $a . strval($number);
                echo '<script>console.log("user id is :'. $userId. '");</script>';

                $stmt = $conn->prepare("INSERT INTO users (userId, name, address, cnic, phone, email, department, designation, password , city) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ? ,?)");

                $stmt->bind_param("ssssssssss", $userId, $name, $address, $cnic, $phone, $email, $department, $designation, $pass , $city);

                if ($stmt->execute()) {
                    echo '<script>console.log("Query  executed ");</script>';
                    echo '<script>window.location.href="doctor.php";</script>';
                } else {
                // echo "Query NOT executed";
                    echo '<script>console.log("Query NOT executed ");</script>';
                }

                mysqli_close();

            }
            else{
                echo 
                '<script>
                    var alert = document.getElementById("alert");
                    alert.innerHTML = " WARNING : Passwords not matched !   RE-ENTER FORM - ";
                    alert.style.backgroundColor = "red" ;

                </script>';

            }
        }
    }

?>