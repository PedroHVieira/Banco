<?php

//verificação para ver se o usuário está logado (utilziando $_SESSION)
if(!Login::Logado()){
	Login::AcessoNegado();
	Rotas::Redirecionar(1, Rotas::pag_ClienteLogin());
}else{
	$smarty = new Template();

	//verificação para ver se tem algum dado oriundo do template de deposito
	if(isset($_POST['valorTransferencia']) &&  isset($_POST['agencia_dest']) && isset($_POST['conta_dest']) && $_POST['valorTransferencia'] > 0){

		//------------ BLOCO PARA VERFICAÇÃO DE QUAL USUÁRIO É, PARA CHAMAR A RESPECTIVA FUNÇÃO -------------------------------
		if($_SESSION['CLI']['tipo'] == "Premium"){
			$userPremium = new UserPremium($_SESSION['CLI']['nome'],$_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],$_SESSION['CLI']['saldo']);
			$userPremium->Transferencia($_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],(double)$_POST['valorTransferencia'],"NoCartorioBanco",$_POST['agencia_dest'],$_POST['conta_dest']);
			

		}else if($_SESSION['CLI']['tipo'] == "basico"){
			$userBasico = new UserBasico($_SESSION['CLI']['nome'],$_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],$_SESSION['CLI']['saldo']);
			$userBasico->Transferencia($_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],(double)$_POST['valorTransferencia'],"NoCartorioBanco",$_POST['agencia_dest'],$_POST['conta_dest']);
			
		}else{
			$userSalario = new UserSalario($_SESSION['CLI']['nome'],$_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],$_SESSION['CLI']['saldo']);
			$userSalario->Transferencia($_SESSION['CLI']['agencia'],$_SESSION['CLI']['numeroConta'],(double)$_POST['valorTransferencia'],"NoCartorioBanco",$_POST['agencia_dest'],$_POST['conta_dest']);
			
		}
		//------------------------------------------------------------------------------------------------------------------------
		
	//TRATAMENTO DE ERRO
	}else if(isset($_POST['valorTransferencia']) &&  isset($_POST['agencia_dest']) && isset($_POST['conta_dest']) && $_POST['valorTransferencia'] <= 0){
		echo '<div class="alert alert-danger"> <strong>Error!</strong> Valor incorrespondente! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button></div>';
	}


	$smarty->display('transferencia.tpl');
}	






?>