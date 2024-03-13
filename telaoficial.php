<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayShop</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #f4f4f4;
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

#hero {
    text-align: center;
    padding: 100px 0;
    background-image: url('hero_background.jpg');
    background-size: cover;
    color: #fff;
}

#hero h2 {
    font-size: 3em;
    margin: 0;
    letter-spacing: 2px;
}

#hero p {
    font-size: 1.2em;
    margin-top: 10px;
}

.cta-button {
    display: inline-block;
    background-color: #3498db;
    color: #fff;
    padding: 15px 30px;
    font-size: 1.2em;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #2980b9;
}

.games-section {
    background-color: #fff;
    padding: 100px 0;
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
    background-color: #e74c3c;
    color: #fff;
    padding: 10px 20px;
    font-size: 1.1em;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 10px;
    transition: background-color 0.3s ease;
}

.buy-button:hover {
    background-color: #c0392b;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

</style>

</head>
<body>
    <header>
        <div class="container">
            <h1>GameShop</h1>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="catalogo.php">Catálogo</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="login.php">login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="hero">
        <div class="container">
            <h2>Bem-vindo à PlayShop</h2>
            <p>Encontre os melhores jogos para todas as plataformas.</p>
            <a href="catalogo.php" class="cta-button">Explorar Jogos</a>
        </div>
    </section>

    <section id="catalog" class="games-section">
        <div class="container">
            <!-- Adicione aqui os jogos do catálogo -->
            <div class="game-card">
                <img src="pato 2.jpg" alt="Game 1">
                <h3>Untitled goose game</h3>
                <p>O Untitled Goose Game é um jogo pastelão do tipo "sandbox" (não linear) de ação furtiva em que você 
                    é um ganso solto em um vilarejo desprevenido.Z.</p>
                <a href="https://www.playstation.com/pt-br/games/untitled-goose-game/" class="buy-button">Comprar</a>
            </div>

            <div class="game-card">
                <img src="the.jpg" alt="Game 2">
                <h3>The last of us 2</h3>
                <p>Cinco anos após uma perigosa jornada pelos Estados Unidos pós-pandêmicos, Ellie e Joel encontram paz e estabilidade em Jackson, Wyoming, uma próspera comunidade de sobreviventes. Apesar da ameaça constante dos infectados e de outros sobreviventes desesperados, a vida no local oferece-lhes um refúgio seguro..</p>
                <a href="https://www.playstation.com/pt-br/games/the-last-of-us-part-ii-remastered/" class="buy-button">Comprar</a>
            </div>
            <!-- Adicione mais cards conforme necessário -->
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 GameShop. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
