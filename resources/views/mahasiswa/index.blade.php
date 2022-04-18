@extends('template.master')

@section('isi')
    <div class="card">
        <div class="card-header">Data dari Mahasiswa <a class="btn btn-sm btn-success float-end" href="{{ url('add-mahasiswa') }}">Add data</a></div>
            <div class="card-body">
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
                            <td>
                            <form action="{{route('delete-mahasiswa', $row->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('are you sure about that?')">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

@endsection