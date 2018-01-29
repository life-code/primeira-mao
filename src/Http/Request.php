<?php

namespace PrimeiraMao\Http;

use PrimeiraMao\Contracts\Http\Request as RequestContract;
use PrimeiraMao\Http\RequestBuilder;

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
class Request extends RequestBuilder implements RequestContract
{
    /**
     * @var strint
     */
    const POST = 'POST';
    
    /**
     * @var strint
     */
    const PUT = 'PUT';
    
    /**
     * @var strint
     */
    const GET = 'GET';
    
    /**
     * @var strint
     */
    const DELETE = 'DELETE';
    
    /**
     * @var strint
     */
    const PATCH = 'PATCH';
    
    /**
     * @var strint
     */
    const JSON = 'application/json';
    
    /**
     * @var strint
     */
    const XML = 'application/xml';
    
    /**
     * @var string
     */
    private $method;
    
    /**
     * @var string
     */
    private $path;
    
    /**
     * @var array
     */
    private $appends;
    
    /**
     * @var array
     */
    private $data = [];
    
    /**
     * Make new instance of this class
     * 
     * @param string $method
     * @param string $path
     * @return void
     */
    public function __construct(string $method, string $path)
    {
        $this->method = $method;
        $this->path   = $path;
    }
    
    /**
     * Set appends
     * 
     * @param array $data
     * @return $this
     */
    public function setAppends(array $appends)
    {
        $this->appends = $appends;
        
        return $this;
    }
    
    /**
     * Set request data
     * 
     * @param array $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = json_encode($data);
        
        return $this;
    }
    
    /**
     * Get request data
     * 
     * @return json
     */
    public function getData()
    {
        return $this->data;
    }
}