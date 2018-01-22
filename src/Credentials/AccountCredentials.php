<?php

namespace PrimeiraMao\Credentials;

use PrimeiraMao\Contracts\Credentials\AccountCredentials as AccountCredentialsContract;

/**
 * PrimeiraMao SDK
 * 
 * @type        library
 * @version     1.0.31
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class AccountCredentials implements AccountCredentialsContract
{
    /**
     * access_key PrimeiraMao
     * 
     * @var string
     */
    private $access_key = '';
    
    /**
     * access_secret PrimeiraMao
     * 
     * @var string
     */
    private $access_secret = '';
    
    /**
     * Make new instance of this class
     * 
     * @param \PrimeiraMao\Credentials\Environment $env
     * @return void
     */
    public function __construct(string $access_key = '', string $access_secret = '')
    {
        if ($access_key) {
            $this->setAccessKey($access_key);
        }
        
        if ($access_secret) {
            $this->setAccessSecret($access_secret);
        }
    }

    /**
     * Get access_key
     * 
     * @return string
     */
    public function getAccessKey() : string
    {
        return $this->access_key;
    }

    /**
     * Set access_key
     * 
     * @param string $access_key
     * @return $this
     */
    public function setAccessKey(string $access_key)
    {
        $this->access_key = $access_key;
        
        return $this;
    }

    /**
     * Get access_secret
     * 
     * @return string
     */
    public function getAccessSecret() : string
    {
        return $this->access_secret;
    }

    /**
     * Set access_secret
     * 
     * @param string $access_secret
     * @return $this
     */
    public function setAccessSecret(string $access_secret)
    {
        $this->access_secret = $access_secret;
        
        return $this;
    }

    /**
     * Get attributes to array
     * 
     * @return array
     */
    public function toArray() : array
    {
        return [
            'access_key'    => $this->getAccessKey(),
            'access_secret' => $this->getAccessSecret(),
        ];
    }

    /**
     * Get attributes to string
     * 
     * @return string
     */
    public function encript() : string
    {
        return base64_encode($this->getAccessKey() . ':' . $this->getAccessSecret());
    }
}