# SeaScanner

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About SeaScanner

SeaScanner is a web-based platform designed for users to discover and book exciting water-based activities across various locations worldwide. Users can search, filter, and book activities such as diving, snorkeling, boat tours, jet skiing, and surfing.

## Features

- **Search for Activities**: Easily search for various marine activities by title or description.
- **Category Filter**: Filter activities by categories such as Diving, Snorkeling, Boat, Jet Ski, Surfing.
- **Responsive Design**: Fully responsive UI that adapts seamlessly to mobile, tablet, and desktop devices.
- **User Authentication**: Login and registration system to manage user accounts.
- **Real-Time Updates**: Users can book and view activities in real-time.

## Installation and Setup

### 1. Clone the Project

Clone the project to your local machine:

```bash
git clone https://github.com/devBySol/seascanner.git
cd seascanner
```

### 2. Install Dependencies

Install Laravel's PHP dependencies:

```bash
composer install
```

Install JavaScript dependencies:

```bash
npm install
```

### 3. Set Up the Environment

Copy the .env.example file to .env and configure your environment settings (such as database and email).

```bash
cp .env.example .env
```

Modify the .env file with your database and other configuration values.

### 4. Database Migrations and Seeding

Run the database migrations to create the necessary tables:

```bash
php artisan migrate:fresh --seed
```

### 5. Serve the Application

Run the development server:

```bash
php artisan serve
```

Visit http://localhost:8000 to view the application.

## Testing

This project comes with PHPUnit tests. To run the tests, use the following command:

```bash
php artisan test
```

Alternatively, you can use PHPUnit directly:

```bash
./vendor/bin/phpunit
```

## Technology Stack

- **Laravel**: PHP framework for building modern web applications.
- **Tailwind CSS**: Utility-first CSS framework.
- **Vite**: A modern build tool that is optimized for speed.
- **MySQL / SQLite**: The database used (SQLite is recommended for development).
- **PHPUnit**: Testing framework for PHP applications.

## Contributing

Thank you for considering contributing to SeaScanner! You can find the contribution guide in the Laravel documentation.

## Code of Conduct

To ensure the Laravel community is welcoming for everyone, please review and abide by the Code of Conduct.

## License

SeaScanner is an open-source project licensed under the MIT license.

