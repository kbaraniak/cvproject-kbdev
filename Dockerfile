FROM php:8.2-apache

# Enable commonly used Apache modules.
RUN a2enmod rewrite headers

# Install Redis PHP extension
RUN pecl install redis && docker-php-ext-enable redis

WORKDIR /var/www/html

# Create public directory structure
RUN mkdir -p /var/www/html/public

# Configure Apache to use public as DocumentRoot
RUN cat > /etc/apache2/sites-available/000-default.conf <<'EOF'
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/html/public

    <Directory /var/www/html/public>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
EOF

# Keep ownership consistent for mounted files.
RUN chown -R www-data:www-data /var/www/html
