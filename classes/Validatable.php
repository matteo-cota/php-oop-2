<?php

trait Validatable
{
    public function validateCreditCard($cardNumber)
    {
        if (!preg_match('/^\d{16}$/', $cardNumber)) {
            throw new InvalidCreditCardException("Numero carta di credito non valido. Deve contenere 16 cifre.");
        }
        return true;
    }
}
