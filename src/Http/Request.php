<?php

namespace PrimeiraMao\Http;

use PrimeiraMao\Contracts\Http\Request as RequestContract;
use PrimeiraMao\Contracts\Credentials\AccountCredentials;
use PrimeiraMao\Contracts\Credentials\Environment;
use PrimeiraMao\Http\RequestBuilder;

/**
 * PrimeiraMao SDK
 * 
 * @type        library
 * @version     0.0.1
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2018 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
abstract class Request extends RequestBuilder implements RequestContract
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
    const JSON = 'application/json';
    
    /**
     * @var strint
     */
    const XML = 'application/xml';
    
    /**
     * @var \PrimeiraMao\Contracts\AccountCredentials
     */
    protected $credentials;
    
    /**
     * @var \PrimeiraMao\Contracts\Credentials\Environment
     */
    protected $env;
    
    /**
     * @var array
     */
    protected $data = [];
    
    /**
     * Make new instance of this class
     * 
     * @param \PrimeiraMao\Contracts\AccountCredentials $credentials
     * @param \PrimeiraMao\Contracts\Credentials\Environment $env
     * @return void
     */
    public function __construct(AccountCredentials $credentials, Environment $env)
    {
        $this->credentials = $credentials;
        $this->env         = $env;
    }
    
    /**
     * Get request data
     * 
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * Create response
     * 
     * @param mixed $data
     * @param array $info
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function createResponse($data, array $info)
    {
        $response = $this->getResponseClass();
        
        $response->setStatus($info['http_code']);
        $response->setInfo($info);
        
        if ($data === 'Unauthorized') {
            return $response->setErrors([401 => $data]);
        }
        
        if ($info['http_code'] === 404) {
            return $response->setErrors([404 => 'Not Found']);
        }
        
        return $response->setData($data);
    }
}