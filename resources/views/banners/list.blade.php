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
                <div class="col-md-12">
                    <a href="{{ route('banner.create') }}" class="btn btn-success float-right m-2">Thêm Banner</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Số thứ tự</th>
                                <th scope="col">ID banner</th>
                                <th scope="col">Tên banner</th>
                                <th scope="col">ảnh</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $i => $iteam)
                                <tr>

                                    <th scope="row">{{ $i + 1 }}</th>
                                    <td>{{ $iteam->name }}</td>
                                    <td>
                                        <img style="width: 150px; height:50px" src="{{ $iteam->images }}" alt="ảnh">
                                    </td>
                                    <td>
                                        <a href="{{ route('banner.edit', $iteam->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('banner.destroy', $iteam->id) }}"
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
    <span>{{ $banners->links() }}</span>
@endsection
