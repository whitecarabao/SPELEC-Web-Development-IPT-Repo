<?php
    require "vendor/autoload.php";
  $clientId="931335848297-9uqgq8mjr440hrkagl4bmgq7kgg022cr.apps.googleusercontent.com";
  $clientSecret="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";
  $redirectURI="http://localhost/pokemon/newVer/login.php";
  
  $client=new Google\Client();
  $client->setClientId($clientId);
  $client->setClientSecret($clientSecret);
  $client->setRedirectURI($redirectURI);
  $client->addScope("email");
  $client->addScope("profile");

?>