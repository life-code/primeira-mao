<?php

namespace PrimeiraMao\Contracts\Credentials;

/**
 * PrimeiraMao API
 * 
 * @type        library
 * @version     0.0.1
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2018 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface Environment
{
    /**
     * Get environment
     * 
     * @return string
     */
    public function getEnv() : string;
    
    /**
     * Get access key
     * 
     * @return string
     */
    public function getAccessKey() : string;
    
    /**
     * Get access secret
     * 
     * @throws \PrimeiraMao\Exceptions\PrimeiraMaoException
     * @return string
     */
    public function getAccessSecret() : string;
    
    /**
     * Get URL
     * 
     * @throws \PrimeiraMao\Exceptions\PrimeiraMaoException
     * @return string
     */
    public function getUrl() : string;
    
    /**
     * Get location
     * 
     * @throws \PrimeiraMao\Exceptions\PrimeiraMaoException
     * @return string
     */
    public function getLocation() : string;
}