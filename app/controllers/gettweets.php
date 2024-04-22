<?php
	session_start();
	require_once("twitteroauth/twitteroauth.php"); //Path to twitteroauth library
	$t= 1;
	$notweets = 1000;
	if ($_SERVER["QUERY_STRING"] == null){
		$name_user = 'Alyavasa';
        }else{
		$name_user =  $_GET['nombre'];
	}
	$consumerkey = "8iVAjtmqe1wZWsZVTkxQJTCg9";
	$consumersecret = "w9d3zFaMOFCj9RD9afT72baCxfq4n4VAAgRZkZwiJ1I4nXgnmP";
	$accesstoken = "149378786-sPaHN02x9EW3oPottoKlo4wMI9X1eVX6vBHAOKeu";
	$accesstokensecret = "JeFCxjwAtE4UQyke6mrDzponp13xjo6k30WvNg2W8mvuc";
	 
	function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
	  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
	  return $connection;
	}
	for ($i = 1; $i <= 10000;) {
	    $i++;
	}
	$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
	$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$name_user."&count=".$notweets);
	echo json_encode($tweets);

?>
