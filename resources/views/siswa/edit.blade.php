@extends('layouts.master')

@section('content')
	<h1>Edit Data Siswa</h1>
	@if (session('sukses'))
	<div class="alert alert-success" role="alert">
		{{session('sukses')}}		
	</div>
	@endif
	<div class="row">
		<div class="col-12">
		<form action="/siswa/{{$siswa->id}}/update" method="POST">
			        	{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama</label>
					    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$siswa->nama}}">
					  
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
					    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					      <option value="Laki-laki" @if($siswa->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
					      <option value="Perempuan" @if($siswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputPassword1" value="{{$siswa->agama}}">
					  </div>
					  <button type="submit" class="btn btn-warning">Update</button>
			        </form>
			        </div>
	</div>
@endsection