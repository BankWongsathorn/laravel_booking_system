# Laravel Booking System

A web-based booking system built with Laravel.

## Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/booking_system.git
cd booking_system
```

2. Install PHP dependencies:
```bash
composer install
```

3. Copy the environment file and set up your configuration:
```bash
cp .env.example .env
```

4. Generate application key:
```bash
php artisan key:generate
```

5. Configure your database in the `.env` file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=booking_system
DB_USERNAME=root
DB_PASSWORD=
```

6. Run migrations:
```bash
php artisan migrate
```

7. Install NPM dependencies:
```bash
npm install
```

## Running the Application

1. Compile frontend assets:
```bash
npm run dev
```

2. Start the Laravel development server:
```bash
php artisan serve
```

3. Access the application at: http://localhost:8000


## Technologies Used

- Laravel
- MySQL
- Vue.js (frontend)
- Bootstrap
