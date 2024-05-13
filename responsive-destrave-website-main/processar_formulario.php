<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST["user_name"];
    $email = $_POST["user_email"];
    $tell = $_POST["user_tel"];

    // E-mail de destino
    $to = 'marketing@seudestrave.com.br';

    // Assunto do e-mail
    $subject = "Email site Destrave";

    // Construir a mensagem
    $message = "E-mail enviado por: $email\n\n";
    $message = "Nome: $nome\n\n";
    $message .= "Telefone:\n$tell";

    // Cabeçalhos do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";

    // Configurações do servidor SMTP
    ini_set('SMTP', 'smtp.hostinger.com');
    ini_set('smtp_port', 465);
    ini_set('sendmail_from', 'marketing@seudestrave.com.br');

    // Enviar e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Mensagem enviada com sucesso!"); window.location.href = "../";</script>';
    } else {
        echo '<script>alert("Erro ao enviar mensagem. Por favor, tente novamente mais tarde."); window.location.href = "../";</script>';
    }
}
?>

