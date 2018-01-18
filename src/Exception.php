<?php

namespace PFinal\Database;

class Exception extends \RuntimeException
{
    public function __construct($message = "Database Exception", $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}