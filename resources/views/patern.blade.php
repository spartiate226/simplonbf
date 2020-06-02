<!DOCTYPE HTML>
<html>
<head>
    <title>Editorial by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jquery.bxslider.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">
        {{--<div class="inner">--}}

            <!-- Header -->
            <header id="header" style="border-color: #9B0002" >
                <a href="index.html" class="logo"><img class="logo" src="{{asset('images/logo-simplon.png')}}"></a>
                <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                </ul>
            </header>
            @yield('contenue')
            <!-- Banner -->
           {{-- <section id="banner">
                <div class="content">
                    <header>
                        <h1 style="color:#9B0002 ">SIMPLON BURKINA<br />
                            FASO</h1>
                        <p style="color: black">A free and fully responsive site template</p>
                    </header>
                    <p style="color: black">Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
                    <ul class="actions">
                        <li style="border:0"><a href="#"  class="button big">Lire plus</a></li>
                    </ul>
                </div>
                <span class=" image object">
										<div class="slider">
											<img src="images/pic10.jpg" alt="" />
										    <img src="images/pic10.jpg" alt="" />
										    <img src="images/pic10.jpg" alt="" />
										</div>
									</span>
            </section>

            <!-- Section -->
            <section>
                <header class="major">
                    <h2 style="border-color: #9B0002">Nos Formations</h2>
                </header>
                <div class="features">
                    <article>
                        <span class="icon fa-gem"></span>
                        <div class="content">
                            <h3>Portitor ullamcorper</h3>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        </div>
                    </article>
                    <article>
                        <span class="icon solid fa-paper-plane"></span>
                        <div class="content">
                            <h3>Sapien veroeros</h3>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        </div>
                    </article>
                    <article>
                        <span class="icon solid fa-rocket"></span>
                        <div class="content">
                            <h3>Quam lorem ipsum</h3>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        </div>
                    </article>
                    <article>
                        <span class="icon solid fa-signal"></span>
                        <div class="content">
                            <h3>Sed magna finibus</h3>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Section -->
            <section>
                <header class="major">
                    <h2>Actualites</h2>
                </header>
                <div class="posts">
                    <article>
                        <a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
                        <h3>Interdum aenean</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">More</a></li>
                        </ul>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
                        <h3>Nulla amet dolore</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">More</a></li>
                        </ul>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
                        <h3>Tempus ullamcorper</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">More</a></li>
                        </ul>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                        <h3>Sed etiam facilis</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">More</a></li>
                        </ul>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
                        <h3>Feugiat lorem aenean</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">More</a></li>
                        </ul>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
                        <h3>Amet varius aliquam</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">More</a></li>
                        </ul>
                    </article>
                </div>
            </section>

        </div>--}}
    </div>

    <!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <!-- Search -->
            <section id="search" class="alt">
                <form method="post" @yield('search-action')>
                    <input type="text" name="query" id="query" placeholder="Search" />
                </form>
            </section>

            <!-- Menu -->
            <nav id="menu">
                <header class="major">
                    <h2>Menu</h2>
                </header>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a></li>
                    <li><a href="{{url('publications/actualites')}}">actualite</a></li>
                    <li><a href="{{url('publications/evenements')}}">Evenements</a></li>
                    <li>
                        <span class="opener">Simploniens</span>
                        <ul>
                            <li><a href="{{url('apprenants/0')}}">Apprenants</a></li>
                            <li><a href="{{url('apprenants/1')}}">Alumnis</a></li>
                            <!--<li><a href="#">Tempus Magna</a></li>
                            <li><a href="#">Feugiat Veroeros</a></li>-->
                        </ul>
                        <!--</li>
                        <li><a href="#">Etiam Dolore</a></li>
                        <li><a href="#">Adipiscing</a></li>
                        <li>
                            <span class="opener">Another Submenu</span>
                            <ul>
                                <li><a href="#">Lorem Dolor</a></li>
                                <li><a href="#">Ipsum Adipiscing</a></li>
                                <li><a href="#">Tempus Magna</a></li>
                                <li><a href="#">Feugiat Veroeros</a></li>
                            </ul>
                        </li>-->
                        <!--<li><a href="#">Maximus Erat</a></li>
                        <li><a href="#">Sapien Mauris</a></li>
                        <li><a href="#">Amet Lacinia</a></li>-->
                </ul>
            </nav>

            <!-- Section -->

            <!-- Section -->
            <section>
                <header class="major">
                    <h2>Get in touch</h2>
                </header>
                <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                <ul class="contact">
                    <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
                    <li class="icon solid fa-phone">(000) 000-0000</li>
                    <li class="icon solid fa-home">1234 Somewhere Road #8254<br />
                        Nashville, TN 00000-0000</li>
                </ul>
            </section>

            <!-- Footer -->
            <footer id="footer">
                <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
            </footer>

        </div>
    </div>

</div>

<!-- Scripts -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/browser.min.js')}}"></script>
<script src="{{asset('js/breakpoints.min.js')}}"></script>
<script src="{{asset('js/util.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
<script>
    $(function(){
        $('.slider').bxSlider({
            keyboardEnabled: false,
            auto: true
        });
    });
</script>

</body>
</html>
