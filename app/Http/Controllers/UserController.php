<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ProductModel;
use App\Models\Categories;
use App\Models\BannerModel;


class UserController extends Controller
{
    public function index()
    {
        $banner = BannerModel::all();
        $rooms = ProductModel::paginate(3);
        $categories = Categories::paginate(3);
        return view('user.master', compact('rooms', 'categories', 'banner'));
    }
    public function detail($id)
    {

        $rooms = ProductModel::find($id);
        return view('user.room-detail', compact('rooms'));
    }
    public function list()
    {
        $user = User::all();
        return view('user.list', compact('user'));
    }
    public function hoadon()
    {
        return view('user.hoadon');
    }
}
