<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos - Zaun</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Dados Recebidos</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.html">Início</a></li>
            <li><a href="exibir.php">Exibir Dados</a></li>
            <li><a href="desenvolvedores.html">Desenvolvedores</a></li>
        </ul>
    </nav>

    <main>
        <h2>Informações do Usuário</h2>
        <ul>
            <li><strong>Nome:</strong> <?php echo $_POST['nome']; ?></li>
            <li><strong>Email:</strong> <?php echo $_POST['email']; ?></li>
            <li><strong>Telefone:</strong> <?php echo $_POST['telefone']; ?></li>
            <li><strong>Data de Nascimento:</strong> <?php echo $_POST['dataNascimento']; ?></li>
            <li><strong>Gênero:</strong> <?php echo $_POST['genero']; ?></li>
            <li><strong>Site Pessoal:</strong> <?php echo $_POST['url']; ?></li>
            <li><strong>Cor Favorita:</strong> <?php echo $_POST['cor']; ?></li>
        </ul>
    </main>

    <footer>
        <p>IFRN campus Santa Cruz</p>
        <p>Trabalho de Autoria Web</p>
        <p>Prof. Marcelo Figueiredo Barbosa Júnior</p>
        <p>Desenvolvedor: Lucas Gabriel da Silva Freitas</p>
    </footer>
</body>
</html>
