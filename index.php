<?php 
const API_URL = "https://dev.whenisthenextmcufilm.com/api";

#inicializar una nueva sesion
$ch = curl_init(API_URL);
//indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
#ejecutar la peticion
$result = curl_exec($ch);
$data = json_decode($result,true);

curl_close($ch);

# var_dump($data);
?>

<head>
    <title>PHP</title>
    <!-- Centered viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
<style>
:root {
    color-scheme: dark;
}


body {
    display: grid;
    place-content: center;
}

section {
    display:flex;
    justify-content:center;
    text-align: center;
}

hgroup {
    display:flex;
    justify-content:center;
    text-align: center;
    flex-direction:column;
}
</style>

</head>

<body>
<main>
    <section>
    <img src="<?=$data["poster_url"]; ?>" width="300" alt="Poster de <?=$data["title"];?>" style="border-radius:16px"/>
    </section>
    
    <hgroup>
        <h2><?=$data["title"];?> se estrena en <?=$data["days_until"];?> </h2>
        <p>Fecha de estreno: <?=$data["release_date"]?> </p>
    </hgroup>
    
</main>
</body>


