<?php

namespace PrimeiraMao;

use PrimeiraMao\Contracts\PrimeiraMao as PrimeiraMaoContract;
use PrimeiraMao\Credentials\Environment;
use PrimeiraMao\Credentials\AccountCredentials;

/**
 * Primeira Mao API
 * 
 * @type        library
 * @version     0.0.1
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2018 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class PrimeiraMao implements PrimeiraMaoContract
{
    /**
     * The PrimeiraMao API version.
     *
     * @var string
     */
    const VERSION = '0.0.1';
    
    /**
     * @var \PrimeiraMao\Contracts\Credentials\Environment
     */
    private static $env;
    
    /**
     * @var \PrimeiraMao\Contracts\Credentials\AccountCredentials
     */
    private static $credentials;
    
    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public static function version()
    {
        return self::VERSION;
    }
    
    /**
     * Get environment
     * 
     * return \PrimeiraMao\Contracts\Credentials\Environment
     */
    public static function getEnv()
    {
        if (!self::$env) {
            self::$env = new Environment();
        }
        
        return self::$env;
    }
    
    /**
     * Get credentials
     * 
     * return \PrimeiraMao\Contracts\Credentials\AccountCredentials
     */
    public static function getCredentials()
    {
        if (!self::$credentials) {
            $env = self::getEnv();
            self::$credentials = new AccountCredentials($env->getAccessKey(), $env->getAccessSecret());
        }
        
        return self::$credentials;
    }
}