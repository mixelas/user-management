# 👤 User Management System

![Laravel](https://img.shields.io/badge/Laravel-9.19-FF2D20?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=flat-square&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=flat-square&logo=mysql)
![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)

A sophisticated, production-ready **user management system** built with Laravel 9 that demonstrates modern web application development practices. Includes secure authentication, role-based access control, and an intuitive admin dashboard for user management.

## ✨ Key Features

- 🔐 **Secure Authentication** - Email verification, password hashing with bcrypt, token-based API access
- 👥 **Role-Based Access Control (RBAC)** - Admin and user roles with middleware-protected routes
- 📊 **Admin Dashboard** - Manage users, view details, delete accounts with confirmation
- 👤 **User Profiles** - Edit personal information and securely change passwords
- 🎨 **Responsive UI** - Modern, accessible interface with Tailwind CSS and Alpine.js
- 🛡️ **Security-First** - CSRF protection, SQL injection prevention, secure session management
- ✅ **Comprehensive Tests** - Feature and unit tests using Pest PHP
- 📋 **Migration-Based Setup** - Database agnostic, easy deployment

## 🛠 Technology Stack

| Layer | Technology |
|-------|-----------|
| **Backend** | Laravel 9.19, PHP 8.0+ |
| **Database** | MySQL 5.7+ |
| **Frontend** | Blade Templates, Tailwind CSS 3, Alpine.js |
| **Authentication** | Laravel Breeze, Laravel Sanctum |
| **Build Tool** | Vite.js with Laravel plugin |
| **Testing** | Pest PHP with Feature & Unit tests |
| **Code Quality** | Laravel Pint (PSR-12 compliance) |
| **Asset Bundling** | PostCSS, Autoprefixer |

## 📋 Requirements

- PHP **8.0.2** or higher
- Composer
- Node.js 14+ and npm
- MySQL 5.7 or higher (or compatible database)
- Git (for cloning the repository)

## 🚀 Quick Start

### Installation

```bash
# Clone the repository
git clone https://github.com/mixelas/user-management.git
cd user-management

# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Create environment configuration
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database in .env file
# DB_DATABASE=user_management
# DB_USERNAME=root
# DB_PASSWORD=your_password

# Run migrations
php artisan migrate

# Seed admin user into database
php artisan db:seed

# Build frontend assets
npm run build

# Start the application
php artisan serve
```

The application will be available at `http://localhost:8000`

### Default Admin Account

| Field | Value |
|-------|-------|
| **Email** | admin@example.com |
| **Password** | password |

> ⚠️ Change the default password immediately in production.

## 📦 Project Structure

```
user-management/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── UserController.php      # User CRUD operations
│   │   │   ├── ProfileController.php   # Profile management
│   │   │   └── PasswordController.php  # Password changes
│   │   └── Middleware/
│   │       └── IsAdmin.php             # Admin authorization
│   ├── Models/
│   │   └── User.php                    # User model with role support
│   └── Providers/                      # Service providers
│
├── routes/
│   ├── web.php                         # Web routes (admin & user)
│   ├── api.php                         # API routes with Sanctum
│   └── auth.php                        # Authentication routes
│
├── database/
│   ├── migrations/                     # Database schema
│   └── seeders/
│       └── AdminSeeder.php             # Default admin creation
│
├── resources/views/
│   ├── admin/users/                    # Admin user management
│   ├── auth/                           # Authentication forms
│   ├── profile/                        # User profile pages
│   └── layouts/                        # Layout templates
│
├── tests/
│   ├── Feature/
│   │   ├── Auth/                       # Authentication tests
│   │   └── ProfileTest.php             # Profile feature tests
│   └── Unit/
│
└── config/                             # Configuration files
```

## 🎯 Core Features in Detail

### 🔐 Authentication & Authorization
- **Secure Registration** - Email verification, password confirmation
- **Login System** - Session-based authentication with "Remember Me" option
- **Role-Based Access Control** - Middleware-enforced authorization (`IsAdmin` middleware)
- **API Tokens** - Sanctum-based token authentication for API access
- **Profile Security** - Password confirmation required for account deletion

### 👥 User Management
- **View All Users** - Admin-only dashboard listing all non-admin users
- **User Details** - Display comprehensive user information
- **Delete Users** - Remove users with confirmation prompt
- **User Filtering** - Separate admin and user accounts by role

### 👤 Profile Management  
- **Edit Profile** - Update name and email information
- **Email Verification** - Re-verify email if changed
- **Password Changes** - Securely update passwords with current password verification
- **Account Deletion** - Self-service account removal with password confirmation

### 🎨 User Interface
- **Responsive Design** - Mobile-friendly interface with Tailwind CSS
- **Interactive Components** - Alpine.js for dynamic interactions
- **Consistent Styling** - Professional, modern UI across all pages
- **Accessibility** - Semantic HTML and ARIA labels

## 🧪 Testing

The project includes comprehensive tests covering:

```bash
# Run all tests
php artisan test

# Run tests with coverage
php artisan test --coverage

# Run specific test file
php artisan test tests/Feature/ProfileTest.php
```

**Test Coverage:**
- ✅ Authentication (login, registration, password reset)
- ✅ Profile updates and email verification
- ✅ Password changes with validation
- ✅ User deletion with authorization
- ✅ Email verification workflow
- ✅ Admin access control

## 🔒 Security Features

| Feature | Implementation |
|---------|-----------------|
| **CSRF Protection** | Token verification on all forms |
| **Password Hashing** | Bcrypt with work factor of 10 |
| **Email Verification** | Signed URL links with expiration |
| **SQL Injection Prevention** | Eloquent ORM with parameterized queries |
| **Admin Authorization** | Middleware-based role checking |
| **Secure Sessions** | HTTP-only, SameSite cookies |
| **XSS Protection** | Blade template escaping by default |
| **Rate Limiting** | Throttle middleware on auth routes |

## 💻 Development

### Code Quality
```bash
# Format code with Pint (PSR-12)
./vendor/bin/pint

# Check code formatting
./vendor/bin/pint --test
```

### Database Management
```bash
# Fresh migration with seeds
php artisan migrate:refresh --seed

# Interactive tinker shell
php artisan tinker

# See database migrations status
php artisan migrate:status
```

### Frontend Development
```bash
# Development with hot module reload
npm run dev

# Build for production
npm run build
```

### Cache & Config
```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Rebuild cache
php artisan config:cache
php artisan route:cache
```
## 🛣️ API Routes

### Authentication Routes
```
POST   /register                 # User registration
POST   /login                    # User login
POST   /logout                   # User logout
POST   /forgot-password          # Request password reset
POST   /reset-password           # Reset password with token
POST   /email/verification-notification  # Resend verification email
POST   /verify-email             # Verify email address
```

### User Routes (Authenticated)
```
GET    /dashboard                # User dashboard
GET    /profile                  # Edit profile page
PATCH  /profile                  # Update profile information
DELETE /profile                  # Delete user account
```

### Admin Routes (Authenticated + Admin Role)
```
GET    /admin/users              # List all users
GET    /admin/users/{id}         # View user details
DELETE /admin/users/{id}         # Delete user
```

### API Routes (Token Authentication)
```
GET    /api/user                 # Get authenticated user info (Sanctum)
```

## 📝 Environment Configuration

Key environment variables in `.env`:

```env
APP_NAME=Laravel
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:xxxxx

DB_DATABASE=user_management
DB_USERNAME=root
DB_PASSWORD=secret

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your-username
MAIL_PASSWORD=your-password
```

## 🎓 Learning Outcomes

This project demonstrates proficiency in:

- ✅ **Laravel Framework** - Routing, controllers, models, migrations
- ✅ **Authentication** - User registration, email verification, session management
- ✅ **Authorization** - Role-based access control with middleware
- ✅ **Database Design** - Schema migrations, eloquent ORM, relationships
- ✅ **Frontend Development** - Blade templates, Tailwind CSS, responsive design
- ✅ **Testing** - Feature tests, unit tests, test-driven development
- ✅ **Security** - CSRF protection, password hashing, input validation
- ✅ **RESTful API Design** - Token authentication with Sanctum
- ✅ **Modern Build Tools** - Vite.js, npm, asset compilation
- ✅ **Code Quality** - PSR-12 compliance, testing, documentation

## 📄 License

This project is open-source software licensed under the **MIT License**. See the [LICENSE](LICENSE) file for details.

---

> Ready to see how this project can help your team manage users efficiently? Clone it, test it, and experience the power of Laravel!