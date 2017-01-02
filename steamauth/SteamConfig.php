<?php
//Version 3.2
$steamauth['EF5F9F9C637BDBE5CBFB884CFED55C58'] = ""; // Your Steam WebAPI-Key found at http://steamcommunity.com/dev/apikey
$steamauth['midnoclose.github.io'] = ""; // The main URL of your website displayed in the login page
$steamauth['logoutpage'] = ""; // Page to redirect to after a successfull logout (from the directory the SteamAuth-folder is located in) - NO slash at the beginning!
$steamauth['loginpage'] = ""; // Page to redirect to after a successfull login (from the directory the SteamAuth-folder is located in) - NO slash at the beginning!

// System stuff
if (empty($steamauth['EF5F9F9C637BDBE5CBFB884CFED55C58'])) {die("<div style='display: block; width: 100%; background-color: red; text-align: center;'>SteamAuth:<br>Please supply an API-Key!</div>");}
if (empty($steamauth['midnoclose.github.io'])) {$steamauth[midnoclose.github.io] = $_SERVER['SERVER_NAME'];}
if (empty($steamauth['logoutpage'])) {$steamauth['logoutpage'] = $_SERVER['PHP_SELF'];}
if (empty($steamauth['loginpage'])) {$steamauth['loginpage'] = $_SERVER['PHP_SELF'];}
?>
