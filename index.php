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
    <title>Adobe</title>

    <link rel="shortcut icon" href="images/logo.png" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/aa92474866.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin-style.css">

    <style>
        .bgimg {
            background-image: url('images/10.jpeg');
            background-size: cover;
        }
    </style>

</head>

<body>
    <?php include('include/nav.php'); ?>

    <?php include('include/login.php'); ?>

    <div class="text-left bgimg">
        <div class="row py-lg-5 mx-auto">
            <div class="col-md-6 mt-5">

                <?php
                //wenn Session personalisiert
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
                    echo '<p class="my-5 mx-5 text-white h1">Welcome ', $_SESSION['username'], '!</p>';
                } else {
                    //wenn Session nicht personifiziert
                    echo '<p class="mt-5 mx-5 text-white h1">Changing the world through digital experiences.</p>';
                    echo '<p class="mb-4 mx-5 text-white">Great experiences have the power to inspire, transform, and move the world forward.<br>And every great experience starts with creativity.</p>';
                    echo '<p class="mb-5 mx-5">
                    
                        <a href="" class="btn btn-dark my-2" data-toggle="modal" data-target="#modalSignin">Login</a>
                    </p>';
                }
                ?>
            </div>
        </div>
    </div>

    <div class="album py-4 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


                <div class='col'>
                    <div class='card shadow-sm'>
                        <svg class='bd-placeholder-img card-img-top' width='100%' height='230' role='img' preserveAspectRatio='xMidYMid slice' focusable='false'>
                            <title>Placeholder</title>
                            <image href='images/id.png' height='100%' width='100%' />
                        </svg>

                        <div class='card-body'>
                            <h6 class='card-text'>The next page in layout design.</h6>
                            <p class='card-text'>Get InDesign as part of Adobe Creative Cloud for just</p>
                            <div class='d-flex justify-content-between align-items-center'>
                                <small class='text-muted'>US$20.99/mo.</small>
                                <a href='https://www.adobe.com/de/creativecloud/plans.html?filter=design&plan=individual' class="btn btn-primary rounded-pill" role="button">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col'>
                    <div class='card shadow-sm'>
                        <svg class='bd-placeholder-img card-img-top' width='100%' height='230' role='img' preserveAspectRatio='xMidYMid slice' focusable='false'>
                            <title>Placeholder</title>
                            <image href='images/ps.png' height='100%' width='100%' />
                        </svg>

                        <div class='card-body'>
                            <h6 class='card-text'>Start with Photoshop. Amazing will follow.</h6>
                            <p class='card-text'>Whatever you dream up, you can do with Photoshop.</p>
                            <div class='d-flex justify-content-between align-items-center'>
                                <small class='text-muted'>US$20.99/mo.</small>
                                <a href='https://www.adobe.com/de/creativecloud/plans.html?filter=design&plan=individual' class="btn btn-primary rounded-pill" role="button">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col'>
                    <div class='card shadow-sm'>
                        <svg class='bd-placeholder-img card-img-top' width='100%' height='230' role='img' preserveAspectRatio='xMidYMid slice' focusable='false'>
                            <title>Placeholder</title>
                            <image href='images/ai.png' height='100%' width='100%' />
                        </svg>

                        <div class='card-body'>
                            <h6 class='card-text'>Gorgeous graphics. Absolutely anywhere.</h6>
                            <p class='card-text'>Always crisp, never blurry: With Adobe Illustrator. </p>
                            <div class='d-flex justify-content-between align-items-center'>
                                <small class='text-muted'>US$20.99/mo.</small>
                                <a href='https://www.adobe.com/de/creativecloud/plans.html?filter=design&plan=individual' class="btn btn-primary rounded-pill" role="button">Buy now</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class='col'>
                    <div class='card shadow-sm'>
                        <svg class='bd-placeholder-img card-img-top' width='100%' height='230' role='img' preserveAspectRatio='xMidYMid slice' focusable='false'>
                            <title>Placeholder</title>
                            <image href='images/pr.png' height='100%' width='100%' />
                        </svg>

                        <div class='card-body'>
                            <h6 class='card-text'>Video editing that’s always a cut above.</h6>
                            <p class='card-text'>Premiere Pro is the leading video editing software.</p>
                            <div class='d-flex justify-content-between align-items-center'>
                                <small class='text-muted'>US$20.99/mo.</small>
                                <a href='https://www.adobe.com/de/creativecloud/plans.html?filter=design&plan=individual' class="btn btn-primary rounded-pill" role="button">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col'>
                    <div class='card shadow-sm'>
                        <svg class='bd-placeholder-img card-img-top' width='100%' height='230' role='img' preserveAspectRatio='xMidYMid slice' focusable='false'>
                            <title>Placeholder</title>
                            <image href='images/lr.png' height='100%' width='100%' />
                        </svg>

                        <div class='card-body'>
                            <h6 class='card-text'>Photo editing made for everyone.</h6>
                            <p class='card-text'>Lightroom makes it easy to get your images just right. </p>
                            <div class='d-flex justify-content-between align-items-center'>
                                <small class='text-muted'>US$9.99/mo.</small>
                                <a href='https://www.adobe.com/de/creativecloud/plans.html?filter=design&plan=individual' class="btn btn-primary rounded-pill" role="button">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='col'>
                    <div class='card shadow-sm'>
                        <svg class='bd-placeholder-img card-img-top' width='100%' height='230' role='img' preserveAspectRatio='xMidYMid slice' focusable='false'>
                            <title>Placeholder</title>
                            <image href='images/xd.png' height='100%' width='100%' />
                        </svg>

                        <div class='card-body'>
                            <h6 class='card-text'>Design the incredible.</h6>
                            <p class='card-text'>Create stunningly UI/UX designs.</p>
                            <div class='d-flex justify-content-between align-items-center'>
                                <small class='text-muted'>US$20.99/mo.</small>
                                <a href='https://www.adobe.com/de/creativecloud/plans.html?filter=design&plan=individual' class="btn btn-primary rounded-pill" role="button">Buy now</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>





        </div>

    </div>
    </div>
    <?php include('include/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>


</html>