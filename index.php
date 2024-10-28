<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #404040;
            text-align: center;
        }

        .container {
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .container h2 {
            margin-bottom: 20px;
        }

        .container a {
            display: block;
            margin-bottom: 10px;
            padding: 10px 20px;
            background-color: #202020;
            opacity: 0.85;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            font-size: 18px;
        }

        .container a:hover {
            opacity: 1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bem-vindo!</h2>
        <a href="login.php">Login</a>
        <a href="register.php">Registrar</a>
    </div>
</body>
</html>
