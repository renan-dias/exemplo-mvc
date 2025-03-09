<?php
// Arquivo: views/home.php
// Descrição: View da página inicial.
include 'views/layout/header.php';
?>

<div class="container">
    <h1>Produtos</h1>
    <?php if (!empty($data)) : ?>
        <ul>
            <?php foreach ($data as $produto) : ?>
                <li><?= $produto['nome'] ?> - <?= $produto['preco'] ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Nenhum produto encontrado.</p>
    <?php endif; ?>
</div>

<?php include 'views/layout/footer.php'; ?>