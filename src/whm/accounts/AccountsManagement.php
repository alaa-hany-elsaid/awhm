<?php

namespace Alaa\Awhm\whm\accounts;

use Alaa\Awhm\base\APIFunction;

class AccountsManagement extends APIFunction
{

    public function __construct($client)
    {
        parent::__construct($client);
    }


    public function all()
    {
        return $this->client->executeAPICall('listaccts');
    }


    public function delete($cpanel_user_name)
    {
        return $this->client->executeAPICall('removeacct', [
            'query' => [
                'username' => $cpanel_user_name
            ]
        ]);
    }

    public function suspensions()
    {
        return $this->client->executeAPICall('listsuspended');
    }


    public function suspendCpanelUser($cpanel_user_name)
    {
        return $this->client->executeAPICall('suspendacct', [
            'query' => [
                'user' => $cpanel_user_name
            ]
        ]);
    }


    public function unsuspendCpanelUser($cpanel_user_name)
    {
        return $this->client->executeAPICall('unsuspendacct', [
            'query' => [
                'user' => $cpanel_user_name
            ]
        ]);
    }


    public function create($cpanel_user_name, $password, $diskSizeInMegaByte = 0)
    {
        return $this->client->executeAPICall('createacct', [
            'query' => [
                'user' => $cpanel_user_name,
                'pass' => $password,
                'quota' => $diskSizeInMegaByte,
            ]
        ]);
    }
}