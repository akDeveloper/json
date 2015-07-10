<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Json\Exception;

use RuntimeException;
use Exception;

class JsonRecursionException extends RuntimeException implements JsonException
{
    public function __construct(
        $message = "One or more recursive references in the value to be encoded.",
        $code = 6,
        Exception $previous = null
    ) {
        parent::__construct(
            $message,
            $code,
            $previous
        );
    }
}
