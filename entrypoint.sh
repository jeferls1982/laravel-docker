#!/bin/bash
# Garante permissões no diretório do banco
chown -R www-data:www-data /var/www/database
chmod -R 775 /var/www/database

exec "$@"