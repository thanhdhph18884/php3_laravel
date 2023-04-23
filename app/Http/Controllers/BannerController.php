<?php

namespace App\Http\Controllers;

use App\Models\BannerModel;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = BannerModel::paginate(5);

        return view('banners.list', compact('banners'));
    }
    public function create()
    {
        return view('banners.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:banners,name|max:255',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'name.required' => 'Vui lòng nhập tên banner',
            'name.unique' => 'Tên danh mục đã tồn tại.',
            'images.required' => 'Vui lòng tải lên ảnh banner',
            'images.image' => 'Tệp tải lên phải là một ảnh',
            'images.mimes' => 'Tệp tải lên phải là định dạng ảnh: jpeg, png, jpg, gif',
            'images.max' => 'Dung lượng tối đa của ảnh là 2048 KB',
        ]);

        $images = $request->file('images');
        $name = time() . '_' . $images->getClientOriginalName();
        $images->move(public_path('images'), $name);
        $image_path = './images/' . $name;

        BannerModel::create([
            'name' => $request->name,
            'images' => $image_path,
        ]);

        return redirect()->route('banner.index')->with('success', 'Thêm banner thành công.');
    }

    public function edit($id)
    {
        $banner = BannerModel::findOrFail($id);
        return view('banners.edit', compact('banner'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:banners,name,',
            'images' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'name.required' => 'Vui lòng nhập tên banner',
            'name.unique' => 'Tên banner đã tồn tại.',
            'images.image' => 'Tệp tải lên phải là một ảnh',
            'images.mimes' => 'Tệp tải lên phải là định dạng ảnh: jpeg, png, jpg, gif',
            'images.max' => 'Dung lượng tối đa của ảnh là 2048 KB',
        ]);
        //tìm
        $banner = BannerModel::find($id);
        //sửa
        $banner->name = $validatedData['name'];
        //ảnh mới 
        // Upload new image
        $images = $request->file('images');
        $name = time() . '_' . $images->getClientOriginalName();
        $images->move(public_path('images'), $name);

        $image_path = './images/' . $name;
        $banner->images = $image_path;
        $banner->save();
        return redirect()->route('banner.index')
            ->with('success', 'Cập nhật banner thành công.');
    }

    public function destroy($id)
    {
        BannerModel::destroy($id);
        return redirect()->route('banner.index')
            ->with('success', 'xóa banner thành công');
    }
}
