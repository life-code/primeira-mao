<?php

namespace PrimeiraMao\Contracts\Http;

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
interface Request
{
    /**
     * Get request data
     * 
     * @return mixed
     */
    public function getData();
    
    /**
     * Get request headers
     * 
     * @return array
     */
    public function getHeaders() : array;
    
    /**
     * Get request method
     * 
     * @return string
     */
    public function getMethod() : string;
    
    /**
     * Get request URL
     * 
     * @return string
     */
    public function getUrl() : string;
    
    /**
     * Get response class
     * 
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function getResponseClass();
    
    /**
     * Create response
     * 
     * @param mixed $data
     * @param array $info
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function createResponse($data, array $info);
}