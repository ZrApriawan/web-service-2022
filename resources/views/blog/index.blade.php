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
                                <td>
                                    <form action="{{route('delete-blog', $row->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('are you sure about that?')">Delete</button>
                                    </form>
                                    <a href="edit-blog/{{ $row -> id }}" class="btn btn-warning btn-sm">Edit</a>
                                    {{-- <br>
                                    <form action="{{route('edit-blog', $row->id)}}" method="post">
                                        @csrf --}}
                                        {{-- @method('DELETE') --}}
                                        {{-- <button type="submit" class="btn btn-warning btn-sm">Update</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection