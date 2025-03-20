<?php

namespace App\Models;


class AdminUsers extends BaseModel
{
    /**
     * @var string
     */
    protected $table = 'admin_users';


    /** @var int */
    protected int $id;
    /** @var int */
    protected int $adminRoleId;
    /** @var string */
    protected string $name;
    /** @var string */
    protected string $email;
    /** @var string */
    protected string $password;
    /** @var string */
    protected string $apiToken;
    /** @var int */
    protected int $apiTokenExpires;
    /** @var string */
    protected string $createdAt;
    /** @var string */
    protected string $updatedAt;
    /** @var string */
    protected string $emailLoginHash;
    /** @var int */
    protected int $emailLoginHashExpires;
}
