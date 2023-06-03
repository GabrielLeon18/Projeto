<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Coletar os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $servico = $_POST['servico'];

  // Definir o endereço de e-mail de destino
  $destinatario = "start-tech-empresarial@outlook.com";

  // Montar o corpo do e-mail
  $assunto = "Novo contato do site";
  $mensagem = "Nome: " . $nome . "\n";
  $mensagem .= "E-mail: " . $email . "\n";
  $mensagem .= "Telefone: " . $telefone . "\n";
  $mensagem .= "Serviço desejado: " . $servico . "\n";

  // Enviar o e-mail
  $headers = "From: " . $email . "\r\n" .
             "Reply-To: " . $email . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($destinatario, $assunto, $mensagem, $headers)) {
    echo "Obrigado! Sua mensagem foi enviada com sucesso.";
  } else {
    echo "Desculpe, ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
  }
}
?>
