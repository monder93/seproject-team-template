<?php
include_once 'common.php';



?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Login</title>
</head>
<style>
    .login-panel {
        margin-top: 5px;

</style>

<body>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $lang['MENU_LOGIN']; ?></h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="do_signin.php"  name="theForm" >
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="<?php echo $lang['INFO_EMAIL']; ?>"  name="email" type="email" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="<?php echo $lang['INFO_PASSWORD'] ?>" name="pass" type="password" value="" required >
 <!-- for using angular                                <p class="help=block" ng-show="theForm.pass.$error.required">this field is reqired </p>  -->
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="<?php echo $lang['MENU_LOGIN']; ?>" name="login"  >

                            <!-- Change this to a button or input when using this as a form -->
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

