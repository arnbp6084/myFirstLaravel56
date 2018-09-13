<?php

namespace App\Repositories\Eloquent;

use App\User;
use App\Repositories\Contracts\UserRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentUserRepository extends AbstractRepository implements UserRepository
{
    public $user;

    function __construct(User $user) {
	$this->user = $user;
    }

    public function getAll()
    {
        return $this->user->getAlll();
    }

    public function find($id)
    {
        return $this->user->findUser($id);
    }

    public function delete($id)
    {
        return $this->user->deleteUser($id);
    }
}
