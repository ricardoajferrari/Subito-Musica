
<?
  ##---------------------------------------------------
  ##  Envio de Emails pelo SMTP Aut�nticado usando PEAR
  ##---------------------------------------------------
  # Mais detalhes sobre o PEAR: 
  #   http://pear.php.net/
  #
  # Mais detalhes sobre o PEAR Mail:
  #   http://pear.php.net/manual/en/package.mail.mail-mime.php
  ##---------------------------------------------------

  ## OBSERVA��O: Caso deseje um exemplo de como enviar arquivos em anexo,
  ##             gere um script com "Formato do e-mail" igual a "HTML".

  # Faz o include do PEAR Mail.
  include ("Mail.php");

  # E-mail de destino. Caso seja mais de um destino, crie um array de e-mails.
  # *OBRIGAT�RIO*
  $recipients = 'ferrari@subitomusica.com.br';

  # Cabe�alho do e-mail.
  $headers = 
    array (
      'From'    => 'ferrari@subitomusica.com.br', # O 'From' � *OBRIGAT�RIO*.
      'To'      => 'DESTINATARIO@DominioDestinatario.com',
      'Subject' => 'TITULO DO E-MAIL'
    );

  # Utilize esta op��o caso deseje definir o e-mail de resposta
  # $headers['Reply-To'] = 'EMailDeResposta@DominioDeResposta.com';

  # Utilize esta op��o caso deseje definir o e-mail de retorno em caso de erro de envio
  # $headers['Errors-To'] = 'EMailDeRerornoDeERRO@DominioDeretornoDeErro.com';
  
  # Utilize esta op��o caso deseje definir a prioridade do e-mail
  # $headers['X-Priority'] = '3'; # 1 UrgentMessage, 3 Normal  

  # Corpo da Mensagem
  $body = 'Escreva aqui o texto do seu e-mail';

  # Par�metros para o SMTP. *OBRIGAT�RIO*
  $params = 
    array (
      'auth' => true, # Define que o SMTP requer autentica��o.
      'host' => 'smtp.subitomusica.com.br', # Servidor SMTP
      'username' => 'ferrari=subitomusica.com.br', # Usu�rio do SMTP
      'password' => 'subbito12' # Senha do seu MailBox.
    );
    
  # Define o m�todo de envio! queremos 'smtp'. *OBRIGAT�RIO*
  $mail_object =& Mail::factory('smtp', $params);

  # Envia o email. Se n�o ocorrer erro, retorna TRUE caso contr�rio, retorna um
  # objeto PEAR_Error. Para ler a mensagem de erro, use o m�todo 'getMessage()'.
  $result = $mail_object->send($recipients, $headers, $body);
  if (PEAR::IsError($result))
  {
    echo "ERRO ao tentar enviar o email. (" . $result->getMessage(). ")";
  }   
  else
  {
    echo "Email enviado com sucesso!";
  }   
?>				