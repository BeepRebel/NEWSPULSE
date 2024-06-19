# NEWSPULSE - News Feed Website

This web application, developed using Laravel, fetches and displays the top 20 news articles from the Times of India's Mumbai news section. The feed updates automatically every 24 hours, ensuring users have access to the latest news.

## Features

Automatic News Feed Updates: The application fetches the top 20 news articles from the Times of India's Mumbai news section and updates the feed every 24 hours.

Searching, Sorting, and Pagination: Users can search for specific news articles, sort them based on different criteria, and navigate through the news articles easily using pagination.

Inbuilt Dictionary: The application includes a dictionary feature that allows users to search for unknown words. It displays the word meanings, pronunciations, and includes an audio clip for pronunciation. This feature utilizes an online dictionary API.

Secure Login and Sign-Up: The application uses JavaScript to validate form information, ensuring secure login and sign-up processes.

## Prerequisites

- PHP 8.3.8 or higher
- Composer
- Node.js and npm (for frontend assets)
- SQLite (or another database supported by Laravel)

## Installation

Follow these steps to set up and run the project:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/BeepRebel/NEWSPULSE.git
    cd NEWSPULSE
    ```

2. **Install PHP dependencies:**

    ```bash
    composer install
    ```

3. **Install JavaScript dependencies:**

    ```bash
    npm install
    ```

4. **Compile frontend assets:**

    ```bash
    npm run dev
    ```

5. **Configure the environment:**

    Copy the `.env.example` file to `.env` and update the necessary environment variables.

    ```bash
    cp .env.example .env
    ```

    **Set the SQLite database:**

    ```plaintext
    DB_CONNECTION=sqlite
    DB_DATABASE=/absolute/path/to/database.sqlite
    ```

    Create an empty SQLite database file:

    ```bash
    touch database/database.sqlite
    ```

6. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

7. **Run database migrations:**

    ```bash
    php artisan migrate
    ```

8. **Start the development server:**

    ```bash
    php artisan serve
    ```

9. **Access the application:**

    Open your web browser and navigate to `http://localhost:8000/rssfeed`.

## Project Structure

- **app/Http/Controllers/RssFeedController.php:** Controller for fetching and displaying the RSS feed data.
- **resources/views/rssfeed.blade.php:** Blade template for displaying the data table.
- **public/css/styles.css:** Custom CSS styles for the application.
- **routes/web.php:** Route definition for accessing the RSS feed page.

## Technologies Used

- **Laravel 9.x**
- **PHP 8.3.8**
- **Composer**
- **Node.js & npm**
- **DataTables jQuery Plugin**
- **SQLite**

## Custom CSS Styles

The `styles.css` file in the `public/css` directory contains custom styles to enhance the appearance and responsiveness of the application. It includes styles for:

- Body and container elements
- Data table elements (headers, rows, links)
- Responsive adjustments for smaller screens

## Troubleshooting

If you encounter any issues during setup or running the application, consider the following steps:

- Ensure all dependencies are installed correctly.
- Verify the `.env` file configuration, especially the database connection.
- Check the server logs for any errors (`storage/logs/laravel.log`).

## Contributing

Contributions are welcome! Please fork the repository and create a pull request with your changes.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Contact

For any inquiries or support, please contact [your-email@example.com](mailto:your-email@example.com).
