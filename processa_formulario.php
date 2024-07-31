<?php
// Inicializa variáveis de erro
$nomeErr = $emailErr = $mensagemErr = "";

// Inicializa variáveis de dados
$nome = $email = $mensagem = "";

// Função para limpar os dados de entrada
function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Função para validar nome
function valida_nome($nome) {
    if (empty($nome)) {
        return "Nome é obrigatório";
    }
    if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
        return "Apenas letras e espaços em branco são permitidos";
    }
    return "";
}

// Função para validar email
function valida_email($email) {
    if (empty($email)) {
        return "Email é obrigatório";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Formato de email inválido";
    }
    return "";
}

// Função para validar mensagem
function valida_mensagem($mensagem) {
    if (empty($mensagem)) {
        return "Mensagem é obrigatória";
    }
    return "";
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = test_input($_POST["nome"]);
    $email = test_input($_POST["email"]);
    $mensagem = test_input($_POST["mensagem"]);

    $nomeErr = valida_nome($nome);
    $emailErr = valida_email($email);
    $mensagemErr = valida_mensagem($mensagem);

    // Se não houver erros, pode processar os dados
    if (empty($nomeErr) && empty($emailErr) && empty($mensagemErr)) {
        // Código para processar os dados (ex: salvar no banco de dados)
        echo "<p>Formulário enviado com sucesso!</p>";
    }
}
?>
