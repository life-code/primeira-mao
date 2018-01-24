<?php

namespace PrimeiraMao;

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
class PrimeiraMao
{
    /**
     * The PrimeiraMao API version.
     *
     * @var string
     */
    const VERSION = '0.0.1';
    
    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public static function version()
    {
        return self::VERSION;
    }
}