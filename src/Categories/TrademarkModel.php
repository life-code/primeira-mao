<?php

namespace PrimeiraMao\Categories;

use PrimeiraMao\Http\Request;
use PrimeiraMao\Contracts\Http\Response;

/**
 * PrimeiraMao API
 * 
 * @type        library
 * @version     0.0.2
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2018 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class TrademarkModel
{
    /**
     * @var string
     */
    private $path = 'categories/trademarks/models';
    
    /**
     * @var string
     */
    private $url  = 'categories';
    
    /**
     * Instance of TrademarkModel class
     * 
     * @param int $category_id
     * @param int $trademark_id
     * @return void
     */
    public function __construct(int $category_id, int $trademark_id)
    {
        $this->url .= '/' . $category_id . '/trademarks/' . $trademark_id;
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