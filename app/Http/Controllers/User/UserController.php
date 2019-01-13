<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()
    {
        $data=[
            [
                'id'=>1,
                'username'=>'a',
                'email'=>'1@1.com'
            ],
            [
                'id'=>2,
                'username'=>'b',
                'email'=>'2@2.com'
            ],
        ];

        return response()->json($data);
    }


    public function view(Request $request,$id)
    {

        $id = $request->input('id');

        return response()->json([
            'name' => $id,
            'name2' => $id
        ]);
    }
}
