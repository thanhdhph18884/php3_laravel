<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    // public $category;
    // public function __construct()
    // {
    //     $this->category  =  Categories::all();
    // }
    public function index(Request $request)
    {
        $search = $request->query('search');
        $categories = Categories::when($search, function ($query, $search) {
            return $query->where('category_name', 'like', '%' . $search . '%');
        })
            ->orderBy('cate_id', 'DESC')
            ->paginate(5);
        return view('categories.list', compact('categories', 'search'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories,category_name|max:255',
            'mota' => 'required',
        ], [
            'category_name.required' => 'Vui lòng nhập tên danh mục.',
            'category_name.unique' => 'Tên danh mục đã tồn tại.',
            'mota.required' => 'Vui lòng nhập mô tả phòng',
        ]);

        Categories::create([
            'category_name' => $request->category_name,
            'mota' => $request->mota,
        ]);

        return redirect()->route('categories.index')->with('success', 'Thêm danh mục thành công.');
    }
    public function edit($id)
    {
        $category = Categories::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
            'mota' => 'required',
        ], [
            'category_name.required' => 'Vui lòng nhập tên danh mục.',
            'mota.required' => 'Vui lòng nhập mô tả phòng',

        ]);

        Categories::where('cate_id', $id)->update([
            'category_name' => $request->input('category_name'),
            'mota' => $request->input('mota'),
        ]);

        return redirect()->route('categories.index')->with('success', 'Đã cập nhật thành công danh mục');
    }

    public function destroy($id)
    {
        Categories::destroy($id);
        return redirect()->route('categories.index')
            ->with('success', 'xóa danh mục thành công');
    }
}
