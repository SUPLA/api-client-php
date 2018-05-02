<?php

namespace Supla\ApiClient;

use GuzzleHttp\Client;

/**
 * @method \Swagger\Client\Api\AccessIDsApi accessIds()
 * @method \Swagger\Client\Api\ChannelGroupsApi channelGroups()
 * @method \Swagger\Client\Api\ChannelsApi channels()
 * @method \Swagger\Client\Api\ClientAppsApi clientApps()
 * @method \Swagger\Client\Api\IODevicesApi iODevices()
 * @method \Swagger\Client\Api\LocationsApi locations()
 * @method \Swagger\Client\Api\SchedulesApi schedules()
 * @method \Swagger\Client\Api\ServerApi server()
 * @method \Swagger\Client\Api\UsersApi users()
 */
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

    public function __call($name, $arguments) {
        $apiName = ucfirst($name);
        $apiClass = "Swagger\\Client\\Api\\${apiName}Api";
        if (class_exists($apiClass)) {
            return new $apiClass($this->httpClient, new SuplaApiConfiguration($this->server, $this->retrieveToken()));
        } else {
            throw new \BadMethodCallException($name);
        }
    }
}
