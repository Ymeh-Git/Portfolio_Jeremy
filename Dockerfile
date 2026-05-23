FROM php:8.2-apache

# Copie tout le contenu de ton projet dans le dossier du serveur Apache
COPY . /var/www/html/

# Expose le port 80 pour que le site soit accessible
EXPOSE 80