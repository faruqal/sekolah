@extends('layout.master')
@section('contant')
<div class="main">
    <div class="main-contant">
        <div class="container-fluid">
             <div class="row"> 
                 <div class="col-md-12">
                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs Data Siswa</h3>
								</div>
								<div class="panel-body">
                                        <form action="/sekolah/siswa/{{$siswa->id}}/update" method="POST">
                   
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama" value="{{$siswa->nama}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kelas</label>
                                                <input name="kelas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Kelas" value="{{$siswa->kelas}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                                <select name="jenisKelamin" class="form-control" id="exampleFormControlSelect1" ">
                                                <option value="L" @if($siswa->jenisKelamin == 'L') selected @endif>Laki-Laki</option>
                                                <option value="P" @if($siswa->jenisKelamin == 'P') selected @endif>Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Umur</label>
                                                <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Umur" value="{{$siswa->umur}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Alamat</label>
                                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
                                            </div>
                                            {{csrf_field()}}
                                            <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary btn-lg float-left">Edit Data</button>
                                            </div>
                                        </form>
							    </div>
						</div>
                 </div>
             </div>
        </div>
    </div>
</div>               
@stop
@section('contant1')
        @if(session('sucses'))
            <div class="alert alert-success" role="alert">
                {{session('sucses')}}
            </div>
        @endif 
        <div class="row">
            <div class="col-lg-12">
            <h1>Edit Data Siswa</h1>
                <form action="/sekolah/siswa/{{$siswa->id}}/update" method="POST">
                   
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama" value="{{$siswa->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kelas</label>
                        <input name="kelas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Kelas" value="{{$siswa->kelas}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name="jenisKelamin" class="form-control" id="exampleFormControlSelect1" ">
                        <option value="L" @if($siswa->jenisKelamin == 'L') selected @endif>Laki-Laki</option>
                        <option value="P" @if($siswa->jenisKelamin == 'P') selected @endif>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Umur</label>
                        <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Umur" value="{{$siswa->umur}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
                    </div>
                    {{csrf_field()}}
                    <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-lg float-left">Edit Data</button>
                    </div>
                </form>
            </div>
@endsection      
