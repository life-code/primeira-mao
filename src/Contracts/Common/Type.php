<?php

namespace PrimeiraMao\Contracts\Common;

/**
 * PrimeiraMao API
 * 
 * @type        library
 * @version     0.0.7
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2018 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface Type
{
    /**
     * Validate type
     * 
     * @param string $type
     * @return bool
     */
    public static function check(string $type) : bool;
    
    /**
     * Get types
     * 
     * @return array
     */
    public static function getTypes();
}