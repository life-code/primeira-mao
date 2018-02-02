<?php

namespace PrimeiraMao\Http;

use PrimeiraMao\Contracts\Http\RequestBuilder as RequestBuilderContract;
use PrimeiraMao\Contracts\Http\Response as ResponseContract;
use PrimeiraMao\Http\Response;
use PrimeiraMao\PrimeiraMao;

/**
 * PrimeiraMao API
 * 
 * @type        library
 * @version     0.0.3
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
        
        if ($this->getFileData()) {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $this->getFileData());
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
    private function createResponse($data, array $info)
    {
        $data = json_decode($data, true);
        
        $response = new Response(PrimeiraMao::getEnv(), $this->path);
        
        $response->setStatus($info['http_code']);
        $response->setInfo($info);
        
        if ($errors = $this->handleHttp($info['http_code'], $data)) {
            return $response->setErrors($errors);
        }
        
        return $response->setData($data);
    }
    
    /**
     * Handler HTTP code
     * 
     * @param int $code
     * @param array $data
     * @return array | bool
     */
    private function handleHttp(int $code, array $data)
    {
        if ($code === 404) {
            return [404 => 'Página não encontrada.'];
        }
        
        if ($code === 500) {
            return [500 => 'Erro interno.'];
        }
        
        if ($code === 422) {
            return (isset($data['errors'])) ? $data['errors'] : [422 => $data['message']];
        }
        
        return false;
    }
}