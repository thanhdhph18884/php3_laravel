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
                    <a href="{{ route('sale.create') }}" class="btn btn-success float-right m-2">Thêm mã khuyến mại</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Số thứ tự</th>
                                <th scope="col">Mã khuyến mại</th>
                                <th scope="col">Tên khuyến mại</th>
                                <th scope="col">áp dụng từ ngày</th>
                                <th scope="col">Hết hạn ngày</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sales as $i => $iteam)
                                <tr>

                                    <th scope="row">{{ $i + 1 }}</th>
                                    <td>{{ $iteam->name }}</td>
                                    <td>{{ $iteam->start_date }}</td>
                                    <td>{{ $iteam->end_date }}</td>
                                    <td>
                                        <a href="{{ route('sale.edit', $iteam->sale_id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('sale.destroy', $iteam->sale_id) }}"
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
    <span>{{ $sales->links() }}</span>
@endsection
