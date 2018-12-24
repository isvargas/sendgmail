<html>
<header>
    <title>Teste de Envio de E-mail</title>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</header>
<body>
    <div class="container">
    <div style="width: 100%; text-align: center; margin-top: 20px; margin-bottom: 20px;">
    <h3>EXEMPLO DE ENVIO DE E-MAIL PELO GMAIL</h3>
    </div>
    <form id="formRequisicao" action="requisicao.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <label>Nome/Razão Social</label>
                <input type="text" class="form-control"  id="nome" name="nome" maxlength="50">
            </div>
            <div class="col-md-6">
                <label>Fantasia</label>
                <input type="text" class="form-control"  id="fantasia" name="fantasia" maxlength="50">
            </div>
        </div>
        
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-6">
                <label>CNPJ/CPF</label>
                <input type="text" class="form-control" id="cgc" name="cgc" onkeypress="return SomenteNumero(event)" maxlength="18">
            </div>
            <div class="col-md-6">
                <label>IE/RG</label>
                <input type="text" class="form-control" id="ie" name="ie" onkeypress="return SomenteNumero(event)" maxlength="10">
            </div>
        </div>
        
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-3">
                <label>Telefone</label>
                <input type="text" class="form-control telefone" id="telefone" name="telefone" onkeypress="return SomenteNumero(event)" maxlength="10">
            </div>					
            <div class="col-md-3">
                <label>Celular</label>
                <input type="text" class="form-control celular" id="celular" name="celular" onkeypress="return SomenteNumero(event)" maxlength="11">
            </div>
            <div class="col-md-6">
                <label>E-mail</label>
                <input type="text" class="form-control" id="email" name="email" onkeyup="this.value=this.value.toLowerCase();" maxlength="100">
            </div>
        </div>
        
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-6">
                <label>Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" maxlength="100">
            </div>
            <div class="col-md-2">
                <label>Número</label>
                <input type="text" class="form-control" id="numero" name="numero" maxlength="5">
            </div>
            <div class="col-md-4">
                <label>Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" maxlength="50">
            </div>
        </div>
        
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-6">
                <label>Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" maxlength="50">
            </div>
            <div class="col-md-2">
                <label>Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" onkeyup="this.value=this.value.toUpperCase();"  maxlength="2">
            </div>
            <div class="col-md-4">
                <label>CEP</label>
                <input type="text" class="form-control cep" id="cep" name="cep" onkeypress="return SomenteNumero(event)" maxlength="9">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
</body>
</html>