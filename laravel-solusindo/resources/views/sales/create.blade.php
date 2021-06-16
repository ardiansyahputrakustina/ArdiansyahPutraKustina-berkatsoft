@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-body">
				<h3>Create Product</h3>
				<hr>
				<form action="{{route('salesOrderCreatePost')}}" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label>Nama</label>
						<select name="product_id" id="" class="form-control">
							<option disabled="" selected="">Select Product</option>
							@foreach($product as $p)
							<option value="{{$p->id}}">{{$p->nama}}</option>
							@endforeach
						</select>
					</div>
					<a href="{{route('product')}}" class="btn btn-secondary">Kembali</a>
					<button class="btn btn-primary" type="submit">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection