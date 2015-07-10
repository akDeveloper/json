<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Json\Exception;

use UnexpectedValueException;
use Exception;

class JsonControlCharacterException extends UnexpectedValueException
    implements JsonException
{
    public function __construct(
        $message = "Control character error, possibly incorrectly encoded.",
        $code = 3,
        Exception $previous = null
    ) {
        parent::__construct(
            $message,
            $code,
            $previous
        );
    }
}
