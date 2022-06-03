<?php

namespace App\Http\Controllers;

use App\Http\Controllers\testContracts\Contracts\DataInterface;
use App\Models\character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(DataInterface $data)
    {
        $characters = character::where('age' , 20)->first();

        $allData = $data->getData();

        foreach ($characters as $character)
        {
            $arr[] = $character->name;
        }
//        $ff = 44;

//        $arr = [
//            'akim',
//            'muslim',
//            'katty',
//            'novus',
//            'dexter',
//        ];
//
//        $return = null;
//        foreach ($arr as $value) {
//           if ($value === 'dexter') {
//               $return = $value;
//               echo($return);
//               break;
//           }
//        }
//
//        $obj = new Akim(3, 2, new Muslim());
//
//        $obj2 = new Akim(4, 9, new Muslim());
//
//        $var2 = $obj->getSum();
//
//        $var3 = $obj->getBrotherName();
//
//        $var = $obj->getSum();
//
//        $cc=0;
    }

}
//
//class Akim {
//
//    public function __construct(
//        private int $first,
//        private int $second,
//        private Muslim $muslim
//    )
//    {
//    }
//
//    public function getSum() : int
//    {
//        return $this->first + $this->second;
//    }
//
//    public function getBrotherName() : string
//    {
//        return $this->muslim->getName();
//    }
//}
//
//class Muslim {
//
//    public function getName() : string
//    {
//        return 'Muslim';
//    }
//}


