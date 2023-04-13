<!-- resources/views/child.blade.php -->

@extends('layouts.master')

@section('title')
    <title>Admin</title>

@section('content')
    <div class="content">
        <h1 style="font-size: 50px; color:rgb(85, 0, 255); margin-left : 200px">Thêm phòng khách sạn</h1>
        <div class="container-fluid">
            <div class="row">
                <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Ảnh phòng</label>
                        <input type="file" class="form-control @error('images') is-invalid @enderror" name="images">
                        @error('images')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Mô ngắn</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror"
                            name="description" value="{{ old('description') }}">
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Mô tả chi tiết</label>
                        <textarea type="text" cols="100" rows="5" class="form-control @error('mota') is-invalid @enderror"
                            name="mota" value="{{ old('mota') }}">
                        </textarea>
                        @error('mota')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Giá phòng / 1 day</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                            value="{{ old('price') }}">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Thuộc danh mục</label>
                        <select name="cate_id" class="form-control @error('cate_id') is-invalid @enderror">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->cate_id }}" @if (old('cate_id') == $item->cate_id) selected @endif>
                                    {{ $item->category_name }}</option>
                            @endforeach
                        </select>
                        @error('cate_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-warning">Lưu</button>
                    <a href="{{ route('rooms.index') }}" class="btn btn-success">Danh sách phòng</a>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection
