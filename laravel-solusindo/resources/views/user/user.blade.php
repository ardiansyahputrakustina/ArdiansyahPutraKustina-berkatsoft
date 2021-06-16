@extends('layouts.master')
@section('content')
@if(Session('sukses'))<div class="alert alert-success">{{session('sukses')}}</div>@endif
<div class="panel">
	<div class="panel-heading">
	<h3>Users</h3>
	<a href="{{route('userCreate')}}" class="btn btn-xm btn-primary"> Create User</a>
		<div class="panel-body">
			<table class="table ">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Settings</th>
					</tr>
				</thead>
				<tbody>
					@foreach($user as $u)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$u->nama}}</td>
						<td>{{$u->email}}</td>
						<td>
							<a href="{{route('userEdit',$u->id)}}" class="btn btn-xm btn-warning"> Edit</a>
							<a href="{{route('userDelete',$u->id)}}" class="btn btn-xm btn-danger" onclick="return confirm('are you sure want to delete ??')"> Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>


@endsection