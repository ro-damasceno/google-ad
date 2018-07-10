<?php
namespace App\Services\Google;

use Google_Client;

abstract class AbstractGoogleService{

	/** @var Google_Client $_client */
	protected $_client;

	/**
	 * AbstractGoogleService constructor.
	 */
	function __construct () {
		$this->_client = new Google_Client();

		$this->_client->setClientId('1000048593753-r13eia1cep6roi8glpn4c9e48oa3c6k3.apps.googleusercontent.com');
		$this->_client->setClientSecret('p93jNHXI0p2mQXY52up8F_SA');
		$this->_client->setRedirectUri('http://' . getenv ('APP_URL', $_SERVER['HTTP_HOST']) . '/oauth2callback');
		$this->_client->setAccessType('offline');
		$this->_client->setIncludeGrantedScopes(true);

		$this->setSessionToken();
	}

	/**
	 * @return Google_Client
	 */
	public function getGoogleClient() {
		return $this->_client;
	}

	public function setSessionToken() {
		$token = session ('access_token', null);
		if ($token) {
			$this->_client->setAccessToken ($token);
		}
	}
}