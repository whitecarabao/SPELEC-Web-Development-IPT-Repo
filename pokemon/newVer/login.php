
<?php 
session_start();

include "cloudConfig.php";
include "vendor/autoload.php";

if(isset($_GET["code"])){
  $token=$client->fetchAccessTokenWithAuthCode($_GET["code"]);
  $client->setAccessToken($token["access_token"]);
  
  $obj=new Google\Service\Oauth2($client);
  $data=$obj->userinfo->get();
  
  if(!empty($data->email)&&!empty($data->name)){
    
    //if you want to register user details, place mysql insert query here
    
    $_SESSION["email"]=$data->email;
    $_SESSION["name"]=$data->name;
    header("location:begin.php");
  }
}
?>


<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Welcome to the Pokemon Game!</h1>
        <h2>Created by Daryll Gomez using Google OAuth Framework</h2>
        <a href="<?php echo $client->createAuthUrl(); ?>">Login</a>
    </body>
</html>
