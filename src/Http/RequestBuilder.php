<?php

namespace PrimeiraMao\Http;

use PrimeiraMao\Contracts\Http\RequestBuilder as RequestBuilderContract;
use PrimeiraMao\Http\Response;
use PrimeiraMao\PrimeiraMao;

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
abstract class RequestBuilder implements RequestBuilderContract
{
    /**
     * Send request
     * 
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function send()
    {
        $curl = curl_init($this->getUrl());
        
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->getHeaders());
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $this->getMethod());
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($curl, CURLOPT_VERBOSE, true);
        
        if ($this->getData()) {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $this->getData());
        }
        
        $data = curl_exec($curl);
        $info = curl_getinfo($curl);
        
        curl_close($curl);
        
        return $this->createResponse($data, $info);
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
        $response = new Response(PrimeiraMao::getEnv(), $this->path);
        
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