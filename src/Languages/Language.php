<?php

namespace PrimeiraMao\Languages;

use PrimeiraMao\Contracts\Credentials\Environment;
use PrimeiraMao\Contracts\Languages\Language as LanguageContract;
use PrimeiraMao\Exceptions\PrimeiraMaoException;

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
class Language implements LanguageContract
{
    /**
     * Base path to language files
     * 
     * @var string
     */
    private $base_path = __DIR__ . '/../Config/Translations/';
    
    /**
     * Translations in file
     * 
     * @var array
     */
    private $translations = [];
    
    /**
     * Make new instance of this class
     * 
     * @param \PrimeiraMao\Contracts\Credentials\Environment $env
     * @param string $path
     * @return void
     */
    public function __construct(Environment $env, string $path)
    {
        $this->env       = $env;
        $this->base_path = $this->generatePath($path);
    }
    
    /**
     * Generate path
     * 
     * @param string $path
     * @return string
     */
    public function generatePath(string $path) : string
    {
        if (substr($path, 0, 1) === '/') {
            return $this->base_path . substr($path, 1) . '/';
        }
        
        return $this->base_path . $path . '/';
    }
    
    /**
     * Translate error value
     * 
     * @param int $code
     * @param string $default
     * @return string
     */
    public function translate(int $code, string $default = '') : string
    {
        if (!$this->translations) {
            $this->translations = $this->getTranslations();
        }
        
        return $this->translations[$code] ?? $default;
    }
    
    /**
     * Get translations
     * 
     * @throws \PrimeiraMao\Exceptions\PrimeiraMaoException
     * @return array
     */
    public function getTranslations() : array
    {
        $lang = $this->env->getLocation();
        
        $file = $this->base_path . $lang . '.php';
        
        if (!file_exists($file)) {
            throw new PrimeiraMaoException("The file [$file] does not exists.");
        }
        
        return require($file);
    }
}