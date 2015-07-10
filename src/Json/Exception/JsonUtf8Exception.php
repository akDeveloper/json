<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Json\Exception;

use InvalidArgumentException;
use Exception;

class JsonUtf8Exception extends InvalidArgumentException implements JsonException
{
    public function __construct(
        $message = "Malformed UTF-8 characters, possibly incorrectly encoded.",
        $code = 5,
        Exception $previous = null
    ) {
        parent::__construct(
            $message,
            $code,
            $previous
        );
    }
}
