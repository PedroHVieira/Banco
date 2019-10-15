<?php 

date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION)){
	session_start();	
}

require './lib/autoload.php';


$smarty = new Template();


//valores para o template
$smarty->assign('NOME', 'HUGO VASCONCELOS DE FREITAS');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_DEPOSITO', Rotas::pag_Deposito());
$smarty->assign('PAG_TRANSFERENCIA', Rotas::pag_Transferencia());
$smarty->assign('PAG_SAQUE', Rotas::pag_Saque());
$smarty->assign('PAG_CLIENTELOGIN', Rotas::pag_ClienteLogin());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('DATA', Sistema::DataAtualBr());
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
$smarty->assign('LOGADO', Login::Logado());

if(Login::Logado()){
	$smarty->assign('USER', $_SESSION['CLI']['nome']);
	$smarty->assign('AGENCIA', $_SESSION['CLI']['agencia']);
	$smarty->assign('CONTA', $_SESSION['CLI']['numeroConta']);
	$smarty->assign('SALDO', $_SESSION['CLI']['saldo']);
}

$smarty->display('index.tpl');

?>