@extends('layouts.master')
    <body>
            <nav class="navbar bg-dark text-light">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1 text-light">Akhmad Rifqi Makhbubi</span>
                </div>
            </nav>
        </body

@section('content')
<div class="text-bg-secondary p-3">
<div class="container">
    <h1>Edit Data</h1>

    <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->nama}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->email}}">
            </div>
                <select class="form-select" name="jenis_kelamin">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki" @if($mahasiswa->jenis_kelamin == "Laki-laki") selected @endif>Laki-laki</option>
                    <option value="Perempuan" @if($mahasiswa->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                </select><br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->nim}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prodi</label>
                <input type="text" name="prodi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->prodi}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Semester</label>
                <input type="text" name="semester" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->semester}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="10">{{$mahasiswa->alamat}}</textarea><br>
            </div>
                <input type="submit" name="submit" class="btn btn-secondary" value="Update">
    </form>
</div>

@endsection