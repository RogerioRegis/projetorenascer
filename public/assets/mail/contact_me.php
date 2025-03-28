<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Crie o e-mail e envie a mensagem
$to = "sejuc@bvrr.com.br"; // Adicione seu endereço de e-mail entre o "" substituindo seunome@seudominio.com - É para onde o formulário enviará uma mensagem.

$subject = "Formulário de contato do site: $name";

$body = "Você recebeu uma nova mensagem do formulário de contato do seu site.\n"."Aqui estão os detalhes:\n
Nome: $name\n
E-mail: $email\n
Telefone: $phone\n
Mensagem:\n
$message";

$header = "De: sejuc@bvrr.com.br\n"; // Este é o endereço de e-mail de onde a mensagem será gerada. Recomendamos usar algo como sejuc@bvrr.com.br.

$header .= "Responder a: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
