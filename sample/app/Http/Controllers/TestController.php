<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $values = Test::all();
        // ddd($values);
        // viewに表示するcompact関数
        return view('tests.test',compact('values'));
    }
}
