<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            background-color: #f4f4f4;
            font-family: "poppins", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .error-container {
            text-align: center;
            padding: 30px 50px;
            border-radius: 5px;
        }

        .error-container h1 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #0f2c3f;
        }

        h1 span {
            border-right: 2px solid #0f2c3f;
            color: #e74c3c;
            padding-right: 20px;
        }

        .error-container p {
            font-size: 20px;
            color: #333;
            margin-bottom: 20px;
        }

        .back-home {
            display: inline-block;
            padding: 10px 20px;
            background-color: white;
            color: #0f2c3f;
            text-decoration: none;
            border-radius: 0;
            transition: background-color 0.3s;
            border: 1px solid #0f2c3f;
        }

        .back-home:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1><span>404</span> PÁGINA NÃO ENCONTRADA</h1>
        <a href="./" class="back-home">Voltar a pagina principal</a>
    </div>
</body>
</html>
