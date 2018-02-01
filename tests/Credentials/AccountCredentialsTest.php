<?php

use PHPUnit\Framework\TestCase;

use PrimeiraMao\Credentials\AccountCredentials;
use PrimeiraMao\Contracts\Credentials\AccountCredentials as AccountCredentialsContract;

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
class AccountCredentialsTest extends TestCase
{
    /**
     * Customer Instance
     * 
     * @return \PrimeiraMao\Contracts\Credentials\AccountCredentials
     */
    public static function instance()
    {
        return new AccountCredentials();
    }
    
    /**
     * Test instance account credentials
     *
     * @return void
     */
    public function testInstance()
    {
        $this->assertInstanceOf(AccountCredentials::class, $this->instance());
    }
    
    /**
     * Test get access key
     *
     * @return void
     */
    public function testGetAccessKey()
    {
        $this->assertEquals('vinicius_puglies@outlook.com', $this->instance()->setAccessKey('vinicius_puglies@outlook.com')->getAccessKey());
    }
    
    /**
     * Test set access key
     *
     * @return void
     */
    public function testSetAccessKey()
    {
        $this->assertInstanceOf(AccountCredentialsContract::class, $this->instance()->setAccessKey('vinicius_puglies@outlook.com'));
    }
    
    /**
     * Test get access secret
     *
     * @return void
     */
    public function testGetAccessSecret()
    {
        $this->assertEquals('A6S54651GF3A5SDFA6SG54312SADF5FW', $this->instance()->setAccessSecret('A6S54651GF3A5SDFA6SG54312SADF5FW')->getAccessSecret());
    }
    
    /**
     * Test set access secret
     *
     * @return void
     */
    public function testSetAccessSecret()
    {
        $this->assertInstanceOf(AccountCredentialsContract::class, $this->instance()->setAccessSecret('A6S54651GF3A5SDFA6SG54312SADF5FW'));
    }
    
    /**
     * Test to array
     *
     * @return void
     */
    public function testToArray()
    {
        $this->assertCount(2, $this->instance()->toArray());
    }
    
    /**
     * Test encript
     *
     * @return void
     */
    public function testEncript()
    {
        $this->assertEquals(
            'QTZTNTQ2NTFHRjNBNVNERkE2U0c1NDMxMlNBREY1Rlc6QTZTNTQ2NTFHRjNBNVNERkE2U0c1NDMxMlNBREY=', 
            (new AccountCredentials('A6S54651GF3A5SDFA6SG54312SADF5FW', 'A6S54651GF3A5SDFA6SG54312SADF'))->encript()
        );
    }
}