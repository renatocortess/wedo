<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Verificar se o formulário foi submetido via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitizar dados recebidos do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $assunto = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Verificar se os campos obrigatórios estão preenchidos
    if (empty($nome) || empty($email) || empty($assunto) || empty($mensagem)) {
        http_response_code(400);
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Validar o formato do e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Formato de e-mail inválido.";
        exit;
    }

    // Processar envio de e-mail
    try {
        // Instanciar PHPMailer
        $mail = new PHPMailer(true);

        // Configurar servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'i9websistemas.com.br';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'contato@i9websistemas.com.br';
        $mail->Password   = 'I92024102030@.';
        $mail->Port       = 465;
        
        // Destinatário e assunto do e-mail
        $destino = "renatocortesf@gmail.com";
        $assunto_email = "Contato pelo Site I9WEB";

        // Remetente
        $mail->setFrom('naoresponder@i9web.com.br', 'I9WEB sistemas');

        // Adicionar destinatário
        $mail->addAddress($destino, 'email destino');

        // Conteúdo do e-mail (HTML)
        $arquivo = "
            <html>
                <p><b>Nome: </b>$nome</p>
                <p><b>E-mail: </b>$email</p>
                <p><b>Assunto: </b>$assunto</p>
                <p><b>Mensagem: </b>$mensagem</p>
                <p>Este e-mail foi enviado em <b>" . date('d/m/Y') . "</b> às <b>" . date('H:i:s') . "</b></p>
            </html>
        ";

        $mail->isHTML(true);
        $mail->Subject = $assunto_email;
        $mail->Body    = $arquivo;

        // Enviar e-mail
        $mail->send();
        http_response_code(200);
        echo 'E-mail enviado com sucesso';
    } catch (Exception $e) {
        http_response_code(500);
        echo "Erro ao enviar o e-mail. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    http_response_code(405); // Método não permitido
    echo "Método não permitido.";
    exit;
}
?>
