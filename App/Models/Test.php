<?php

namespace App\Models;
/**
 * Test table for the framework
 */

class Test extends BaseModel
{
    /**
     * @var string
     */
    protected $table = 'test';


    /** @var int */
    protected int $id;
    /** @var string */
    protected string $name;
    
}
