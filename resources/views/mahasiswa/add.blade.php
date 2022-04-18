@extends('template.master')

@section('isi')
    <div class="row mt-4">
        <div class="col-6">
            <div class="card">
                <div class="card-header">Add Data Mahasiswa <a class="btn btn-sm btn-info float-end" href="{{ url('data-mahasiswa') }}">View Data</a></div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ url('save-mahasiswa') }}" method="POST">
                        @csrf
                        <div class="form-gorup col-6">
                            <label for="">NIM</label>
                            <input type="text" name="nim" class="form-control" value="{{ old('nim') }}">
                        </div>
                        <div class="form-gorup col-6">
                            <label for="">Nama</label>
                            <input type="text" name="nama_mahasiswa" class="form-control" value="{{ old('nama_mahasiswa') }}">
                        </div>
                        <div class="form-gorup col-6">
                            <label for="">Umur</label>
                            <input type="number" name="umur" class="form-control" value="{{ old('umur') }}">
                        </div>
                        <div class="form-gorup col-6">
                            <label for="">Smester</label>
                            <input type="number" name="smester" class="form-control" value="{{ old('smester') }}">
                        </div>

                        <input type="submit" class="btn btn-primary mt-3" name="submit" value="save" >
                        <a class="btn btn-danger float-end mt-3" href="{{ url('data-mahasiswa') }}">Cencel</a>
                    </form>
                </div>
            </div>
        </div>
        </div>
@endsection