<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '142735667275-dl0m8dasp52nskroftud0mt0i7fp9od4.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'PxszUxbeh8pRMvqbOWmPADvH'; //Google client secret
$redirectURL = 'http://localhost:8888/msblog/registration.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('MSclubBlog');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>