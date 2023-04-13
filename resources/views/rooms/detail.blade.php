@extends('layouts.master')

@section('title')
    <title>Admin</title>

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <form method="POST" enctype="multipart/form-data" action="{{ route('rooms.update', $detail->room_id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Ảnh phòng</label>
                        <img src=" {{ asset($room->images) }}" style="width:400px; height:300px" alt="">

                    </div>
                    <div class="form-group">
                        <label>Mô tả ngắn</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror"
                            name="description" value="{{ old('description', $detail->description) }}">

                    </div>
                    <div class="form-group">
                        <label>Mô tả chi tiết</label>
                        <textarea cols="100" rows="20" class="form-control @error('mota') is-invalid @enderror" name="mota">{{ old('mota', $detail->mota) }}</textarea>
                        </textarea>

                    </div>
                    <div class="form-group">
                        <label>Giá phòng / 1 day</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                            value="{{ old('price', $detail->price) }}">

                    </div>
                    <div class="form-group">
                        <label>Thuộc danh mục</label>
                        <select name="cate_id" class="form-control @error('cate_id') is-invalid @enderror">
                            <option value="">-- Chọn danh mục --</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->cate_id }}" @if (old('cate_id', $detail->cate_id) == $item->cate_id) selected @endif>
                                    {{ $item->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <a href="{{ route('rooms.index') }}" class="btn btn-success">Danh sách phòng</a>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection
