<?php

namespace PrimeiraMao\Contracts\Http;

/**
 * PrimeiraMao API
 * 
 * @type        library
 * @version     0.0.1
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
interface RequestBuilder
{
    /**
     * Send request
     * 
     * @return \PrimeiraMao\Contracts\Http\Response
     */
    public function send();
}