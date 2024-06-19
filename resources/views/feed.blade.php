<!-- resources/views/feed.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>
<body>
<header>
        <div class="logo">NEWSPULSE</div>
        <nav>
            <ul>
                <li><a href="{{ route('rssfeed') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="#">Feed</a></li>
                <li><a href="{{ route('dictionary') }}">Dictionary</a></li>
             
                <li><a href="{{ route('account') }}">Account</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1 class="fade-in page-title">News Feed</h1>
        <div class="rss-feed">
            <table id="rssfeed-table" class="display">
                <thead>
                    <tr class="slide-in-bottom">
                        <th>Title</th>
                        <th>Description</th>
                        <th>Link</th>
                        <th>Publication Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item['title'] }}</td>
                            <td>{!! $item['description'] !!}</td>
                            <td><a href="{{ $item['link'] }}" target="_blank">Read More</a></td>
                            <td>{{ $item['pubDate'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            if (!$.fn.DataTable.isDataTable('#rssfeed-table')) {
                $('#rssfeed-table').DataTable({
                    "lengthMenu": [[5, 10, 15, 20], [5, 10, 15, 20]],
                    "paging": true,
                    "searching": true,
                    "ordering": true
                });
            }
        });
    </script>
</body>
</html>
