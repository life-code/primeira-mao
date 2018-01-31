<?php

namespace PrimeiraMao\Profiles;

use PrimeiraMao\Http\Request;
use PrimeiraMao\Contracts\Http\Response;
use PrimeiraMao\Contracts\Repository;

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
class Profile implements Repository
{
    /**
     * @var string
     */
    private $url = 'profiles';
    
    /**
     * Get all registers with paginate
     * 
     * @param int $migrate_id
     * @param int $page
     * @param int $limit
     * @param bool $status
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function all(int $migrate_id = 0, int $page = 0, int $limit = 10, bool $status = true) : Response
    {
        $appends = ['migrate_id' => $migrate_id, 'page' => $page, 'limit' => $limit, 'status' => $status];
        
        $request = new Request(Request::GET, $this->url . '.json');
        
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
        $request = new Request(Request::GET, $this->url . '/' . $id . '.json');
        
        return $request->send();
    }
    
    /**
     * Create one register
     * 
     * @param array $data
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function create(array $data) : Response
    {
        $request = new Request(Request::POST, $this->url . '.json');
        
        return $request->setData($data)->send();
    }
    
    /**
     * Update one register
     * 
     * @param int $id
     * @param array $data
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function update(int $id, array $data) : Response
    {
        $request = new Request(Request::PATCH, $this->url . '/' . $id . '.json');
        
        return $request->setData($data)->send();
    }
    
    /**
     * Delete one register
     * 
     * @param int $id
     * @return bool
     */
    public function delete(int $id) : bool
    {
        $request = new Request(Request::DELETE, $this->url . '/' . $id . '.json');
        
        return $request->send();
    }
}