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
     * @param int $migrate_id
     * @param int $page
     * @param int $limit
     * @param bool $status
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function all(int $migrate_id = 0, int $page = 0, int $limit = 10, bool $status = true) : Response;
    
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
     * @return bool
     */
    public function delete(int $id) : bool;
}