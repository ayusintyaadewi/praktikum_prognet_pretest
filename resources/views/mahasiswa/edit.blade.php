@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body">
          <h2>Ubah Data Mahasiswa</h2>
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <form action="{{ route('mahasiswa.update',$mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <div class="col-md-12">
                <strong>NIM</strong>
                <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{$mahasiswa->nim }}">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <strong>Nama</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="{{$mahasiswa->nama }}">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <strong>Alamat</strong>
                <textarea class="form-control" rows="10" name="alamat" placeholder="Alamat Lengkap">{{ $mahasiswa->alamat }}</textarea>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <strong>No HP</strong>
                <input type="text" name="no_hp" class="form-control" placeholder="No HP" value="{{$mahasiswa->no_hp }}">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <strong>Program Studi</strong>
                <select name="id_prodi" class="form-control">
                  @foreach ($prodi as $prd)
                    @if ($prd->id == $mahasiswa->id_prodi)
                      <option selected value="{{$prd->id}}">{{$prd->prodi}}</option>
                    @else
                      <option value="{{$prd->id}}">{{$prd->prodi}}</option>
                    @endif
                  @endforeach
                  </option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Kembali</a>
              </div>
              <div class="col-md-6 text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection