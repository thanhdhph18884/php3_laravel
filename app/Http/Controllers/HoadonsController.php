<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Mail\SendMailToAdmin;
use App\Models\Hoadon;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HoadonsController extends Controller
{
    public function index()
    {
        $hoadon = Hoadon::latest()->paginate(5);
        return view('hoadon.list', compact('hoadon'));
    }

    public function create()
    {
        $rooms = ProductModel::all();
        return view('hoadon.create', compact('rooms'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'room_id' => 'required',
            'date_in' => 'required|date',
            'date_out' => 'required|date|after:date_in',
            'num_of_days' => 'required',
            'price' => 'required',
        ]);
        $hoadon = Hoadon::create([
            'user' => $request['name'],
            'email' => $request['email'],
            'room_id' => $request['room_id'],
            'date_rent' => $request['num_of_days'],
            'money' => $request['price'],
        ]);


        Mail::to($request['email'])->send(new OrderShipped());

        $email = new SendMailToAdmin($hoadon);
        Mail::to('dinhhuuthanh77@gmail.com')->send($email);
        return view('hoadon.detail', compact('hoadon'))->with('success', 'Đặt phòng thành công');
    }
    // public function detail($id)
    // {
    //     $hoadon = Hoadon::find($id);
    //     return view('hoadon.detail', compact('hoadon'));
    // }
}
