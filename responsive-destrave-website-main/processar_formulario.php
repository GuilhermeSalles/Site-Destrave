<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["user_name"];
    $email = $_POST["user_email"];
    $tel = $_POST["user_tel"];

    // E-mail de destino
    $to = "marketing@seudestrave.com.br";

    // Assunto do e-mail
    $subject = "Novo formulário de contato Site";

    // Mensagem do e-mail
    $message = "Nome: $name\n";
    $message .= "E-mail: $email\n";
    $message .= "WhatsApp:\n$tel";

    // Cabeçalhos do e-mail
    $headers = "From: $email";

    // Enviar e-mail
    mail($to, $subject, $message, $headers);
     // Enviar e-mail
     if (mail($to, $subject, $message, $headers)) {
        // Redirecionar para a tela index.php
        header("Location: index");
        exit();  // Certifique-se de sair após o redirecionamento
    } else {
        echo "Erro ao enviar o e-mail.";
    }
}
?>
