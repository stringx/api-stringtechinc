<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    /**
     * get user by name
     *
     * @var string $name
     * @return object
     */
    public function getFirstRecordByName($name);
}
