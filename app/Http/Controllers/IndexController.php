<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $host = request()->getHost();
        $host = explode('.', $host);
        $subdomain = $host[0];
        return view('index', compact('subdomain'));
    }
}
