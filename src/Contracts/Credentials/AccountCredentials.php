<?php

namespace PrimeiraMao\Contracts\Credentials;

/**
 * PrimeiraMao API
 * 
 * @type        library
 * @version     0.0.2
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2018 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface AccountCredentials
{
    /**
     * Get access_key
     * 
     * @return string
     */
    public function getAccessKey() : string;

    /**
     * Set access_key
     * 
     * @param string $access_key
     * @return $this
     */
    public function setAccessKey(string $access_key);

    /**
     * Get access_secret
     * 
     * @return string
     */
    public function getAccessSecret() : string;

    /**
     * Set access_secret
     * 
     * @param string $access_secret
     * @return $this
     */
    public function setAccessSecret(string $access_secret);

    /**
     * Get attributes to array
     * 
     * @return array
     */
    public function toArray() : array;

    /**
     * Get attributes to string
     * 
     * @return string
     */
    public function encript() : string;
}