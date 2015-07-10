<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Json;

use InvalidArgumentException;

class JsonEncoder
{
    protected $depth = 512;

    protected $options = 0;

    protected $error;

    public function __construct($options = 0, $depth = 512)
    {
        $this->depth = $depth;
        $this->options = $options;

        $this->error = new JsonError();
    }

    /**
     * Returns the JSON representation of a value.
     *
     * @link http://php.net/manual/en/function.json-encode.php
     *
     * @param mixed $value The value being encoded.
     *                     Can be any type except a resource.
     * @return string
     */
    public function encode($value)
    {
        if (is_resource($value)) {
            throw new InvalidArgumentException('Value must not be a resource.', 500);
        }

        $encoded = json_encode($value, $this->options, $this->depth);

        if (false === $this->error->hasError()) {
            return $encoded;
        }

        $this->error->throwException();
    }
}
