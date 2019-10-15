<?php

//verificação para ver se o usuário está logado (utilziando $_SESSION)
if(!Login::Logado()){
	Login::AcessoNegado();
	Rotas::Redirecionar(1, Rotas::pag_ClienteLogin());
}else{
	$smarty = new Template();

	//verificação para ver se tem algum dado oriundo do template de SAQUE
	if(isset($_POST['valorSaque']) && $_POST['valorSaque'] > 0){

		//------------ BLOCO PARA VERFICAÇÃO DE QUAL USUÁRIO É, PARA CHAMAR A RESPECTIVA FUNÇÃO -------------------------------
		if($_SESSION['CLI']['tipo'] == "Premium"){
			$userPremium = new UserPremium($_SESSION['CLI']['nome'],$_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],$_SESSION['CLI']['saldo']);
			$userPremium->Saque($_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],(double)$_POST['valorSaque']);
			

		}else if($_SESSION['CLI']['tipo'] == "basico"){
			$userBasico = new UserBasico($_SESSION['CLI']['nome'],$_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],$_SESSION['CLI']['saldo']);
			$userBasico->Saque($_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],(double)$_POST['valorSaque']);
			
		}else{
			$userSalario = new UserSalario($_SESSION['CLI']['nome'],$_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],$_SESSION['CLI']['saldo']);
			$userSalario->Saque($_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],(double)$_POST['valorSaque']);

		}
		//------------------------------------------------------------------------------------------------------------------------
	
	//TRATAMENTO DE ERRO	
	}else if(isset($_POST['valorSaque']) && $_POST['valorSaque'] <= 0){
		echo '<div class="alert alert-danger"> <strong>Error!</strong> Valor incorrespondente! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button></div>';
	}


	$smarty->display('saque.tpl');
}	






?>