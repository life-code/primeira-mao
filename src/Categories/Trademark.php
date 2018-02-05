<?php

namespace PrimeiraMao\Categories;

use PrimeiraMao\Http\Request;
use PrimeiraMao\Contracts\Http\Response;

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
class Trademark
{
    /**
     * @var string
     */
    private $path = 'categories/trademarks';
    
    /**
     * @var string
     */
    private $url  = 'categories';
    
    /**
     * Instance of Trademark class
     * 
     * @param int $category_id
     * @return void
     */
    public function __construct(int $category_id)
    {
        $this->url .= '/' . $category_id . '/trademarks';
    }
    
    /**
     * Get all registers with paginate
     * 
     * @param array $appends
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function all(array $appends = []) : Response
    {
        $url = $this->url . '.json';
        
        $request = new Request(Request::GET, $url, $this->path);
        
        return $request->appends($appends)->send();
    }
    
    /**
     * Find one register
     * 
     * @param int $id
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function find(int $id) : Response
    {
        $url = $this->url . '/' . $id . '.json';
        
        $request = new Request(Request::GET, $url, $this->path);
        
        return $request->send();
    }
}