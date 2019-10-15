<?php


class User extends Conexao {    
    private $agencia, $numero, $saldo, $nome, $tipo, $senha;     

    //CONSTRUTOR DA CLASSE CONEXÃO
    function __construct() {
        parent::__construct();
    }

    function GetLista(){

        $lista = $this->ListarDados();
        $this->itens[1] = $lista['idUsuario'];                        
    }

    function GetLista2(){

        $lista = $this->ListarDados();
        $this->itens[1] = $lista['saldo'];                        
    }
    
    //FUNÇÃO PARA RETORNAR O ID DO USUÁRIO À PARTIR DA CONTA E NUMERO
    function getIdUser($agencia, $conta){
        $query = "SELECT idUsuario FROM usuario";
        $query .= " WHERE numeroConta = $conta AND agencia = $agencia";

        $this->ExecuteSQL($query);

        $this->GetLista();
        return (int)$this->GetItens()[1];
    }

    //FUNÇÃO PARA RECUPERAR O SALDO DE UM DETERMINADO USUÁRIO
    function getSaldoUser($idUsuario){
        $query = "SELECT saldo FROM usuario";
        $query .= " WHERE idUsuario = $idUsuario";

        $this->ExecuteSQL($query);

        $this->GetLista2();
        return (int)$this->GetItens()[1];
    }

    //FUNÇÃO PARA ATULIZAR O SALDO DE UM DETERMINADO USUARIO, DECORRENTE DE ALGUMA OPERAÇÃO BANCÁRIA
    function AtualizarSaldo($valor, $idUsuario){
        $NovoSaldo = $_SESSION['CLI']['saldo'] + $valor;
        
        $query = "UPDATE usuario SET saldo = $NovoSaldo ";
        $query .= " WHERE idUsuario = $idUsuario";

        if($this->ExecuteSQL($query)){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    //FUNÇÃO PARA ATUALIZAR O SALDO DO USUÁRIO DESTINO DE UMA TRANSFERÊNCIA
    function AtualizarSaldo2($valor, $idUsuario){
        
        $NovoSaldo = $this->getSaldoUser($idUsuario) + $valor;

        $query = "UPDATE usuario SET saldo = $NovoSaldo ";
        $query .= " WHERE idUsuario = $idUsuario";

        if($this->ExecuteSQL($query)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    ///  SÃO OS GETTERS E SETTERS        
    function getAgencia() {
        return $this->agencia;
    }

    function getNome() {
        return $this->nome;
    }

    function getNumero() {
        return $this->numero;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getSenha() {
        return $this->senha;
    }

    function setAgencia($agencia) {
        $this->agencia = $agencia;
    }

    function setNumero($numero) {

        $this->numero = $numero;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    } 

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }   

    function setSenha($senha) {
        $this->senha = $senha;
    }
    
    
}

?>