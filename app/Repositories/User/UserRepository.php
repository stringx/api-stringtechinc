<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    /**
     * @param object $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * get user by name
     *
     * @var $name
     * @return object
     */
    public function getFirstRecordByName($name)
    {
        return $this->user->where('name', '=', $name)->first();
    }
}
