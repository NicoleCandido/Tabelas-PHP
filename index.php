<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Parcelas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main class="cartao">
        <h1>Tabela de Parcelas</h1>
        <p class="subtitulo">Digite o valor da compra e em quantas vezes quer parcelar.</p>

        <form method="post" action="recebe.php">
            <label for="valor">Valor da compra (R$)</label>
            <input type="text" name="valor" id="valor" placeholder="Ex.: 1500,00" required>

            <label for="parcelas">Número de parcelas</label>
            <input type="number" name="parcelas" id="parcelas" min="1" max="48" placeholder="Ex.: 10" required>

            <button type="submit">Gerar tabela</button>
        </form>
    </main>
</body>
</html>