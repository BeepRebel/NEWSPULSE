<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
    margin: 0;

    background-color: #B2E8CA;
    
}

header {
    background-color: #0d6c7c;
    color: azure ;
    border-bottom: 1px solid #ddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 40px;
}

.logo {
    font-weight: bold;
    font-size: 2em;
    font-family: Didot, Didot LT STD, Hoefler Text, Garamond, Calisto MT, Times New Roman, serif;
    color: azure;
}

.logo-footer{
    font-weight: bold;
    font-size: 2em;
    font-family: Didot, Didot LT STD, Hoefler Text, Garamond, Calisto MT, Times New Roman, serif;
    color: #0d6c7c;
    padding: 50px;
}

nav ul {
    list-style: none;
    
    margin: 100;
    padding: 50;
    display: flex;
}

nav ul li {
    padding: 7px;
    margin-left: 20px;
}

nav ul li a {
    text-decoration: none;
    color: azure;
    font-weight: bold;
    font-family: "Gill Sans", sans-serif !important;
    font-size: 1.2em;
}

footer {
    background-color: #B2E8CA;
    padding: 20px;
    border-top: 1px solid #000000;
    text-align: center;
}

.footer-links {
    color: #0d6c7c !important;
    display: flex;
    justify-content: center;
    gap: 0px;
    font-size: large;
    font-family:Lucidatypewriter, monospace;
}

.footer-link {
    flex: 1;
    border: 1px solid #000000;
    padding: 100px;
    text-align: center;
    font-weight: bold;
    cursor: pointer;
    color: #0d6c7c !important;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.fade-in {
    animation: fadeIn 2s ease-out;
}

@keyframes slideInFromBottom {
    from {
        transform: translateY(100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.slide-in-bottom {
    animation: slideInFromBottom 1s ease-out;
    
}
.link{
    color: #0d6c7c;
    text-decoration: none;
}
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #B2E8CA;
        }
        .contact-section {
            background-color: #c7c6d3;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: flex;
            align-items: flex-start;
        }
        .contact-info {
            flex: 1;
            padding: 20px;
        }
        .contact-info h1 {
            font-size: 36px;
        }
        .contact-info p {
            margin: 10px 0 20px;
            line-height: 1.6;
        }
        .contact-info img {
            width: 110%;
            height: auto;
        }
        .contact-details {
            margin-top: 220px;
            flex: 1;
            padding: 20px;
        }
        .contact-details p {
            margin: 5px 0;
        }
        .contact-details form {
            margin-top: 20px;
        }
        .contact-details input, .contact-details textarea {
            width: calc(50% - 10px);
            padding: 10px;
            margin: 5px 5px 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contact-details textarea {
            width: calc(100% - 10px);
            height: 100px;
        }
        .contact-details input[type="submit"] {
            width: 100%;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .contact-details input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
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
    <div class="contact-section">
        <div class="contact-info">
            <h1>Contact Us</h1>
            <p>This is your Contact section paragraph. Encourage your reader to reach out with any questions, comments or to take a different action specific to your site.</p>
            <img src="{{ asset('images/3.png') }}" alt="Contact Image">
        </div>
        <div class="contact-details">
            <p>500 Terry Francine Street, San Francisco, CA 94158</p>
            <p>info@mysite.com</p>
            <p>123-456-7890</p>
            <form>
                <input type="text" name="first-name" placeholder="First Name *">
                <input type="text" name="last-name" placeholder="Last Name *">
                <input type="email" name="email" placeholder="Email *">
                <textarea name="message" placeholder="Message"></textarea>
                <input type="submit" value="Send">
            </form>
        </div>
    </div>
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