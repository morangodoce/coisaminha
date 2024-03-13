<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayShop - Catálogo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>PlayShop</h1>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="catalog.html">Catálogo</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="catalogo.php">Contato</a></li>
                    <li><a href="login.php">login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #f4f4f4;
    color: #333;
}

.container {
    width: 80%;
    margin: 0 auto;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
}

header h1 {
    margin: 0;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

.catalog-section {
    padding: 80px 0;
    text-align: center;
}

.catalog-section h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.game-card {
    text-align: center;
    margin-bottom: 40px;
}

.game-card img {
    max-width: 100%;
    height: auto;
}

.buy-button {
    display: inline-block;
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    font-size: 1.1em;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.buy-button:hover {
    background-color: #2980b9;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}
</style>


    <section id="catalog" class="catalog-section">
        <div class="container">
            <h2>Catálogo de Jogos</h2>

            <div class="game-card">
                <img src="jogo.jpg" alt="stardew valley">
                <h3>stardew valley</h3>
                <p>Stardew Valley é um RPG de simulação de fazenda que surpreendeu o mundo de jogos e ganhou milhões de fãs. 
                    Cuidar de uma fazenda, se aproximar dos moradores de uma cidade pequena e ajudar a renovar o Centro da Comunidade.</p>
                <a href="https://www.playstation.com/pt-br/games/stardew-valley/" class="buy-button">Comprar</a>
            </div>

            <div class="game-card">
                <img src="spider.jpg" alt="Spider-Man: Miles Morales">
                <h3>Spider-Man: Miles Morales</h3>
                <p>Miles Morales descobre poderes incríveis e explosivos que o diferenciam de seu mentor, Peter Parker. Domine seus ataques Venom bioelétricos, poder de camuflagem, truques espetaculares com teia, 
                    além de dispositivos e habilidades.</p>
                <a href="https://www.playstation.com/pt-br/games/marvels-spider-man-miles-morales/" class="buy-button">Comprar</a>
            </div>

            <div class="game-card">
                <img src="evil.jpg" alt="Resident Evil Village">
                <h3>Resident Evil Village</h3>
                <p>Ambientado anos após os eventos terríveis do aclamado Resident Evil 7: Biohazard, a nova história começa com Ethan Winters e sua esposa,
                     Mia, vivendo tranquilamente em um novo lugar, 
                    livres dos pesadelos do passado. Mas quando estavam começando a construir uma nova vida, ocorre novamente uma tragédia.</p>
                <a href="https://www.playstation.com/pt-br/games/resident-evil-village/" class="buy-button">Comprar</a>
            </div>

            <div class="game-card">
                <img src="of.jpg" alt="Ghost of Tsushima">
                <h3>Ghost of Tsushima</h3>
                <p>A história acompanha Jin Sakai, um samurai que precisa proteger a Ilha de Tsushima durante a primeira invasão mongol do Japão.</p>
                <a href="#" class="buy-button">Comprar</a>
            </div>

            <!-- Adicione mais cards conforme necessário -->
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 PlayShop. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>