<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Richiesta di contatto</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                color: #333;
            }
            .content {
                padding: 20px;
                background-color: #f4f4f4;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <h1>Richiesta di contatto</h1>

            <p>Nome: {{ $firstName }} {{ $lastName }}</p>
            <p>Email: {{ $email }}</p>
            <p>Numero di telefono: {{ $phoneNumber }}</p>
            <p>{{ $text }}</p>
        </div>
    </body>
</html>
