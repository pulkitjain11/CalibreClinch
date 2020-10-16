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
        <h2>STOCK TRADING</h2>
				<p class="text-1" style="font-size:18.5px;">This program is curated to teach students the ABC's of stock market and their working.</p>
        <p style="font-size:18.5px">This program will cover all these points:-</p>
        <p class="text-2" style="font-size:18px;">1) The 3 W's that will answer clear almost all doubts : <br>
          •<span>What</span> to choose? i.e. catering to the fact that which sector should be chosen for investing.<br>
          •<span>Where</span> to invest? Which company gives the most promising results after investment.<br>
          •<span>Why</span> to invest? why is that company the most suitable choice for investment.</p>
        <p class="text-2" style="font-size:18px;"> 2) For real life risk-free investment experience, students will have to have a demat account. All the necessary information as to how the accoubt has to be made and related information will be given.</p>
        <p class="text-2" style="font-size:18px;"> 3) Registered students will also be taught all about how to study the graphs and trends in share market.</p>
        <p class="text-2" style="font-size:18px;"> 4) Students will be tought how to choose a company for investment and Warren Buffet theory.</p>
        <p class="text-2" style="font-size:18px;"> 5) Live trading and veno sessions on virtual platforms will also be conducted.</p>
        <p class="text-2" style="font-size:18px;"> 6) All doubts regarding these activities will be cleared by the mentor </p>
        <h3>Important Instructions</h3>
        <p style="font-size:18px;">After successful registration and payment, your mentor will call you and you will be added to a whatsapp group for further information.</p>
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
						<input type="text" name="first_name" id="first_name" class="input-text">
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
						<label for="comfirm-password">Comfirm Password</label>
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
						<input type="text" name="contact" id="contact" class="input-text" required>
					</div>
					<div class="form-row form-row-1">
						<label for="school">School/College</label>
						<input type="text" name="school" id="school" class="input-text" required>
					</div>
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="class">Class/Year</label>
						<input type="text" name="class" id="class" class="input-text" required>
					</div>
					<div class="form-row form-row-1">
						<label for="refer">Referred By</label>
						<input type="text" name="refer" id="refer" class="input-text" required>
					</div>
				</div>

				<!-- <div class="form-checkbox">
					<label class="container"><p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>
					  	<input type="checkbox" name="checkbox">
					  	<span class="checkmark"></span>
					</label>
				</div> -->
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
	      $res = mysqli_query($link,"select * from stocks where username='$_POST[username]'") or die(mysqli_error($link));
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
	        mysqli_query($link,"insert into stocks values(NULL,'$_POST[first_name]','$_POST[last_name]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$_POST[school]','$_POST[class]','$_POST[refer]')") or die(mysqli_error($link));
	        ?>
	        <script type="text/javascript">
	          document.getElementById("success").style.display="none";
	          document.getElementById("failure").style.display="none";
	          window.location="https://www.instamojo.com/@mohitnuwal1999/l1b02f350c0634da49091d179a62db612/";
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