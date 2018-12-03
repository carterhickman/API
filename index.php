<?php
/**
@file index.php
@brief root directory telling the server to show all the odbc_errors
@author Daniel Ingram
**/
 ?>



<?php
  // this is the root directory. Ignore this.
  //Tells server to show all errors given
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  //includes login page next
  include('login.php');
?>
