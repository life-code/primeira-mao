<?php

namespace PrimeiraMao\Contracts\Languages;

/**
 * PrimeiraMao API
 * 
 * @type        library
 * @version     0.0.5
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface Language
{
    /**
     * Generate path
     * 
     * @param string $path
     * @return string
     */
    public function generatePath(string $path) : string;
    
    /**
     * Translate error value
     * 
     * @param string $code
     * @param string $default
     * @return string
     */
    public function translate(string $code, string $default = '') : string;
    
    /**
     * Get translations
     * 
     * @throws \PrimeiraMao\Exceptions\PrimeiraMaoException
     * @return array
     */
    public function getTranslations() : array;
}