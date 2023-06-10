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

#location_enter,#loc_delete,#addDocDiv,#doc_delete,#doc_modify,#doc_modify2,#view_Doc , #view_Pat,#add_Pat , #del_Pat,#add_PatDet{
    background-color: bisque;
    display:none;
    box-shadow: 2px 2px 5px #888888;
    border-radius: 10px ;
}
#add_PatDet .row{
    width: 800px;
        margin-left: 20px;
        margin-top : 30px;
        font-size : 17px;
        font-weight: bolder ;
        text-shadow: h-shadow v-shadow blur-radius color;

}
#del_Pat .row {
    width: 800px;
        margin-left: 20px;
        margin-top : 30px;
        font-size : 17px;
        font-weight: bolder ;
        text-shadow: h-shadow v-shadow blur-radius color;
}

#add_Pat .row{
    width: 800px;
        margin-left: 20px;
        margin-top : 30px;
        font-size : 17px;
        font-weight: bolder ;
        text-shadow: h-shadow v-shadow blur-radius color;
}
#doc_modify2 .row{
    width: 800px;
        margin-left: 20px;
        margin-top : 30px;
        font-size : 17px;
        font-weight: bolder ;
        text-shadow: h-shadow v-shadow blur-radius color;
}
#doc_modify .row{
    width: 800px;
        margin-left: 20px;
        margin-top : 30px;
        font-size : 17px;
        font-weight: bolder ;
        text-shadow: h-shadow v-shadow blur-radius color;
}
#location_enter .row{
        width: 800px;
        margin-left: 20px;
        margin-top : 30px;
        font-size : 17px;
        font-weight: bolder ;
        text-shadow: h-shadow v-shadow blur-radius color;

    }

    #doc_delete .row{
        width: 800px;
        margin-left: 20px;
        margin-top : 30px;
        font-size : 17px;
        font-weight: bolder ;
        text-shadow: h-shadow v-shadow blur-radius color;
    }

    #addDocDiv .row{
        width: 800px;
        margin-left: 20px;
        margin-top : 30px;
        font-size : 17px;
        font-weight: bolder ;
        text-shadow: h-shadow v-shadow blur-radius color;
    }

    #location_enter input {
        border-radius: 10px ;
        height:30px;
    }

    #add_Pat input {
        border-radius: 10px ;
        height:30px;
    }

    #del_Pat input {
        border-radius: 10px ;
        height:30px;
    }

    #doc_modify2 input {
        border-radius: 10px ;
        height:30px;
    }

    #doc_modify input {
        border-radius: 10px ;
        height:30px;
    }
    #doc_delete input{
        border-radius: 10px ;
        height:30px;
    }

    #addDocDiv input{
        border-radius: 10px ;
        height:30px;
    }

    #add_PatDet input {
        border-radius: 10px ;
        height:30px;
    }
    
    #location_enter textarea {
        border-radius: 10px;
    }

    #loc_delete .row{
        width: 800px;
        
        margin-left: 20px;
        margin-top : 30px;
        font-size : 17px;
        font-weight: bolder ;
        text-shadow: h-shadow v-shadow blur-radius color;
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
                
                $stmt->bind_param("i", $_SESSION['userId']);
                
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
        <span style="font-size:45px; margin-top:2px;"><b><i> ADMIN PANEL  </i></b></span>
    </div>

    <!-- image below nav -->
    <div class="background container-fluid mt-3 ml-0 mr-0 w-100" style="height:'20%' ; ">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">   
        <div class="carousel-inner" style="max-height: 400px;">
            <div class="carousel-item active">
        
                <img src="images/admin.jpg" class="bckg d-block w-100" alt="Image 1" > 
            </div>
        </div>
        </div>
    </div>   
       

    <!-- middle container : which would contain all admin operations  -->
    <div class="container middle" >
        <div class="row">
            
            <div id="left" class="col-md-3" >
                <div class="row title" style="border-radius:60px;";>
                    <h1> <?php echo strtoupper($name) ?> </h1>
                </div>
                
                <div class="row title">
                    <button id="details" class="btn btn-primary" style="height:35px; width:500px; font-size:20px"> Admin Details </button>
                </div>
                <!-- <hr style="border:6px solid black;"> -->
                <div class="row features title" style="margin-top:50px;">
                    <button id="location" class="btn btn-success" style="height:35px; width:500px; font-size:20px; "> Add Hospital Location </button>
                </div>
                <div class="row features title" style="margin-top:20px;">
                    <button id="deleteLoc" class="btn btn-success" style="height:35px; width:500px; font-size:20px; "> Delete Hospital Location </button>
                </div>
                <!-- View Doctors  -->
                <div class="row features title" style="margin-top:20px;">
                    <button id="viewDoc" class="btn btn-warning text-light" style="height:35px; width:500px; font-size:20px; "> View Doctors </button>
                </div>
                <!-- add users as doctors -->
                <div class="row features title" style="margin-top:20px;">
                    <button id="addDoc" class="btn btn-warning text-light" style="height:35px; width:500px; font-size:22px; "> Add Doctor </button>
                </div>
                <!-- delete doctor  -->
                <div class="row features title" style="margin-top:20px;">
                    <button id="deleteDoc" class="btn btn-warning text-light" style="height:35px; width:500px; font-size:22px; "> Delete Doctor </button>
                </div>

                <!-- modify Doc -->
                <div class="row features title" style="margin-top:20px;">
                    <button id="modifyDoc" class="btn btn-warning text-light" style="height:35px; width:500px; font-size:22px; "> Modify Doctor </button>
                </div>
                <!-- View Patients -->
                <div class="row features title" style="margin-top:20px;">
                    <button id="viewPat" class="btn btn-danger text-light" style="height:35px; width:500px; font-size:22px; "> View Patients  </button>
                </div>

                <!-- Add Patient -->
                <div class="row features title" style="margin-top:20px;">
                    <button id="addPat" class="btn btn-danger text-light" style="height:35px; width:500px; font-size:22px; "> Add Patient  </button>
                </div>

                <!-- Delete patient  -->
                <div class="row features title" style="margin-top:20px;">
                    <button id="delPat" class="btn btn-danger text-light" style="height:35px; width:500px; font-size:22px; "> Delete Patient  </button>
                </div>

                <!-- Add Patient Details -->
                <div class="row features title" style="margin-top:20px;">
                    <button id="addPatDet" class="btn btn-danger text-light" style="height:35px; width:500px; font-size:22px; "> Add Patient Medical History  </button>
                </div>

            </div>
            <script>
                $(document).ready(function(){
                    $("#details").click(function(){
                        $("#admin_details").toggle();
                    });

                    $("#location").click(function(){
                        $("#location_enter").toggle();
                    });

                    $("#deleteLoc").click(function(){
                        console.log("deleye log clciked");
                        $("#loc_delete").toggle();
                    });

                    $("#viewDoc").click(function(){
                        $("#view_Doc").toggle();
                    });

                    $("#addDoc").click(function(){
                        $("#addDocDiv").toggle();
                    });

                    $("#deleteDoc").click(function(){
                        $("#doc_delete").toggle();
                    });

                    $("#modifyDoc").click(function(){
                        $("#doc_modify").toggle();
                    });

                    $("#viewPat").click(function(){
                        $("#view_Pat").toggle();
                    });

                    $("#addPat").click(function(){
                        $("#add_Pat").toggle();
                    });

                    $("#delPat").click(function(){
                        $("#del_Pat").toggle();
                    });

                    $("#addPatDet").click(function(){
                        $("#add_PatDet").toggle();
                    });
                });
            </script>

            <?php

            ?>
            <div id="right" class="col-md-9">
                
                <div id="admin_details" class="ml-5">
                    <div class="block row mt-5">
                        <div class="col-md-4"><label for=""> Full Name : </label></div>
                        <div class="col-md-4"><label for=""> <?php echo $name ; ?> </label></div>
                    </div>

                    <div class="block row mt-5">
                        <div class="col-md-4"><label for=""> Address : </label></div>
                        <div class="col-md-4"><label for=""> <?php echo $row['address'] ; ?> </label></div>
                    </div>

                    <div class="block row mt-5">
                        <div class="col-md-4"><label for=""> CNIC : </label></div>
                        <div class="col-md-4"><label for=""> <?php echo $row['cnic'] ; ?> </label></div>
                    </div>

                    <div class="block row mt-5">
                        <div class="col-md-4"><label for=""> Phone : </label></div>
                        <div class="col-md-4"><label for=""> <?php echo $row['phone'] ; ?> </label></div>
                    </div>

                    <div class="block row mt-5">
                        <div class="col-md-4"><label for=""> Email : </label></div>
                        <div class="col-md-4"><label for=""> <?php echo $row['email'] ; ?> </label></div>
                    </div>

                    <div class="block row mt-5">
                        <div class="col-md-4"><label for=""> Department : </label></div>
                        <div class="col-md-4"><label for=""> ADMINISTRATION </label></div>
                    </div>

                    <div class="block row mt-5">
                        <div class="col-md-4"><label for=""> Designation : </label></div>
                        <div class="col-md-4"><label for=""> <?php echo $row['designation'] ; ?> </label></div>
                    </div>

                    <div class="block row mt-5">
                        <div class="col-md-4"><label for=""> City : </label></div>
                        <div class="col-md-4"><label for=""> <?php echo $row['city'] ; ?> </label></div>
                    </div>
                </div>
                <!-- end of first feature  -->

                <!-- start of location  -->
                
                    <div id="location_enter" class="ml-5">
                        <form action="" method="post">
                        <div class=" row mt-5">
                            <div class="col-md-4"><label for=""> Enter City : </label></div>
                            <input type="text" id="city" name="city">
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-4"><label for=""> Enter Country :  </label></div>
                            <input type="text" id="country" name="country">
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-4"><label for=""> Enter Address : </label></div>
                            <input type="text" id="address" name="address">
                        </div>
                        
                        <div class="row mt-5">
                            <div class="col-md-4"><label for=""> Enter Description : </label></div>
                            <textarea name="description" id="description" rows="5" cols="30">
                                
                            </textarea>
                        </div>

                        <div class="row mt-5">
                            <input type="submit" name="locationSubmit" id="locationSubmit">
                        </div>
                        </form>
                    </div>

                    <?php
                        $city = isset($_POST['city']) ? $_POST['city'] : '';
                        $country = isset($_POST['country']) ? $_POST['country'] : '';
                        $address = isset($_POST['address']) ? $_POST['address'] : '';
                        $description = isset($_POST['description']) ? $_POST['description'] : '';
                        // echo '<script>console.log(' . $city. $country. ');</script>';
                        if (isset($_POST['locationSubmit']))
                        {
                            echo '<script>console.log("Submit button clicked");</script>';
                            // getting numbers
                            $query = "SELECT * FROM location WHERE locationId LIKE 'LOC-%' ORDER BY locationId DESC LIMIT 1;";
                            $result = mysqli_query($conn, $query );
                            $a="LOC-";
                            // Fetch the row as an associative array
                            $row = mysqli_fetch_assoc($result);
                            
                            if ( $row == null){
                                echo '<script>console.log(" NULL HE ");</script>';
                                $number = 1;
                            }
                            else{
                                echo '<script>console.log("Already a row present");</script>';
                                $number = intval(substr($row['locationId'], -1));
                                $number = $number + 1 ;
                                echo "<script>console.log('location id is: ".$number."');</script>";

                            }

                            $locationId = $a . strval($number);
                            echo "<script>console.log('location id is: ".$locationId."');</script>";

                            $stmt = $conn->prepare("INSERT INTO location (locationId, city, address, country, description) 
                            VALUES (?, ?, ?, ?, ?)");

                            $stmt->bind_param("sssss", $locationId, $city, $address, $country, $description);

                            if ($stmt->execute()) {
                                echo '<script>console.log("Query  executed ");</script>';
                                echo '<script>window.location.href="admin.php";</script>';
                                echo 
                                '<script>
                                    var alert = document.getElementById("alert");
                                    alert.innerHTML = " LOCATION Successfully inserted";
                                </script>';
                            } 
                            else {
                            // echo "Query NOT executed";
                                echo '<script>console.log("Query NOT executed ");</script>';
                                echo 
                                '<script>
                                    alert.innerHTML = " LOCATION Could not be inserted";
                                    alert.style.backgroundColor = red ; 
                                </script>';
                            }

                            mysqli_close($conn);
                        }
                    ?>

                    <!-- location delete -->
                    <div id="loc_delete" class="ml-5">
                        <form action="" method="post">
                            <div class="row mt-5">
                                <div class="col-md-4"><label for=""> Enter location id :  </label></div>
                                <input type="text" id="locationId" name="locationId">
                            </div>
                            
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Enter City : </label></div>
                                <input type="text" id="locCity" name="locCity">
                            </div>

                            <div class="row mt-5">
                                <input type="submit" name="locSubmit" id="locSubmit">
                            </div>
                        </form>
                    </div>

                    <?php
                        if (isset($_POST['locSubmit']))
                        {
                            $locationId = $_POST['locationId'];
                            $city2 = $_POST['locCity'];
                            $query3 = "DELETE FROM location WHERE locationId ='".$locationId."'and city='" .$city2 ."';";

                            if( mysqli_query($conn, $query3 )){
                                echo '<script>console.log("Query  executed ");</script>';
                                echo '<script>window.location.href="admin.php";</script>';
                                echo 
                                '<script>
                                    var alert1 = document.getElementById("alert");
                                    alert1.innerHTML = " LOCATION Successfully deleted";
                                </script>';
                            }
                            else{
                                echo '<script>console.log("Query NOT executed ");</script>';
                                echo 
                                '<script>
                                    alert.innerHTML = " LOCATION Could not be inserted";
                                    alert.style.backgroundColor = red ; 
                                </script>';
                            }
                        }
                    ?>


                    <div id="addDocDiv" class="ml-5">
                        <form action="" method="post">
                            <div class="row mt-5">
                                <div class="col-md-4"><label for=""> Name :  </label></div>
                                <input type="text" id="docNameAdd" name="docNameAdd">
                            </div>
                            
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Phone :  </label></div>
                                <input type="text" id="docPhone" name="docPhone">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Email :  </label></div>
                                <input type="text" id="docEmail" name="docEmail">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Cnic :  </label></div>
                                <input type="text" id="docCnic" name="docCnic">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Address :  </label></div>
                                <input type="text" id="docAddress" name="docAddress">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Department :  </label></div>
                                <input type="text" id="docDept" name="docDept">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Designation :  </label></div>
                                <input type="text" id="docDesignation" name="docDesignation">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> City :  </label></div>
                                <input type="text" id="docCity" name="docCity">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Password :  </label></div>
                                <input type="password" id="docPassAdd" name="docPassAdd">
                            </div>


                            <div class="row mt-5">
                                <input type="submit" name="addDocSubmit" id="addDocSubmit">
                            </div>
                        </form>
                    </div>

                    <?php
                        $name = $_POST['docNameAdd'] ?? '';
                        $email = $_POST['docEmail'] ?? '';
                        $cnic = $_POST['docCnic'] ?? '';
                        $address = $_POST['docAddress'] ?? '';
                        $phone = $_POST['docPhone'] ?? '';
                        $pass = $_POST['docPassAdd'] ?? '';
                        $designation = $_POST['docDesignation'] ?? '';
                        $department = $_POST['docDept'] ?? '';
                        $city = $_POST['docCity'] ?? '';


                        if(isset($_POST['addDocSubmit'])){
                            // $patient = $_POST['doctor'];
                            echo '<script>console.log("doctor selekcted ");</script>';
                            if ( $pass ){
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
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ? , ?)");
                
                                $stmt->bind_param("ssssssssss", $userId, $name, $address, $cnic, $phone, $email, $department, $designation, $pass , $city);
                
                                if ($stmt->execute()) {
                                    echo '<script>console.log("Query  executed ");</script>';
                                    echo '<script>window.location.href="admin.php";</script>';
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
                    ?>


                    <!-- delete doctor   -->
                    <div id="doc_delete" class="ml-5">
                        <form action="" method="post">
                            <div class="row mt-5">
                                <div class="col-md-4"><label for=""> Enter doctor id :  </label></div>
                                <input type="text" id="docId" name="docId">
                            </div>
                            
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Enter doctor name : </label></div>
                                <input type="text" id="docName" name="docName">
                            </div>

                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Enter doctor password : </label></div>
                                <input type="password" id="docPass" name="docPass">
                            </div>

                            <div class="row mt-5">
                                <input type="submit" name="docDel" id="docDel">
                            </div>
                        </form>
                    </div>

                    <?php
                        if (isset($_POST['docDel']))
                        {
                            $userId = $_POST['docId'];
                            $name = $_POST['docName'];
                            $pass = $_POST['docPass'];
                            $queryD = "DELETE FROM users WHERE userId ='".$userId."'and password='" .$pass ."'and name='" .$name."';";

                            if( mysqli_query($conn, $queryD )){
                                echo '<script>console.log("Query  executed ");</script>';
                                echo '<script>window.location.href="admin.php";</script>';
                                echo 
                                '<script>
                                    var alert1 = document.getElementById("alert");
                                    alert1.innerHTML = " LOCATION Successfully deleted";
                                </script>';
                            }
                            else{
                                echo '<script>console.log("Query NOT executed ");</script>';
                                echo 
                                '<script>
                                    alert.innerHTML = " LOCATION Could not be inserted";
                                    alert.style.backgroundColor = red ; 
                                </script>';
                            }
                        }
                    ?>

                    <!-- modify doctor  -->
                    <div id="doc_modify" class="ml-5">
                        <form id="myForm" method="post">
                            <div class="row mt-5">
                                <div class="col-md-4"><label for=""> Enter DOCTOR ID :  </label></div>
                                <input type="text"  placeholder="" id="docIdMod" name="docIdMod">
                            </div>

                            <div class="row mt-5">
                                <input type="submit" name="docModd" id="docModd" style="margin-bottom:10px;">
                            </div>
                        </form>
                            
                            
                    </div>
                    
                    <script>
                        $(document).ready(function() {
                            $('#myForm').submit(function(event) {
                                // Stop the form from submitting normally
                                event.preventDefault();

                                // Get the input value
                                var docIdModValue = $('#docIdMod').val();
                                console.log(docIdModValue);
                                $("#doc_modify").hide();
                                $("#doc_modify2").show();
                            });
                        });        

                        
                    </script>


                    <?php
                           
  
                            echo '<script>console.log("fddfd");</script>';
                            
                            $qy = "SELECT * FROM users WHERE userId = 'DOC-2';";
                            $result = mysqli_query($conn, $qy);
                            $row = mysqli_fetch_assoc($result);
                        
                    ?>

                    <div id="doc_modify2" class="ml-5">
                        <h2 style="text-shadow: 2px 2px 4px #000000;font-weight:bold; margin-top:10px;"> TO MODIFY A SPECIFIC ATTRIBUTE - ENTER THE MODIFY VALUE </h2>
                        <form  method="post">
                            <div class="row mt-5">
                                <div class="col-md-4"><label for=""> ID [CANNOT BE MODIFIED] :  </label></div>
                                <input type="text"  placeholder="<?php echo $row['userId']; ?>" disabled>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-4"><label for=""> Modify Name :  </label></div>
                                <input type="text" id="docName2" name="docName2" placeholder="<?php echo $row['name']; ?>">
                            </div>
                            
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Modify Phone :  </label></div>
                                <input type="text" id="docPhone2" name="docPhone2" placeholder="<?php echo $row['phone']; ?>">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Modify Email :  </label></div>
                                <input type="text" id="docEmail2" name="docEmail2" placeholder="<?php echo $row['email']; ?>">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Modify Cnic :  </label></div>
                                <input type="text" id="docCnic2" name="docCnic2" placeholder="<?php echo $row['cnic']; ?>">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Modify Address :  </label></div>
                                <input type="text" id="docAddress2" name="docAddress2" placeholder="<?php echo $row['address']; ?>">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Modify Department :  </label></div>
                                <input type="text" id="docDept2" name="docDept2" placeholder="<?php echo $row['department']; ?>">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Modify Designation :  </label></div>
                                <input type="text" id="docDesignation2" name="docDesignation2" placeholder="<?php echo $row['designation'] ?>">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Modify City :  </label></div>
                                <input type="text" id="docCity2" name="docCity2" placeholder="<?php echo $row['city']; ?>">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Modify Password :  </label></div>
                                <input type="text" id="docPass2" name="docPass2" placeholder="<?php echo $row['password']; ?>">
                            </div>
                            
                            

                            <div class="row mt-5">
                                <input type="submit" name="docDel2" value="Modify"id="docDel2" style="margin-bottom:10px;">
                            </div>
                        </form>
                        <!-- 

                         -->
                        <script>
                            $("#docDel2").submit(function(){
                                $("#doc_modify2").toggle();
                            });
                        </script> 


                    </div>

                    <!-- view Doctors  -->
                    <div id="view_Doc" class="container mt-5">
                        <h2> View Doctors </h2>
                        <table class="table">
                            <thead>
                            <tr class="active">
                                <th>User Id</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Cnic</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Designation</th>
                                <th>City</th>
                                <th>Password</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $q32 = "select * from users where userId LIKE 'DOC%';
                                ";
                                $result = $conn->query($q32);
                                while($row = $result->fetch_assoc()) {                                
                            ?>      
                            <tr class="success">
                                <td> <?php echo $row['userId']; ?> </td>
                                <td> <?php echo $row['name']; ?> </td>
                                <td> <?php echo $row['address']; ?> </td>
                                <td> <?php echo $row['cnic']; ?> </td>
                                <td> <?php echo $row['phone']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['department']; ?> </td>
                                <td> <?php echo $row['designation']; ?> </td>
                                <td> <?php echo $row['city']; ?> </td>
                                <td> <?php echo $row['password']; ?> </td>
                            </tr>

                            <?php
                                }
                            ?>
                            
                            </tbody>
                        </table>
                    </div>
                    <!-- end -->



                    <!-- View patients -->
                    <div id="view_Pat" class="container mt-5">
                        <h2> View Patients </h2>
                        <table class="table" style="border-radius:9px;">
                            <thead>
                            <tr class="active">
                                <th>User Id</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Cnic</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Designation</th>
                                <th>City</th>
                                <th>Password</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $q33 = "select * from users where userId LIKE 'PAT%';
                                ";
                                $result = $conn->query($q33);
                                while($row = $result->fetch_assoc()) {                                
                            ?>      
                            <tr class="success">
                                <td> <?php echo $row['userId']; ?> </td>
                                <td> <?php echo $row['name']; ?> </td>
                                <td> <?php echo $row['address']; ?> </td>
                                <td> <?php echo $row['cnic']; ?> </td>
                                <td> <?php echo $row['phone']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['department']; ?> </td>
                                <td> <?php echo $row['designation']; ?> </td>
                                <td> <?php echo $row['city']; ?> </td>
                                <td> <?php echo $row['password']; ?> </td>
                            </tr>

                            <?php
                                }
                            ?>
                            
                            </tbody>
                        </table>
                    </div>
                    <!--  -->


                    <!-- Add Patient  -->
                    <div id="add_Pat" class="ml-5">
                        <form action="" method="post">
                            <div class="row mt-5">
                                <div class="col-md-4"><label for=""> Name :  </label></div>
                                <input type="text" id="patNameAdd" name="patNameAdd">
                            </div>
                            
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Phone :  </label></div>
                                <input type="text" id="patPhone" name="patPhone">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Email :  </label></div>
                                <input type="text" id="patEmail" name="patEmail">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Cnic :  </label></div>
                                <input type="text" id="patCnic" name="patCnic">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Address :  </label></div>
                                <input type="text" id="patAddress" name="patAddress">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Department :  </label></div>
                                <input type="text" id="patDept" name="patDept">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Designation :  </label></div>
                                <input type="text" id="patDesignation" name="patDesignation">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> City :  </label></div>
                                <input type="text" id="patCity" name="patCity">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Password :  </label></div>
                                <input type="password" id="patPassAdd" name="patPassAdd">
                            </div>


                            <div class="row mt-5">
                                <input type="submit" name="addPatSubmit" id="addPatSubmit">
                            </div>
                        </form>
                    </div>

                    <?php
                        $name = $_POST['patNameAdd'] ?? '';
                        $email = $_POST['patEmail'] ?? '';
                        $cnic = $_POST['patCnic'] ?? '';
                        $address = $_POST['patAddress'] ?? '';
                        $phone = $_POST['patPhone'] ?? '';
                        $pass = $_POST['patPassAdd'] ?? '';
                        $designation = $_POST['patDesignation'] ?? '';
                        $department = $_POST['patDept'] ?? '';
                        $city = $_POST['patCity'] ?? '';


                        if(isset($_POST['addPatSubmit'])){
                            // $patient = $_POST['doctor'];
                            echo '<script>console.log("doctor selekcted ");</script>';
                            if ( $pass ){
                                $a = "PAT-";
                                
                                // getting numbers
                                $query = "SELECT * FROM users WHERE userId LIKE 'PAT-%' ORDER BY userId DESC LIMIT 1;";
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
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ? , ?)");
                
                                $stmt->bind_param("ssssssssss", $userId, $name, $address, $cnic, $phone, $email, $department, $designation, $pass , $city);
                
                                if ($stmt->execute()) {
                                    echo '<script>console.log("Query  executed ");</script>';
                                    echo '<script>window.location.href="admin.php";</script>';
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
                    ?>



                    <!-- Delete Patient  -->
                    <div id="del_Pat" class="ml-5">
                        <form action="" method="post">
                            <div class="row mt-5">
                                <div class="col-md-4"><label for=""> Enter Patient id :  </label></div>
                                <input type="text" id="patId" name="patId">
                            </div>
                            
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Enter Patient name : </label></div>
                                <input type="text" id="patName" name="patName">
                            </div>

                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Enter Patient password : </label></div>
                                <input type="password" id="patPass" name="patPass">
                            </div>

                            <div class="row mt-5">
                                <input type="submit" name="patDel" id="patDel">
                            </div>
                        </form>
                    </div>

                    <?php
                        if (isset($_POST['patDel']))
                        {
                            $userId = $_POST['patId'];
                            $name = $_POST['patName'];
                            $pass = $_POST['patPass'];
                            $queryr = "DELETE FROM users WHERE userId ='".$userId."'and password='" .$pass ."'and name='" .$name."';";

                            if( mysqli_query($conn, $queryr )){
                                echo '<script>console.log("Query  executed ");</script>';
                                echo '<script>window.location.href="admin.php";</script>';
                                echo 
                                '<script>
                                    var alert1 = document.getElementById("alert");
                                    alert1.innerHTML = " LOCATION Successfully deleted";
                                </script>';
                            }
                            else{
                                echo '<script>console.log("Query NOT executed ");</script>';
                                echo 
                                '<script>
                                    alert.innerHTML = " LOCATION Could not be inserted";
                                    alert.style.backgroundColor = red ; 
                                </script>';
                            }
                        }
                    ?>
                    <!--  -->


                    <!-- Add Patient Medical History  -->
                    <div id="add_PatDet" class="ml-5">
                        
                        

                        <form action="" method="post">
                            <h1 class="mt-5 "> Enter Patients Medical History </h1>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Enter id : </label></div>
                                <input type="text" name="id23" value="" id="id23">
                            </div>
                            <div class=" row mt-5">
                                <div class="col-md-4"><label for=""> Enter name : </label></div>
                                <input type="text" id="name" name="name">
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-4"><label for=""> Enter any previous illness or surgeries :  </label></div>
                                <input type="text" id="illness" name="illness">
                            </div>

                            <div class="row mt-5">
                                <div class="col-md-4"><label for=""> Enter any Chronic conditions (e.g. diabetes, asthma) : </label></div>
                                <input type="text" id="condition" name="condition">
                            </div>
                            
                            <div class="row mt-5">
                                <div class="col-md-4"><label for=""> Enter any Allergies : </label></div>
                                <input type="text" id="allergies" name="allergies">
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-4"><label for=""> Enter Medications currently taken : </label></div>
                                <textarea name="medication" id="medication" cols="30" rows="4"></textarea>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-4"><label for=""> Enter vaccines and immunizations you have taken till now : </label></div>
                                <textarea name="vaccine" id="vaccine" cols="30" rows="4"></textarea>
                            </div>
                            

                            <div class="row mt-5">
                                <input type="submit" name="historySubmit" id="historySubmit">
                            </div>
                        </form>

                        <?php
                        if(isset($_POST['historySubmit'])) {

                            // Get input values
                            $id = $_POST['id23'];
                            $name = $_POST['name'];
                            $illness = $_POST['illness'];
                            $condition = $_POST['condition'];
                            $allergies = $_POST['allergies'];
                            $medication = $_POST['medication'];
                            $vaccine = $_POST['vaccine'];

                            // Prepare and execute SQL query
                            $sql = "INSERT INTO medicalhistory (id, name, illness, `condition`, allergies, medication, vaccine)
                                    VALUES (?, ?, ?, ?, ?, ?, ?)";

                            $stmt = mysqli_prepare($conn, $sql);

                            mysqli_stmt_bind_param($stmt, 'sssssss', $id, $name, $illness, $condition, $allergies, $medication, $vaccine);

                            if (mysqli_stmt_execute($stmt)) {
                                // echo "Record inserted successfully";
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }

                            mysqli_close($conn);
                            }
                            ?>
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


