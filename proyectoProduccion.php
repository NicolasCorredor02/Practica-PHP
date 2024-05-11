<?php

    const API_URL = 'https://whenisthenextmcufilm.com/api';
    #Inicializar una nueva sesion de cURL; ch = cURL handle;
    $curlHandle = curl_init(API_URL);

    #Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
    
    #Ejecutar la peticion y guardamos el resultado
    $result = curl_exec($curlHandle);//$result = file_get_contents(API_URL);  Si solo se necesita hacer un GET de una API
    #Con json_decode queremosque que transforme el json entrante de $result y al dejarlo como 
    #true le decimos que cree un array asociado a la informacion
    $data = json_decode($result,true);
    
    #Se cierra conexion del cURL
    curl_close($curlHandle);

  

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La proxima pelicula de Marvel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
</head>

<body>

    <main>
       
        <section>
            <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]?>"/>
        </section>

        <hgroup>
            <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> dias</h3>
            <p>Fehca de estreno: <?= $data["release_date"] ?></p>
            <p>La siguiente es: <?= $data["following_production"]["title"];?></p>
        </hgroup>
    </main>

    <style>
        :root {
            color-scheme: ligth dark;
        }

        body {
            display: grid;
            place-content: center;
        }
    </style>
</body>

</html>