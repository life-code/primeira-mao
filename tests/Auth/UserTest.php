<?php

use PHPUnit\Framework\TestCase;

use PrimeiraMao\Auth\User;
use PrimeiraMao\Contracts\Auth\User as UserContract;

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
class UserTest extends TestCase
{
    /**
     * User Instance
     * 
     * @return \PrimeiraMao\Contracts\Auth\User
     */
    public static function instance()
    {
        return new User();
    }
    
    /**
     * Test instance account credentials
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(User::class, $this->instance());
    }
    
    /**
     * Test instance with parameters
     *
     * @return void
     */
    public function testInstanceWithParameters()
    {
        $instance = new User('vinicius_puglies@outlook.com', 'Qs0TSW3OQjcEJBG23qEanxKWeFTMxuOEdFYxbQBs');
        
        $this->assertInstanceOf(UserContract::class, $instance);
        $this->assertEquals('vinicius_puglies@outlook.com', $instance->email);
        $this->assertEquals('Qs0TSW3OQjcEJBG23qEanxKWeFTMxuOEdFYxbQBs', $instance->password);
    }
    
    /**
     * Test get email
     *
     * @return void
     */
    public function testGetEmail()
    {
        $this->assertEquals('vinicius_puglies@outlook.com', $this->instance()->setEmail('vinicius_puglies@outlook.com')->email);
    }
    
    /**
     * Test set email
     *
     * @return void
     */
    public function testSetEmail()
    {
        $this->assertInstanceOf(UserContract::class, $this->instance()->setEmail('vinicius_puglies@outlook.com'));
    }
    
    /**
     * Test throw set email
     *
     * @expectedException \PrimeiraMao\Exceptions\PrimeiraMaoException
     * @return void
     */
    public function testThrowSetEmail()
    {
        $this->instance()->setEmail('vinicius_pugliesi');
    }
}