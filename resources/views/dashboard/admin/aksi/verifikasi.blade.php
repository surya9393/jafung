@extends('dashboard.admin.layouts.main')
@section('content')
    <div class="row mt-5">
        <div class="container">
            <h1 class="text-center">List Pendaftar</h1>
            <div class="d-flex justify-content-md-end">
                <a href="{{ url('/admin') }}" class="btn btn-primary m-2">Kembali</a>
                <a href="{{ url('/cetak/pendaftar') }}" class="btn btn-success m-2">Cetak</a>
            </div>
            <table class="table mt-4">
                <thead class="text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody class="text-center">
                @foreach ($pendaftar as $daftar)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $daftar->name }}</td>
                        <td>{{ $daftar->email }}</td>
                        <td><a href="/verifikasi/{{ $daftar->id }}" class="btn btn-warning">Lihat</a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
