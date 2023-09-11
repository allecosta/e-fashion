<?php

if (empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = ""; // Inserir o seu email
$subject = "$m_subject:  $name";
$body = "Você recebeu uma nova mensagem do formulário de contato do seu site.\n\n"."Aqui estão os detalhes:\n\nNome: $name\n\n\nEmail: $email\n\nAssunto: $m_subject\n\nMensagem: $message";
$header = "De: $email";
$header .= "Para: $email";	

if (!mail($to, $subject, $body, $header)) {
  http_response_code(500);
}
