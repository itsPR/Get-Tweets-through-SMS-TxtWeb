<?php

?>
<html>
<head>
<meta name="txtweb-appkey" content=""/>
</head>
<body>

<?php
//$html = file_get_html('http://www.indianbadmintonleague.co/');

	require_once('twitteroauth.php');
	
	//Put username of twitter belo to get tweets
	
$twitter_un = "";

//Number of tweets

$num_tweets = 100;

//get consumerkey,secret,token,tokensecret from https://apps.twitter.com/
$consumerkey = "";
$consumersecret = "";
$accesstoken = "";
$accesstokensecret = "";

$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);


echo "Recent tweets from  : <br/>";
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitter_un."&count=".$num_tweets);
foreach($tweets as $tweet) {
	echo "<p>".$tweet->text."</p><br/>";
}

?>