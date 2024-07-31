<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário Retroalimentado</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <?php
    require 'processa_formulario.php';
    ?>

    <h2>Formulário Retroalimentado em PHP</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nome: <input type="text" name="nome" value="<?php echo $nome ?? ''; ?>">
        <span class="error"><?php echo $nomeErr ?? ''; ?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email ?? ''; ?>">
        <span class="error"><?php echo $emailErr ?? ''; ?></span>
        <br><br>
        Mensagem: <textarea name="mensagem" rows="5" cols="40"><?php echo $mensagem ?? ''; ?></textarea>
        <span class="error"><?php echo $mensagemErr ?? ''; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>