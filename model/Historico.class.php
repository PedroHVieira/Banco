<?php

class Historico extends Conexao{
	public $agencia, $conta;

	//CONSTRUTOR DA CLASSE CONEXÃO
    function __construct() {
        parent::__construct();
    }

    function GetLista(){

        $i = 1;
        while ($lista = $this->ListarDados()):
            
        $this->itens[$i] = array(
                'idUsuario'    => $lista['idUsuario'],
                'acao'  => $lista['acao'],
                'idAcao'  => $lista['idAcao'],
                'data'   => $lista['data']
            );        
        
            $i++;
        
        endwhile;
    }

    //FUNÇÃO PARA ARMAZENAR NA TABELA "HISTORICO"
    function HistoricoGravar($idUsuario, $acao, $idAcao){
        $retorno = FALSE;

            //CONSTRUÇÃO DA QUERY
            $query  = "INSERT INTO historico ";   
            $query .= "(idUsuario, acao, idAcao, data)"; 
            $query .= " VALUES ";
            $query .= "(:idUsuario, :acao, :idAcao, :data)";

            //ADIÇÃO DOS PARÂMETROS
            $params = array(
                ':idUsuario' => $idUsuario,
                ':acao' => $acao,
                ':idAcao' => $idAcao,
                ':data'=> Sistema::DataAtualUS()

            );

            //EXECUÇÃO DA QUERY
            $this->ExecuteSQL($query, $params); 

            $retorno = TRUE;
            
        return $retorno;
    }

    //FUNÇÃO PARA RETORNAR OS HISTÓRICOS DE UM DETERMINADO USUÁRIO, PARA UMA POSTERIOR LISTAGEM
    function GetHistoricoUsuario($idUsuario){
        $query = "SELECT * FROM historico";
        $query .= " WHERE idUsuario = $idUsuario";

        $this->ExecuteSQL($query);
        $this->GetLista();

    }

    //FUNÇÃO PARA RETORNAR OS HISTÓRICOS DE UM DETERMINADO USUÁRIO, MAS LEVANDO EM CONTA AS DISTÂNCIAS DAS DATAS, PARA UMA POSTERIOR LISTAGEM
    function GetHistoricoDatas($data_ini,$data_fim,$idUsuario){     
        // montando a SQL
        $query = "SELECT * FROM historico";        
        $query.= " WHERE idUsuario = :idUsuario AND  data between :data_ini AND :data_fim";
            
        // passando os parametros  
        $params = array(':data_ini'=>$data_ini, ':data_fim'=>$data_fim, ':idUsuario'=>$idUsuario);
        
        // executando a SQL
        $this->ExecuteSQL($query,$params);
        
        $this->GetLista();
    }
}

?>

