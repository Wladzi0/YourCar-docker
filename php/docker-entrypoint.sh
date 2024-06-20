#!/bin/sh
set -e

# Wait for MySQL to be ready
until mysqladmin ping -h mysql --silent; do
  echo 'waiting for mysql to be connectable...'
  sleep 2
done

# Run Composer install
composer install --prefer-dist --no-interaction --no-progress

# Run Symfony migrations
php bin/console doctrine:migrations:migrate --no-interaction

# Execute the main container command
exec "$@"
