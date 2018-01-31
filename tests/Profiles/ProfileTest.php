<?php

use PHPUnit\Framework\TestCase;

use PrimeiraMao\Profiles\Profile;
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
class ProfileTest extends TestCase
{
    /**
     * Customer Instance
     * 
     * @return \PrimeiraMao\Profiles\Profile
     */
    public static function instance()
    {
        return new Profile();
    }
    
    /**
     * Test instance account credentials
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(Profile::class, $this->instance());
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
        $data = [];
        
        $this->assertInstanceOf(Response::class, $this->instance()->create($data));
    }
    
    /**
     * Test method update
     *
     * @return void
     */
    public function testUpdate()
    {
        $id   = 1;
        $data = [];
        
        $this->assertInstanceOf(Response::class, $this->instance()->update($id, $data));
    }
    
    /**
     * Test method delete
     *
     * @return void
     */
    public function testDelete()
    {
        $this->assertInstanceOf(Response::class, $this->instance()->delete(1313543213246543));
    }
}