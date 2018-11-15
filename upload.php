<?php
$target_dir = "STORAGE/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
        {
          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        }
        else
        {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
        echo "Upload has failed!";
        $uploadOk = 0;
    }
}
//<script type="text/javascript">location.href = 'main.php/?upload=1';</script>
//<script type="text/javascript">location.replace(\"main.php/?upload=1\";</script>
//echo "location.replace(\"main.php/?upload=1\");";
function relocate($url) {
    if ($url == -1) $url = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : '/';
    Header("Location: $url");
    die();
}

relocate('./main.php?upload=1'); // home
?>
