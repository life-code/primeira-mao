<?php

namespace PrimeiraMao\Contracts;

use PrimeiraMao\Contracts\Http\Response;

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
interface Repository
{
    /**
     * Get all registers with paginate
     * 
     * @param array $appends
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function all(array $appends = []) : Response;
    
    /**
     * Find one register
     * 
     * @param int $id
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function find(int $id) : Response;
    
    /**
     * Create one register
     * 
     * @param array $data
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function create(array $data) : Response;
    
    /**
     * Update one register
     * 
     * @param int $id
     * @param array $data
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function update(int $id, array $data) : Response;
    
    /**
     * Delete one register
     * 
     * @param int $id
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function delete(int $id) : Response;
}