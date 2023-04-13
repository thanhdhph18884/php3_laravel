<?php

namespace App\Http\Controllers;

use App\Models\Hoadon;
use Illuminate\Http\Request;

class HoadonsController extends Controller
{
    public function index()
    {

        return view('user.cart');
    }
    public function create()
    {
        return view('user.cart');
    }
    public function store()
    {
        $hoadon = Hoadon::all();
        return view('user.cart', compact('hoadon'));
    }
    public function edit($id)
    {
        $hoadon = Hoadon::all();
        return view('user.cart', compact('hoadon'));
    }
    public function update()
    {
        $hoadon = Hoadon::all();
        return view('user.cart', compact('hoadon'));
    }
    public function destroy($id)
    {
        $hoadon = Hoadon::all();
        return view('user.cart', compact('hoadon'));
    }
}
