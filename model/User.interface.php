<?php

//CLASSE DE INTERFACE, PARA OBRIGAR A IMPLEMETAÇÃO DAQUELES QUE À HERDA DOS SEGUINTE MÉTODOS
interface UserInterface{

	function UsuarioGravar($senha);//FUNÇÃO PARA ARMAZENAR UM USUÁRIO
	function Deposito($Agencia, $Numero, $Valor);//FUNÇÃO PARA FAZER A OPERAÇÃO BANCÁRIA DE DEPÓSITO
	function Transferencia($Agencia, $Numero, $Valor, $Banco, $Agencia_dest, $Numero_dest);//FUNÇÃO PARA FAZER A OPERAÇÃO BANCÁRIA DE TRANSFERÊNCIA
	function Saque($Agencia, $Numero, $Valor);//FUNÇÃO PARA FAZER A OPREÇÃO BANCÁRIA DE SAQUE

}


?>