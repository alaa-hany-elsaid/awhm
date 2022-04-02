<?php

namespace Alaa\Awhm\whm\services;

use Alaa\Awhm\base\APIFunction;

class ServicesManagement extends APIFunction
{

    public function __construct($client)
    {
        parent::__construct($client);
    }

    public function restartService($service)
    {
        return $this->client->executeAPICall('restartservice', [
            'query' => [
                'service' => $service
            ]
        ]);
    }

    public function enableService($service)
    {
        return $this->client->executeAPICall('configureservice', [
            'query' => [
                'service' => $service,
                'enabled' => '1'
            ]
        ]);
    }

    public function disableService($service)
    {
        return $this->client->executeAPICall('configureservice', [
            'query' => [
                'service' => $service,
                'enabled' => '0'
            ]
        ]);
    }

    public function getServiceConfig($service)
    {
        return $this->client->executeAPICall('get_service_config', [
            'query' => [
                'service' => $service
            ]
        ]);
    }

    public function getServiceStatus($service )
    {
        return $this->client->executeAPICall('servicestatus', [
            'query' => [
                'service' => $service
            ]
        ]);
    }

}