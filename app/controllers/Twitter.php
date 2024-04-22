<?php
/**
* Function:   Give some functions for use of social networks
* @Creator:   Eduardo Miranda
* @version:   1.0
*/

class Twitter{

	private $notweets = 15;
	private $connection;
	private $consumerkey = "MfGfxTr5j8Ppv7AkLCPEG86No";
	private $consumersecret = "GUrd5hPjCngGkqvROmJOspe6axrKILko1p2cJyUD4s1lxsaLRh";
	private $accesstoken = "577179325-6HeKGfjjfFLQCfOIudBb3ioUf00Iqq0Nn8bjUvEG";
	private $accesstokensecret = "7x8Pq1mKiUFxdu6FGiaeZYxYhR4KIQgI5GzGFqC2DyAUj";
	
	public function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
	  $this->connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
	}

	/**
	*	The action returns a json with the twitter aux file
	*	@return JsonModel
	*/
	public function twitterjson($user){
      $this->getConnectionWithAccessToken($this->consumerkey, $this->consumersecret, $this->accesstoken, $this->accesstokensecret);
      $tweets = $this->connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$user."&count=".$this->notweets);
      return $tweets;
	}
}
?>
