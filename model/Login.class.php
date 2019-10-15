<?php  

class Login extends Conexao{
	private $agencia, $conta, $senha;

	function __construct(){
		parent::__construct();
	}

	//FUNÇÃO PRA FAZER O LOGIN PROPRIAMENTE DITO
	function GetLogin($agencia, $conta, $senha){
		
		//INICIALIZAÇAO DAS VARIÁVEIS
		$this->setAgencia($agencia);
		$this->setConta($conta);
		$this->setSenha($senha);

		//CONSTRUÇÃO DA QUERY
		$query = "SELECT * FROM usuario WHERE agencia = :agencia AND numeroConta = :conta AND senha = :senha";

		//ADIÇÃO DOS PARÂMETROS
		$params = array(

			':agencia' => $this->getAgencia(),
			':conta' => $this->getConta(),
			':senha' => $this->getSenha()
		);

		//EXECUÇÃO DA QUERY
		$this->ExecuteSQL($query, $params);

		//INICIALIZAÇÃO DA SESSION
		if($this->TotalDados() > 0){
			$lista = $this->ListarDados();

			$_SESSION['CLI']['idUsuario']        =  $lista['idUsuario'];
			$_SESSION['CLI']['nome']      =  $lista['nome'];
            $_SESSION['CLI']['agencia'] =  $lista['agencia'];
            $_SESSION['CLI']['numeroConta']  =  $lista['numeroConta'];
            $_SESSION['CLI']['saldo']    =  $lista['saldo'];
            $_SESSION['CLI']['tipo']    =  $lista['tipo'];
            $_SESSION['CLI']['senha']    =  $lista['senha'];
			
			Rotas::Redirecionar(0, Rotas::get_SiteHOME());


		}else{
			echo '<script> alert("Dados Incorretos"); </script>';
		}

	}

	//FUNÇÃO PARA QUANDO ACONTECE ALGUM TIPO DE ACESSO NEGADO
	static function AcessoNegado(){
		echo '<div class="alert alert-danger"> Acesso Negado, faça Login </div> <a href="'.Rotas::pag_ClienteLogin().'" class = "btn btn-danger"> Login </a>';
	}

	//FUNÇÃO PARA SABER SE ALGUM USUÁRIO ESTÁ LOGADO OU NÃO
	static function Logado(){
		if(isset($_SESSION['CLI']['agencia']) && isset($_SESSION['CLI']['numeroConta']) && isset($_SESSION['CLI']['senha'])){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	//FUNÇÃO PARA FAZER O LOGOFF, "FINALIZANDO" A SESSION
	static function Logoff(){
		unset($_SESSION['CLI']);
		echo '<h4 class = "alert alert-success"> Saindo... </h4>';
		Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());
	}

	//FUNÇÃO PARA TRANSITAR PARA O MENU DO CLIENTE, SENDO UTILIZADO NESSE MODELO COMO O HISTORICO DO USUÁRIO
	static function MenuCliente(){
        
     // verifo se não esta logado 
    if(!self::Logado()):

                self::AcessoNegado();
                Rotas::Redirecionar(1, Rotas::pag_ClienteLogin());
                              
                // caso nao redirecione  saiu  do bloco
                exit();
                            
            // caso esteja mostra a tela minha conta 
        else:
        	$historico = new Historico();

        	//VERIFICAÇÃO PARA VER SE TEM ALGUM DADO DE ENTRADA NOS FORMULÁRIO DE DATAS
        	if(isset($_POST['data_ini']) && isset($_POST['data_fim'])){
        		
        		$historico->GetHistoricoDatas($_POST['data_ini'],$_POST['data_fim'],$_SESSION['CLI']['idUsuario']);	

        	//VERIFICAÇÃO PARA CASO N TENHA FORMULÁRIO DE ENTRADA NOS FORMULÁRIO DE DATAS	
        	}else{
        		$historico->GetHistoricoUsuario($_SESSION['CLI']['idUsuario']);
        	}
                
	        $smarty = new Template();
	      
	        $smarty->assign('EXTRATO', $historico->GetItens());       
	        $smarty->assign('USER', $_SESSION['CLI']['nome']);
	        
	        $smarty->display('menu_cliente.tpl');
        	
        
    endif;
    }

    //------- SETTERS ---------------------
	private function setAgencia($agencia){
		$this->agencia = $agencia;
	}

	private function setConta($conta){
		$this->conta = $conta;
	}

	private function setSenha($senha){
		$this->senha = $senha;
	}
	//----------------------------------


	//------------ GETTERS --------------
	function getAgencia(){
		return $this->agencia;
	}

	function getConta(){
		return $this->conta;
	}

	function getSenha(){
		return $this->senha;
	}
	//---------------------------------
}


?>