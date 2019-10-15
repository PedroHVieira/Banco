<?php  

$smarty = new Template();

$login = new Login();

//VERIFICA SE TEM ALGUM DADO ORIUNDO DO FORMULÁRI DE LOGIN, PARA ASSIM FAZER O LOGIN PRORPIAMENTE DITO
if(isset($_POST['txt_agencia']) && isset($_POST['txt_conta']) && isset($_POST['txt_senha'])){
	
	// INICIALIZAÇÃO DAS VARIÁVEIS 
	$agencia = $_POST['txt_agencia'];
	$conta = $_POST['txt_conta'];
	$senha = $_POST['txt_senha'];

	//FUNÇÃO PARA FAZER O LOGIN PROPRIAMENTE DITO
	$login->GetLogin($agencia,$conta,$senha);
}

$smarty->assign('USER', '');

//FUNÇÃO PARA VERIFICAR SE O USUÁRIO JA ESTÁ LOGADO, E CASO ESTEJA REDIRECIONA O MESMO
if(Login::Logado()){

	$smarty->assign('USER', $_SESSION['CLI']['nome']);
	$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
	Login::MenuCliente();
}

$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_CADASTRO', Rotas::pag_ClienteCadastro());



$smarty->display('login.tpl');

?>