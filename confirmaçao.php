<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horário Reservado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="text-center py-5 bg-light">
        <h1 class="text-pink">Horário Reservado</h1>
        <p class="lead">Seu momento especial foi agendado com sucesso!</p>
    </header>

    <main class="container text-center mt-5">
        <div class="card shadow p-5">
            <h2 class="text-success">Agendamento Confirmado 🎉</h2>
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($_GET['nome']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_GET['email']); ?></p>
            <p><strong>Data:</strong> <?php echo htmlspecialchars($_GET['data']); ?></p>
            <p><strong>Horário:</strong> <?php echo htmlspecialchars($_GET['hora']); ?></p>
            <p><strong>Observação:</strong> <?php echo htmlspecialchars($_GET['mensagem']); ?></p>
            <a href="index.html" class="btn btn-pink btn-lg mt-4">Voltar para o início</a>
        </div>
    </main>

    <footer class="text-center mt-5">
        <p>&copy; 2025 Luize Nail Design. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

