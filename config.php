<?php 
// Database configuration 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'pinclone'); 
define('DB_USER_TBL', 'users'); 
 
// GitHub API configuration 
define('CLIENT_ID', 'Insert_App_Client_ID'); 
define('CLIENT_SECRET', 'Insert_App_Client_Secret'); 
define('REDIRECT_URL', 'Callback_URL'); 
 
// Start session 
if(!session_id()){ 
    session_start(); 
} 
 
// Include Github client library 
require_once 'src/Github_OAuth_Client.php'; 
 
// Initialize Github OAuth client class 
$gitClient = new Github_OAuth_Client(array( 
    'client_id' => CLIENT_ID, 
    'client_secret' => CLIENT_SECRET, 
    'redirect_uri' => REDIRECT_URL 
)); 
 
// Try to get the access token 
if(isset($_SESSION['access_token'])){ 
    $accessToken = $_SESSION['access_token']; 
}