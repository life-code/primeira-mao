<?php

namespace PrimeiraMao\Auth;

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
class User
{
    /**
     * @var int
     */
    private $email;
    
    /**
     * @var string
     */
    private $password;
    
    /**
     * Make new instance of User
     * 
     * @param string $user
     * @param string $password
     * @return void
     */
    public function __construct(string $email = '', string $password = '')
    {
        ($email)    ? $this->setEmail($email)       : null;
        ($password) ? $this->setPassword($password) : null;
    }
}