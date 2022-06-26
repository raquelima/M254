<?php
// Sessionhandling starten
session_start();

//Datenbank verbinden
include('include/dbconnector.inc.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>

    <link rel="shortcut icon" href="images/logo.png" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/aa92474866.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    <?php include('include/nav.php'); ?>

    <div class='container bootstrap snippets bootdeys' style='margin-top: 150px;'>
        <div class='row' id='user-profile'>
            <?php

            $query = "SELECT * FROM users WHERE {$_SESSION['id']}=id;";


            $stmt = $mysqli->prepare($query);

            $stmt->execute();

            $result = $stmt->get_result();

            foreach ($result as $value) {
                $firstname = $value['firstname'];
                $lastname = $value['lastname'];
                $email = $value['email'];
                $username = $value['username'];
                $street = $value['street'];
                $city = $value['city'];
                $state = $value['state'];
                $zip = $value['zip'];

                echo "<div class='col-lg-3 col-md-4 col-sm-4'>
                <div class='main-box clearfix'>
                    <h2>{$firstname} {$lastname} </h2>
                    <img src='images/profile.jpeg' alt='' class='profile-img img-responsive center-block'>
                    <div class='profile-label'>";


                echo "<span class='label label-danger'>{$firstname} {$lastname}</span>";

                echo "
                        
                    </div>

                    <div class='profile-details'>
                        <ul class='fa-ul'>
                            <li>Username: <span>{$username}</span></li>
                            <li>Username: <span>{$username}</span></li>

                        </ul>
                    </div>

                </div>
            </div>

            <div class='col-lg-9 col-md-8 col-sm-8'>
                <div class='main-box clearfix'>
                    <div class='profile-header'>
                        <h3><span>User info</span></h3>
                    </div>
                    <form id='profileForm' action='#' method='POST'>

                    <div class='row gutters'>
                        <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
                            <h6 class='mb-3 text-primary'>Personal Details</h6>
                        </div>
                        <div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
                            <div class='form-group' style='margin-top: 10px;'>
                                <label for='firstname'>First Name</label>
                                <input type='text' class='form-control' name='firstname' id='firstname' value='{$firstname}' placeholder='' maxlength='30' required disabled>
                            </div>
                        </div>
                        <div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
                            <div class='form-group' style='margin-top: 10px;'>
                                <label for='lastname'>Last Name</label>
                                <input type='text' class='form-control' name='lastname' id='lastname' value='{$lastname}' placeholder='' maxlength='30' required disabled>
                            </div>
                        </div>
                        <div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
                            <div class='form-group' style='margin-top: 10px;'>
                                <label for='email'>Email</label>
                                <input type='text' class='form-control' name='email' id='email' value='{$email}' placeholder='' maxlength='100' required disabled>
                            </div>
                        </div>
                        <div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
                            <div class='form-group' style='margin-top: 10px;'>
                                <label for='username'>Username</label>
                                <input type='text' class='form-control' name='username' id='username' value='{$username}' pattern='(?=.*[a-z])(?=.*[A-Z])[a-zA-Z]{6,}' placeholder='' maxlength='30' required disabled>
                            </div>
                        </div>
                        <div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
                            <div class='form-group' style='margin-top: 10px;'>
                                <label for='password'>Password</label>
                                <input type='password' class='form-control' name='password' value='{$password}' id='password' pattern='(?=^.{8,}$)((?=.*\d+)(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$' placeholder='' maxlength='255' required disabled>
                            </div>
                        </div>
                        <div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
                            <div class='form-group' style='margin-top: 10px;'>
                                <label for='newPassword'>New Password</label>
                                <input type='password' class='form-control' name='newPassword' value='{$newPassword}' id='newPassword' pattern='(?=^.{8,}$)((?=.*\d+)(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$' placeholder='' maxlength='255' required disabled>
                            </div>
                        </div>
                    </div>
                    <div class='row gutters'>
                        <div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
                            <h6 class='mb-3 text-primary'>Address</h6>
                        </div>
                        <div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
                            <div class='form-group'>
                                <label for='street'>Street</label>
                                <input type='text' class='form-control' name='street' id='street' value='{$street}' placeholder='Enter Street' maxlength='100' disabled>
                            </div>
                        </div>
                        <div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
                            <div class='form-group'>
                                <label for='city'>City</label>
                                <input type='text' class='form-control' name='city' id='city' value='{$city}' placeholder='Enter City' maxlength='30' disabled>
                            </div>
                        </div>
                        <div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
                            <div class='form-group' style='margin-top: 10px;'>
                                <label for='state'>State</label>
                                <input type='text' class='form-control' name='state' id='state' value='{$state}' placeholder='Enter State' maxlength='30' disabled>
                            </div>
                        </div>
                        <div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12'>
                            <div class='form-group' style='margin-top: 10px;'>
                                <label for='zip'>Zip Code</label>
                                <input type='text' class='form-control' name='zip' id='zip' value='{$zip}' placeholder='Zip Code' maxlength='4' disabled>
                            </div>
                        </div>

                    </div>
                    </form>


                </div>

            </div>";
            }
            ?>

        </div>
    </div>

    <?php include('include/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>