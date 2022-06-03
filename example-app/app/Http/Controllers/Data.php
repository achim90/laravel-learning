<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;

interface Data
{
    public function addData(array $data) : void;

    public function getData() : Collection;
}
