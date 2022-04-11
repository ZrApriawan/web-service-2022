@extends('template.master')

@section('isi')
    <h1>Data mahasiswa</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Smester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

        @foreach ($data as $row)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$row->nim}}</td>
                <td>{{$row->nama_mahasiswa}}</td>
                <td>{{$row->umur}}</td>
                <td>{{$row->smester}}</td>
                <td><a href="">Update</a>|<a href="">Delete</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection