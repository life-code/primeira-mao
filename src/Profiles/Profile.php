<?php

namespace PrimeiraMao\Profiles;

use Datetime;
use PrimeiraMao\Auth\User;

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
     * @var int
     */
    private $migrate_id;
    
    /**
     * @var string
     */
    private $href;
    
    /**
     * @var id
     */
    private $id;
    
    /**
     * @var string
     */
    private $name;
    
    /**
     * @var string
     */
    private $nickname;
    
    /**
     * @var string
     */
    private $birthday;
    
    /**
     * @var string
     */
    private $cpf;
    
    /**
     * @var \PrimeiraMao\Auth\User
     */
    private $user;
    
    /**
     * @var \Datetime
     */
    private $created_at;
    
    /**
     * @var \Datetime
     */
    private $updated_at;
}