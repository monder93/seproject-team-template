<?php 
session_start();
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
                    <h5 />Sorry  , Failed To Register</h5>
                </div>

<div class="alert alert-info">
                    <h5 />You are about to be redirected to the main page in 5 seconds.
                    <h5 />If the page doesn't refresh, please click <a class="btn btn-danger" href="./">here</a>.
</div>

</div>
</body>

<?php

    header("refresh:5; url=./");
?>