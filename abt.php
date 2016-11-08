<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About Us</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<?php
if(isset($_SESSION['SESS_FIRST_NAME']))
{
    include('header_logged_in.php');
}
else
{
    include('header_login.php');
}
?>  


<section class="success" id="about" ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About Us</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Tourneys is a free tournament scheduler and viewer. The tournament scheduling,creating,updating and draw generation presents an easy and convenient forum for sports-enthusiasts. </p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a student looking to play sports you are a passionate about, a professional looking to bust your stress, or a proffessional wanting to display your talent, this forum is the perfect place to be.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="registerform.php" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i>Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>
    </body>
    </html>