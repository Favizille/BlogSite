@extends('Master.header')
    @section('content')
				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="{{route("home")}}">Home</a></li>

							<li><a href="{{route("blog")}}" class="active">Blog</a></li>

							<li><a href="{{route("about")}}">About</a></li>

							<li><a href="{{route("team")}}">Authors</a></li>

							<li><a href="{{route("contact")}}">Contact Us</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<div class="row" style="display:flex;">
                                <div class="col-3">
                                    <h1>Blog</h1>
                                </div>
                                <div class="col-6"></div>
                                <div class="col-3">
                                    <a href="{{route('post')}}">
                                        <span class="fa fa-pencil"> Write</span>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <form action="{{route("delete_all")}}" method="POST">
                                        {{method_field('delete')}}
                                        @csrf
                                        <button type="submit">Delete All</button>
                                    </form>
                                </div>
                            </div>

							<div class="image main">
								<img src="images/banner-image-3-1920x500.jpg" class="img-fluid" alt="" />
							</div>

                            @isset($posts)

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row">

                                                @foreach ($posts as $post)

                                                    <div class="col-sm-6 text-center" style="width: 30%; height:25%;">

                                                        <img src="{{asset($post->file_path_formatted)}}" class="img-fluid" alt="" style="width:250px; height: 250px;">

                                                        <h2 class="m-n"><a href="{{route('blog_post', $post->id)}}">{{$post->title}}</a></h2>

                                                        <p> {{$post->user->first_name." ".$post->user->last_name}} &nbsp;|&nbsp; {{$post->updated_at}}</p>
                                                    </div>

                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <h4>Blog Search</h4>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">

                                                    <span class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a></span>
                                                </div>
                                            </div>

                                            <br>

                                            <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>

                                            <p><a href="#">Non, magni, sequi. Explicabo illum quas debitis ut.</a></p>

                                            <p><a href="#">Vatae expedita deleniti optio ex adipisci . </a></p>

                                            <p><a href="#">Soluta non modi dolorem voluptates dolor laborum.</a></p>
                                        </div>
                                    </div>
                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endisset
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>

								&nbsp;
							</section>

							<ul class="copyright">
								<li>Copyright © 2020 Company Name </li>
								<li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
							</ul>
						</div>
					</footer>

			</div>
    @endsection
