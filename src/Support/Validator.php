<?php

namespace PrimeiraMao\Support;

/**
 * PrimeiraMao API
 * 
 * @type        library
 * @version     0.0.7
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2018 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
trait Validator
{
    /**
     * Validate email
     * 
     * @param string $email
     * @return bool
     */
    private function validateEmail(string $email) : bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    
    /**
     * Validate URL
     * 
     * @param string $url
     * @return bool
     */
    private function validateUrl(string $url) : bool
    {
        return filter_var($url, FILTER_VALIDATE_URL);
    }
    
    /**
     * Validate JSON
     * 
     * @param mixed $data
     * @return bool
     */
    private function isJSON($data) : bool
    {
        json_decode($data);
        return (json_last_error() === JSON_ERROR_NONE);
    }
}