<!-- resources/views/child.blade.php -->

@extends('layouts.master')

@section('title')
    <title>Admin</title>

@section('content')
    <div class="content">
        <h1 style="font-size: 50px; color:rgb(85, 0, 255); margin-left : 200px">Thêm mã khuyến mại</h1>
        <div class="container-fluid">
            <div class="row">

                <br>
                <form action="{{ route('sale.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên mã khuyến mại</label>
                        <input type="text" class="form-control" name="name" placeholder="nhập danh mục">
                    </div>
                    <div class="form-group">
                        <label>Ngày bắt đầu</label>
                        <input type="date" class="form-control" name="start_date" placeholder="nhập danh mục">
                    </div>
                    <div class="form-group">
                        <label>Ngày kết thúc</label>
                        <input type="date" class="form-control" name="end_date" placeholder="nhập danh mục">
                    </div>
                    <button type="submit" class="btn btn-warning">Lưu</button>
                    <a href="{{ route('sale.index') }}" class="btn btn-success">danh sách danh mục</a>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
