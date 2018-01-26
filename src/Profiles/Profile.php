<?php

namespace PrimeiraMao\Profiles;

use Datetime;

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
class Profile
{
    /**
     * @var string
     */
    public $href;
    
    /**
     * @var id
     */
    public $id;
    
    /**
     * @var string
     */
    public $name;
    
    /**
     * @var string
     */
    public $nick_name;
    
    /**
     * @var int
     */
    public $migrate_id;
    
    /**
     * @var \Datetime
     */
    public $created_at;
    
    /**
     * @var \Datetime
     */
    public $updated_at;
}