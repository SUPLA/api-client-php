<?php
/*
 Copyright (C) AC SOFTWARE SP. Z O.O.

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License
 as published by the Free Software Foundation; either version 2
 of the License, or (at your option) any later version.
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.
 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

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
