<?php namespace App\Examples\GuzzleExample;

use GuzzleHttp\Client;

class Wunderlist
{
    public static $BASE_URL = "https://a.wunderlist.com";
    /**
     * @var Client
     */
    protected $client;

    public function __construct(Client $client) {
        $this->client = $client;
    }

    public function getDefaultHeaders() {
        return ['Content-Type'   => 'application/json',
                'X-Access-Token' => getenv('WUNDERLIST_ACCESS_TOKEN'),
                'X-Client-ID'    => getenv('WUNDERLIST_CLIENT_ID')];
    }

    function getLists() {
        try {
            $lists      = $this->client->request('GET', '/api/v1/lists', [
                'headers' => $this->getDefaultHeaders()
            ]);

            $lists      = json_decode($lists->getBody()->getContents(), true);
            $listsNames = [];
            foreach ($lists as $list) {
                $listsNames[] = strtolower($list['title']);
            }

            ksort($listsNames);
            print_r($listsNames);
        } catch (\Exception $ex) {
            dd($ex->getMessage());
        }
    }
}
