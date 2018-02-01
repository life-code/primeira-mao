<?php

use PHPUnit\Framework\TestCase;

use PrimeiraMao\Searches\Search;
use PrimeiraMao\Http\Response;

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
class SearchTest extends TestCase
{
    /**
     * Customer Instance
     * 
     * @return \PrimeiraMao\Searches\Search
     */
    public static function instance()
    {
        return new Search();
    }
    
    /**
     * Test instance account credentials
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(Search::class, $this->instance());
    }
    
    /**
     * Test method searching
     *
     * @return void
     */
    public function testSearching()
    {
        $this->assertInstanceOf(Response::class, $this->instance()->searching([]));
    }
}