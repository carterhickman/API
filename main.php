<?php
/**
@file main.php
@brief main program of the project. User enters their username and Password, check validity, calls upload.php to load images
@author Daniel Ingram 
**/

?>


<?php //Links the style sheet to the page ?>

<body class="MainBody">
  <link rel="stylesheet" type="text/css" href="Style/style.css">
  <link rel="stylesheet" type="text/css" href="Style/bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <center>
 <div class='container'>
 <div class="gallery">
  <?php
    // Here is where the photos will be loaded into the page and the page will be laid out
    //Username and password for testing purposes:
    $username = 'admin';
    $password = 'admin';

    //Default fillers for user name and Password
    $submittedUserName = '';
    $submittedPassword = '';

    //this is a test


    //This is needed because in the event the submission was successful, there would be no username
    //and password attached to the main page.
    if (isset($_POST['username']) && isset($_POST['password']))
    {
      $submittedUserName = $_POST['username'];
      $submittedPassword = $_POST['password'];
    }
    //Looking for if the username and password are correct or its returning from the upload page.
    if (($submittedUserName == $username && $submittedPassword == $password) || !empty($_GET['upload']))
    {
      //Moved photo upload method to only be displayed by php
      echo "</br></br>";
      echo "<div class=\"col-lg-12\">";
      echo "<form class=\"photoSubmission\" action=\"upload.php\" method=\"post\" enctype=\"multipart/form-data\">Select new images to upload:  <input type=\"file\" class=\"\" name=\"fileToUpload\" id=\"fileToUpload\"><input type=\"submit\" class=\"btn btn-dark\" value=\"Upload Image\" name=\"submit\"></form>";
      echo "</div>";
      echo "<div class=\"col-lg-12\">";
//IMAGE PRINTING
	  // Image extensions
	  $image_extensions = array("png","jpg","jpeg","gif");

	  // Target directory
	  $dir = 'STORAGE/';
	  if (is_dir($dir)){
	 
	   if ($dh = opendir($dir)){
		$count = 1;

		// Read files
		while (($file = readdir($dh)) !== false){

		 if($file != '' && $file != '.' && $file != '..'){
	 
		  // Thumbnail image path
		  $thumbnail_path = "STORAGE/".$file;

		  // Image path
		  $image_path = "STORAGE/".$file;
	 
		  $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
		  $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

		  // Check its not folder and it is image file
		  if(!is_dir($image_path) && 
			 in_array($thumbnail_ext,$image_extensions) && 
			 in_array($image_ext,$image_extensions)){
	   ?>

		   <!-- Image -->
		   <a href="<?php echo $image_path; ?>">
			<img src="<?php echo $thumbnail_path; ?>" alt="" title=""/>
		   </a>
		   <!-- --- -->
		   <?php
		   $count++;
		  }
		 }
	 
		}
		closedir($dh);
	   }
  }
    }
    else
    {
      //Puts you back at the login page.
      include('login.php');
    }
  ?>
   </div>
</div>
  </center>
</body>
