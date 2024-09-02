<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $nome = $_POST['camponome'];
        $email = $_POST['campoemail'];
        $telefone = $_POST['campotelefone'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];


        $destinatario = "rafael1390yt@gmail.com";
        $fonte = "Mensagem de Contato";

        $corpo = "Nome do Contato: $nome \n";
        $corpo .= "Email do Contato: $email \n";
        $corpo .= "Telefone do Contato: $telefone \n";
        $corpo .= "Assunto: $assunto \n";
        $corpo .= "Mensagem: $mensagem \n";


        mail($destinatario, $assunto, $corpo);

        header("location:obrigado.html");
        exit();

    }   
?>