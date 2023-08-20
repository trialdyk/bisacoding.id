<?php

namespace App\Contracts\Interfaces\Eloquent;

interface NonactiveInterface
{
    /**
     * Handle show method and update data instantly from models.
     *
     * @param mixed $id
     * @param array $data
     *
     * @return mixed
     */

    public function nonactive(mixed $id, array $data): mixed;
}
