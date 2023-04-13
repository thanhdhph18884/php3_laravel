<!-- resources/views/child.blade.php -->

@extends('layouts.master')

@section('title')
    <title>Admin</title>

@section('content')
    <div class="content">
        <h1 style="font-size: 50px; color:rgb(85, 0, 255); margin-left : 200px">Sửa mã khuyến mại</h1>
        <div class="container-fluid">
            <div class="row">
                <br>
                <form action="{{ route('sale.update', $sale->sale_id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên mã khuyến mại</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Nhập tên mã khuyến mại" value="{{ old('name', $sale->name) }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Ngày bắt đầu</label>
                        <input type="date" class="form-control @error('start_date') is-invalid @enderror"
                            name="start_date" value="{{ old('start_date', $sale->start_date) }}">
                        @error('start_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Ngày kết thúc</label>
                        <input type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date"
                            value="{{ old('end_date', $sale->end_date) }}">
                        @error('end_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-warning">Cập nhật</button>
                    <a href="{{ route('sale.index') }}" class="btn btn-success">Danh sách mã khuyến mại</a>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


@endsection
