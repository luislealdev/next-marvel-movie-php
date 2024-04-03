<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
// Inicializar cURL
$ch = curl_init(API_URL);
// Configurar cURL (No mostrar en pantalla sino guardar en una variable)
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Ejecutar petición y guardar resultado
$response = curl_exec($ch);
// Decodificar JSON
$data = json_decode($response, true);
// Cerrar cURL
curl_close($ch);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
    <title>Next Marvel Movie</title>
</head>

<body>
    <main>
        <section>
            <img style="max-height: 400px; border-radius:5px" src="<?= $data["poster_url"] ?>" alt="<?= $data["title"] ?>">
        </section>
        <h1><?= $data["title"] ?></h1>
        <p>Fecha de estreno: <?= $data["release_date"] ?></p>
        <p>Faltan <?= $data["days_until"] ?> días</p>
    </main>
</body>

</html>
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-items: center;
        background-color: #f0f0f0;
        text-align: center;
        height: 100vh;
    }
</style>