<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsPulse</title>
    <link rel="stylesheet" href="{{ asset('css/feed.css') }}">
</head>
<body>
    <header>
        <div class="logo">NEWSPULSE</div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('feed') }}">Feed</a></li>
                <li><a href="{{ route('dictionary') }}">Dictionary</a></li>
                <li><a href="{{ route('account') }}">Account</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="hero">
            <h1>Stay Tuned</h1>
            <h2 class="slide-in-bottom">EXCITING NEWS AHEAD</h2>
            <div class="images">
            <img class="fade-in" src="{{ asset('images/1.png') }}" alt="Image 1">

                
            </div>
        </div>
    </main>
    <footer>
        <p class="logo-footer">NEWSPULSE</p>
        <div class="footer-links">
            <div class="footer-link"><a class="link" href="{{ route('feed') }}">Continue to read news</a></div>
            <div class="footer-link"><a class="link" href="{{ route('dictionary') }}">Search for a word</a></div>
            <div class="footer-link"><a class="link" href="{{ route('account') }}">Login/SignUp</a></div>
        </div>
    </footer>
</body>
</html>
