#!/bin/bash
php artisan migrate --force
php artisan storage:link
/usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf