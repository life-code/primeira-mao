<?php

namespace PrimeiraMao\Contracts\Auth;

/**
 * PrimeiraMao SDK
 * 
 * @type        library
 * @version     0.0.1
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2018 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface User
{
    /**
     * Set email
     * 
     * @param string $email
     * @throws \PrimeiraMao\Exceptions\PrimeiraMaoException
     * @return $this
     */
    public function setEmail(string $email);
    
    /**
     * Set password
     * 
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password);
    
    /**
     * Proxy accessing an attributes.
     * 
     * @param mixed $key
     * @return mixed
     */
    public function __get($key);
}