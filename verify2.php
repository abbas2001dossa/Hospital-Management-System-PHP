<?php
include "conn.php";
                        // not working ? why
                        if (isset($_POST['docModd'])){
                            echo '<script> console.log("Doc modd is clicked ! ");</script>';
                            
                            $id2 = $_POST['docIdMod'];
                            $qy = "SELECT * FROM users WHERE userId = '$id2';";
                            $result = mysqli_query($conn, $qy);

                            if (!$result) {
                                echo "Error: " . mysqli_error($conn);
                                exit();
                            }

                            if (mysqli_num_rows($result) == 0) {
                                echo "No user found with id $id2";
                                exit();
                            }

                            $row = mysqli_fetch_assoc($result);

                            // echo "<script>console.log('user id: " . $row['userId'] . "');</script>";
                            echo '<script>
                                window.location.href="admin.php";    
                                $("#doc_modify2").show();

                            </script>';
                        }
                    ?>