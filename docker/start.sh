#!/bin/bash

# Run migrations
php artisan migrate --force

# Start nginx
service nginx start

# Start PHP-FPM
php-fpm
