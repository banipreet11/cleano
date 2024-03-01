<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function sidemenu()
    {
        return view('sidemenu');
    }
    public function analystic_sales()
    {
        return view('components.analystic_sales');
    }

    public function analystic_traffic()
    {
        return view('components.analystic_traffic');
    }

    public function analystic_products()
    {
        return view('components.analystic_products');
    }

    public function settings()
    {
        return view('components.settings');
    }
}