@extends('Master.header')
    @section('content')

			<!-- Menu -->
				<nav id="menu">
					<h2>Menu</h2>
					<ul>
						<li><a href="index.html">Home</a></li>

						<li><a href="blog.html">Blog</a></li>

						<li><a href="about.html">About</a></li>

						<li><a href="team.html" class="active">Authors</a></li>

						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Team</h1>

							<div class="image main">
								<img src="images/banner-image-2-1920x500.jpg" class="img-fluid" alt="" />
							</div>

							<div class="container">
								<div class="row">
									<div class="col-sm-3 text-center">
										<img src="images/author-image-1-646x680.jpg" class="img-fluid" alt="" />

										<h2 class="m-n">John Noe</h2>

										<p>
											CEO <br>

											<a href="#"><i class="fa fa-twitter"></i></a> &nbsp;
											<a href="#"><i class="fa fa-linkedin"></i></a>
										</p>
									</div>

									<div class="col-sm-3 text-center">
										<img src="images/author-image-2-646x680.jpg" class="img-fluid" alt="" />

										<h2 class="m-n">Jane Doe</h2>

										<p>
											Customer Support <br>

											<a href="#"><i class="fa fa-twitter"></i></a> &nbsp;
											<a href="#"><i class="fa fa-linkedin"></i></a>
										</p>
									</div>

									<div class="col-sm-3 text-center">
										<img src="images/author-image-3-646x680.jpg" class="img-fluid" alt="" />

										<h2 class="m-n">Merry Smith</h2>

										<p>
											Social Media <br>

											<a href="#"><i class="fa fa-twitter"></i></a> &nbsp;
											<a href="#"><i class="fa fa-linkedin"></i></a>
										</p>
									</div>

									<div class="col-sm-3 text-center">
										<img src="images/author-image-4-646x680.jpg" class="img-fluid" alt="" />

										<h2 class="m-n">Jack Dawn</h2>

										<p>
											Social Media <br>

											<a href="#"><i class="fa fa-twitter"></i></a> &nbsp;
											<a href="#"><i class="fa fa-linkedin"></i></a>
										</p>
									</div>
								</div>
							</div>
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
								<li>Copyright ?? 2020 Company Name </li>
								<li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
							</ul>
						</div>
					</footer>

			</div>
    @endsection
