<!DOCTYPE HTML>
<html>
	<head>
		<title>BLog Website</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href={{asset("/bootstrap/css/bootstrap.min.css")}} />
		<link rel="stylesheet" href={{asset("assets/css/main.css")}} />
		<noscript><link rel="stylesheet" href={{asset("assets/css/noscript.css")}} /></noscript>
	</head>
	<body class="is-preload">
			<div id="wrapper">

				<header id="header">
					<div class="inner">

                        <a href="{{route("home")}}" class="logo">
                            <span class="fa fa-pencil"></span> <span class="title">Blog Website</span>
                        </a>

                        <nav>
                            <ul>
                                <li><a href="#menu">Menu</a></li>
                            </ul>
                        </nav>

					</div>
				</header>
            @yield('content')

			<script src={{asset("assets/js/jquery.min.js")}}></script>
			<script src={{asset("assets/bootstrap/js/bootstrap.bundle.min.js")}}></script>
			<script src={{asset("assets/js/jquery.scrolly.min.js")}}></script>
			<script src={{asset("assets/js/jquery.scrollex.min.js")}}></script>
			<script src={{asset("assets/js/main.js")}}></script>
	</body>
</html>
