@extends('blogtemplate.master')

@section('isi')
    {{-- <h1>Data Blog</h1> --}}

    <div class="row mt-4">
        <div class="col-10">
            <div class="card">
                <div class="card-header">Data dari Blog <a class="btn btn-sm btn-info float-end" href="{{ url('add-blog') }}">Add data</a></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Athor</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Keyword</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($data as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->author}}</td>
                                <td>{{$row->title}}</td>
                                <td>{{$row->body}}</td>
                                <td>{{$row->keyword}}</td>
                                <td><a href="" class="btn btn-success">Update</a>|<a href="" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection