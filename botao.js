<?php
  ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Coletar os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $servico = $_POST['servico'];

  $destinatario = "start-tech-empresarial@outlook.com";

  $assunto = "Novo contato do site";
  $mensagem = "Nome:".$nome."\n";
  $mensagem .= "E-mail:".$email."\n";
  $mensagem .= "Telefone:".$telefone."\n";
  $mensagem .= "Serviço desejado:".$servico."\n";

  $headers = "From: ".$email."\r\n";
  $headers = "Reply-To: ".$email ."\r\n";
  $headers = "X-Mailer: PHP/" . phpversion()."\n";

  mail($destinatario, $assunto, $mensagem, $headers);
}
?>
