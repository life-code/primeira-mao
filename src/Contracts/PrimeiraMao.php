<?php

namespace PrimeiraMao\Contracts;

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
interface PrimeiraMao
{
    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public static function version();
}