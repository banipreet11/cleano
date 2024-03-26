<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Staff;

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
        $user = Staff::all();
        return view('components.settings',['data'=>$user]);
    }

    public function staff_add(Request $r)
    {
        $entry =new Staff;
        $entry->name= $r->input('name');
        $entry->role= $r->input('r1');
        $entry->contact= $r->input('email');
        $entry->save();
        return back();
    }

    public function ratings()
    {
        return view('components.ratings-and-review');
    }

    public function discount()
    {
        return view('components.discount');
    }
    public function orders()
    {
        return view('components.orders');
    }
    public function payment()
    {
        return view('components.payment-management');
    }
    public function vendors()
    {
        return view('components.vendors');
    }
    public function vendor_addition()
    {
        return view('components.vendor_addition');
    }
    public function addvendor()
    {
        return view('components.vendor_register');
    }
    public function Vendor_Approval_Request()
    {
        return view('components.Vendor_Approval_Request');
    }
    public function vendor_preview(){
        return view('components.vendor_preview');
    }

    // User Management
    public function users()
    {
        return view('components.users');
    }
    public function users_add()
    {
        return view('components.users_add');
    }
    public function usermanagement_userdetail()
    {
        return view('components.usermanagement_userdetail');
    }

    public function delivery()
    {
        return view('components.delivery');
    }
    public function delivery_add()
    {
        return view('components.delivery_add');
    }
    
}