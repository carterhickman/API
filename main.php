<?php
  // Here is where the photos will be loaded into the page and the page will be laid out
  
  //Commented out until login page ready
  //if ($_GET['username'] == $username && $_GET['password'] == $password){}
  if (true)
  {
    $files = glob("STORAGE/*.*");
	for ($i=0; $i<count($files); $i++)
	{
		$num = $files[$i];
		echo '<img style=\"width:250px;height:250px;" src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
		echo "</br>";
	}

  }
  else
  {
    //Puts you back at the login page.

  }
?>
