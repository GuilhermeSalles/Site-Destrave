<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Inclui o autoload do Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST["user_name"];
    $email = $_POST["user_email"];
    $telefone = $_POST["user_tel"];
    $revenue = $_POST["user_revenue"];
    $marketing = $_POST["user_marketing"];
    $planType = $_POST["planType"];
    $social = $_POST["user_social"]; // Recupera a rede social

    // E-mail de destino
    $to = 'marketing@seudestrave.com.br';

    // Assunto do e-mail
    $subject = "Email Assessoria Destrave - Plano: $planType";

    // Construir a mensagem
    $message = "Nome: $nome\n";
    $message .= "E-mail: $email\n";
    $message .= "Telefone: $telefone\n";
    $message .= "Faturamento mensal médio: $revenue\n";
    $message .= "Investimento em anúncios online e marketing: $marketing\n";
    $message .= "Rede Social: $social"; // Adiciona a rede social à mensagem

    // Configurações de SMTP
    $mail = new PHPMailer(true);
    try {
        // Configuração do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com'; // Configure com o seu host SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'marketing@seudestrave.com.br'; // Insira seu e-mail aqui
        $mail->Password = 'Rdm*19077608'; // Insira sua senha aqui
        $mail->SMTPSecure = 'ssl'; // tls se preferir usar tls
        $mail->Port = 465; // 587 se preferir usar tls

        // Remetente e destinatário
        $mail->setFrom('marketing@seudestrave.com.br', 'Destrave Digital'); // Use um e-mail válido configurado na Hostinger
        $mail->addAddress($to);

        // Conteúdo do e-mail
        $mail->isHTML(false); // Define se o e-mail será enviado como HTML ou texto simples
        $mail->Subject = $subject; // Define o assunto do e-mail
        $mail->Body = $message; // Define o corpo do e-mail

        // Envia o e-mail
        $mail->send();
        echo '<script>alert("Mensagem enviada com sucesso!"); window.location.href = "../destrave";</script>';
    } catch (Exception $e) {
        echo '<script>alert("Erro ao enviar mensagem. Por favor, tente novamente mais tarde."); window.location.href = "../destrave";</script>';
        // Descomente a linha abaixo para obter mais detalhes sobre o erro
        // echo 'Erro no envio do email: ', $mail->ErrorInfo;
    }
}
