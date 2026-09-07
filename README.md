 Autism Support Platform

Autism Support Platform is a comprehensive web application that provides accessible tools, educational resources, and community features to support individuals on the autism spectrum and their caregivers. The platform is developed with Laravel 9 and modern front-end technologies, prioritizing accessibility, privacy, and ease of use

 Overview

The Autism Support Platform : is a full-featured web application built with Laravel 9 that provides:

-  Accessible educational resources
-  Community support and connection
-  Progress tracking and management tools
-  Responsive design for all devices
-  Secure user authentication
-  WCAG accessibility compliance

---

 Technology Stack

 Backend
- **Laravel 9.x** - Modern PHP web framework
- **PHP 8.0+** - Server-side programming language
- **MySQL** - Relational database
- **Laravel Sanctum** - API authentication
- **Voyager CMS** - Content management system

 Frontend
- **Laravel Mix** - Asset compilation
- **Webpack** - Module bundler
- **Axios** - HTTP client for API calls
- **Lodash** - JavaScript utility library
- **PostCSS** - CSS processor

 Development & Testing
- **PHPUnit** - Unit testing framework
- **Faker** - Fake data generation
- **Mockery** - Mock object library
- **Laravel Sail** - Docker development environment

---

 Project Structure

```
autism-support-platform/
├── app/                    # Application code
├── config/                 # Configuration files
├── database/              # Database migrations and seeders
├── resources/             # Views, CSS, and JavaScript
│   ├── css/
│   ├── js/
│   └── views/
├── routes/                # Application routes
├── storage/               # File storage
├── tests/                 # Test suites
│   ├── Feature/
│   └── Unit/
├── public/                # Publicly accessible files
├── composer.json          # PHP dependencies
├── package.json           # Node dependencies
├── webpack.mix.js         # Asset compilation config
├── phpunit.xml            # Testing configuration
└── .env.example           # Environment variables template
```



 Prerequisites
- PHP 8.0 or higher
- Node.js and npm
- MySQL or compatible database
- Composer (PHP package manager)

 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/layaniaa/autism-support-platform.git
   cd autism-support-platform
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Setup environment configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Update .env with your database credentials**
   ```
   DB_DATABASE=autism
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run database migrations**
   ```bash
   php artisan migrate
   ```

7. **Build assets**
   ```bash
   npm run dev
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`

---

 Available Commands

### Development
```bash
# Watch for changes and compile assets
npm run watch

# Build assets for production
npm run production

# Serve the application
php artisan serve
```

### Database
```bash
# Run migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback

# Refresh database (caution: deletes all data)
php artisan migrate:refresh

# Seed database with sample data
php artisan db:seed
```

### Testing
```bash
# Run all tests
php artisan test

# Run unit tests only
php artisan test --filter Unit

# Run feature tests only
php artisan test --filter Feature
```

---

 Dependencies Overview

### Production Dependencies
| Package | Version | Purpose |
|---------|---------|----------|
| laravel/framework | ^9.0 | Core web framework |
| laravel/sanctum | ^2.14 | API token authentication |
| tcg/voyager | ^1.7 | Admin CMS panel |
| guzzlehttp/guzzle | ^7.2 | HTTP client |
| fruitcake/laravel-cors | ^2.0.5 | CORS support |

### Development Dependencies
| Package | Version | Purpose |
|---------|---------|----------|
| phpunit/phpunit | ^9.5.10 | Testing framework |
| laravel/sail | ^1.0.1 | Docker development |
| fakerphp/faker | ^1.9.1 | Fake data generation |
| mockery/mockery | ^1.4.4 | Mocking library |
| laravel-mix | ^6.0.6 | Asset compilation |
| axios | ^0.25 | HTTP requests |

