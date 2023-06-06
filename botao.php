<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Coletar os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $servico = $_POST['servico'];

  // Validar os campos (exemplo básico)
  if (empty($nome) || empty($email) || empty($telefone) || empty($servico)) {
    echo "Por favor, preencha todos os campos do formulário.";
    exit;
  }

  // Filtrar e validar o formato do e-mail
  $email = filter_var($email, FILTER_VALIDATE_EMAIL);
  if (!$email) {
    echo "Por favor, forneça um endereço de e-mail válido.";
    exit;
  }

  $destinatario = "start-tech-empresarial@outlook.com";
  $assunto = "Novo contato do site";
  $mensagem = "Nome: " . $nome . "\n";
  $mensagem .= "E-mail: " . $email . "\n";
  $mensagem .= "Telefone: " . $telefone . "\n";
  $mensagem .= "Serviço desejado: " . $servico . "\n";
  />
