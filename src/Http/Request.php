<?php

namespace PrimeiraMao\Http;

use PrimeiraMao\Contracts\Http\Request as RequestContract;
use PrimeiraMao\Http\RequestBuilder;
use PrimeiraMao\PrimeiraMao;

/**
 * PrimeiraMao API
 * 
 * @type        library
 * @version     0.0.5
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
     * @var strint
     */
    const FILE = 'multipart/form-data';
    
    /**
     * @var string
     */
    private $method;
    
    /**
     * @var string
     */
    private $url;
    
    /**
     * @var array
     */
    private $appends = [];
    
    /**
     * @var array
     */
    private $data = [];
    
    /**
     * @var array
     */
    private $filedata = [];
    
    /**
     * @var string
     */
    protected $path;
    
    /**
     * Make new instance of this class
     * 
     * @param string $method
     * @param string $url
     * @return void
     */
    public function __construct(string $method, string $url, string $path)
    {
        $this->method = $method;
        $this->url    = $url;
        $this->path   = $path;
    }
    
    /**
     * Get request method
     * 
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method;
    }
    
    /**
     * Get headers
     * 
     * @return array
     */
    public function getHeaders() : array
    {
        $credentials = PrimeiraMao::getCredentials();
        
        $headers = ['Authorization: Basic ' . $credentials->encript()];
        
        if ($this->getFileData()) {
            $headers[] = 'Content-Type: ' . self::FILE;
        } else {
            $headers[] = 'Content-Type: ' . self::JSON;
        }
        
        return $headers;
    }
    
    /**
     * Set appends
     * 
     * @param array $appends
     * @return $this
     */
    public function appends(array $appends)
    {
        $this->appends = $appends;
        
        return $this;
    }
    
    /**
     * Get URL
     * 
     * @return string
     */
    public function getUrl() : string
    {
        $url    = PrimeiraMao::getEnv()->getUrl() . $this->url;
        $appends = '?';
        
        foreach ($this->appends as $key => $value) {
            $appends .= $key . '=' . $value;
        }
        
        return ($appends === '?') ? $url : $url . $appends;
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
    
    /**
     * Set request file
     * 
     * @param array $filedata
     * @return $this
     */
    public function setFileData(array $filedata)
    {
        $this->filedata = [
            'Filedata' => curl_file_create($filedata['tmp_name'], $filedata['type'], $filedata['name']),
        ];
        
        return $this;
    }
    
    /**
     * Get request file
     * 
     * @return array
     */
    public function getFileData() : array
    {
        return $this->filedata;
    }
}