<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Distribuida</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="text-center">
        <h2 class="display-4">Universidad Central del Ecuador</h2>
        <br>
        <img src="/Img/logoUce.png" alt="Imagen Universidad Central" class="imagen-central">
        <br>
        <br>
        <h3 class="display-4">Facultad de Ingeniería y Ciencias Aplicadas</h3>
        <h3 class="display-4">Sistemas de Información</h3>
        <br>
        <h3 class="display-4">Tanya Alexandra Vaca Mena</h3>
        <h3 class="display-4">SI8-002</h3>
    </div>
</body>
</html>


<script>
    fetch('/api/hello')
        .then(response => response.json())
        .then(data => {
            console.log(data); // Ver en la consola
            // Muestra el mensaje de la API en el HTML
            const mensaje = document.createElement('p');
            mensaje.textContent = data.message;
            document.body.appendChild(mensaje);
        })
        .catch(error => console.error('Error:', error));
</script>