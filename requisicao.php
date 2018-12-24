<?php
    include_once('funcoes.php');
    include_once('email.php');
	
	$nome        = @$_REQUEST['nome'];
	$fantasia    = @$_REQUEST['fantasia'];
	$cgc         = @$_REQUEST['cgc'];
	$ie          = @$_REQUEST['ie'];
	$telefone    = @$_REQUEST['telefone'];
	$celular     = @$_REQUEST['celular'];
	$email       = @$_REQUEST['email'];
	$endereco    = @$_REQUEST['endereco'];
	$numero      = @$_REQUEST['numero'];
	$bairro      = @$_REQUEST['bairro'];
	$cep         = @$_REQUEST['cep'];
	$cidade      = @$_REQUEST['cidade'];
	$estado      = @$_REQUEST['estado'];	

	
	if (empty($cgc) || (empty($telefone) && empty($celular)) || empty($email) || empty($endereco) || empty($numero) || empty($bairro)
		|| empty($cidade) || empty($estado)) 
	{
		echo "Especifique todos os dados necessários";
		exit;
	}
	
	if (!validaemail($email)) {
		echo "Especifique um e-mail válido.";
		exit;
	}
	
    //ENVIAR EMAIL PARA O ADMINISTRADOR DO SISTEMA
    $mensagem = "O cliente <b>$nome</b>, CPF/CNPJ: <b>$cgc</b> realizou uma requisição de cadastro em " . getdatahora() .
                "<br><br>Dados do cadastro:<br><br>" .
                "Nome: <b>$nome</b><br>" .
                "Fantasia: <b>$fantasia</b><br>" .
                "CGC: <b>$cgc</b><br>" .
                "IE: <b>$ie</b><br>" .
                "Telefone: <b>$telefone</b><br>" .
                "Celular: <b>$celular</b><br>" .
                "E-mail: <b>$email</b><br>" .
                "Endereco: <b>$endereco, $numero</b> Bairro: <b>$bairro</b><br>" .
                "          Cidade: <b>$cidade/$estado</b> CEP: <b>$cep</b><br>";
            
    //ESPECIFIQUE AQUI O SEU ENDERECO DE E-MAIL QUE IRA RECEBER A REQUISICAO DE CADASTRO
    $r = enviar_email("destino@gmail.com", "REQUISIÇÃO DE CADASTRO", $mensagem);

    if ($r) {
        echo "E-mail enviado com sucesso!";
    } else  {
        echo "Impossivel enviar e-mail. Verifique suas configuracoes.";
    }
    
    //ENVIAR EMAIL PARA O CLIENTE
    //enviar_email($email, "CADASTRO REALIZADO COM SUCESSO","Caro usuário,<br><br>sua requisição foi recebida pelo nosso sistema e em breve estará sendo analisada.<br><br>Logo entraremos e contato com você para melhores esclarecimentos.<br><br>Obrigado por realizar seu cadastro.");
		
?>
