# REST API project in PHP

This project implements a basic REST API in PHP that responds to the `GET` request on the `/api/hello` endpoint.

## Instructions to run the project
### Prerequisites
1. Make sure you have Docker installed on your machine.
2. Clone this repository to your local machine:

   ```bash
   git clone  https://github.com/alwxav98/EA1RestApi.git
   cd  EA1RestApi
   ```

### Using Docker

1. Clone this repository to your local machine.
2. Build the Docker image with the following command:

   ```bash
   docker build -t php-restapi .
   ```
3. Run the container with:

   ```bash
   docker run -d -p 8080:80 --name restapi-container php-restapi
   ```
4. Access the application in your browser:
- Home page: http://localhost:8080
- API endpoint: http://localhost:8080/api/hello.php

5. Testing the REST API
You can test the API using Postman or just a browser. When accessing the /api/hello.php endpoint, you should receive a response like the following:
   ```json
   {
    "message": "Hola desde la API",
    "status": "success"
   }
   ```

