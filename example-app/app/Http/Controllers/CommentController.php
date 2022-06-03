<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function htmlView()
    {
        $comments = comment::all();
        return view('comment', compact('comments'));
    }
    public function create()
    {

        $commentsArr =
            [
                [

                    'liks' => 6067,
                    'is_published' => 1,
                ],
                [
                    'liks' => 5,

                    'is_published' => 1,
                ],
                [

                    'liks' => 2067,
                    'is_published' => 0,
                ],
                [

                    'liks' => 5670,
                    'is_published' => 0,
                ],
            ];
        foreach ($commentsArr as $item)
        {
            comment::create($item);
        }




    }
}
