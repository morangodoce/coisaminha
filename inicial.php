<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayShop</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: #000;
            color: #fff;
        }

        #hero-section {
            text-align: center;
            animation: fadeIn 1.5s ease-out;
        }

        header{
            text-align: center;
            
        }

        h1 {
            font-size: 3em;
            margin: 0;
            letter-spacing: 2px;
        }

        p {
            font-size: 1.2em;
            margin-top: 10px;
            color: #ecf0f1;
        }

        #cta-button {
            display: inline-block;
            background-color: #2ecc71;
            color: #fff;
            padding: 15px 30px;
            font-size: 1.2em;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        #cta-button:hover {
            background-color: #27ae60;
        }

        #game-img {
            max-width: 100%;
            height: auto;
            margin-top: 20px; /* Ajuste o espaçamento conforme necessário */
            margin-bottom: 50px; /* Adiciona espaço abaixo da imagem */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div id="hero-section">
        <h1>Bem-vindo ao PlayShop</h1>
        <p>Descubra os melhores jogos e mergulhe em experiências incríveis.</p>
        <a href="telaoficial.php" id="cta-button">Explorar Jogos</a>
        <img src="transferir.jpg" alt="The Witcher 3" id="game-img">
    </div>
</body>
</html>