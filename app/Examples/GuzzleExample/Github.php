<?php namespace App\Examples\GuzzleExample;

use GuzzleHttp\Client;

class Github {

    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client) {
        $this->client = $client;
    }

    function getInfo($username) {
        $response = $this->client->request("GET", "users/$username");

        dd($response);
    }
}
