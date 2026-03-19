<?php
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$idade = $_POST['idade'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dados Completos</title>

    <style>
        body {
            font-family: Arial;
            background: #f5f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
        }

        p {
            margin: 10px 0;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            border: none;
            background: #4facfe;
            color: white;
            border-radius: 6px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Dados Completos</h2>

    <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
    <p><strong>Idade:</strong> <?= htmlspecialchars($idade) ?></p>

    <form method="POST" action="index.php">
        <input type="hidden" name="nome" value="<?= htmlspecialchars($nome) ?>">
        <input type="hidden" name="email" value="<?= htmlspecialchars($email) ?>">
        <input type="hidden" name="idade" value="<?= htmlspecialchars($idade) ?>">

        <button type="submit">Voltar</button>
    </form>
</div>

</body>
</html>