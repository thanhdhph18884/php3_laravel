<!-- resources/views/child.blade.php -->

@extends('layouts.master')

@section('title')
    <title>Admin</title>

@section('content')
    <div class="content">
        <div class="container-fluid">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-3">
                    <form action="{{ route('categories.index') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tìm kiếm tên" name="search">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('categories.create') }}" class="btn btn-success float-right m-2">Thêm danh
                        mục</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Số thứ tự</th>

                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $i => $iteam)
                                <tr>

                                    <th scope="row">{{ $i + 1 }}</th>
                                    <td>{{ $iteam->category_name }}</td>
                                    <td>{{ $iteam->mota }}</td>
                                    <td>
                                        <a href="{{ route('categories.edit', $iteam->cate_id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <a href="{{ route('categories.destroy', $iteam->cate_id) }}"
                                            onclick="return confirm('Bạn không được xóa danh mục vì nó xẽ ảnh hưởng tới các sản phẩm')"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <span>{{ $categories->links() }}</span>
@endsection
