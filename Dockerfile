# Usa una imagen base de PHP con Apache preinstalado
FROM php:8.2-apache

# Copia los archivos de tu proyecto al directorio raíz del servidor
COPY . /var/www/html

# Da permisos adecuados a los archivos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Habilita el módulo de reescritura para Apache (opcional, útil para rutas amigables)
RUN a2enmod rewrite

# Exponer el puerto 80 para servir la aplicación
EXPOSE 80