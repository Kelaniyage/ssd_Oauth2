<?php  

require_once "config.php";

if(isset($_GET['code'])){
    $token=$gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token']=$token;
}
$oAuth =new Google_Service_Oauth2($gClient);
$userDetails = $oAuth->userinfo_v2_me->get();

echo "<pre>";
var_dump($userDetails);

$_SESSION['email']=$userDetails['email'];
$_SESSION['gender']=$userDetails['gender'];
$_SESSION['picture']=$userDetails['picture'];
$_SESSION['givenName']=$userDetails['givenName'];
$_SESSION['familyName']=$userDetails['familyName'];

header('Location: info.php');
exit();




?>