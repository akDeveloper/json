<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Json\Exception;

use RuntimeException;
use Exception;

class JsonUnknownException extends RuntimeException implements JsonException
{
    public function __construct(
        $message = "Unknown error.",
        $code = 0,
        Exception $previous = null
    ) {
        parent::__construct(
            $message,
            $code,
            $previous
        );
    }
}
