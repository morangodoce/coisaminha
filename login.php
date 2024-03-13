<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayShop - Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #f4f4f4;
}

.login-container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

form {
    background-color: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    font-size: 2em;
    margin-bottom: 20px;
    color: #333;
}

label {
    display: block;
    margin-bottom: 10px;
    color: #333;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    box-sizing: border-box;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
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

button:hover {
    background-color: #2980b9;
}
</style>

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
                    <li><a href="cadastro.php">cadastro</a></li>
                </ul>
            </nav>
        </div>
    </header>

</head>
<body>
    <div class="login-container">
        <form action="config_login.php" method="POST" id="login-form">
            <h2>Login</h2>

            <label for="username">Usuário:</label>
            <input type="text" id="username" name="email" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="senha" required>

            <button type="submit" name="submit" class="cta-button">Entrar</button>
        </form>
    </div>
</body>
</html>
