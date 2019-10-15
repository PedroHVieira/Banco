<?php

class Transferencia extends Conexao{
	public $agencia, $conta;

	//CONSTRUTOR DA CLASSE CONEXÃO
    function __construct() {
        parent::__construct();
    }

    //FUNÇÃO PARA ARMAZENAR NA TABELA "TRANSFERENCIA"
    function TransferenciaGravar($idUsuario, $valor, $banco_dest, $agencia_dest, $numero_dest){
        $retorno = FALSE;

            //CONSTRUÇÃO DA QUERY
            $query  = "INSERT INTO transferencia ";   
            $query .= "(idUsuario, valor, data, banco_dest, agencia_dest, numero_dest)"; 
            $query .= " VALUES ";
            $query .= "(:idUsuario, :valor, :data, :banco_dest, :agencia_dest, :numero_dest)";

            //ADIÇÃO DOS PARÂMETROS 
            $params = array(
                ':idUsuario' => $idUsuario,
                ':valor' => $valor,
                ':data'=> Sistema::DataAtualUS(),
                ':banco_dest' => $banco_dest,
                ':agencia_dest' => $agencia_dest,
                ':numero_dest'=> $numero_dest

            );

            //EXECUÇÃO DA QUERY
            $this->ExecuteSQL($query, $params); 

            $retorno = TRUE;

        return $retorno;
    }

    //LISTAR OS DADOS DA RESPECTIVA CONSULTA
    function GetLista(){

        $lista = $this->ListarDados();
        $this->itens[1] = $lista['max(idTransferencia)'];                        
    }

    //RETORNAR O ID DE UMA DETERMINADA TRANSFERENCIA
    function getIdTransferencia(){
        $query = "SELECT max(idTransferencia) FROM transferencia";

        $this->ExecuteSQL($query);

        $this->GetLista();
        return (int)$this->GetItens()[1];
    }
}

?>

