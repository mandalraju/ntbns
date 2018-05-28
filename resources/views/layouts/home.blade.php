<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials._head')
</head>
<body>


	<div class="container-fluid">
		<div class="row">
			<header class="main-header">
				<nav id="navbar" class="navbar navbar-static-top">
					<div class="navbar-main">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="index.html"><img src="#" alt=""></a>
							</div>
							<div id="navbar" class="navbar-collapse collapse pull-right">
								<ul class="nav navbar-nav">
									<li><a class="is-active" href="/">Home</a></li>
									<li><a href="/about">About</a></li>
									<li class="has-child"><a href="#">Events</a>
										<ul class="submenu">
											<li class="submenu-item"><a href="{{route('event.create')}}">Create</a></li>
											<li class="submenu-item"><a href=" {{route('event.index')}} ">View All </a></li>
											<li class="submenu-item"><a href="causes-single.html">Delete</a></li>
										</ul>
									</li>
									<li class="has-child"><a href="#">Notices</a>
										<ul class="submenu">
											<li class="submenu-item"><a href="{{ route('notice.create') }}">Create</a></li>
											<li class="submenu-item"><a href=" {{route('notice.index')}} ">View All</a></li>
											<li class="submenu-item"><a href="#">Delete</a></li>
										</ul>
									</li>
									<li><a href="#">Gallery</a></li>
									<li><a href="/contact">Contact</a></li>
									<li class="has-child">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
											{{ Auth::user()->name }} <span class="caret"></span>
										</a>
										<ul class="submenu">
											<li class="submenu-item">
												<a href="{{ route('logout') }}"
												onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
												Logout
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
											</li>
										</ul>
									</li>
								</ul>
							</div> <!-- /#navbar -->
						</div> <!-- /.container -->
					</div> <!-- /.navbar-main -->
				</nav> 
			</header> <!-- /. main-header -->	
		<br>
		<br>
		<div class="container">
			@include('partials._message')			
		</div>
		@yield('newnotice')
		@yield('newevent')
		@yield('content')
		@yield('form')
		<footer class="main-footer">
			<!-- Include _bottomfooter.blade.php -->
			@include('partials._bottomfooter')
		</footer> <!-- main-footer -->
	</div>
</div>



</body>
</html>