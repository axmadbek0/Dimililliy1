# Dimilliy - Women's Fashion & Cosmetics E-Commerce

A complete full-stack e-commerce web application for women's products (cosmetics and national clothes) built with Laravel.

## Features

- **Frontend (User Side)**:
  - Beautiful home page with hero section, about section, special products, top products, and all products preview
  - Product catalog with category filtering and search
  - Shopping cart with add, remove, and quantity update functionality
  - User authentication (register, login, logout)
  - Order management and checkout
  - Test/Sandbox payment system (easily replaceable with real payment gateway)
  - Responsive design with TailwindCSS + Bootstrap

- **Admin Panel**:
  - Dashboard with statistics (total products, top products, special products, orders)
  - Full Product CRUD with image upload
  - Order management with status updates
  - Separate admin login

- **Database**:
  - Products table with categories (Shim, Kastyum, Atlas Ishton, Atlas Ko'ylak, Cosmetics, Others)
  - Cart system
  - Order management
  - User authentication with admin role

## Tech Stack

- Laravel 11 (PHP 8.3+)
- MySQL
- Blade templating
- TailwindCSS + Bootstrap
- JavaScript + jQuery

## Installation

1. Install dependencies:
```bash
composer install
npm install
```

2. Configure environment:
```bash
cp .env.example .env
php artisan key:generate
```

3. Update `.env` file with your database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dimilliy
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

4. Run migrations and seeders:
```bash
php artisan migrate
php artisan db:seed
```

5. Create storage symlink:
```bash
php artisan storage:link
```

6. Start the development server:
```bash
php artisan serve
```

## Default Credentials

- **Admin**:
  - Email: admin@dimilliy.uz
  - Password: password

- **Test User**:
  - Email: user@example.com
  - Password: password

## Access Points

- Home Page: http://localhost:8000/
- Admin Login: http://localhost:8000/admin/login
- Admin Dashboard: http://localhost:8000/admin/dashboard

## Payment System

The application includes a test/sandbox payment system. Any card details will work in test mode. To integrate a real payment gateway:

1. Modify `app/Http/Controllers/PaymentController.php`
2. Replace the sandbox logic with your payment provider's API
3. Update the `payment_method` field handling in `OrderController`

## Product Categories

- Shim
- Kastyum
- Atlas Ishton
- Atlas Ko'ylak
- Cosmetics
- Others

## Directory Structure

- `app/Http/Controllers/` - Controllers
- `app/Models/` - Eloquent models
- `app/Policies/` - Authorization policies
- `app/Http/Middleware/` - Custom middleware
- `resources/views/` - Blade templates
- `database/migrations/` - Database migrations
- `database/seeders/` - Database seeders
- `database/factories/` - Model factories

## License

MIT License
# Dimililliy1
