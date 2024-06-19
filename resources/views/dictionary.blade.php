<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        />
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
            rel="stylesheet"
        />
        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/dict.css') }}" />
        <title>Dictionary</title>
    </head>
    <body>
    <header>
        <div class="logo">NEWSPULSE</div>
        <nav>
            <ul>
                <li><a href="{{ route('rssfeed') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('feed') }}">Feed</a></li>
                <li><a href="#">Dictionary</a></li>
    
                <li><a href="{{ route('account') }}">Account</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </nav>
    </header>
        <audio id="sound"></audio>
        <div class="container">
            <div class="search-box">
                <input
                    type="text"
                    placeholder="Type the word here.."
                    id="inp-word"
                />
                <button id="search-btn">Search</button>
            </div>
            <div class="result" id="result"></div>
        </div>
        <footer>
        <p class="logo-footer">NEWSPULSE</p>
        <div class="footer-links">
            <div class="footer-link"><a class="link" href="{{ route('feed') }}">Continue to read news</a></div>
            <div class="footer-link"><a class="link" href="{{ route('dictionary') }}">Search for a word</a></div>
            
            <div class="footer-link"><a class="link" href="{{ route('account') }}">Login/SignUp</a></div>
        </div>
    </footer>
        <!-- Script -->
        <script src="{{ asset('js/dict.js') }}"></script>
    </body>
</html>