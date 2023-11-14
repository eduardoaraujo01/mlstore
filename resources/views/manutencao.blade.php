

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    {{--    <title>Site em Manutenção</title>--}}
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .maintenance-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .logo-container {
            margin-bottom: 20px; /* Adicione margem inferior para separar a logo do texto */
        }
        .logo {
            max-width: 60%; /* Defina uma largura máxima para a imagem da logo */
        }
        h1 {
            font-size: 130px;
            color: #333;

        }
        p {
            color: #777;
        }

    </style>
</head>
<body>
<div class="maintenance-container">
    <h1>Site em Manutenção</h1>
    <div class="logo-container">
        <img class="logo" src="{{asset('assets/images/logo_gmenu.jpg')}}" alt="logo">
    </div>

    <p>Estamos trabalhando para melhorar o nosso site. Por favor, volte mais tarde.</p>
</div>
</body>
</html>
