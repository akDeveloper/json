<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Json;

abstract class Decoder
{
    protected $assoc = false;

    protected $depth = 512;

    protected $options = 0;

    protected $error;

    public function __construct($depth = 512, $options = 0)
    {
        $this->depth = $depth;
        $this->options = $options;

        $this->error = new JsonError();
    }

    public function decode($string)
    {
        $decoded = json_decode(
            $string,
            $this->assoc,
            $this->depth,
            $this->options
        );

        if (false === $this->error->hasError()) {
            return $decoded;
        }

        $this->error->throwException();
    }
}
