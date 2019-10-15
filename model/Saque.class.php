<?php

class Saque extends Conexao{
	public $agencia, $conta;

	//CONSTRUTOR DA CLASSE CONEXÃO
    function __construct() {
        parent::__construct();
    }

    //FUNÇÃO PARA ARMAZENAR NA TABELA "SAQUE"
    function SaqueGravar($idUsuario, $valor){
        $retorno = FALSE;

            //CONSTRUÇÃO DA QUERY
            $query  = "INSERT INTO saque ";   
            $query .= "(idUsuario, valor, data)"; 
            $query .= " VALUES ";
            $query .= "(:idUsuario, :valor, :data)";

            //ADIÇÃO DOS PARÂMETRO
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
        $this->itens[1] = $lista['max(idSaque)'];                        
    }

    //RETORNAR O ID DE UM DETERMINADO DEPÓSITO
    function getIdSaque(){
        $query = "SELECT max(idSaque) FROM saque";

        $this->ExecuteSQL($query);

        $this->GetLista();
        return (int)$this->GetItens()[1];
    }

}

?>

