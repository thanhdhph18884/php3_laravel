<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaleModel;

class SaleController extends Controller
{
    public function index()
    {
        $sales = SaleModel::paginate(5);

        return view('sales.list', compact('sales'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('sales.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:sales,name|max:255',
            'start_date' => 'required|date|before_or_equal:end_date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ], [
            'name.required' => 'Vui lòng nhập tên mã giảm giá.',
            'name.unique' => 'Tên mã giảm giá đã tồn tại.',
            'start_date.required' => 'Vui lòng nhập ngày bắt đầu.',
            'start_date.date' => 'Ngày bắt đầu không hợp lệ.',
            'start_date.before_or_equal' => 'Ngày bắt đầu phải trước hoặc bằng ngày kết thúc.',
            'end_date.required' => 'Vui lòng nhập ngày kết thúc.',
            'end_date.date' => 'Ngày kết thúc không hợp lệ.',
            'end_date.after_or_equal' => 'Ngày kết thúc phải sau hoặc bằng ngày bắt đầu.',
        ]);


        SaleModel::create([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect()->route('sale.index')->with('success', 'Thêm mã giảm giá thành công.');
    }

    public function edit($id)
    {
        $sale = SaleModel::findOrFail($id);
        return view('sales.edit', compact('sale'));
    }
    public function update(Request $request, $id)
    {
        // Validate input data
        $validatedData = $request->validate([
            'name' => 'required',
            'start_date' => 'required|date|before:end_date',
            'end_date' => 'required|date|after:start_date',
        ], [
            'name.required' => 'Vui lòng nhập tên mã khuyến mại',
            'start_date.required' => 'Vui lòng nhập ngày bắt đầu',
            'start_date.date' => 'Ngày bắt đầu không hợp lệ',
            'start_date.before' => 'Ngày bắt đầu phải trước ngày kết thúc',
            'end_date.required' => 'Vui lòng nhập ngày kết thúc',
            'end_date.date' => 'Ngày kết thúc không hợp lệ',
            'end_date.after' => 'Ngày kết thúc phải sau ngày bắt đầu',
        ]);
    
        // Find the sale with the given id
        $sale = SaleModel::findOrFail($id);
    
        // Update the sale object with new data
        $sale->name = $validatedData['name'];
        $sale->start_date = $validatedData['start_date'];
        $sale->end_date = $validatedData['end_date'];
        $sale->save();
    
        // Redirect to sale index page with success message
        return redirect()->route('sale.index')->with('success', 'Cập nhật mã khuyến mại thành công');
    }
    
    public function destroy($id)
    {
        SaleModel::destroy($id);
        return redirect()->route('sale.index')
            ->with('success', 'xóa mã khuyến mại thành công');
    }
}
