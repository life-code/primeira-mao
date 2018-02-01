<?php

use PHPUnit\Framework\TestCase;

use PrimeiraMao\Ads\Uploader;
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
class UploaderTest extends TestCase
{
    /**
     * Customer Instance
     * 
     * @return \PrimeiraMao\Ads\Uploader
     */
    public static function instance()
    {
        return new Uploader();
    }
    
    /**
     * Test instance account credentials
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(Uploader::class, $this->instance());
    }
}