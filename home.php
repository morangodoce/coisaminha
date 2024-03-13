<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayShop - Sobre</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>GameShop</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="catalogo.php">Catálogo</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="login.php">login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <style>
        body {
    font-family: 'arial', sans-serif;
    margin: 0,5;
    padding: 0,5;
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

.about-section {
    padding: 80px 0;
    text-align: center;
}

.about-section h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.about-section p {
    font-size: 1.2em;
    margin-bottom: 40px;
}

.game-images {
    display: flex;
    justify-content: center;
}

.game-images img {
    max-width: 100%;
    height: auto;
    margin: 0 10px;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}
</style>

    <section id="about" class="about-section">
        <div class="container">
            <h2>Nossos jogos</h2>
            <p>Bem-vindo à PlayShop, sua loja online para os melhores jogos. Estamos comprometidos em fornecer uma vasta seleção de jogos para todas as plataformas, garantindo uma experiência de compra fácil e segura para os nossos clientes.</p>

            <div class="game-images">
                <img src="poppy.jpg" alt="Poppy Playime">
                <img src="mine.jpg" alt="Minecraft">
                <!-- Adicione mais imagens de jogos conforme necessário -->
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 PlayShop. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>