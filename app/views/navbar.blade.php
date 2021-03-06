<div class="header">
	<nav class="navbar navbar-default navbar-custom" role="navigation">
		<div class="container-fluid">
			<!-- <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span>
				</button> 
				<a class="navbar-brand" href="#">Bootflat</a>
			</div> -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav">
					
					
					<li>
						<a class="nav-link current" href="{{route('home')}}">Home</a>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{route('create')}}">Create</a>
							</li>

							<li>
								<a href="{{route('discover')}}">Discover</a>
							</li>

						</ul>
					</li>
					@if(Auth::check())
					<li>
						<a href="">Notifications
							<span class="badge badge-danger">{{count(Session::get('notifications'))}}</span>
						</a>
					</li>
					@endif


					<!-- <li>

						<div class="btn-group"><button type="button" class="btn btn"><i class="glyphicon glyphicon-home"></i></button> <button type="button" class="btn btn"><i class="glyphicon glyphicon-user"></i></button> <button type="button" class="btn btn"><i class="glyphicon glyphicon-comment"></i></button> <button type="button" class="btn btn"><i class="glyphicon glyphicon-cog"></i></button></div>
					</li> -->

					
					@if(!Auth::check())
					<li>
						<a href="{{route('signup')}}">Sign Up</a>
					</li>
					<li>
						<a href="{{route('login')}}">Login</a>
					</li>
					@else
					<a button type="button" class="btn btn-warning navbar-btn" href="{{route('logout')}}">Logout</a>
					<!-- <li>
						<a href="{{route('logout')}}">Log out</a>
					</li> -->
					@endif
					
				</ul>
				@if(Auth::check())
				<p class="navbar-text navbar-right">
					<a class="navbar-link" href={{route('profile')}}>Signed in as {{Auth::user()->name}}</a>
				</p>
				@endif
				<form method="get" action="{{route('discover.search.form')}}" class="navbar-form navbar-right" role="search" style="margin-right: 150px">
					<div class="form-search search-only">
						<i class="search-icon glyphicon glyphicon-search"></i> 
						<input name="keyword" class="form-control search-query">
					</div>
				</form>
			</div>
		</div>
	</nav>
</div>
