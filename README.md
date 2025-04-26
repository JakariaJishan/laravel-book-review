# 📖 Book Review Management System

This is a Laravel-based web application for managing books and their reviews. Users can search for books, filter them by popularity or rating, and view detailed information about each book, including its reviews.

## Features

- **Book Management**: Add, view, and manage books.
- **Review Management**: Add and manage reviews for books.
- **Search and Filter**: Search books by title and filter by:
    - Popular Last Month
    - Popular Last 6 Months
    - Highest Rated Last Month
    - Highest Rated Last 6 Months
- **Caching**: Optimized with caching for better performance.
- **Pagination**: Paginated book listings.

## Technologies Used

- **Backend**: PHP, Laravel
- **Frontend**: Blade templates, Tailwind CSS
- **Database**: Postgresql (or any Laravel-supported database)
- **Caching**: Laravel Cache
- **Other Tools**: Composer, NPM

## Installation

1. Setup:
   ```bash
   git clone <repository-url>
   cd <repository-folder>
   npm i
   php artisan migrate 
   php artisan db:seed
   composer run dev
