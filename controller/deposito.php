<?php

//verificação para ver se o usuário está logado (utilziando $_SESSION)
if(!Login::Logado()){
	Login::AcessoNegado();
	Rotas::Redirecionar(1, Rotas::pag_ClienteLogin());
}else{
	$smarty = new Template();

	//verificação para ver se tem algum dado oriundo do template de deposito
	if(isset($_POST['valorDeposito']) && $_POST['valorDeposito'] > 0){

		//------------ BLOCO PARA VERFICAÇÃO DE QUAL USUÁRIO É, PARA CHAMAR A RESPECTIVA FUNÇÃO -------------------------------
		if($_SESSION['CLI']['tipo'] == "Premium"){
			$userPremium = new UserPremium($_SESSION['CLI']['nome'],$_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],$_SESSION['CLI']['saldo']);
			$userPremium->Deposito($_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],(double)$_POST['valorDeposito']);
			(double)$_SESSION['CLI']['saldo'] = (double)$_SESSION['CLI']['saldo'] + (double)$_POST['valorDeposito']+1;
		

		}else if($_SESSION['CLI']['tipo'] == "basico"){
			$userBasico = new UserBasico($_SESSION['CLI']['nome'],$_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],$_SESSION['CLI']['saldo']);
			$userBasico->Deposito($_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],(double)$_POST['valorDeposito']);
			(double)$_SESSION['CLI']['saldo'] = (double)$_SESSION['CLI']['saldo'] + (double)$_POST['valorDeposito'];
			
		}else{
			$userSalario = new UserSalario($_SESSION['CLI']['nome'],$_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],$_SESSION['CLI']['saldo']);
			$userSalario->Deposito($_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],(double)$_POST['valorDeposito']);
			(double)$_SESSION['CLI']['saldo'] = (double)$_SESSION['CLI']['saldo'] + (double)$_POST['valorDeposito'];
			
		}
		//------------------------------------------------------------------------------------------------------------------------

	//TRATAMENTO DE ERRO	
	}else if(isset($_POST['valorDeposito']) && $_POST['valorDeposito'] <= 0){
		echo '<div class="alert alert-danger"> <strong>Error!</strong> Valor incorrespondente! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button></div>';
	}



	$smarty->assign('DEPOSITO', 'Página de Contatos');
	$smarty->display('deposito.tpl');
}	






?>