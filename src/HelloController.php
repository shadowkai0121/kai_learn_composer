<?php

namespace Kai\KaiLearnComposer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $message = "Hello World";
        return view('test1::welcome', compact('message'));
    }
}
