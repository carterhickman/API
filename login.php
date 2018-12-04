<?php
/**
@file login.php
@brief html code to creat the login page for the website
@author Carter Hickman
**/

?>



<html>
  <head>
    <title>Bob Catman Photo Storage Login </title>
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <link rel="stylesheet" type="text/css" href="Style/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <body class="MainBody1">
    </br>
      <div class="col-lg-12">
        <center>
          <h1 class="MainLoginHeader">Bobcatman Photo Cloud Storage</h1>
        </center>
      </div>
    </br>
    	<div class="loginbox">
    	<h1 class="loginBoxHeader"> Login Here </h1>
      	<form method="POST" action="main.php">
      		<p> Username </p>
      		  <input type="text" name="username">
      		<p> Password </p>
      		  <input type="password" name="password">
          </br>
      		  <input type="submit" class="btn btn-dark" name="" value="Login">
      	</form>
    	</div>
    </body>
  </head>
</html>
