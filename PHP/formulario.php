<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$sugestao = $_POST['sugestao'];

$to = "lucas.limaxs.l@gmail.com";
$subject = "Formulário - Sugestões";
$body = "Nome: ".$nome. "\n".
        "Telefone: ".$telefone. "\n".
        "Email: ".$email. "\n".
        "Sugestão: ".$sugestao;
$header = "From: facebook@doutorjorgesilva.com.br"."\n".
            "Reply-To: ".$email."\n".
            "x=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)){

    echo("Email enviado com sucesso!");
}else{
    
    echo("O email não pôde ser enviado com sucesso");
}

}
?>