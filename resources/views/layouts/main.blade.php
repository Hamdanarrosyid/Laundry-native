<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{BASEURL}}css/style.css">
        <link rel="stylesheet" href="{{BASEURL}}css/outlet.css">
        <link rel="stylesheet" href="{{BASEURL}}css/table.css">
    <title>Laundry</title>
</head>
<body>
<header  id="header">
    <div class="header-bar">
        <div class="navbar container">
            <div class="nav">
                <div class="nav-title">
                    <a href="#header"><h1>Web <span>Laundy</span></h1></a>
                </div>
                <div class="nav-link">
                    <div class="bar">
                        <h1>=</h1>
                    </div>
                    <ul>
                        <li><a href="#header">Home</a></li>
                        <li><a href="{{BASEURL.'outlet'}}">Outlet</a></li>
                        <li><a href="#content">Login</a></li>
                        <li><a href="#profile">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="jumbotron container">--}}
{{--        <div class="title">--}}
{{--            <h1>Hello,Welcome to <span>Laundry</span></h1>--}}
{{--            <a href="#content" type="button">see more</a>--}}
{{--        </div>--}}
{{--    </div>--}}
</header>
<main>
    <div class="container">
{{--        <div class="container">--}}
            @yield('content')
{{--        </div>--}}
    </div>
</main>
<footer>
    <div class="footer container">
        <div class="footer-title">
            <h1>web <span>Profile</span></h1>
        </div>
        <div class="social">
            <div class="social-item">
                <a href="https://www.facebook.com/profile.php?id=100010119289105"><img src="https://img.icons8.com/color/128/000000/facebook.png"/></a>
            </div>
            <div class="social-item">
                <a href="https://twitter.com/arosyid_hamdan"><img src="https://img.icons8.com/color/128/000000/twitter.png"/></a>
            </div>
            <div class="social-item">
                <a href="https://www.instagram.com/hamdan_arosyid/"><img src="https://img.icons8.com/fluent/128/000000/instagram-new.png"/></a>
            </div>
        </div>
        <div class="text-footer">
            <p>Hamdan ~ Copyright @ 2020</p>
        </div>
    </div>
</footer>

</body>
</html>