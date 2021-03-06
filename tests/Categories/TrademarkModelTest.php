<?php

use PHPUnit\Framework\TestCase;

use PrimeiraMao\Categories\TrademarkModel;
use PrimeiraMao\Http\Response;

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
class TrademarkModelTest extends TestCase
{
    /**
     * Customer Instance
     * 
     * @return \PrimeiraMao\Categories\TrademarkModel
     */
    public static function instance()
    {
        return new TrademarkModel(1, 1);
    }
    
    /**
     * Test instance account credentials
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(TrademarkModel::class, $this->instance());
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
        $this->assertInstanceOf(Response::class, $this->instance()->find(1));
    }
}