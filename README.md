# sendgmail
Exemplo de como enviar e-mail pelo Gmail com PHPMailer.

A configuração do Gmail para envio de E-mail por SMTP é a seguinte:

Servidor: smtp.gmail.com
Porta: 465
Usuário: seu e-mail
Senha: sua senha
Exige conexão segura: Sim

As configurações de sua conta devem ser especificadas no arquivo "email.php"

O e-mail de destino (para onde vai as informaçõe de contato, está em "requisição.php"... sendo que poderia ser criada uma variável global em "email.php" também... mas isso é só um detalhe :)

ATENCAO!
Para enviar e-mail através do Gmail vc precisa permitir que sua conta seja acessada por aplicativos externos configurando
a opção “Permitir aplicativos menos seguros” nas configurações do seu Gmail.

Veja como fazer isso em: 
http://www.is5.com.br/blog/site/dicas-truques/enviando-e-mail-com-seu-aplicativo-atraves-do-gmail





