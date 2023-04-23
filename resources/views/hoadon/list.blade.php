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
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <h1>Đơn hàng bạn vừa đặt đây</h1>
                            <tr>
                                <th scope="col">Số thứ tự</th>
                                <th scope="col">Người đặt phòng</th>
                                <th scope="col">email người đặt</th>
                                {{-- <th scope="col">Mã phòng được đặt</th> --}}
                                <th scope="col">Số ngày thuê</th>
                                <th scope="col">Số tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hoadon as $i => $iteam)
                                <tr>
                                    <th scope="row">{{ $i + 1 }}</th>
                                    <td>{{ $iteam->user }}</td>
                                    <td>{{ $iteam->email }}</td>
                                    {{-- <td>{{ $iteam->room->room_id }}</td> --}}
                                    <td>{{ $iteam->date_rent }}</td>
                                    <td>{{ $iteam->money }}</td>
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

@endsection
