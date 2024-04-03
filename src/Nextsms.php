<?php

namespace Hizamariam\Nextsms;

use GuzzleHttp\Client;

class Nextsms
{
    // protected $apiUrl;
    // protected $apiKey;

    public $apiUrl;
    public $apiKey;

    public function __construct($apiUrl,$apiKey)
    {
        $this->apiUrl=$apiUrl;
        $this->apiKey=$apiKey;
    }

    public function send_sms($recipient,$message)
    {
        $client = new Client();
        
        $response = $client->post($this->apiUrl, [
            'headers'=>[
                'Authorization' => 'Bearer' . $this->apiKey,
                'contentType' => 'application/json',
                'Accept' => 'application/json',
            ],
            'json' => [
                'to' => $recipient,
                'message' => $message
            ],
        ]);

        return $response->getBody()->getContents();
    }
}
