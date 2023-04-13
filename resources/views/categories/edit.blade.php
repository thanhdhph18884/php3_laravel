<!-- resources/views/child.blade.php -->

@extends('layouts.master')

@section('title')
    <title>Admin</title>

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <form method="POST" action="{{ route('categories.update', $category->cate_id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Sửa danh mục</label>
                        <input type="text" class="form-control" name="category_name" placeholder="nhập danh mục"
                            value="{{ $category->category_name }}">
                        @if ($errors->has('category_name'))
                            <p class="text-danger">{{ $errors->first('category_name') }}</p>
                        @endif
                    </div>
                    <label>Sửa mô tả</label>    
                    <textarea cols="100" rows="20" type="text" class="form-control" name="mota" placeholder="nhập mô tả"
                        value="{{ $category->mota }}">
                    </textarea>
                    @if ($errors->has('mota'))
                        <p class="text-danger">{{ $errors->first('mota') }}</p>
                    @endif

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-success">danh sách danh mục</a>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection
