<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>
<header>
    <div class="logo">NEWSPULSE</div>
    <nav>
        <ul>
            <li><a href="{{ route('rssfeed') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('feed') }}">Feed</a></li>
            <li><a href="{{ route('dictionary') }}">Dictionary</a></li>
            <li><a href="{{ route('account') }}">Account</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
    </nav>
</header>
<main class="main-content">
    <section class="about-section">
        <div class="about-image"></div>
        <h1>About</h1>
        <div class="about-content">
            <h2>The Full Story</h2>
            <p>This is your About page. This space is a great opportunity to give a full background on who you are, what you do and what your site has to offer. Your users are genuinely interested in learning more about you, so don’t be afraid to share personal anecdotes to create a more friendly quality. Every website has a story, and your visitors want to hear yours. This space is a great opportunity to provide any personal details you want to share with your followers. Include interesting anecdotes and facts to keep readers engaged. Double click on the text to start editing your content and make it your own.</p>
        </div>
    </section>
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
