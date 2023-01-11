#!/bin/sh
chmod -R 777 /var/www/html
docker-php-entrypoint
tail -f /dev/null