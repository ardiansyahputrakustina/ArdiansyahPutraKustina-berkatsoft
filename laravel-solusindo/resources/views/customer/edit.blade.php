@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-body">
				<h3>Edit Customer</h3>
				<hr>
				<form action="{{route('customerEditPost',$customer->id)}}" method="POST" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="nama" class="form-control" value="{{$customer->nama}}" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="alamat" class="form-control" value="{{$customer->alamat}}" required>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="number" name="telepon" class="form-control" value="{{$customer->telepon}}" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" value="{{$customer->user->email}}" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" class="form-control" value="{{$customer->user->password}}" required>
					</div>
					<a href="{{route('customer')}}" class="btn btn-secondary">Kembali</a>
					<button class="btn btn-primary" type="submit">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection