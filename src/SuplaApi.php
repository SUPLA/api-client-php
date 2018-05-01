<?php

namespace SuplaApi\Client;

use GuzzleHttp\Client;
use Swagger\Client\Api\UsersApi;

class SuplaApi {
    private $server;
    private $tokenRequestData;
    /** @var Client */
    private $httpClient;
    private $token;

    public function __construct($server, $clientId, $secret, $username, $password) {
        $this->server = $server;
        if (strpos($this->server, 'http') !== 0) {
            $this->server = 'https://' . $server;
        }
        $this->tokenRequestData = [
            "client_id" => $clientId,
            "client_secret" => $secret,
            "grant_type" => 'password',
            "username" => $username,
            "password" => $password,
        ];
        $this->httpClient = new Client();
    }

    private function retrieveToken() {
        if ($this->token) {
            return $this->token;
        }
        $response = $this->httpClient->post(
            $this->server . '/oauth/v2/token',
            [\GuzzleHttp\RequestOptions::JSON => $this->tokenRequestData]
        );
        $response = json_decode($response->getBody(), true);
        return $this->token = $response['access_token'];
    }

    /** @return UsersApi */
    public function users() {
        return new UsersApi($this->httpClient, new SuplaApiConfiguration($this->server, $this->retrieveToken()));
    }
}
