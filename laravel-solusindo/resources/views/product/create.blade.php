@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-body">
				<h3>Create Product</h3>
				<hr>
				<form action="{{route('productCreatePost')}}" method="POST" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="number" name="harga" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Foto</label>
						<input type="file" name="foto" class="form-control" required>
					</div>
					<a href="{{route('product')}}" class="btn btn-secondary">Kembali</a>
					<button class="btn btn-primary" type="submit">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection