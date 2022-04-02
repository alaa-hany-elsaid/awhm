<?php

namespace Alaa\Awhm\exceptions;


class SSLException extends \Exception
{
    public function __construct($message = "", $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}