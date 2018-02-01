<?php

use PHPUnit\Framework\TestCase;

use PrimeiraMao\Credentials\Environment;
use PrimeiraMao\Contracts\Credentials\Environment as EnvironmentContract;

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
class EnvironmentTest extends TestCase
{
    /**
     * Customer Instance
     * 
     * @return \PrimeiraMao\Contracts\Credentials\Environment
     */
    public static function instance()
    {
        return new Environment();
    }
    
    /**
     * Test instance account credentials
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(Environment::class, $this->instance());
    }
    
    /**
     * Test get env
     *
     * @return void
     */
    public function testGetEnv()
    {
        $this->assertEquals('SANDBOX', $this->instance()->getEnv());
    }
    
    /**
     * Test get access key
     *
     * @return void
     */
    public function testGetAccessKey()
    {
        $this->assertTrue((bool) $this->instance()->getAccessKey());
    }
    
    /**
     * Test get access secret
     *
     * @return void
     */
    public function testGetAccessSecret()
    {
        $this->assertTrue((bool) $this->instance()->getAccessSecret());
    }
    
    /**
     * Test get URL
     *
     * @return void
     */
    public function testGetUrl()
    {
        $this->assertEquals('http://api.primeiramao.com.br/v2/', $this->instance()->getUrl());
    }
    
    /**
     * Test get location
     *
     * @return void
     */
    public function testGetLocation()
    {
        $this->assertEquals('pt-br', $this->instance()->getLocation());
    }
}