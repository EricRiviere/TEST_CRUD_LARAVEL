<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    public function vue()
    {
        return view('vue.test');
    }

    public function contador()
    {
        return view('vue.contador');
    }

    public function computed()
    {
        return view('vue.computed');
    }

    public function list()
    {
        return view('vue.list');
    }

    public function componente()
    {
        return view('vue.componente');
    }
}
