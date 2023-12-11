## InternHub_app
InternHub is a web-based application that functions to handle student practical work procedures from registration to giving final grades.

### Installation

_Below is an example of how you can instruct your audience on installing and setting up your app. This template doesn't rely on any external dependencies or services._

1. Clone the repo
   ```sh
   git clone https://github.com/Renddevs/InternHub_app.git
   ```
2. Run 'composer install' in 'InternHub/' directory
   ```sh
   composer install
   ```
3. Set database configuration in .env file
   ```sh
   DB_CONNECTION=sqlsrv
   DB_HOST=localhost
   DB_PORT=1433
   DB_DATABASE=InternHub
   DB_USERNAME=LocalAuth
   DB_PASSWORD=local123
   ```
4. Migrate database
   ```sh
   php artisan migrate
   ```
