@extends('layouts.master')
@section('content')
@if(Session('sukses'))<div class="alert alert-success">{{session('sukses')}}</div>@endif
<div class="panel">
	<div class="panel-heading">
	<h3>Customers</h3>
		<div class="panel-body">
			<table class="table ">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Settings</th>
					</tr>
				</thead>
				<tbody>
					@foreach($customer as $c)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$c->nama}}</td>
						<td>{{$c->user->email}}</td>
						<td>{{$c->alamat}}</td>
						<td>{{$c->telepon}}</td>
						<td>
							<a href="{{route('customerEdit',$c->id)}}" class="btn btn-xm btn-warning"> Edit</a>
							<a href="{{route('customerDelete',$c->id)}}" class="btn btn-xm btn-danger" onclick="return confirm('Are you sure want to delete >>')"> Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>


@endsection