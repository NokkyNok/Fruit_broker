<!DOCTYPE html>

<html>
<head>
	<title>digital avocado broker</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
	<link href="{{asset('assets/css/main.css')}}" rel="stylesheet" media="all">
</head>
<body>
	<header>
		<nav>
			<h1>digital avocado broker</h1>
			<ul id="navli">
				<li><a class="homered" href="{{route ('home') }}">Home</a></li>
				<li><a class="homeblack" href="{{ route('register') }}">register brok</a></li>
				<li><a class="homeblack" href="contact.html">Contact</a></li>
				@guest
				<li><a class="homeblack" href="{{route('login')}}">Login</a></li>
				@else
				 <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
				@endguest

				@can('manage-users')
				<li><a class="homeblack" href="{{route('admin.users.index')}}">Dashboard</a></li>
				@endcan
				@can('manage-brokers')
				<li><a class="homeblack" href="">Brokers</a></li>

                @endcan



		</nav>
	</header>
	
	<div class="divider"></div>
	<div id="divimg">
		
	</div>

	
	<img src="hero-banner.png" style="float: left; margin-right: 100px; margin-top: 35px; margin-left: 70px">
	

	<div style="margin-top: 175px">
		
		<h1 style="font-family: 'Lobster', cursive; font-weight: 200; font-size: 50px; margin-top: 100px; text-align: center;">Welcome to digital avocado brokers</h1>
		<p style="font-family: 'Montserrat', sans-serif; font-size: 30px ; text-align: center;">Your One Stop Soloution</p>
	</div>
		

	
</body>
</html>