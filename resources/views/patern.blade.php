<!DOCTYPE HTML>
<html>
<head>
    <title>SIMPLON BURKINA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
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
    </div>

    <!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <!-- Search -->
            <section id="search" class="alt">
                <form method="post" action="{{url('search')}}">
                    @csrf
                    <input type="text" name="query" id="query" placeholder="Search:publications,apprenants," />
                </form>
            </section>

            <!-- Menu -->
            <nav id="menu">
                <header class="major">
                    <h2>Menu</h2>
                </header>
                <ul>
                    <li><a href="{{url('/')}}">Accueil</a></li>
                    <li><a href="{{url('publications/evenements')}}">Evenements</a></li>
                    <li>
                        <span class="opener">Simploniens</span>
                        <ul>
                            <li><a href="{{url('apprenants/apprenants')}}">Apprenants</a></li>
                            <li><a href="{{url('apprenants/alumnis')}}">Alumnis</a></li>
                        </ul>
                </ul>
            </nav>

            <!-- Section -->

            <!-- Section -->
            <section>
                <header class="major">
                    <h2>Gardons le contact</h2>
                </header>
                <ul class="contact">
                    <li class="icon solid fa-envelope"><a href="#">information@SimplonBurkina.bf</a></li>
                    <li class="icon solid fa-phone">(000) 000-0000</li>
                    <li class="icon solid fa-home">48e Rue boulevard tensomba<br />
                        ouaga</li>
                </ul>
            </section>

            <!-- Footer -->
            <footer id="footer">
                <p class="copyright">&copy; {{date('Y')}}<a href="">SimplonBurkina.bf</a>.</p>
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
