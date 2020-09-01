<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    public function test()
    {
        $comment = DB::select('SELECT * FROM comments WHERE id=1');
        dd($comment[0]);
        return 'youhou';
    }
}
