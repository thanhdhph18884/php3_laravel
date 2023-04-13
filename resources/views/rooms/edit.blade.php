@extends('layouts.master')

@section('title')
    <title>Admin</title>

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <form method="POST" enctype="multipart/form-data" action="{{ route('rooms.update', $room->room_id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Ảnh phòng</label>
                        <input type="file" class="form-control @error('images') is-invalid @enderror" name="images">
                        @error('images')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Mô tả ngắn</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror"
                            name="description" value="{{ old('description', $room->description) }}">
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Mô tả chi tiết</label>
                        <textarea cols="100" rows="20" class="form-control @error('mota') is-invalid @enderror" name="mota">{{ old('mota', $room->mota) }}</textarea>
                        </textarea>
                        @error('mota')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Giá phòng / 1 day</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                            value="{{ old('price', $room->price) }}">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Thuộc danh mục</label>
                        <select name="cate_id" class="form-control @error('cate_id') is-invalid @enderror">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->cate_id }}" @if (old('cate_id', $room->cate_id) == $item->cate_id) selected @endif>
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
