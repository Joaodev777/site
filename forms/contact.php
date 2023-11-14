<?php
    // Verifique se o campo de e-mail foi preenchido
    if (isset($_POST['email']) && !empty($_POST['email'])) {

        // E-mail de destino
        $destinatario_email = 'contato@newfiber.com.br';

        // Capturar o e-mail do formulário
        $email_do_formulario = $_POST['email'];

        // Configurações do e-mail
        $assunto = 'Novo e-mail enviado pelo formulário';
        $mensagem = 'Você recebeu um novo e-mail de: ' . $email_do_formulario;

        // Enviar o e-mail
        if (mail($destinatario_email, $assunto, $mensagem)) {
            echo 'E-mail enviado com sucesso!';
            header('Location: index.html');
        } else {
            echo 'Erro ao enviar o e-mail.';
        }
    } else {
        echo 'Por favor, preencha o campo de e-mail.';
    }
?>
