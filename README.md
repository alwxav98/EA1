# Proyecto REST API en PHP

Este proyecto implementa una API REST básica en PHP que responde a la solicitud `GET` en el endpoint `/api/hello`.

## Instrucciones para ejecutar el proyecto

### Usando Docker

1. Clona este repositorio en tu máquina local.
2. Construye la imagen de Docker con el siguiente comando:

   ```bash
   docker build -t php-restapi .
   ```
3. Ejecuta el contenedor con:

   ```bash
   docker run -d -p 8080:80 --name restapi-container php-restapi
   ```
   
