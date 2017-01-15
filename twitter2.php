<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    require_once('TwitterAPIExchange.php');
    /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
    /*
    $settings = array(
        'oauth_access_token' => "YOUR_OAUTH_ACCESS_TOKEN",
        'oauth_access_token_secret' => "YOUR_OAUTH_ACCESS_TOKEN_SECRET",
        'consumer_key' => "YOUR_CONSUMER_KEY",
        'consumer_secret' => "YOUR_CONSUMER_SECRET"
    );
    */
    require_once('setting.php');
    $url = "https://api.twitter.com/1.1/search/tweets.json";
    $getfield = '?q=#javascript';
    $requestMethod = "GET";

    $twitter = new TwitterAPIExchange($settings);
    
    $string = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest(),$assoc = TRUE);
    echo json_encode($string);

    //different output format
    //$response = $twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest();
    //var_dump(json_decode($response));
?>