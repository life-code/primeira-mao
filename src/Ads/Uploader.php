<?php

namespace PrimeiraMao\Ads;

use PrimeiraMao\Http\Request;
use PrimeiraMao\Contracts\Http\Response;

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
class Uploader
{
    /**
     * @var string
     */
    private $path = 'uploader';
    
    /**
     * @var string
     */
    private $url = 'uploader';
    
    /**
     * Create one register
     * 
     * @param array $file
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function create(array $file) : Response
    {
        $url = $this->url . '.json';
        
        $request = new Request(Request::POST, $url, $this->path);
        
        return $request->setFileData($file)->send();
    }
}