<?php

namespace PrimeiraMao\Auth;

use PrimeiraMao\Contracts\Auth\User as UserContract;
use PrimeiraMao\Exceptions\PrimeiraMaoException;
use PrimeiraMao\Support\Validator;

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
class User implements UserContract
{
    use Validator;
    
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
    
    /**
     * Set email
     * 
     * @param string $email
     * @throws \PrimeiraMao\Exceptions\PrimeiraMaoException
     * @return $this
     */
    public function setEmail(string $email)
    {
        if (! $this->validateEmail($email)) {
            throw new PrimeiraMaoException($email, 2041);
        }
        
        $this->email = $email;
        
        return $this;
    }
    
    /**
     * Set password
     * 
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
        
        return $this;
    }
    
    /**
     * Proxy accessing an attributes.
     * 
     * @param mixed $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->$key;
    }
}