<?php 
session_start();
if (isset($_SESSION['type'])&& $_SESSION['type']=="admin")

{ 

	?>

 
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

<script type="text/javascript" src="js/editevent.js" charset="UTF-8"></script>
<script type="text/javascript" src="jquery/jquery-2.0.0.min.js" charset="UTF-8"></script>



</head>

 <?php include("cpanel_header.php"); ?>

<body>
<form method="POST" action="sendmail.php" enctype="multipart/form-data">
<input type="file" name="attachment" id="attachment" />
<br>
<input type="text" name="message" value="" />
<br> 
<input type="submit" name="sendnewsletter" value="Send NewsLetter" />
</form>

 <?php include("cpanel_footer.php"); ?>

</body>



 <?php } 
else 
{
	?>


<head>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/design.css" rel="stylesheet">


<script type="text/javascript" src="jquery/jquery-2.0.0.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>



</head>
<body class="bg-success"> 
<div class="bg-success">
<div class="alert alert-danger">
					<h5 />You Need Admin Permission To Log In To The Admin Control Panel</h5>
				</div>

<div class="alert alert-info">
					<h5 />You are about to be redirected to the main page in 5 seconds.
					<h5 />If the page doesn't refresh, please click <a class="btn btn-danger" href="./">here</a>.
</div>

</div>
</body>
<?php

	header("refresh:5; url=./");
}
?>
