<?php

namespace Alaa\Awhm\utilities;

class Initiator
{


    public static function getHostByIP($address)
    {
        return gethostbyaddr($address);
    }


    public static function checkSSL($domain)
    {
        $read = stream_socket_client("ssl://" . parse_url("http://" . $domain, PHP_URL_HOST) . ":443", $errno, $errstr, 30, STREAM_CLIENT_CONNECT, stream_context_create(array("ssl" => array("capture_peer_cert" => TRUE))));
        return (!is_null(stream_context_get_params($read)));
    }


}