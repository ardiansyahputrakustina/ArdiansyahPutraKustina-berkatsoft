@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-body">
				<h3>Create User</h3>
				<hr>
				<form action="{{route('userCreatePost')}}" method="POST" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" class="form-control" required>
					</div>
					<a href="{{route('user')}}" class="btn btn-secondary">Kembali</a>
					<button class="btn btn-primary" type="submit">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection