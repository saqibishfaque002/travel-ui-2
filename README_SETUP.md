# TravelHub - Laravel 12 Travel Booking Website

This Laravel 12 application is a complete conversion of the Next.js/React UI into Blade templates with full Laravel integration.

## What Was Done

### 1. Laravel 12 Installation
- ✅ Laravel 12 installed successfully in `laravel-app` directory
- ✅ All dependencies installed via Composer

### 2. UI Conversion to Blade Templates
All React/Next.js components have been converted to Laravel Blade templates:

- ✅ **Layout Template**: `resources/views/layouts/app.blade.php`
- ✅ **Header Component**: `resources/views/components/header.blade.php`
- ✅ **Footer Component**: `resources/views/components/footer.blade.php`
- ✅ **Hero Slider**: `resources/views/components/hero-slider.blade.php` (with interactive search)
- ✅ **Popular Flights**: `resources/views/components/popular-flights.blade.php` (with carousel)
- ✅ **Popular Hotels**: `resources/views/components/popular-hotels.blade.php`
- ✅ **Packages**: `resources/views/components/packages.blade.php`
- ✅ **Services**: `resources/views/components/services.blade.php`
- ✅ **Why Choose Us**: `resources/views/components/why-choose-us.blade.php`
- ✅ **Contact Form**: `resources/views/components/contact-us.blade.php`
- ✅ **Main Home Page**: `resources/views/home.blade.php`

### 3. Assets Management
- ✅ All images copied from `laravel-ui/public` to `laravel-app/public`
- ✅ Tailwind CSS 4 configured and integrated
- ✅ Custom CSS variables and theme configured
- ✅ Assets compiled with Vite

### 4. Backend Setup
- ✅ **HomeController** created with all data:
  - Hero slider data (3 slides)
  - Flight deals (5 flights)
  - Hotel listings (6 hotels)
  - Travel packages (6 packages)
  - Services (4 services)
  - Features/Why Choose Us (4 features)
  - Contact form handler

- ✅ **Routes configured**:
  - `GET /` - Home page
  - `POST /contact` - Contact form submission

### 5. Interactive Features
All interactive JavaScript features preserved:
- ✅ Smooth scroll navigation
- ✅ Hero slider auto-rotation
- ✅ Flight carousel with navigation buttons
- ✅ Tab switching (Flights/Hotels search)
- ✅ Sticky header with scroll effects
- ✅ Hover effects and animations

## Project Structure

```
laravel-app/
├── app/
│   └── Http/
│       └── Controllers/
│           └── HomeController.php          # Main controller with all data
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php              # Main layout
│   │   ├── components/
│   │   │   ├── header.blade.php
│   │   │   ├── footer.blade.php
│   │   │   ├── hero-slider.blade.php
│   │   │   ├── popular-flights.blade.php
│   │   │   ├── popular-hotels.blade.php
│   │   │   ├── packages.blade.php
│   │   │   ├── services.blade.php
│   │   │   ├── why-choose-us.blade.php
│   │   │   └── contact-us.blade.php
│   │   └── home.blade.php                 # Main home page view
│   └── css/
│       └── app.css                        # Tailwind CSS with custom variables
├── routes/
│   └── web.php                            # Application routes
└── public/
    └── [all images and assets]            # All UI assets
```

## How to Run the Application

### 1. Install Dependencies (if not already done)
```bash
cd laravel-app
composer install
npm install
```

### 2. Environment Setup
```bash
# Copy .env.example to .env (already done during installation)
# Update your database settings if needed
```

### 3. Build Assets
```bash
npm run build
# Or for development with hot reload:
npm run dev
```

### 4. Run the Application
```bash
# Start the Laravel development server
php artisan serve
```

The application will be available at: `http://localhost:8000`

### 5. Optional: Database Setup
If you plan to save contact form submissions to a database:
```bash
php artisan migrate
```

## Features

### Home Page Sections
1. **Header Navigation** - Sticky header with smooth scroll links
2. **Hero Slider** - Auto-rotating banner with search forms (Flights/Hotels)
3. **Popular Flights** - Carousel of flight deals with navigation
4. **Featured Hotels** - Grid of hotel listings with ratings
5. **Travel Packages** - Complete vacation packages with features
6. **Our Services** - Additional services offered
7. **Why Choose Us** - Company benefits and features
8. **Contact Form** - Contact form with validation
9. **Footer** - Company info, links, and newsletter signup

### Technology Stack
- **Framework**: Laravel 12
- **Frontend**: Blade Templates
- **CSS**: Tailwind CSS 4
- **Build Tool**: Vite
- **JavaScript**: Vanilla JS (for interactions)

## Customization

### Adding More Data
Edit `app/Http/Controllers/HomeController.php` to modify:
- Slider images and text
- Flight deals
- Hotel listings
- Package offerings
- Services
- Features

### Styling Changes
Edit `resources/css/app.css` to modify:
- Color scheme (CSS variables)
- Custom styles
- Responsive breakpoints

### Database Integration
To save data to a database:
1. Create models and migrations
2. Update `HomeController` to fetch from database
3. Update `contactSubmit()` method to save to database

## Notes

- All images are in the `public` folder
- Google Fonts (Poppins & Inter) are loaded from CDN
- SVG icons are embedded inline for better performance
- All animations and transitions use Tailwind CSS utilities
- Form validation is handled server-side in Laravel

## Browser Support
- Modern browsers (Chrome, Firefox, Safari, Edge)
- Responsive design for mobile, tablet, and desktop

## Need Help?
- Laravel Documentation: https://laravel.com/docs/12.x
- Tailwind CSS Documentation: https://tailwindcss.com/docs
- Blade Templates: https://laravel.com/docs/12.x/blade

---

**Setup completed successfully!** 🎉

All UI components have been converted to Blade templates and the site is ready for deployment.

