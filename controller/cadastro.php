<?php  

$smarty = new Template();

//verifica se os campos foram preenchidos, oriundo do arquivo cadastro.tpl  
if(isset($_POST['nome']) and isset($_POST['agencia']) and isset($_POST['conta']) and isset($_POST['tipo']) and isset($_POST['senha'])){
	
    //variáveis para armazenar os valors dos comapos
	$nome = $_POST['nome'];
	$agencia = $_POST['agencia'];
    $conta = $_POST['conta'];
    $tipo        = $_POST['tipo'];
    $senha       = $_POST['senha'];

    //inicialização do respectivo usuário, de acordo com o tipo dele
    if($tipo == "Premium"){
        $user = new UserPremium($nome,$agencia,$conta,0);
        $user->UsuarioGravar($senha );
    }else if($tipo == "Básico"){
        $user = new UserBasico($nome,$agencia,$conta,0);
        $user->UsuarioGravar($senha );
    }else{
        $user = new UserSalario($nome,$agencia,$conta,0);
        $user->UsuarioGravar($senha );
    }


    echo '<div class="alert alert-success"> <strong>Success!</strong> Cadastro Efetuado com Sucesso! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>';
    //função para redirecionar páginas    
    Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());

}else{
	$smarty->display('cadastro.tpl');
}

?>