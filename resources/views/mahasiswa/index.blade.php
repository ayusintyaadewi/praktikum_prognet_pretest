@extends('layouts.tabel')
@section('title', 'Mahasiswa')
@section('a', 'Data Mahasiswa')

@section('tabel')

<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1><b>Data Mahasiswa</b></h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right"> 
                                    <li><a class="btn btn-primary" href="{{ url('http://127.0.0.1:8000/mahasiswa/create') }}">+ Add</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



<div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            @if ($message = Session::get('message'))
                                <div class="alert alert-success" role="alert">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <!-- <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div> -->
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                        <th>Program Studi</th>
                                        <th>Aksi</th>
                                      </tr>
                                    </thead>

                                    <tbody> 
                                        @php($no = 1)
                                        @foreach ($prd as $mhs)
                                        <tr>
                                          <td>{{ $no++ }}</td>
                                          <td>{{ $mhs->nim }}</td>
                                          <td>{{ $mhs->nama }}</td>
                                          <td>{{ $mhs->alamat }}</td>
                                          <td>{{ $mhs->no_hp }}</td>
                                          <td>{{ $mhs->prodi }}</td>
                                          <td>

                                            <form action="{{ route('mahasiswa.destroy',$mhs->id) }}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                              <a class="btn btn-warning" href="{{ route('mahasiswa.edit',$mhs->id) }}">Edit</a>
                                              <input type="hidden" name="judul" value="{{ $mhs->nama }}">
                                              <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                          </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->




  @endsection