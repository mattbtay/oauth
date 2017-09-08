<?php
require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

// keys and tokens
$consumer_key = 'EtmsBy4ZP0HErQreacxg';
$consumer_secret = 'RyZoTI8xt6CY9yLXZwla7BUMWwECTH0CDkd3xhpZVis';
$access_token = '16320748-Xf6LwZhdWgzsa6musuiOyAQQC8wiqg5UYrvCoWGg';
$access_token_secret = 'ap8kdrP0LR8tBw4OnWeI69lBQV58S7wYKkOtzBJFPA';

// connect API
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

// get tweets
$status = $connection->get("statuses/user_timeline", ["count" => 1, "exclude_replies" => true, "user_id" => "16320748", "include_rts" => false]);

$statusText = $status[0]->text;

?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Hi, I'm Matt.</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

  </head>

  <body>

    <div class="status__wrap">

        <div class="status__head">

          <img src="img/headshot.png" alt="Hey look, that's me.">

        </div>

        <div class="status__tweet talk-bubble tri-right round left-in">
          <p id="tweetText" class="status__tweet--text"><?php echo $statusText ?></p>
        </div>


    </div>

    <script type="text/javascript" src="scripts/anchorme.min.js"></script>
    <script type="text/javascript" src="scripts/main.min.js"></script>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-7711610-2', 'auto');
  ga('send', 'pageview');

</script>
