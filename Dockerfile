# Use the official PHP image with version 8.2
FROM php:8.2-fpm

# Set the working directory
WORKDIR /app

# Copy the current directory contents into the container at /app
COPY . /app

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    && docker-php-ext-install zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-dev

# Expose port 9000
EXPOSE 9000

# Start PHP-FPM server
CMD ["php-fpm"]
