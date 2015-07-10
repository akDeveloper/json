<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Json\Exception;

use LengthException;
use Exception;

class JsonDepthException extends LengthException implements
    JsonException
{
    public function __construct(
        $message = "The maximum stack depth has been exceeded.",
        $code = 1,
        Exception $previous = null
    ) {
        parent::__construct(
            $message,
            $code,
            $previous
        );
    }
}
