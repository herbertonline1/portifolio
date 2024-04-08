<?php

   
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem  = $_POST["mensagem"];

    echo $nome.'</br>';
    echo $email.'</br>';
    echo $telefone.'</br>';
    echo $mensagem.'</br>';

    $para = "herbertonline1@hotmail.com";
    $contato = "Contato - Meu Portfolio";

    $corpo = "Nome: ".$nome."\n"."email: ".$email."\n"."telefone: ".$telefone."\n"."mensagem".$mensagem;

    $cabeca = "From: "."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/"..phpversion();

    if(mail($para,$contato,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        //echo("Houve um erro ao enviar o email!");
    }

?>