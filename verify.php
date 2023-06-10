<?php
                        include "conn.php";
                        if (isset($_POST['docDel2']))
                        {
                            echo '<script>console.log( id is ' . $id2 . ')</script>';
                            // $userId = $_POST["userId"];
                            $docName2 = $_POST["docName2"];
                            $docPhone2 = $_POST["docPhone2"];
                            $docEmail2 = $_POST["docEmail2"];
                            $docCnic2 = $_POST["docCnic2"];
                            $docAddress2 = $_POST["docAddress2"];
                            $docDept2 = $_POST["docDept2"];
                            $docDesignation2 = $_POST["docDesignation2"];
                            $docPass2 = $_POST["docPass2"];
                            $docCity2 = $_POST["docCity2"];
                            $idOf = $row['userId'];
                            if (isset($_POST['docName2'])) {
                                // Code to modify name
                                if(mysqli_query($conn, "UPDATE users SET name ='$docName2' WHERE userId='$idOf'")){}

                            } elseif (isset($_POST['docPhone2'])) {
                                // Code to modify phone
                                if(mysqli_query($conn, "UPDATE users SET phone ='$docPhone2' WHERE userId='$idOf'")){}

                            } elseif (isset($_POST['docEmail2'])) {
                                // Code to modify email
                                if(mysqli_query($conn, "UPDATE users SET email ='$docEmail2' WHERE userId='$idOf'")){}

                            } elseif (isset($_POST['docCnic2'])) {
                                // Code to modify CNIC
                                if(mysqli_query($conn, "UPDATE users SET cnic ='$docCnic2' WHERE userId='$idOf'")){}

                            } elseif (isset($_POST['docAddress2'])) {
                                // Code to modify address
                                if(mysqli_query($conn, "UPDATE users SET address ='$docAddress2' WHERE userId='$idOf'")){}

                            } elseif (isset($_POST['docDept2'])) {
                                // Code to modify department
                                if(mysqli_query($conn, "UPDATE users SET department ='$docDept2' WHERE userId='$idOf'")){}

                            } elseif (isset($_POST['docDesignation2'])) {
                                // Code to modify designation
                                if(mysqli_query($conn, "UPDATE users SET designation ='$docDesignation2' WHERE userId='$idOf'")){}

                            } elseif (isset($_POST['docPass2'])) {
                                // Code to modify password
                                if(mysqli_query($conn, "UPDATE users SET pass ='$docPass2' WHERE userId='$idOf'")){}

                            }
                            elseif (isset($_POST['docCity2'])){
                                if(mysqli_query($conn, "UPDATE users SET pass ='$docCity2' WHERE userId='$idOf'")){}
                            } 
                            else {
                                // Code to handle no input being set
                            }
                            
                        }
                    ?>