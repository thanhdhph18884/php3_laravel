<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\ProductModel;
use Illuminate\Support\Facades\File;

class  ProductsController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->query('search');
        $rooms = ProductModel::with('categories')->paginate(5);
        $rooms = ProductModel::when($search, function ($query, $search) {
            return $query->where('price', 'like', '%' . $search . '%');
        })
            ->orderBy('room_id', 'DESC')
            ->paginate(5);
        // dd($rooms);
        return view('rooms.list', compact('rooms'));
    }
    public function create()
    {
        $categories = Categories::all();
        return view('rooms.create', compact('categories'));
    }
    public function store(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
            'mota' => 'required',
            'price' => 'required|numeric',
            'cate_id' => 'required|exists:categories,cate_id',
        ], [
            'images.required' => 'Vui lòng tải lên ảnh phòng',
            'images.image' => 'Tệp tải lên phải là một ảnh',
            'images.mimes' => 'Tệp tải lên phải là định dạng ảnh: jpeg, png, jpg, gif',
            'images.max' => 'Dung lượng tối đa của ảnh là 2048 KB',
            'description.required' => 'Vui lòng nhập mô tả phòng',
            'mota.required' => 'Vui lòng nhập mô tả phòng',
            'price.required' => 'Vui lòng nhập giá phòng',
            'price.numeric' => 'Giá phòng phải là một số',
            'cate_id.required' => 'Vui lòng chọn danh mục',
            'cate_id.exists' => 'Danh mục không tồn tại',
        ]);

        // Handle image upload

        $images = $request->file('images');
        $name = time() . '_' . $images->getClientOriginalName();
        $images->move(public_path('images'), $name);
        $image_path = './images/' . $name;


        // Create new Room object and save to database
        $room = new ProductModel();
        $room->description = $validatedData['description'];
        $room->mota = $validatedData['mota'];
        $room->price = $validatedData['price'];
        $room->cate_id = $validatedData['cate_id'];
        $room->images = $image_path;
        $room->save();
        return redirect()->route('rooms.index')->with('success', 'Thêm phòng thành công');
    }

    public function edit($id)
    {
        $room = ProductModel::findOrFail($id); // Tìm phòng theo id

        // Lấy danh sách danh mục để hiển thị lên dropdown
        $categories = Categories::all();
        
        // Trả về view edit với dữ liệu phòng cần sửa và danh sách danh mục
        return view('rooms.edit', compact('room', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Validate input
        $validatedData = $request->validate([
            'description' => 'required',
            'mota' => 'required',
            'price' => 'required|numeric',
            'cate_id' => 'required|numeric',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Get the product
        $room = ProductModel::find($id);
        // Update
        $room->description = $validatedData['description'];
        $room->mota = $validatedData['mota'];
        $room->price = $validatedData['price'];
        $room->cate_id = $validatedData['cate_id'];
        // Upload new image
        $images = $request->file('images');
        $name = time() . '_' . $images->getClientOriginalName();
        $images->move(public_path('images'), $name);
        $image_path = './images/' . $name;
        $room->images = $image_path;
        // Save product
        $room->save();

        return redirect()->route('rooms.index', $id)->with('success', 'sửa phòng thành công');
    }
    public function destroy($id)
    {
        ProductModel::destroy($id);
        return redirect()->route('rooms.index')
            ->with('success', 'xóa phòng thành công');
    }
    public function detail($id)
    {
        $detail = ProductModel::find($id);
        $room = ProductModel::find($id);
        $categories = Categories::all();
        return view('rooms.detail', compact('detail', 'categories', 'room'));
    }
}
