<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
                <li><a href="#">Account</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <h1
      class="text-green text-center font-weight-bold"
      style="font-size: 40px;"
    >
      Account
    </h1>

    <h4 class="text-blue text-center font-weight-bold" style="font-size: 20px;">
      Login
    </h4>

    <div >
      <br />

      <div class="col-lg-5 m-auto d-block">
        <form action="#" onsubmit="return validation()" class="container">
          <div class="form-group">
            <label for="user" class="font-weight-regular"> Username </label>
            <input
              type="text"
              name="user"
              class="form-control"
              id="user"
              autocomplete="off"
            />
            <span id="username" class="text-danger font-weight-regular"> </span>
          </div>

          <div class="form-group">
            <label class="font-weight-regular"> Password </label>
            <input
              type="password"
              name="pass"
              class="form-control"
              id="pass"
              autocomplete="off"
            />
            <span id="passwords" class="text-danger font-weight-regular">
            </span>
          </div>

          <input
            type="submit"
            name="submit"
            value="Submit"
            class="btn btn-success"
            autocomplete="off"
          />&emsp;&emsp;&emsp;&emsp; Did not have an account?
          <a href="{{ route('signup') }}">SignUp</a>
        </form>

        <br /><br />
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
    <script src="{{ asset('js/login.js') }}"></script>
  </body>
</html>