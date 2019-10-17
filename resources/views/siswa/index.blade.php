@extends('layouts.master')

@section('content')
	@if (session('sukses'))
	<div class="alert alert-success" role="alert">
		{{session('sukses')}}		
	</div>
	@endif
	<div class="row">
		<div class="col-6">
			<h1>Data siswa</h1>
		</div>
		<div class="col-6">
			<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
  					Tambah data siswa
			</button>

			
		</div>
		
<table class="table table-hover">
	<tr>
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>Agama</th>
	<th>Aksi</th>
	</tr>
	@foreach($data_siswa as $siswa)
	<tr>
		<td>{{$siswa->nama }}</td>
		<td>{{$siswa->jenis_kelamin }}</td>
		<td>{{$siswa->agama }}</td>
		<td>
		<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning">Edit</a>
		<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus')">Delete</a>
		</td>
	</tr>
	@endforeach
</table>
	</div>
</div>

<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="/siswa/create" method="POST">
			        	{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama</label>
					    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nama">
					  
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
					    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					      <option value="Laki-laki">Laki-laki</option>
					      <option value="Perempuan">Perempuan</option>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputPassword1" placeholder="Agama">
					  </div>					
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			        </form>
			      </div>
			    </div>
			  </div>
@endsection

