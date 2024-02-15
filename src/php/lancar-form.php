<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $telefone = $_POST["phone"];
    $mensagem = $_POST["message"];

    $destinatario = "vinispinto10@gmail.com"; // Substitua pelo seu endereço de e-mail

    $assunto = "Nova mensagem de contato de $nome";

    $conteudo = "Nome: $nome\n";
    $conteudo .= "E-mail: $email\n";
    $conteudo .= "Telefone: $telefone\n";
    $conteudo .= "Mensagem:\n$mensagem";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($destinatario, $assunto, $conteudo, $headers)) {
        echo "Mensagem enviada com sucesso. Obrigado!";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente.";
    }
}
?>