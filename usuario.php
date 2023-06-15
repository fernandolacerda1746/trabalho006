<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fogo No Estoque - Login Page</title>
    <link rel="icon" href="Images/icone1.png">
    <link rel="stylesheet" href="Styles/usuario.css">
</head>
<body>
    <section class = 'header-container'>
        <div class = 'title-logo'>
            <a href = 'index.php'>
                <figure clas = 'logo'>
                    <img src = 'Images/icone3.png' alt =''>
                </figure>
                <h4 class = 'title'>Fogo No Estoque</h4>
                <h5 class = 'subtitle'>Queimando a Concorrencia</h5>
            </a>
        </div>
    </section>
    <hr>
    <section class = 'login-container'>
        <h3 class = 'login-titulo'>Área de Acesso do Cliente</h3>
        <figure class = 'login-icon'>
            <img src = 'Images/icone-registro.png' alt ='Icone login'>
        </figure>
        <form method = 'post'>
            <label for = 'usuario' class = 'usuario-label'>Usuário:</label>
            <input type = 'text' name = 'usuario' placeholder = 'Insira o seu email ou CPF'>
            <label for = 'senha' class = 'senha-label'>Senha:</label>
            <input type = 'password' name = 'senha' placeholder = 'Insira sua senha'>
            <input type = submit value = 'Entrar'>
        </form>
    </section>
</body>
</html>