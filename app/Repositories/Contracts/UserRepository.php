<?php

namespace App\Repositories\Contracts;

interface UserRepository
{
    public function getAll();

    public function find($id);

    public function delete($id);

}
