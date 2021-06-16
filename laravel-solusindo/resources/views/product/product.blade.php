@extends('layouts.master')
@section('content')
@if(Session('sukses'))<div class="alert alert-success">{{session('sukses')}}</div>@endif
<div class="panel">
	<div class="panel-heading">
	<h3>Product</h3>
	<a href="{{route('productCreate')}}" class="btn btn-xm btn-primary"> Tambah Product</a>
		<div class="panel-body">
			<table class="table ">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Harga</th>
						<th>Foto</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($product as $p)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$p->nama}}</td>
						<td>{{$p->harga}}</td>
						<td><img src="{{$p->foto()}}" width="100" height="100" alt=""></td>
						<td>
							<a href="{{route('productEdit',$p->id)}}" class="btn btn-xm btn-warning"> Edit</a>
							<a href="{{route('productDelete',$p->id)}}" onclick="return confirm('Are you sure want to delete ??')" class="btn btn-xm btn-danger"> Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>


@endsection