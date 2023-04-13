<!-- resources/views/child.blade.php -->

@extends('layouts.master')

@section('title')
    <title>Admin</title>

@section('content')
    <div class="content">
        <h1 style="font-size: 50px; color:rgb(85, 0, 255); margin-left : 200px">Thêm 1 banner mới</h1>
        <div class="container-fluid">
            <div class="row">
                <form action="{{ route('banner.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên banner</label>
                        <input type="text" class="form-control" name="name" placeholder="tên banner">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="images">Ảnh</label>
                        <input type="file" class="form-control" name="images">
                        @if ($errors->has('images'))
                            <span class="text-danger">{{ $errors->first('images') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-warning">Lưu</button>
                    <a href="{{ route('banner.index') }}" class="btn btn-success">danh sách banner đang có</a>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
