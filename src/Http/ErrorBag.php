<?php

namespace PrimeiraMao\Http;

use PrimeiraMao\Contracts\Http\ErrorBag as ErrorBagContracts;
use PrimeiraMao\Contracts\Credentials\Environment;
use PrimeiraMao\Languages\Language;

/**
 * PrimeiraMao API
 * 
 * @type        library
 * @version     0.0.1
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2018 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class ErrorBag implements ErrorBagContracts
{
    /**
     * @var array
     */
    private $data = [];
    
    /**
     * @var \PrimeiraMao\Languages\Language
     */
    private $language;
    
    /**
     * Make new instance of this class
     * 
     * @param \PrimeiraMao\Contracts\Credentials\Environment $env
     * @return void
     */
    public function __construct(Environment $env, string $transation)
    {
        $this->language = new Language($env, $transation);
    }
    
    /**
     * Set data
     * 
     * @param array $errors
     * @return $this
     */
    public function setData(array $errors)
    {
        $exchange = [];
        
        foreach ($errors as $key => $value) {
            if (! is_array($value)) {
                $exchange[] = (object) [
                    'code'  => $key,
                    'value' => $this->language->translate($key, $value),
                ];
            } else {
                foreach ($value as $k => $v) {
                    $exchange[] = (object) [
                        'code'  => $key,
                        'value' => $this->language->translate($key, $v),
                    ];
                }
            }
        }
        
        $this->data = $exchange;
    }
    
    /**
     * Get first error
     * 
     * @return bool | object
     */
    public function first()
    {
        $values = array_values($this->all());
        
        return $values[0] ?? false;
    }
    
    /**
     * Get last error
     * 
     * @return bool | object
     */
    public function last()
    {
        $values = array_values($this->all());
        
        $reverse = array_reverse($values);
        
        return $reverse[0] ?? false;
    }
    
    /**
     * Check code exists
     * 
     * @param int $code
     * @return bool
     */
    public function codeExists(int $code)
    {
        $values = array_values($this->all());
        
        $codes = array_map(function($item){
            return $item->code;
        }, $values);
        
        return in_array($code, $codes);
    }
    
    /**
     * Get all errors
     * 
     * @return array
     */
    public function all()
    {
        return $this->data;
    }
    
    /**
     * Get all error codes
     * 
     * @return array
     */
    public function codes()
    {
        $values = array_values($this->all());
        
        $codes = array_map(function($item){
            return $item->code;
        }, $values);
        
        return $codes;
    }
    
    /**
     * Get all error values
     * 
     * @return array
     */
    public function values()
    {
        $values = array_values($this->all());
        
        $values = array_map(function($item){
            return $item->value;
        }, $values);
        
        return $values;
    }
}