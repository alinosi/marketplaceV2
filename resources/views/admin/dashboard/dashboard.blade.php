@extends('layouts.admin.main')

@section('container')
<div class="container">
    <h1>{{ $title }}</h1>
    <a class="dropdown-item" href="/Logout">Logout</a>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $profiles as $profile )
                <tr>
                    <td>{{ $profile->user_id }}</td>
                    <td>{{ $profile->name }}</td>
                    <td>{{ $profile->address }}</td>
                    <td>
                        <form action="/admin/delete/{{ $profile->id }}" method="POST">
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection