<?php

class InvalidProductException extends Exception
{
    public function __construct($message = "Prodotto non valido", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
