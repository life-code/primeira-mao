<?php

namespace PrimeiraMao\Contracts\Http;

/**
 * PrimeiraMao API
 * 
 * @type        library
 * @version     0.0.6
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2018 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface Request
{
    /**
     * Get request method
     * 
     * @return string
     */
    public function getMethod() : string;
    
    /**
     * Get headers
     * 
     * @return array
     */
    public function getHeaders() : array;
    
    /**
     * Set appends
     * 
     * @param array $data
     * @return $this
     */
    public function appends(array $appends);
    
    /**
     * Get URL
     * 
     * @return string
     */
    public function getUrl() : string;
    
    /**
     * Set request data
     * 
     * @param array $data
     * @return $this
     */
    public function setData(array $data);
    
    /**
     * Get request data
     * 
     * @return json
     */
    public function getData();
}