@extends('blogtemplate.master')

{{-- @section('judul', 'Data Blog') --}}

@section('isi')

    {{-- <h1> add Data Blog</h1> --}}
        <div class="row mt-4">
        <div class="col-6">
            <div class="card">
                <div class="card-header">Add Data Blog <a class="btn btn-sm btn-warning float-end" href="{{ url('data-blog') }}">View Data</a></div>
                <div class="card-body">
                    <form action="{{ url('input-blog') }}" method="POST">
                        @csrf
                        <div class="form-gorup col-6">
                            <label for="">Author</label>
                            <input type="text" name="author" class="form-control">
                        </div>
                        <div class="form-gorup col-6">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-gorup col-6">
                            <label for="">Body</label>
                            <input type="text" name="body" class="form-control">
                        </div>
                        <div class="form-gorup col-6">
                            <label for="">Keyword</label>
                            <textarea name="keyword" cols="30" rows="2" class="form-control"></textarea>
                        </div>

                        <input type="submit" class="btn btn-success mt-3" name="submit" value="save" >
                        <a class="btn btn-danger float-end mt-3" href="{{ url('data-blog') }}">Cencel</a>
                    </form>
                </div>
            </div>
        </div>
        </div>
        

@endsection
{{-- @endsection --}}