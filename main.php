<?php //Links the style sheet to the page ?>
<body>
  <link rel="stylesheet" type="text/css" href="Style/style.css">
  <link rel="stylesheet" type="text/css" href="Style/bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <center>
  <?php
    // Here is where the photos will be loaded into the page and the page will be laid out
    //Username and password for testing purposes:
    $username = 'admin';
    $password = 'admin';

    //Default fillers for user name and Password
    $submittedUserName = '';
    $submittedPassword = '';
    //This is needed because in the event the submission was successful, there would be no username
    //and password attached to the main page.
    if (isset($_POST['username']) && isset($_POST['password']))
    {
      $submittedUserName = $_POST['username'];
      $submittedPassword = $_POST['password'];
    }
    //Commented out until login page ready
    if (($submittedUserName == $username && $submittedPassword == $password) || !empty($_GET['upload']))
    {
      //Moved photo upload method to only be displayed by php
      echo "<form class=\"photoSubmission\" action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\">Select new images to upload:<input type=\"file\" class=\"\" name=\"fileToUpload\" id=\"fileToUpload\"></br></br></br><input type=\"submit\" class=\"btn btn-dark\" value=\"Upload Image\" name=\"submit\"></form>";
    	//code that displays all files in STORAGE directory
      $files = glob("STORAGE/*.*");
    	for ($i=0; $i<count($files); $i++)
    	{
    		$num = $files[$i];
    		echo '<img class=\'defaultPhoto\' src="'.$num.'" alt="StoredImage'.$i.'">'."&nbsp;&nbsp;";
        //the break only allows us one per row
        //echo "</br>";
    	}
    }
    else
    {
      //Puts you back at the login page.
      include('login.php');
    }
  ?>
  </center>
</body>
