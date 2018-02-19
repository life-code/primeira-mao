<?php

namespace PrimeiraMao\Credentials;

use PrimeiraMao\Contracts\Credentials\Environment as EnvironmentContract;
use PrimeiraMao\Exceptions\PrimeiraMaoException;
use PrimeiraMao\Support\Validator;
use PrimeiraMao\Languages\Location;
use Dotenv\Dotenv;

/**
 * PrimeiraMao API
 * 
 * @type        library
 * @version     0.0.6
 * @package     life-code/primeira-mao
 * @copyright   Copyright (c) 2018 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author      Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license     MIT
 */
class Environment implements EnvironmentContract
{
    use Validator;
    
    /**
     * @var string
     */
    private $env_path = __DIR__ . '/../../../../../';
    
    /**
     * @var string
     */
    private $api_url = 'http://api.primeiramao.com.br/v2/';
    
    /**
     * Make new instance of this class
     * 
     * @return void
     */
    public function __construct()
    {
        $dotenv = new Dotenv($this->env_path);
        $dotenv->load();
    }
    
    /**
     * Get access key
     * 
     * @return string
     */
    public function getAccessKey() : string
    {
        return env('PRIMEIRA_MAO_ACCESS_KEY', '');
    }
    
    /**
     * Get access secret
     * 
     * @throws \PrimeiraMao\Exceptions\PrimeiraMaoException
     * @return string
     */
    public function getAccessSecret() : string
    {
        return env('PRIMEIRA_MAO_ACCESS_SECRET', '');
    }
    
    /**
     * Get URL
     * 
     * @throws \PrimeiraMao\Exceptions\PrimeiraMaoException
     * @return string
     */
    public function getUrl() : string
    {
        $url = $this->api_url;
        
        if (!$this->validateUrl($url)) {
            throw new PrimeiraMaoException("The Primeira Mao credential [$url] isn't a valid URL.");
        }
        
        return $url;
    }
    
    /**
     * Get location
     * 
     * @throws \PrimeiraMao\Exceptions\PrimeiraMaoException
     * @return string
     */
    public function getLocation() : string
    {
        $location = env('PRIMEIRA_MAO_LOCATION', 'en');
        
        if (! Location::check($location)) {
            throw new PrimeiraMaoException("The Primeira Mao location [$location] isn't a valid location.");
        }
        
        return $location;
    }
}