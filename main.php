<?php //Links the style sheet to the page ?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
  // Here is where the photos will be loaded into the page and the page will be laid out
  //Username and password for testing purposes:
  $username = 'admin';
  $password = 'admin';
  //Commented out until login page ready
  if ($_POST['username'] == $username && $_POST['password'] == $password)
  {
  	//code that displays all files in STORAGE directory
      $files = glob("STORAGE/*.*");
  	for ($i=0; $i<count($files); $i++)
  	{
  		$num = $files[$i];
  		echo '<img class=\'defaultPhoto\' src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
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
