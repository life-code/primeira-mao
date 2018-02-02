<?php

use PHPUnit\Framework\TestCase;

use PrimeiraMao\PrimeiraMao;
use PrimeiraMao\Contracts\PrimeiraMao as PrimeiraMaoContract;

/**
 * PrimeiraMao API
 * 
 * @type        library
 * @version     0.0.4
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2018 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class PrimeiraMaoTest extends TestCase
{
    /**
     * PrimeiraMao Instance
     * 
     * @return \PrimeiraMao\Contracts\Auth\PrimeiraMao
     */
    public static function instance()
    {
        return new PrimeiraMao();
    }
    
    /**
     * Test instance account credentials
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(PrimeiraMao::class, $this->instance());
    }
    
    /**
     * Test version
     *
     * @return void
     */
    public function testVersion()
    {
        $this->assertEquals('0.0.4', PrimeiraMao::version());
    }
}