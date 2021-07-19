<?php

# alterar a variavel abaixo colocando o seu email

$destinatario = "atilavirginia1@gmail.com";

if(isset($_POST['submit'])){

    $nome = $_POST['FNAME'];
    $email = $_POST['EMAIL'];
    $celular = $_POST['CELULAR'];
    // $mensagem = $_REQUEST['checkboxes'];
    $assunto = $_POST['FNAME'];

    // monta o e-mail na variavel $body

    $body = $body . "Nome: " . $nome . "\n";
    $body = $body . "Email: " . $email . "\n";

    // $body = $body . "Complementos: " . $checkboxes . "\n\n";
    // $body = $body . "Mensagem: " . $mensagem . "\n\n";

    // envia o email
    mail($destinatario, $assunto, $body, "From: $email\r\n");
}
if($envio)
 echo "Mensagem enviada com sucesso";
else
 echo "A mensagem não pode ser enviada";
 
// redireciona para a página de obrigado
// header("location:obrigado.htm");


?>