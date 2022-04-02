<?php

namespace Alaa\Awhm\base;


abstract class  APIFunction
{
    protected   $client;
    public function __construct($client)
    {
        $this->client = $client;
    }
}