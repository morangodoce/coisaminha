<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayShop - Contato</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>PlayShop</h1>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="catalogo.php">Catálogo</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="contact.html">Contato</a></li>
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

.contact-section {
    padding: 80px 0;
    text-align: center;
}

.contact-section h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.contact-section p {
    font-size: 1.2em;
    margin-bottom: 40px;
}

#contact-form {
    max-width: 600px;
    margin: 0 auto;
    text-align: left;
}

#contact-form label {
    display: block;
    margin-bottom: 10px;
    color: #333;
}

#contact-form input,
#contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 5px;
}

#contact-form button {
    background-color: #3498db;
    color: #fff;
    padding: 15px 30px;
    font-size: 1.2em;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#contact-form button:hover {
    background-color: #2980b9;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}
</style>


    <section id="contact" class="contact-section">
        <div class="container">
            <h2>Entre em Contato</h2>
            <p>Estamos aqui para ajudar! Se você tiver alguma dúvida ou precisar de assistência, não hesite em entrar em contato conosco.</p>

            <form id="contact-form">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit" class="cta-button">Enviar Mensagem</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 PlayShop. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>