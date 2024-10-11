<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Define o destinatário e o assunto do e-mail
    $to = "mmaiag4497@gmail.com.com"; // Coloque seu e-mail aqui
    $subject = "Mensagem de Contato: $name";

    // Cria o corpo do e-mail
    $body = "Nome: $name\n";
    $body .= "E-mail: $email\n";
    $body .= "Mensagem:\n$message\n";

    // Define os cabeçalhos do e-mail
    $headers = "From: $name <$email>";

    // Envia o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
