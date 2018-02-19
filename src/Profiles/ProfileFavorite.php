<?php

namespace PrimeiraMao\Profiles;

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
class ProfileFavorite
{
    /**
     * @var string
     */
    private $path = 'profiles/favorites';
    
    /**
     * @var string
     */
    private $url  = 'profiles';
    
    /**
     * Instance of ProfileFavorite class
     * 
     * @param int $profile_id
     * @return void
     */
    public function __construct(int $profile_id)
    {
        $this->url .= '/' . $profile_id . '/favorites';
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
    
    /**
     * Create one register
     * 
     * @param array $data
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function create(array $data) : Response
    {
        $url = $this->url . '.json';
        
        $request = new Request(Request::POST, $url, $this->path);
        
        return $request->setData($data)->send();
    }
    
    /**
     * Delete one register
     * 
     * @param int $id
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function delete(int $id) : Response
    {
        $url = $this->url . '/' . $id . '.json';
        
        $request = new Request(Request::DELETE, $url, $this->path);
        
        return $request->send();
    }
}