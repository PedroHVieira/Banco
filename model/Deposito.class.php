<?php

class Deposito extends Conexao{
	public $agencia, $conta;

	//CONSTRUTOR DA CLASSE CONEXÃO
    function __construct() {
        parent::__construct();
    }

    //FUNÇÃO PARA ARMAZENAR NA TABELA "DEPOSITO"
    function DepositoGravar($idUsuario, $valor){
        $retorno = FALSE;

            //CONSTRUÇÃO DA QUERY
            $query  = "INSERT INTO deposito ";   
            $query .= "(idUsuario, valor, data)"; 
            $query .= " VALUES ";
            $query .= "(:idUsuario, :valor, :data)";

            //ADIÇÃO DOS PARÂMETROS 
            $params = array(
                ':idUsuario' => $idUsuario,
                ':valor' => $valor,
                ':data'=> Sistema::DataAtualUS()

            );

            //EXECUÇÃO DA QUERY
            $this->ExecuteSQL($query, $params); 

            $retorno = TRUE;

        return $retorno;
    }

    //LISTAR OS DADOS DA RESPECTIVA CONSULTA
    function GetLista(){

        $lista = $this->ListarDados();
        $this->itens[1] = $lista['max(idDeposito)'];                        
    }

    //RETORNAR O ID DE UM DETERMINADO DEPÓSITO
    function getIdDeposito(){
        $query = "SELECT max(idDeposito) FROM deposito";

        $this->ExecuteSQL($query);

        $this->GetLista();
        return (int)$this->GetItens()[1];
    }
}

?>

