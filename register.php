<?php
include "connection.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180348448-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-180348448-1');
  </script>


    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid" style="margin-bottom:0px;">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Calibre Clinch</a>
    </div>
  </div>
</nav>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Details</h2>
                    <form action="" method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name"required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Username" name="username"required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Password" name="password"required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email"required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Contact" name="contact"required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="School/College" name="school"required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Class/Year" name="class"required>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit"name="submit1">Register & Pay</button>
                        </div>
                        <div class="alert alert-success" id="success" style="margin-top:10px;display: none">
                          <strong>Success!</strong> Account Registration Successful!
                          </div>

                          <div class="alert alert-danger" id="failure" style="color: white;margin-top: 10px;display: none">
                            <strong>Already Exist!</strong> This usernames already exists!
                            </div>
                            </form>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>


    <?php
    if(isset($_POST["submit1"]))
    {
      $count=0;
      $res = mysqli_query($link,"select * from registration where username='$_POST[username]'") or die(mysqli_error($link));
      $count = mysqli_num_rows($res);

      if($count>0)
      {
        ?>
        <script type="text/javascript">
          document.getElementById("success").style.display = "none";
          document.getElementById("failure").style.display = "block";
        </script>
        <?php
      }
      else {
        mysqli_query($link,"insert into registration values(NULL,'$_POST[name]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$_POST[school]','$_POST[class]')") or die(mysqli_error($link));
        ?>
        <script type="text/javascript">
          document.getElementById("success").style.display="none";
          document.getElementById("failure").style.display="none";
          window.location="https://www.instamojo.com/@mohitnuwal1999/ldf5d4db37a4f438096b5092f5c9b0f1c/";
        </script>

        <?php
      }
    }
     ?>


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
