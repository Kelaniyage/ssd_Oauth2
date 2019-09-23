<?php
    session_start();
    require_once "google-api/vendor/autoload.php";
   // $gClient = new \GuzzleHttp\Client(['verify' => false]);
    $gClient= new Google_Client();
    $gClient->setClientId("473472713855-oju72re42utpvli06mac0ptrmuc50us3.apps.googleusercontent.com");
    $gClient->setClientSecret("45oXsVZDZgk_hMUZRZpL0N_L");
    $gClient->setApplicationName("SSD_Oauth");
    $gClient->setRedirectUri("http://localhost/ssd-Oauth/callback.php");
    $gClient->addScope("https://www.googleapis.com/auth/plus.login  https://www.googleapis.com/auth/userinfo.email");




?>