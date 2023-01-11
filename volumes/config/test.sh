#!/bin/bash
composer install
npm run build
php artisan migrate:fresh --seed
tail -f /dev/null