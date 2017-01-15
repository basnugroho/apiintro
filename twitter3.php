<?php
    require_once('TwitterAPIExchange.php');
    /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
    require_once('setting.php');
    $url = "https://api.twitter.com/1.1/statuses/update.json";
    $requestMethod = "POST";
    $postfields = array(
        'status' => 'this a tweet from API6');
    $twitter = new TwitterAPIExchange($settings);
    echo $twitter->buildOauth($url, $requestMethod)
        ->setPostfields($postfields)
        ->performRequest();
?>