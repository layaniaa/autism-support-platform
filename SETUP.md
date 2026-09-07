# Setup Guide - Autism Support Platform

This guide will help you set up the Autism Support Platform for development.

## Prerequisites

- **PHP 8.0+** - Backend framework requirement
- **Node.js 14+** - JavaScript runtime for asset compilation
- **MySQL 8.0+** - Database
- **Composer** - PHP package manager
- **Git** - Version control
- **Docker & Docker Compose** (optional but recommended)

## Quick Start with Docker

The easiest way to get started is using Docker:

```bash
# Clone the repository
git clone https://github.com/layaniaa/autism-support-platform.git
cd autism-support-platform

# Build and start containers
docker-compose up -d

# Run migrations
docker-compose exec app php artisan migrate

# Seed the database (optional)
docker-compose exec app php artisan db:seed

# Build frontend assets
docker-compose exec app npm run dev
```

Access the application:
- **Web Application:** http://localhost
- **Email Testing:** http://localhost:8025 (MailHog)

## Manual Setup (Without Docker)

### 1. Clone Repository
```bash
git clone https://github.com/layaniaa/autism-support-platform.git
cd autism-support-platform
```

### 2. Install Dependencies
```bash
# PHP dependencies
composer install

# JavaScript dependencies
npm install
```

### 3. Environment Configuration
```bash
# Copy environment file
cp .env.local .env

# Generate application key
php artisan key:generate
```

### 4. Database Setup
```bash
# Update your .env file with database credentials
# Then run migrations
php artisan migrate

# (Optional) Seed with sample data
php artisan db:seed
```

### 5. Build Assets
```bash
# Development
npm run dev

# Or watch for changes
npm run watch
```

### 6. Start Development Server
```bash
php artisan serve
```

Access at: http://localhost:8000

## Docker Services

When using Docker Compose, the following services are available:

| Service | Port | Purpose |
|---------|------|----------|
| Nginx | 80 | Web server |
| PHP-FPM | 9000 | Application container |
| MySQL | 3306 | Database |
| Redis | 6379 | Cache & queue |
| MailHog | 8025 | Email testing |

## Useful Commands

### Docker Commands
```bash
# Start services
docker-compose up -d

# Stop services
docker-compose down

# View logs
docker-compose logs -f app

# Execute command in container
docker-compose exec app php artisan tinker
```

### Laravel Commands
```bash
# Database
php artisan migrate              # Run migrations
php artisan migrate:rollback     # Rollback migrations
php artisan db:seed              # Seed database

# Cache
php artisan cache:clear          # Clear application cache
php artisan route:cache          # Cache routes

# Queue
php artisan queue:work            # Start queue worker

# Development
php artisan tinker                # Interactive shell
php artisan make:controller Name  # Generate controller
php artisan make:model Name       # Generate model
```

### Frontend Commands
```bash
# Development
npm run dev

# Watch for changes
npm run watch

# Production build
npm run production
```

### Testing
```bash
# Run all tests
php artisan test

# Run specific test class
php artisan test --filter TestClassName

# Generate coverage report
php artisan test --coverage
```

## Troubleshooting

### Database Connection Error
```bash
# Verify .env database settings
# Make sure MySQL is running
# Check database permissions
php artisan migrate:rollback
php artisan migrate
```

### Permission Denied Errors
```bash
# Fix storage permissions
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### Cache Issues
```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear
```

### Node/NPM Issues
```bash
# Clear npm cache
npm cache clean --force

# Reinstall dependencies
rm -rf node_modules package-lock.json
npm install
```

## Environment Variables

Key environment variables in `.env`:

```env
APP_NAME="Autism Support Platform"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=autism
DB_USERNAME=root
DB_PASSWORD=password

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
REDIS_HOST=127.0.0.1
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
```

## IDE Setup

### VS Code Extensions
- PHP Intelephense
- Laravel Extension Pack
- Prettier
- ESLint

### PhpStorm Configuration
- Set PHP version to 8.0+
- Enable Laravel plugin
- Configure database connection

## Performance Optimization

```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

## Next Steps

1. Read the [README.md](README.md) for project overview
2. Check [CONTRIBUTING.md](CONTRIBUTING.md) for contribution guidelines
3. Review the [API documentation](docs/api.md) if available
4. Start building features!

## Support

For issues or questions:
- Open an issue on GitHub
- Check existing documentation
- Contact maintainers

Happy coding! 🚀