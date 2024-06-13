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
                    <form action="{{ route('rooms.index') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tìm kiếm giá" name="search">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('rooms.create') }}" class="btn btn-success float-right m-2">Thêm phòng</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Số thứ tự</th>
                                <th scope="col">ảnh</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Gía phòng</th>
                                <th scope="col">thuộc danh mục</th>
                                <th scope="col">Thao tác</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rooms as $i => $iteam)
                                <tr>

                                    <th scope="row">{{ $i + 1 }}</th>
                                    <td>
                                        <a href="{{ route('rooms.detail', $iteam->room_id) }}">
                                            <img style="width:150px; height:80px" src="{{ asset($iteam->images) }}"
                                                alt="ảnh"></a>
                                    </td>
                                    <td>{{ $iteam->description }}</td>
                                    <td>{{ number_format($iteam->price, 0, ',', '.') }} VNĐ</td>
                                    <td>{{ $iteam->categories?->category_name }}</td>
                                    <td>
                                        <a href="{{ route('rooms.edit', $iteam->room_id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <a href="{{ route('rooms.destroy', $iteam->room_id) }}"
                                            onclick="return confirm('Ban co muon xoa khong?')"
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
    <span>{{ $rooms->links() }}</span>
@endsection
