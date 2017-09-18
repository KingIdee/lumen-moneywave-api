<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $headers = array('content-type' => 'application/json','Authorization'=>'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MTQwLCJuYW1lIjoic2F2YW5hIHNtYXJ0c2F2ZSIsImFjY291bnROdW1iZXIiOiIiLCJiYW5rQ29kZSI6Ijk5OSIsImlzQWN0aXZlIjp0cnVlLCJjcmVhdGVkQXQiOiIyMDE2LTEyLTA4VDEwOjM4OjE5LjAwMFoiLCJ1cGRhdGVkQXQiOiIyMDE3LTA2LTE0VDEzOjAxOjQ5LjAwMFoiLCJkZWxldGVkQXQiOm51bGwsImlhdCI6MTQ5ODMzNTE2NSwiZXhwIjoxNDk4MzQyMzY1fQ.WojvkYOC2j6XTUfg_E4WQkxQChPUyCgYUCIKaW83YXA');

        $response = Unirest\Request::get('https://moneywave.herokuapp.com/v1/wallet', $headers);
        echo $response;

    }
        //
    }

    //
}
