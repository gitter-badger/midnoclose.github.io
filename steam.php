<?php

require 'steamauth/steamauth.php';

?>
<?php
if(!isset($_SESSION['steamid'])) {

    loginbutton(); //login button

}  else {

    include ('steamauth/userInfo.php'); //To access the $steamprofile array
    //Protected content

    logoutbutton(); //Logout Button
}     
?>