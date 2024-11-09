# Use an official PHP runtime as a parent image
FROM php:8.1-apache

# Copy application files to the container
COPY . /var/www/html

# Expose port 8080 for Render
EXPOSE 8080
