@extends('layout.master')

@section('contant')
    <div class="main">
        <div class="main-contant">
            <div class="container-fluid">
                 <div class="row"> 
                     <div class="col-md-12">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">DATA SISWA</h3>
                                    <div class="right">
                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                        <i class="lnr lnr-plus-circle"></i>tambah data</button>
                                    </div>
								</div>
								<div class="panel-body">
									<table class="table table-bordered thead-dark">
										<thead>
											<tr>
												<th>ID</th>
                                                <th>NAMA</th>
                                                <th>KEALS</th>
                                                <th>JENIS KELAMIN</th>
                                                <th>UMUR</th>
                                                <th>ALAMAT</th>
                                                <th>AKSI</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($siswa as $dataSiswa )
                                            <tr>
                                                <th><a href="siswa/{{$dataSiswa->id}}/profile">{{$dataSiswa->id}}</th></a>
                                                <th><a href="siswa/{{$dataSiswa->id}}/profile">{{$dataSiswa->nama}}</th></a>
                                                <th>{{$dataSiswa->kelas}}</th>
                                                <th>{{$dataSiswa->jenisKelamin}}</th>
                                                <th>{{$dataSiswa->umur}}</th>
                                                <td>{{$dataSiswa->alamat}}</td>
                                                <td>
                                                    <a href="siswa/{{$dataSiswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="siswa/{{$dataSiswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('yain mau di hapus')">delete</a>
                                                </td>
                                            </tr>
                                                @endforeach
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
                        </div>
                 </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                    <div class="modal-body">
                        <form action="siswa/create" method="post">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kelas</label>
                                <input name="kelas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Kelas">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                <select name="jenisKelamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Umur</label>
                                <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Umur">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            {{csrf_field()}}
                         </form>
                    </div>
            </div>
@stop


      