<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function Psy\debug;

class HomeController extends Controller
{
    public function index(Request $req)
    {
//        $userId = $req->validate(
//            ['id' => 'int']
//        );
        $id = $req->route('id');

        $req->merge(['id' => $id]);

        $cc = $req->validate(['id' => 'int']);

        $users = user::where(['id' => (int)$id])->get();
       //  $arr = [];
        foreach ($users as $user)
        {
            $arr[] = $user->name;


        }

        //in this variable we create new object from class
      //  $collection = new Collection($arr);

        //this variable is result methotds works
      //  $uniqCollection = $collection->unique(0);

       // $cc=0;
//        $akim = new User();
//        $allUsers = $this->allUsers($akim);



        //return view('home', ['users' => $uniqCollection]);
    }

    private function allUsers(User $akim): Collection
    {
        return $akim->getAllUsers();

    }
}

class Akim {
    public string $akim = 'akim';

    public function getName() : string
    {
        return $this->akim;
    }
}
