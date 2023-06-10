<?php
    session_start();
?>


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
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

#patient_details,#medical_History,#modify_mh,#book_Appoint
{    background-color: bisque;
    display:none;
    box-shadow: 2px 2px 5px #888888;
    border-radius: 10px ;
}




    #patient_details .row , #medical_History .row , #modify_mh .row , #book_Appoint .row{
        width: 800px;
        margin-left: 20px;
        margin-top : 30px;
        font-size : 17px;
        font-weight: bolder ;
        text-shadow: h-shadow v-shadow blur-radius color;
    }
    #patient_details input , #medical_History input , #modify_mh input, #book_Appoint input{
        border-radius: 10px ;
        height:30px;
    }


    .search-container {
    display: flex;
    align-items: center;
    flex-direction:row;
    }

    .form-control {
    flex: 1;
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
            
            <?php
                include "conn.php";
                echo "<script>console.log('".$_SESSION['userId']."');</script>";
                $userId=$_SESSION['userId'];
                echo "<script>console.log('".$userId."');</script>";
                $query = "SELECT * FROM users WHERE userId = " . $userId . ";";
                $stmt = $conn->prepare("SELECT * FROM users WHERE userId = ?");
                
                $stmt->bind_param("s", $_SESSION['userId']);
                
                $stmt->execute();
                
                $result = $stmt->get_result();
                
                $row = $result->fetch_assoc();

                $name = $row['name'];
                echo "<script>console.log('".$row['name']."');</script>";

            ?>
            
            <form class="form-inline my-2 my-lg-0" style="float: right;">
                
                <label for="" style="background-color: rgb(253, 145, 14); color:black ; font-size: 15px;height: 35px;margin-right:50px;width:230px;border-radius:19px; border:2px solid green;">
                    <?php echo "Welcome ," . $name  ?>
                </label>
                <a class="btn btn-outline-success my-2 my-sm-0" href="logout.php" style="background-color: rgb(253, 145, 14); color:black ; font-size: 15px;height: 35px;border:2px solid green;">
                    Log Out
                </a>
            </form>
           
            <?php
                
            ?>
        </div>
    </nav>

    <!-- alert -->
    <div class="alert" id="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <strong> Succesful ! </strong> 
    </div>

    <div id="title" style="margin-top:100px; border: 2px solid grey ;">
        <img src="images/fav.png" alt="" width="5%" height="5%" style="margin-bottom:26px;margin-right:10px;">
        <span style="font-size:45px; margin-top:2px;"><b><i> Patient PANEL  </i></b></span>
    </div>

    <!-- image below nav -->
    <div class="background container-fluid mt-3 ml-0 mr-0 w-100" style="height:'20%' ; ">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">   
        <div class="carousel-inner" style="max-height: 400px;">
            <div class="carousel-item active">
        
                <img src="images/medical.jpg" class="bckg d-block w-100" alt="Image 1" > 
            </div>
        </div>
        </div>
    </div>   
       

    <!-- middle container : which would contain all admin operations  -->
    <div class="container middle" >
        <div class="row">
            <h1 style="margin-left:350px;font-size:25px;font-weight:800px;  text-shadow: 2px 2px 4px #000000;
"> SEARCH RESULTS </h1>
        </div>
        <div class="row">
            
            
                
                <div class="container" id="search_Doc">
                    
                    <div  class="row">
                    <?php
                        if(isset($_COOKIE['search_query'])) {
                            $search_query = $_COOKIE['search_query'];
                            echo '<script> console.log("fd"); </script>';
                            echo "<script> console.log('".$search_query."'); </script>";
                            $sql = "select * from users where userId like 'DOC-%' and city = '".$search_query."';";
                            $result = mysqli_query($conn , $sql);
                            while ( $row= mysqli_fetch_array($result)){
                    ?>
                                
                        <div class="col-md-4">
                            <div class="card" >
                                <img class="card-img-top" src="images/avatar.png" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h1 class="card-title" style="font-weight:bolder; text-shadow: 2px 2px 5px #888888;"> DR.  <?php echo $row['name']; ?></h1>
                                    <label for=""> DESIGNATION : </label>
                                    <p class="card-text text-warning" style="font-weight:100px"> <?php echo $row['designation']; ?></p>
                                    <label for=""> SPECIALIZATION : </label>
                                    <p class="card-text text-warning"><?php echo $row['department']; ?></p>
                                    <label for=""> CITY : </label>
                                    <p class="card-text text-warning"><?php echo $row['city']; ?></p>              
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#book_appointment" onclick="myFunction('<?php echo $row['userId']; ?>' , '<?php echo $row['name']; ?>')">Book Appointment </button>

                                </div>
                            </div>
                            <script>
                                function myFunction(param , param2) {
                                    console.log('The parameter is: ' + param);
                                    setCookie("userId", param, 1);
                                    setCookie("docName", param2 , 1);
                                }
                                function setCookie(name, value, days) {
                                    var expires = "";
                                    if (days) {
                                        var date = new Date();
                                        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                                        expires = "; expires=" + date.toUTCString();
                                    }
                                    document.cookie = name + "=" + (value || "") + expires + "; path=/";
                                }
                            </script>
                        </div>
                                
                    <?php
                            }
                        }    
                    ?>            
                           

                            
                    </div> 
                </div>
                <!-- Book Appointment -->
                <!-- #book_Appoint -->

                <?php
                    if(isset($_COOKIE['userId'])) {
                        $id = $_COOKIE['userId'];
                    }    
                ?>

                <!-- Modal -->
                <div class="modal fade" id="book_appointment" role="dialog" width="600px;">
                    <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> Book Appointment</h4>
                        </div>
                        <div class="modal-body ml-5">
                            <!--  -->
                            <form action="" method="post">
                                <div class="row mt-5 d-flex flex-column">
                                   <label for=""  class=" mt-5 border rounded" style="width:200px;  text-shadow: 2px 2px 4px #000000, -2px -2px 4px #FFFFFF;">PATIENT's NAME : </label>
                                    <br><input type="text" id="pname" name="pname" style="width:200px; "> 
                                </div>
                                
                                <div class="row mt-5 d-flex flex-column">
                                    <label for="" class="mt-5 border rounded" style=" width:200px;  text-shadow: 2px 2px 4px #000000, -2px -2px 4px #FFFFFF;"> CITY : </label>
                                    <br><input type="text" id="city" name="city" style="width:200px; " placeholder="<?php echo $search_query; ?>"  disabled>                            
                                </div>
                                
                                <div class="row mt-5 d-flex flex-column">
                                    <label for="" class="mt-5 border rounded" style="width:200px;   text-shadow: 2px 2px 4px #000000, -2px -2px 4px #FFFFFF;"> DOCTOR's NAME : </label>
                                    <br><input type="text" id="dname" name="dname" style="width:200px; " placeholder="<?php echo $_COOKIE['docName']; ?>"  disabled>
    
                                </div>
                                
                                <div class="row mt-5 d-flex flex-column">
                                   <label for="" class="mt-5 border rounded" style="width:200px;   text-shadow: 2px 2px 4px #000000, -2px -2px 4px #FFFFFF;"> DATE  : </label>
                                    <br><input type="date" id="appointmentDate" style="width:200px; " name="appointmentDate">
                                 
                                </div>
                                
                                <div class="row d-flex flex-column">
                                   <label for="" class="mt-5 border rounded" style="width:200px;   text-shadow: 2px 2px 4px #000000, -2px -2px 4px #FFFFFF;"> TIME SLOT : </label>
                                    <label for=""> 8-10 am </label>
                                    <input type="checkbox" name="8_10am" value="8-10 am">

                                    <label for=""> 2-4 pm </label>
                                    <input type="checkbox" name="2_4pm" value="2-4 pm">


                                </div>
                                
                                <div class="row">
                                    <input type="submit" id="formSubmit" name="formSubmit">
                                </div>

                                
                                
                            </form>
                            
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    
                    </div>
                </div>

                <?php
                    if (isset($_POST['formSubmit']))
                    {
                        $pname = $_POST['pname'];
                        $city = $_POST['city'] ?? '';
                        $dname = $_COOKIE['docName'];
                        $appointmentDate = $_POST['appointmentDate'];
                        $formatted_date = date('Y-m-d', strtotime($appointmentDate));
                        
                        
                        $result = mysqli_query($conn, 'SELECT * FROM appointments ORDER BY appointment_id DESC LIMIT 1');
                        // Fetch the row as an associative array
                        $row = mysqli_fetch_assoc($result);
                        if ( $row == null){
                            echo '<script>console.log(" NULL HE ");</script>';
                            $number = 1;
                        }
                        else{
                            echo "<script>console.log('".$number."');</script>";
                            $number= $row['appointment_id'];
                            $number = $number + 1 ;
                        }

                        if (isset($_POST['8_10am']))
                        {
                            echo '<script>console.log("inside 8_10 am ");</script>';
                            $timeSlot1 = isset($_POST['8_10am']) ? "8-10 am" : 0;
                            echo "<script>console.log('".$timeSlot1."');</script>";
                            $sql = "INSERT INTO appointments (appointment_id , patient_name, city, doctor_name, date, slot, booking)
                            VALUES ($number,'$pname', '$city', '$dname', '$formatted_date', '$timeSlot1', 'pending..')";
                            
                            if (mysqli_query($conn, $sql)){ echo '<script> window.location.href="patient.php"; </script>'; }
                            
                        }
                        else if (isset($_POST['2_4pm']))
                        {
                            $timeSlot2 = isset($_POST['2_4pm']) ? "2-4 pm" : 0;
                            $sql = "INSERT INTO appointments (appointment_id , patient_name, city, doctor_name, date, slot, booking)
                            VALUES ($number,'$pname', '$city', '$dname', '$formatted_date', '$timeSlot2', 'pending..')";
                            
                            if(mysqli_query($conn, $sql)){
                                echo '<script> window.location.href="patient.php"; </script>'; 
                            }
                        }
                    }
                ?>
                
      
                    
            
            </div>
            <div class="row">
                <a href="patient.php"><button class="btn btn-primary" style="width:200px;margin-left:450px;margin-top:25px;border-radius:10px; font-size:20px;"> GO BACK   </button></a>
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


