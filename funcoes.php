    <?php	
    function validaemail($email){
    	//verifica se e-mail esta no formato correto de escrita
    	if ( (!@ereg('^([a-zA-Z0-9.-_])*([@])([a-z0-9]).([a-z]{2,3})',$email)) && (!@ereg('^([a-zA-Z0-9.-_])*([@])([a-z0-9]).([a-z0-9]).([a-z]{2,3})',$email)) ) {
    		return false;
        }
        else{
    		//Valida o dominio
    		$dominio=explode('@',$email);
    		if(!checkdnsrr($dominio[1],'A')){
    			return false;
    		} else{ 
				return true; 
			} // Retorno true para indicar que o e-mail é valido
    	}
    }
     
	function getdatahora() {
		date_default_timezone_set('America/Sao_Paulo');
		return date('Y-m-d h:i:s');
	}			