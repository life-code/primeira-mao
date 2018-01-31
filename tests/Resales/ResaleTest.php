<?php

use PHPUnit\Framework\TestCase;

use PrimeiraMao\Resales\Resale;
use PrimeiraMao\Contracts\Repository;
use PrimeiraMao\Http\Response;

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
class ResaleTest extends TestCase
{
    /**
     * Customer Instance
     * 
     * @return \PrimeiraMao\Resales\Resale
     */
    public static function instance()
    {
        return new Resale();
    }
    
    /**
     * Test instance account credentials
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(Repository::class, $this->instance());
    }
    
    /**
     * Test method all
     *
     * @return void
     */
    public function testAll()
    {
        $this->assertInstanceOf(Response::class, $this->instance()->all());
    }
    
    /**
     * Test method find
     *
     * @return void
     */
    public function testFind()
    {
        $this->assertInstanceOf(Response::class, $this->instance()->find(194850));
    }
    
    /**
     * Test method create
     *
     * @return void
     */
    public function testCreate()
    {
        $this->assertInstanceOf(Response::class, $this->instance()->create([]));
    }
    
    /**
     * Test method update
     *
     * @return void
     */
    public function testUpdate()
    {
        $this->assertInstanceOf(Response::class, $this->instance()->update(1, []));
    }
    
    /**
     * Test method delete
     *
     * @return void
     */
    public function testDelete()
    {
        $this->assertInstanceOf(Response::class, $this->instance()->delete(1));
    }
}