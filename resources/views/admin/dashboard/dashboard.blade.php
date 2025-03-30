@extends('layouts.admin.main')

@section('container')
<div class="container">
    <h1>{{ $tittle }}</h1>
    <a class="dropdown-item" href="/Logout">Logout</a>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $profiles as $profile )
                <tr>
                    <td>{{ $profile['id'] }}</td>
                    <td>{{ $profile['name'] }}</td>
                    <td>
                        <form action="/admin/delete/{{ $profile['id'] }}" method="POST">
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection