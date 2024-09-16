<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Shiny Store' }}</title>

        <link href="{{asset('css.style/style.css')}}" rel="stylesheet" type="text/css">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        @vite('resources/css/app.css')
        
    </head>
    <body>

    <header id="header">
		<div class="container">
			<h1 style="color:gold">Shiny jewelry</h1>
			<div class="right-links">
				<ul>
					<li><a href="{{ url('/cart') }}"><span class="ico-products"></span>My cart</a></li>
					<li><a href=""><span class="ico-account">@if (Route::has('login'))
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Log in
                                    </a>
                                 /
                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            
                        @endif
						</span></a></li>
						
						<li>
						<a href="{{ url('/StartPage') }}">
						  <form method="POST"action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}<span class="ico-signout"></span>
                                </x-dropdown-link>
                          </form>
						</a>
						</li>
		
				</ul>
			</div>
		</div>
		
	</header>

    <nav id="menu">
		<div class="container">
			<div class="trigger"></div>
			<ul>
				<li><a href="{{ url('/StartPage') }}">Home</a></li>
				<!-- <li><a href="{{ url('/Gallery') }}">Gallery</a></li> -->
				<li><a href="{{ url('/Category') }}">Categories</a></li>
				<!-- <li><a href="{{ url('/') }}">New collection</a></li> -->
				<li><a href="{{ url('/AboutUs') }}">About Us</a></li>
			</ul>
		</div>
	</nav>



        {{ $slot }}



    <footer id="footer">
		<div class="container">
			<div class="cols">

				<div class="col media">
					<h3>Social media</h3>
					<ul class="social">
						<li><a href="#"><span class="ico ico-fb"></span>Facebook</a></li>
						<li><a href="#"><span class="ico ico-tw"></span>Twitter</a></li>
						<li><a href="#"><span class="ico ico-gp"></span>Google+</a></li>
						<li><a href="#"><span class="ico ico-pi"></span>Pinterest</a></li>
					</ul>
				</div>
				<div class="col contact">
					<h3>Contact us</h3>
					<p>Shiny Jewelry<br>Suez<br>Egypt</p>
					<p><span class="ico ico-em"></span><a href="#">zeyadahmedsamer@gmail.com</a></p>
					<p><span class="ico ico-ph"></span>(020) 423 446 924</p>
				</div>
				
			</div>
			<p class="copy">Copyright 2024 Shiny Jewelry. All rights reserved.</p>
		</div>
	</footer>


         <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	     <script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	     <script src="js/plugins.js"></script>
    	 <script src="js/main.js"></script>
         
    </body>
</html>
