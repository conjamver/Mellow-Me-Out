<?php @session_start();
	  if(isset($_SESSION['staff_username']) && $_SESSION['staff_username']!="")
	  {
	  	$logged_in=true;
	  }
	  else
	  {
	    $logged_in=false;
	  }

	  $error_message="";
	  if(isset($_GET['message']))
	  {
	  	$error_message=$_GET['message'];
	  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <!--Icon and Title-->
        <link rel="icon" type="image/png" href="img/favicon.png">
        <title>Account - MellowMeOut</title>
        <!--Keywords for search-->
        <meta name="keywords" content="Massage, eyelash extensions, beauty, melbourne, mellowMeOut, spas, Brow Tint, Aromatherapy Massage, Lymphatic massage, Indian head massage, Body Mud wrap, Body exfoliate, Eyelash Tint, Combat Stress, Revitalise ">
        <!--Description of page-->
        <meta name="description" content="Mellow Me Out wants to be your primary choice for all your beauty and relaxation needs. We have truly soothing and calming pampering experiences available for every client. It’s an ideal place to gather with friends, reconnect with loved ones or turn to as your destination for self-renewal and stress relief.">

        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Mobile view-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="account.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <!-- FONT AWESOME ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <script>
        document.addEventListener("DOMContentLoaded", function(event) { //run when page loads
            nav_Counter=-1;
            //TOGGLE THE CREATE ACCOUNT SECTION
            $("#btn-create").click(function(){
                $("#account-create").slideDown(250);
                $("html, body").animate({ scrollTop: 500 },);
            });


        });
        </script>
    </head>
<!-- Style Sheet for Nav and Footer-->
<style>
    <?php include 'nav_footer.css';?>
</style>

 <!-- ===CODE START=== -->
<body>
 <!-- NAVIGATION BAR CODE -->
<?php include'nav.php';?>
 <!-- End of Nav Code -->

<article id="account-login">
<div class="container">
    <!-- Login Content -->
<div class="row" style="padding:0px; background-color: #ecf0f1">
<div class="col-md-2">

</div>
<div class="col-md-8" id="account-style">
	<?php
		if($logged_in==false)
		{
	?>
    <h1 class="text-center">Staff Sign in</h1>
    <h2 class="text-center"><font color='red'><?php echo $error_message;?></font></h2>
    <form action="action_page.php" method="post">
        <!-- <div class="form-group"> -->
            <!-- <label for="email">Email address:</label> -->
            <!-- <input type="email" class="form-control" id="email"> -->
        <!-- </div>  -->
        <div class="form-group">
            <label for="Username">Username:</label>
            <input type="Username" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="pwd">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
	<?php
		}
		else
		{
	?>
			<h1 class="text-center">You are logged in successfully.</h1>
	<?php
		}
	?>
</div>
<div class="col-md-2">

</div>

</div>
</div>
</article>

<!-- FOOTER CODE-->
<?php include 'footer.php';?>


</body>

</html>
