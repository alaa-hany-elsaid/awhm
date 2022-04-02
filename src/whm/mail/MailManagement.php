<?php

namespace Alaa\Awhm\whm\mail;

use Alaa\Awhm\base\APIFunction;

class MailManagement extends APIFunction
{

    public function __construct($client)
    {
        parent::__construct($client);
    }


    public function getEmailAccountsOfCpanelUser($cpanel_username)
    {
        return $this->client->executeAPICall('list_pops_for', [
            'query' => [
                'user' => $cpanel_username
            ]
        ]);
    }

}