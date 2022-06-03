<?php

namespace App\Http\Controllers\testContracts;

use App\Http\Controllers\testContracts\Contracts\DataInterface;

class FileData implements DataInterface
{

    public function __construct(private array $data)
    {

    }

    public function getData(): array
    {
        return  $this->data;
    }
}
