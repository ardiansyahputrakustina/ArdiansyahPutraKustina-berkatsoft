@extends('layouts.master')
@section('content')
<!-- OVERVIEW -->
<div class="panel panel-headline">
	<div class="panel-heading">
		<h3 class="panel-title">Dashboard</h3>
		<p class="panel-subtitle">Period: {{Carbon\Carbon::today()}}</p>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-shopping-bag"></i></span>
					<p>
						<span class="number">{{$product}}</span>
						<span class="title">Products</span>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-user"></i></span>
					<p>
						<span class="number">{{$user}}</span>
						<span class="title">Users</span>
					</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="metric">
					<span class="icon"><i class="fa fa-user"></i></span>
					<p>
						<span class="number">{{$customer}}</span>
						<span class="title">Customers</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection