@extends('layouts.master')

@section('title')
    <title>Admin</title>

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Vai trò</th>
                                <th scope="col">Ngày tạo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $iteam)
                                <tr>

                                    <td>{{ $iteam->id }}</td>
                                    <td>{{ $iteam->name }}</td>
                                    <td>{{ $iteam->email }}</td>
                                    <td style="width: 50%">{{ $iteam->password }}</td>
                                    <td>{{ $iteam->role }}</td>
                                    <td>{{ $iteam->created_at }}</td>
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
    <span>{{ $user->links() }}</span>
@endsection
