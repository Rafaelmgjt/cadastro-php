<?php
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$idade = $_POST['idade'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            width: 320px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        input:focus {
            border-color: #4facfe;
            outline: none;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 48%;
            font-weight: bold;
            color: white;
        }

        .btn-full {
            background: #4facfe;
        }

        .btn-resumo {
            background: #43e97b;
        }

        button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Cadastro</h2>

    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required value="<?= htmlspecialchars($nome) ?>">

        <label>Email:</label>
        <input type="email" name="email" required value="<?= htmlspecialchars($email) ?>">

        <label>Idade:</label>
        <input 
            type="number" 
            name="idade" 
            required 
            min="0" 
            value="<?= htmlspecialchars($idade) ?>"
        >

        <div class="buttons">
            <button class="btn-full" type="submit" formaction="mostrar.php">
                Mostrar Tudo
            </button>

            <button class="btn-resumo" type="submit" formaction="resumo.php">
                Resumo
            </button>
        </div>
    </form>
</div>

</body>
</html>