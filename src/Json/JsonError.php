<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace Json;

if (!defined('JSON_ERROR_RECURSION')) define('JSON_ERROR_RECURSION', 6);
if (!defined('JSON_ERROR_INF_OR_NAN')) define('JSON_ERROR_INF_OR_NAN', 7);
if (!defined('JSON_ERROR_UNSUPPORTED_TYPE')) define('JSON_ERROR_UNSUPPORTED_TYPE', 8);

class JsonError
{
    private $error;

    private $exceptions = array(
        JSON_ERROR_DEPTH            => 'JsonDepthException',
        JSON_ERROR_STATE_MISMATCH   => 'JsonStateMismatchException',
        JSON_ERROR_CTRL_CHAR        => 'JsonControlCharacterExeption',
        JSON_ERROR_SYNTAX           => 'JsonSyntaxException',
        JSON_ERROR_UTF8             => 'JsonUtf8Exception',
        JSON_ERROR_RECURSION        => 'JsonRecursionException',
        JSON_ERROR_INF_OR_NAN       => 'JsonInfOrNanException',
        JSON_ERROR_UNSUPPORTED_TYPE => 'JsonUnsupportedTypeException'
    );

    /**
     * hasError
     *
     * @access public
     * @return boolean
     */
    public function hasError()
    {
        return $this->getError() !== JSON_ERROR_NONE;
    }

    /**
     * Gets last json error.
     *
     * @return int
     */
    public function getError()
    {
        return $this->error ?: ($this->error = json_last_error());
    }

    public function throwException()
    {
        $exception = array_key_exists($this->getError(), $this->exceptions)
            ? __NAMESPACE__ . '\\Exception\\' . $this->exceptions[$this->getError()]
            : __NAMESPACE__ . '\\Exception\\JsonUnknownException';

        throw new $exception();
    }
}
