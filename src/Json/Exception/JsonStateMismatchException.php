<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Json\Exception;

use UnexpectedValueException;
use Exception;

class JsonStateMismatchException extends UnexpectedValueException implements
    JsonException
{
    public function __construct(
        $message = "Invalid or malformed JSON.",
        $code = 2,
        Exception $previous = null
    ) {
        parent::__construct(
            $message,
            $code,
            $previous
        );
    }
}
