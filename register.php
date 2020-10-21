<?php
include "connection.php";
 ?>

<!DOCTYPE html>
<html>
<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180348448-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180348448-1');
</script>

<!-- Google Tag Manager -->
<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PWB4XW3');</script> -->
<!-- End Google Tag Manager -->

    <link rel="icon" href="images/favicon.png" type="image/gif">

	<meta charset="utf-8">
	<title>Register</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style1.css"/>
</head>
<body class="form-v4">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWB4XW3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2>CAMPUS AMBASSADOR</h2>
				<p class="text-1">Listing some of the perks for our campus ambassadors</p>
        <p class="text-2"> <span></span>1) On performing according to the expectations set they will be acknowledged and given a <span>higher position</span> in our company.</p>
        <p class="text-2"> <span>2)</span> They will get a chance to interact with highly intellectual people and expand their <span>knowledge base.</span></p>
        <p class="text-2"> <span>3)</span> <span> Internship certificate</span> will be given after completion of their work.</p>
        <p class="text-2"> <span>4)</span> A chance to <span>learn from a new start-up company.</span> </p>
        <p class="text-2"> <span>5)</span> To get a proper <span>exposure</span> from the very beginning.</p>
				<p class="text-2"> <span>6)</span> <span> Assured incentives</span> will be given to those who surprise us with their hard work and dedication.</p>
        <form action="index.php" method="post">
          <div class="form-left-last">
  					<input type="submit" name="goback" class="account" value="Go Back">
  				</div>
        </form>
			</div>
			<form class="form-detail" action="" method="post" id="myform">
				<h2>REGISTER FORM</h2>
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="first_name">First Name</label>
						<input type="text" name="first_name" id="first_name" class="input-text" required>
					</div>
					<div class="form-row form-row-1">
						<label for="last_name">Last Name</label>
						<input type="text" name="last_name" id="last_name" class="input-text">
					</div>
				</div>
				<div class="form-row">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" class="input-text" required>
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="input-text" required>
					</div>
					<div class="form-row form-row-1">
						<label for="comfirm-password">Confirm Password</label>
						<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
					</div>
				</div>
				<div class="form-row">
					<label for="your_email">Your Email</label>
					<input type="text" name="email" id="email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="contact">Contact</label>
						<input type="text" name="contact" id="contact" class="input-text" pattern="[6-9]{1}[0-9]{9}" required>
					</div>
					<div class="form-row form-row-1">
						<label for="school">School/College</label>
						<input type="text" name="school" id="school" class="input-text" required>
					</div>
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="class">Class/Year</label>
						<input type="number" name="class" id="class" class="input-text" min= "1" max= "15" required>
					</div>
					<div class="form-row form-row-1">
						<label for="refer">Referred By</label>
						<input type="text" name="refer" id="refer" class="input-text" required>
					</div>
				</div>

        <div class="form-checkbox">
					<label class="container"><p>I agree to the <a href="Privacy Policy.pdf" class="text">Terms and Conditions and Privacy Policy</a></p>
					  	<input type="checkbox" name="checkbox">
					  	<span class="checkmark"></span>
					</label>
				</div>
				<div class="form-row-last">
					<input type="submit" name="submit1" class="register" value="Register & Pay">
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
	        mysqli_query($link,"insert into registration values(NULL,'$_POST[first_name]','$_POST[last_name]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$_POST[school]','$_POST[class]','$_POST[refer]')") or die(mysqli_error($link));
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

	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
		// just for the demos, avoids form submit
		jQuery.validator.setDefaults({
		  	debug: true,
		  	success:  function(label){
        		label.attr('id', 'valid');
   		 	},
		});
		$( "#myform" ).validate({
		  	rules: {
			    password: "required",
		    	comfirm_password: {
		      		equalTo: "#password"
		    	}
		  	},
		  	messages: {
		  		first_name: {
		  			required: "Please enter a firstname"
		  		},
		  		last_name: {
		  			required: "Please enter a lastname"
		  		},
		  		your_email: {
		  			required: "Please provide an email"
		  		},
		  		password: {
	  				required: "Please enter a password"
		  		},
		  		comfirm_password: {
		  			required: "Please enter a password",
		      		equalTo: "Wrong Password"
		    	}
		  	}
		}
	 validator.destroy();
);
		// validator.destroy();
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
