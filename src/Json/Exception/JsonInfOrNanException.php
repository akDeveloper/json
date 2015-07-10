<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Json\Exception;

use UnexpectedValueException;
use Exception;

class JsonInfOrNanException extends UnexpectedValueException
{
    public function __construct(
        $message = "One or more NAN or INF values in the value to be encoded.",
        $code = 7,
        Exception $previous = null
    ) {
        parent::__construct(
            $message,
            $code,
            $previous
        );
    }
}
