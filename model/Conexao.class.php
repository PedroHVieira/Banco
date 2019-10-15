<?php 

//CLASSE RESPONSÁVEL PELAS FUNCIONALIDADES DO BANCO DE DADOS, COMO CONEXÃO E EXECUÇÃO DE COMANDOS SQL
Class Conexao extends Config{
	private $host, $user, $senha, $banco;

	protected $obj, $itens=array(), $prefix;

	function __construct(){
		$this->host = self::BD_HOST;
		$this->user = self::BD_USER;
		$this->senha = self::BD_SENHA;
		$this->banco = self::BD_BANCO;
		try {
			if($this->Conectar() == null){
				$this->Conectar();
			}
			

		} catch (Exception $e) {
			exit($e->getMessage().'<h2> Erro ao conectar com o banco de dados! </h2>');
		} 

	}

	//FAZ A CONEXÃO COM O BANCO DE DADOS
	private function Conectar(){
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
			);
		$link = new PDO("mysql:host={$this->host};dbname={$this->banco}" , 
			$this->user, $this->senha, $options);
		return $link;
	}

	//EXECUTA OS COMANDO SQL
	function ExecuteSQL($query, array $params = NULL){
		$this->obj = $this->Conectar()->prepare($query);

		if(is_array($params)){
			if(count ($params) > 0){
				foreach ($params as $key => $value) {
					$this->obj->bindvalue($key, $value);
				}
			}
		}

		return $this->obj->execute();
	}

	//LISTA E ASSOCIA OS DADOS ORIUNDO DA CONSULTA SQL
	function ListarDados(){
		return $this->obj->fetch(PDO::FETCH_ASSOC);
	}

	//CONTA QUANTOS DADOS FORAM ADQUIRIDOS PELA CONSULTA
	function TotalDados(){
		return $this->obj->rowCount();
	}

	//RETORNA OS ITENS DA RESPECTIVA CONSULTA SQL
	function GetItens(){
		return $this->itens;
	}

}

 ?>