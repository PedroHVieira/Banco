<?php 

//CLASSE PARA FAZER AS TRANSIÇÕES AMIGAVEIS (URL AMIGÁVEL) DE TELA
Class Rotas{

	//VARIÁVEIS
	public static $pag;
	private static $pasta_controller = 'controller';
	private static $pasta_view = 'view';
	private static $pasta_ADM = 'adm';



	static function get_SiteHOME(){
		return Config::SITE_URL . '/' .Config::SITE_PASTA;
	}

	static function get_SiteRAIZ(){
		return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
	}

	static function get_SiteTEMA(){
		return  self::get_SiteHOME(). '/' .self::$pasta_view;
	}

	static function pag_Deposito(){
		return  self::get_SiteHOME(). '/deposito';
	}

	static function pag_Transferencia(){
		return  self::get_SiteHOME(). '/transferencia';
	}

	static function pag_Saque(){
		return self::get_SiteHOME(). '/saque';
	}

	static function pag_ClienteLogin(){
		return self::get_SiteHOME(). '/login';
	}	

	static function pag_ClienteCadastro(){
		return self::get_SiteHOME(). '/cadastro';
	}	

	static function pag_ClienteConta(){
		return self::get_SiteHOME(). '/minhaconta';
	}
	
	static function pag_Logoff(){
		return  self::get_SiteHOME(). '/logoff';
	}

		static function get_Pasta_Controller(){
		return self::$pasta_controller;
	}

	static function Redirecionar($tempo, $pagina){
		$url = '<meta http-equiv="refresh" content="'.$tempo.'; url='. $pagina .'">';
		echo $url;
	}

	//função para fazer a pegar os dados na url para fazer a transição de pgs amigavelmente 
	static function get_Pagina(){
		if(isset($_GET['pag'])){

			$pagina = $_GET['pag'];

			self::$pag = explode('/', $pagina);			
			

			$pagina = 'controller/' .self::$pag[0] . '.php';
			
			if(file_exists($pagina)){
				include $pagina;
			}else{
			include 'erro.php';
		}

		}else{
			include 'home.php';
		}
	}



}

 ?>