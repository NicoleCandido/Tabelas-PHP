<?php
// Lê os dados do formulário (aceita vírgula ou ponto no valor)
$valor    = str_replace(',', '.', trim($_POST['valor'] ?? ''));
$parcelas = (int) ($_POST['parcelas'] ?? 0);

// Validação: valor numérico maior que zero e de 1 a 48 parcelas
$erro = '';
if (!is_numeric($valor) || $valor <= 0) {
    $erro = 'Digite um valor de compra válido, maior que zero.';
} elseif ($parcelas < 1 || $parcelas > 48) {
    $erro = 'O número de parcelas deve ser de 1 a 48.';
}

// Formata um número no padrão brasileiro: R$ 1.234,56
function real($numero) {
    return 'R$ ' . number_format($numero, 2, ',', '.');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor das Parcelas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main class="cartao">
        <?php if ($erro): ?>

            <h1>Ops!</h1>
            <p class="erro"><?= $erro ?></p>

        <?php else: ?>

            <?php
            $valor        = (float) $valor;
            $valorParcela = $valor / $parcelas;
            ?>
            <h1>Valor das Parcelas</h1>
            <p class="subtitulo">
                <?= real($valor) ?> em <?= $parcelas ?>x de <strong><?= real($valorParcela) ?></strong>
            </p>

            <table id="tabela">
                <thead>
                    <tr>
                        <th>Parcela</th>
                        <th>Valor</th>
                        <th>Total pago</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($cont = 1; $cont <= $parcelas; $cont++): ?>
                        <?php $classe = ($cont % 2 == 0) ? 'clara' : 'escura'; ?>
                        <tr class="<?= $classe ?>">
                            <td><?= $cont ?>ª</td>
                            <td><?= real($valorParcela) ?></td>
                            <td><?= real($valorParcela * $cont) ?></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>

        <?php endif; ?>

        <a class="voltar" href="index.php">← Calcular de novo</a>
    </main>
</body>
</html>