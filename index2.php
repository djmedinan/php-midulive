<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Financiero</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .dashboard {
            width: 90%;
            max-width: 500px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        .dashboard h1 {
            font-size: 24px;
            color: #333;
        }
        .price {
            font-size: 36px;
            font-weight: bold;
            color: #27ae60;
            margin: 20px 0;
        }
        .updated {
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Precio del Dólar (enparalelovzla)</h1>

        <?php
        // URL de la API
        $url = "https://pydolarve.org/api/v1/dollar?monitor=enparalelovzla";

        // Iniciar sesión cURL
        $ch = curl_init();

        // Configurar opciones de cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // Ejecutar cURL y capturar la respuesta
        $response = curl_exec($ch);

        // Verificar errores de cURL
        if (curl_errno($ch)) {
            echo "<p>Error al obtener el precio: " . curl_error($ch) . "</p>";
        } else {
            // Decodificar el JSON y extraer el dato 'price'
            $data = json_decode($response, true);
            if (isset($data['price'])) {
                $price = $data['price'];
                echo "<div class='price'>$ $price</div>";
                echo "<p class='updated'>Actualizado recientemente</p>";
            } else {
                echo "<p>No se encontró el dato 'price' en la respuesta.</p>";
            }
        }

        // Cerrar sesión cURL
        curl_close($ch);
        ?>
    </div>
</body>
</html>
