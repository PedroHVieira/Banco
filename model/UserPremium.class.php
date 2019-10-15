<?php

class UserPremium extends User implements UserInterface{   

	//CONSTRUTOR DA CLASSE USER
    function __construct($nome, $agencia, $numero, $valor){
        parent::__construct();
        parent::setAgencia($agencia);
        parent::setNumero($numero);
        parent::setSaldo($valor);
        parent::setTipo("Premium");
        parent::setNome($nome);

    }

    //FUNÇÃO PARA ARMAZENAR UM USUÁRIO
    function UsuarioGravar($senha){
        $retorno = FALSE;

        $query  = "INSERT INTO usuario ";   
        $query .= "(nome, agencia, numeroConta, saldo, tipo, senha)"; 
        $query .= " VALUES ";
        $query .= "(:nome, :agencia, :numero, :valor, :tipo, :senha)";

        $params = array(
            ':nome' => parent::getNome(),
            ':agencia' => parent::getAgencia(),
            ':numero'=> parent::getNumero(),
            ':valor' => parent::getSaldo(),
            ':tipo' => parent::getTipo(),
            ':senha' => $senha

        );


        $this->ExecuteSQL($query, $params);
            
        $retorno = TRUE;

        return $retorno;
        echo $retorno;
    }

    //FUNÇÃO PARA FAZER A OPERAÇÃO BANCÁRIA DE DEPÓSITO
    function Deposito($Agencia, $Numero, $Valor){

        //VERIFICAÇÃO PARA GARANTIR QUE O USUÁRIO DESTINO DO DEPÓSITO EXISTE
        $idUsuario = parent::getIdUser($Agencia, $Numero);
        if($idUsuario != 0){
            $historico = new Historico();
            $deposito = new Deposito();

            $deposito->DepositoGravar($idUsuario, (double)$Valor+1);
            $historico->HistoricoGravar($idUsuario,"Deposito",$deposito->getIdDeposito());

            parent::AtualizarSaldo($Valor+1,$idUsuario);
            Rotas::Redirecionar(0,'deposito');
        }

    }

    //FUNÇÃO PARA FAZER A OPERAÇÃO BANCÁRIA DE TRANSFERÊNCIA
    function Transferencia($Agencia, $Numero, $Valor, $Banco, $Agencia_dest, $Numero_dest){
        $idUsuario = parent::getIdUser($Agencia, $Numero);
        $idUsuario2 = parent::getIdUser($Agencia_dest, $Numero_dest);
        
        $saldo = parent::getSaldoUser($idUsuario) - $Valor; 

        //VERIFICAÇÕES PARA EVITER ERROS COMO SALDO INSUFICIENTE, CONTA INEXISTENTE OU DEPOSITAR PARA A PRÓPRIA CONTA
        if(($idUsuario != 0)  && ($idUsuario2 != 0) && ($saldo >= 0) && ($Agencia != $Agencia_dest) && ($Numero != $Numero_dest)){
            $historico = new Historico();
            $transferencia = new Transferencia();

            $transferencia->TransferenciaGravar($idUsuario, $Valor,$Banco,$Agencia_dest,$Numero_dest);
            $historico->HistoricoGravar($idUsuario,"Transferencia",$transferencia->getIdTransferencia());

            parent::AtualizarSaldo($Valor*(-1),$idUsuario);
            parent::AtualizarSaldo2($Valor,$idUsuario2);
            (double)$_SESSION['CLI']['saldo'] = (double)$_SESSION['CLI']['saldo'] - $Valor;

            Rotas::Redirecionar(0,'transferencia');

        }else if($idUsuario == 0){
            echo '<div class="alert alert-danger"> <strong>Error!</strong> conta inexistente! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>';
        }else if($idUsuario2 == 0){
            echo '<div class="alert alert-danger"> <strong>Error!</strong> conta do destinatário inexistente! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>';
        }else if($Agencia == $Agencia_dest || $Agencia == $Agencia_dest){
            echo '<div class="alert alert-danger"> <strong>Error!</strong> Não é possível efetuar uma transferência para si mesmo! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>';
        }else{
            echo '<div class="alert alert-danger"> <strong>Error!</strong> Saldo Inuficiente! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>';
        }
    }

    //FUNÇÃO PARA FAZER A OPREÇÃO BANCÁRIA DE SAQUE
    function Saque($Agencia, $Numero, $Valor){
        $idUsuario = parent::getIdUser($Agencia, $Numero);
        $saldo = parent::getSaldoUser($idUsuario) - $Valor;
        
        //VERIFICAÇÃO PARA EVITAR O ERRO DE SALDO INSUFICIENTE PARA O SAQUE
        if($idUsuario != 0 && $saldo >= 0){
            $historico = new Historico();
            $saque = new Saque();

            $saque->SaqueGravar($idUsuario, $Valor);
            $historico->HistoricoGravar($idUsuario,"Saque",$saque->getIdSaque());

            parent::AtualizarSaldo($Valor*(-1),$idUsuario);
            (double)$_SESSION['CLI']['saldo'] = (double)$_SESSION['CLI']['saldo'] - $Valor;

            Rotas::Redirecionar(0,'saque');

        }else{
            echo '<div class="alert alert-danger"> <strong>Error!</strong> Saldo Inuficiente! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>';
        }

    }


}

?>