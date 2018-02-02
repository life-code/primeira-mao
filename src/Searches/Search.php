<?php

namespace PrimeiraMao\Searches;

use PrimeiraMao\Http\Request;
use PrimeiraMao\Contracts\Http\Response;

/**
 * PrimeiraMao API
 * 
 * @type        library
 * @version     0.0.4
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2018 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Search
{
    /**
     * @var string
     */
    private $path = 'search';
    
    /**
     * @var string
     */
    private $url = 'search';
    
    /**
     * Search results
     * 
     * @param array $search
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function searching(array $search) : Response
    {
        $url = $this->url . '.json';
        
        $request = new Request(Request::POST, $url, $this->path);
        
        return $request->setData($search)->send();
    }
}