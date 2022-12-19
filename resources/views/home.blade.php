<!DOCTYPE HTML>
<html>
	<head>
		<title>Blog Website</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
			<div id="wrapper">

					<header id="header">
						<div class="inner">

                            <a href="" class="logo">
                                <span class="fa fa-pencil"></span> <span class="title">Blog Website</span>
                            </a>

                            <nav>
                                <ul>
                                    <li><a href="#menu">Menu</a></li>
                                </ul>
                            </nav>

						</div>
					</header>

					<nav id="menu">
                        @isset($userId)
                            @if (auth()->user())

                                <h2>Menu</h2>
                                <ul>
                                    <li><a href="{{route("home")}}" class="active"  style="color: whitesmoke">Home</a></li>

                                    <li><a href="{{route("blog")}}"  style="color: whitesmoke">Blog</a></li>

                                    <li><a href="{{route("about")}}">About</a></li>

                                    <li><a href="{{route("team")}}">Authors</a></li>

                                    <li><a href="{{route("contact")}}">Contact Us</a></li>
                                </ul>
                            @else

                                <li> <a href="{{route("login_view")}}" style="color: whitesmoke">Login</a></li>

                                <li><a href="{{route("register_view")}}" style="color: whitesmoke">Register</a></li>
                            @endif
                        @endisset

					</nav>

					<div id="main">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="images/slider-image-1-1920x700.jpg" alt="First slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/slider-image-2-1920x700.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/slider-image-3-1920x700.jpg" alt="Third slide">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

						<br>
						<br>

						<div class="inner">
							<header id="inner">
								<h1>Write your first blog post now!</h1>
								<p>Make your blog truly your own with advanced web features. Writing your first blog post is exciting, Start your blog today by clicking on the link <a href="{{route('login_view')}}">
                                    <span> write</span>
                                </a></p>
							</header>

							<br>

							<h2 class="h2">Latest blog posts</h2>
                            @isset($posts)
                                <div class="row">
                                    @foreach ($posts as $post)
                                        <div class="col-sm-4 text-center">
                                            <img src="{{asset($post->file_path_formatted)}}" class="img-fluid" alt=""  style="height:300px; width:400px;"/>

                                            <h2 class="m-n"><a href="{{route('blog_post', $post->id)}}">{{$post->title}}</a></h2>

                                            <p>  {{$post->user->first_name." ".$post->user->last_name}} &nbsp;|&nbsp; {{$post->updated_at}}</p>
                                        </div>
                                    @endforeach
                                </div>
                            @endisset

							<p class="text-center">
                                @if(auth()->user())
                                    <a href="{{route("blog")}}">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a>
                                @else
                                    <a href="{{route("login_view")}}">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a>
                                @endif

                            </p>
						</div>
					</div>

					<footer id="footer">
						<div class="inner">

							<section>
								<h2>Contact Info</h2>

								<ul class="alt">
									<li><span class="fa fa-envelope-o"></span> <a href="#">contact@company.com</a></li>
									<li><span class="fa fa-phone"></span> +1 333 4040 5566 </li>
									<li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC 10001 United States of America</li>
								</ul>

								<h2>Follow Us</h2>

								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>
							</section>

						</div>
					</footer>

			</div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
