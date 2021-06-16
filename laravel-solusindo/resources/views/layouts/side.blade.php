<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="{{route('dashboard')}}" class=""><i class="fa fa fa fa-home"></i> <span>Dahboard</span></a></li>
				@if(auth()->user()->role == 'Admin')
				<li><a href="{{route('customer')}}" class=""><i class="fa fa fa fa-user"></i> <span>Customers</span></a></li>
				<li><a href="{{route('product')}}" class=""><i class="fa fa-shopping-bag"></i> <span>Product</span></a></li>
				<li><a href="{{route('user')}}" class=""><i class="fa fa fa fa-user"></i> <span>Users</span></a></li>
				@endif
				@if(auth()->user()->role == 'Customer')
				<li><a href="{{route('salesOrder')}}" class=""><i class="fa fa-shopping-cart
					"></i> <span>Sales Orders</span></a></li>
				@endif
				</ul>
			</nav>
		</div>
	</div>