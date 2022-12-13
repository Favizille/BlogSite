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
                @if ($post->user->id === auth()->user()->id)

                <div class="inner">
                    <a href="{{route("update_post",$post->id)}}">Edit Post</a>
                </div>
                @endif
                <div class="inner">
                    <h1 style="text-align: center">{{$post->title}}</h1>

                    <div class="image main">
                        <img src="{{asset($post->file_path_formatted)}}" class="img-fluid" alt="" style="width: 25%; height:25%;"/>
                    </div>

                    <p>{{$post->description}}</p>
                </div>
                <form action="{{route("delete_post",$post->id)}}" method="POST">
                    {{method_field('delete')}}
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </div>


            @if($post->user->id !== auth()->user()->id)
                <footer id="footer">
                    <div class="inner">
                        <section>
                            <h2>Leave a comment</h2>

                            <form>
                                <div class="fields">
                                    <div class="field half">
                                        <input type="text" name="name" id="name" placeholder="Name" />
                                    </div>

                                    <div class="field half">
                                        <input type="text" name="email" id="email" placeholder="Email" />
                                    </div>

                                    <div class="field">
                                        <textarea name="message" id="message" rows="3" placeholder="Your message"></textarea>
                                    </div>

                                    <div class="field text-right">
                                        <label>&nbsp;</label>

                                        <ul class="actions">
                                            <li><input type="submit" value="Submit" class="primary" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </section>

                        <section>

                            <h2>Share This</h2>

                            <ul class="icons">
                                <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                                <li><a href="#" class="icon style2 fa-behance"><span class="label">Behance</span></a></li>
                            </ul>
                        </section>

                        <ul class="copyright">
                            <li>Copyright © 2020 Company Name </li>
                            <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                        </ul>
                    </div>
                </footer>
            @endif

    @endsection
