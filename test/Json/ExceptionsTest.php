<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Json;

class ExceptionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException           Json\Exception\JsonSyntaxException
     * @expectedExceptionCode       4
     * @expectedExceptionMessage    Syntax error.
     */
    public function testSytaxException()
    {
        $string = '{"name": {"value"}';

        $decoder = new JsonArrayDecoder();

        $decoder->decode($string);
    }
}
