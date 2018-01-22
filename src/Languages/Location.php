<?php

namespace PrimeiraMao\Languages;

use PrimeiraMao\Contracts\Common\Type as TypeContract;

/**
 * PrimeiraMao SDK
 * 
 * @type        library
 * @version     1.0.31
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Location implements TypeContract
{
    /**
     * @var string
     */
	const EN = 'en';
	
    /**
     * @var string
     */
	const PT_BR = 'pt-br';
	
    /**
     * Validate type
     * 
     * @param string $type
     * @return bool
     */
    public static function check(string $type) : bool
    {
        return in_array($type, self::getTypes());
    }
    
    /**
     * Get types
     * 
     * @return array
     */
    public static function getTypes() : array
    {
        return [
            self::EN,
            self::PT_BR,
        ];
    }
}