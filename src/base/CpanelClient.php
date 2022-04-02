<?php

namespace Alaa\Awhm\base;

use Alaa\Awhm\exceptions\SSLException;
use GuzzleHttp\Client as GClient;

class CpanelClient extends  Client
{

    /**
     * @throws SSLException
     */
    public function __construct($domainOrIp, $username, $token)
    {
        $domainOrIp = $this->init($domainOrIp);
        $this->client = new GClient([
            'base_uri' => "https://$domainOrIp:2083/execute/"
        ]);

        $this->defaultOptions['headers'] = [
            'Authorization' => " cpanel $username:$token"
        ];
    }

}