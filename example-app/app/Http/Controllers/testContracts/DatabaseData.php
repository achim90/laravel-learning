<?php

namespace App\Http\Controllers\testContracts;

use App\Http\Controllers\testContracts\Contracts\DataInterface;

class DatabaseData implements DataInterface
{
    public function __construct(private array $data)
    {

    }

    public function getData(): array
    {
        return  $this->data;
    }
}
