@extends('layouts.master')
@section('content')
@if(Session('sukses'))<div class="alert alert-success">{{session('sukses')}}</div>@endif
<div class="panel">
	<div class="panel-heading">
	<h3>Detail Orders</h3>
	<a href="{{route('salesOrderCreate')}}" class="btn btn-xm btn-primary"> Create Sales Order</a>
	<a href="{{route('salesOrderConfirm')}}" class="btn btn-xm btn-success"> Confirm</a>
		<div class="panel-body">
			<table class="table ">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Harga</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($detail as $s)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$s->product->nama}}</td>
						<td>{{$s->product->harga}}</td>
						<td>
							<a href="{{route('salesOrderDetailDelete',$s->id)}}" onclick="return confirm('Are you sure want to delete ??')" class="btn btn-xm btn-danger"> Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="panel">
	<div class="panel-heading">
	<h3>Sales Orders</h3>
		<div class="panel-body">
			<table class="table ">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Product</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					@foreach($sales as $s)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$s->customer->nama}}</td>
						<td>{{$s->jumlah_barang}}</td>
						<td>{{$s->total}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>


@endsection