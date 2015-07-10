<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Json\Exception;

use UnexpectedValueException;
use Exception;

class JsonUnsupportedTypeException extends UnexpectedValueException implements
    JsonException
{
    public function __construct(
        $message = "A value of a type that cannot be encoded was given.",
        $code = 8,
        Exception $previous = null
    ) {
        parent::__construct(
            $message,
            $code,
            $previous
        );
    }
}
