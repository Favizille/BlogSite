@extends('Master.header')
    @section('content')
			<!-- Menu -->
				<nav id="menu">
					<h2>Menu</h2>
					<ul>
                        <li><a href="{{route("home")}}">Home</a></li>

                        <li><a href="{{route("blog")}}">Blog</a></li>

                        <li><a href="{{route("about")}}"  class="active">About</a></li>

                        <li><a href="{{route("logout")}}">logout</a></li>
                    </ul>
				</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>About Us</h1>

							<div class="image main">
								<img src="images/banner-image-1-1920x500.jpg" class="img-fluid" alt="" />
							</div>

							<p>Hi and welcome the blog site. This blog site is a type of website where the content is presented in reverse chronological order (newer content appear first). We refer blog contents often as entries or “blog posts”. Blogs are typically run by an individual or a small group of people to present information in a conversational style.</p>
							<p>I created thi site to help pass information faster and easir with some functionalities to help the writer / author interact with the readers on the site. his will help the writer to get responsive feedbacks and the readers better saifaction from the stories or posts read.</p>
                            <p>The inspiration behind this site was to make people or individuals access, express and share stories among eacher with little or no fee. Another reason was to enhance businesses. On the other hand, more and more businesses are realizing the potential of a blog in their overall marketing strategy. Business owners are adding a separate blog section to their traditional websites and using it to get more traffic from search engines.
                                That’s because blogs are proven to improve search engine optimization (SEO).
                                Blogs also come with a RSS feed feature which allows users to stay updated with your latest posts. When a new post is published, the RSS feed is updated automatically. </p>
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
