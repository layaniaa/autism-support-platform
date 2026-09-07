# Contributing to Autism Support Platform

Thank you for your interest in contributing to the Autism Support Platform! We welcome contributions from the community.

## Code of Conduct

Please be respectful and inclusive in all interactions. We are committed to providing a welcoming environment for everyone.

## Getting Started

### Prerequisites
- PHP 8.0+
- Node.js 14+
- Docker & Docker Compose (optional)
- Git

### Development Setup

1. **Fork the repository**
   ```bash
   git clone https://github.com/your-username/autism-support-platform.git
   cd autism-support-platform
   ```

2. **Create a feature branch**
   ```bash
   git checkout -b feature/your-feature-name
   ```

3. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

4. **Setup environment**
   ```bash
   cp .env.local .env
   php artisan key:generate
   ```

5. **With Docker (recommended)**
   ```bash
   docker-compose up -d
   docker-compose exec app php artisan migrate
   docker-compose exec app npm run dev
   ```

6. **Without Docker**
   ```bash
   php artisan migrate
   npm run dev
   php artisan serve
   ```

## Making Changes

### Code Style
- Follow PSR-12 coding standards for PHP
- Use 4 spaces for indentation
- Follow Laravel conventions
- Use meaningful variable and function names

### Writing Tests
```bash
# Run all tests
php artisan test

# Run specific test
php artisan test --filter TestClassName

# Generate code coverage
php artisan test --coverage
```

### Commit Messages
- Use clear and descriptive commit messages
- Start with a verb (e.g., "Add", "Fix", "Update")
- Example: `Fix authentication bug in user login`

## Submitting Changes

1. **Push to your fork**
   ```bash
   git push origin feature/your-feature-name
   ```

2. **Create a Pull Request**
   - Provide a clear description of your changes
   - Link related issues
   - Include screenshots for UI changes
   - Ensure tests pass

3. **PR Review Process**
   - Code review by maintainers
   - Address feedback and make requested changes
   - Once approved, your PR will be merged

## Reporting Bugs

1. Check if the bug is already reported
2. Provide a clear title and description
3. Include:
   - Steps to reproduce
   - Expected behavior
   - Actual behavior
   - Screenshots if applicable
   - Environment details

## Feature Requests

1. Check if feature is already requested
2. Provide a clear description of the feature
3. Explain the use case and benefits
4. Include examples if applicable

## Questions?

- Open an issue with the `question` label
- Reach out to maintainers
- Check existing documentation

## License

By contributing, you agree that your contributions will be licensed under the MIT License.

Thank you for contributing to making the Autism Support Platform better! 🙏