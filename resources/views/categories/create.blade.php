<!-- resources/views/child.blade.php -->

@extends('layouts.master')

@section('title')
    <title>Admin</title>

@section('content')
    <div class="content">
        <h1 style="font-size: 50px; color:rgb(85, 0, 255); margin-left : 200px">Thêm danh mục khách sạn</h1>
        <div class="container-fluid">
            <div class="row">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input type="text" class="form-control" name="category_name" placeholder="nhập danh mục">
                        @if ($errors->has('category_name'))
                            <span class="text-danger">{{ $errors->first('category_name') }}</span>
                        @endif
                        <label>Mô tả</label>
                        <textarea cols="100" rows="20" type="text" class="form-control" name="mota" placeholder="nhập mô tả">
                        </textarea>
                        @if ($errors->has('mota'))
                            <span class="text-danger">{{ $errors->first('mota') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-warning">Lưu</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-success">danh sách danh mục</a>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
