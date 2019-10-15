<?php
/* Smarty version 3.1.33, created on 2019-10-14 20:58:03
  from 'D:\xampp\htdocs\Banco\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da50b8be6ff70_60550813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a067b6399819e0e9eced83cb497785f7979f558e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Banco\\view\\index.tpl',
      1 => 1571097483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da50b8be6ff70_60550813 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/contatos/contatos.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-2.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/contatos/contatos.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- meu aquivo pessoal de CSS-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/tema.css" rel="stylesheet" type="text/css"/>
     <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    
    </head>
    <body>
        
        <!-- começa  o container geral -->
        <div class="container-fluid">
            
            <!-- começa a div topo -->
            <div class="row" id="topo">
                 
                
                <div class="container">

                    <div class="col-md-6">
                         
                        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/logo" alt=""> 

                    </div>

                    <div class="col-md-6 text-right">
                            <br>
                        <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == TRUE) {?>
                            <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 
                            <br>
                            <br>
                            AGÊNCIA: <?php echo $_smarty_tpl->tpl_vars['AGENCIA']->value;?>

                            <br>
                            CONTA: <?php echo $_smarty_tpl->tpl_vars['CONTA']->value;?>

                            <br>
                            SALDO: <?php echo $_smarty_tpl->tpl_vars['SALDO']->value;?>
 
                            <br>
                            <br>
                            
                        <?php }?>
                        
                    </div>
                       
                </div>                 
            
            </div><!-- fim da div topo -->
            
            <!-- começa a barra MENU-->
            <div class="row" id="barra-menu">
                
                <!--começa navBAR-->
                <nav class="navbar navbar-inverse">
                    
                    <!-- container navBAr-->
                    <div class="container">
                        <!-- header da navbar-->
                        <div class="navbar-header">
                           <!-- botao que mostra e esconde a navbar--> 
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>
                        
                        </div><!--fim header navbar-->  
                        
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="nav navbar-nav">
                                <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == TRUE) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
"><i class="glyphicon glyphicon-home"></i> Histórico </a> </li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DEPOSITO']->value;?>
"><i class="glyphicon glyphicon-tag"></i> Depósito </a> </li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_TRANSFERENCIA']->value;?>
"><i class="glyphicon glyphicon-user"></i> Transferência</a> </li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SAQUE']->value;?>
"><i class="glyphicon glyphicon-shopping-cart"></i> Saque </a> </li>

                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == FALSE) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTELOGIN']->value;?>
"><i class="glyphicon glyphicon-home"></i> Login </a> </li>
                                <?php }?>
       
                            </ul> 

                            <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == TRUE) {?>
                            <form class="navbar-form navbar-right" role="search" method="POST">                                
                                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a> 
                            </form>
                            <?php }?>
                           
                         </div><!-- fim navbar collapse-->   


                    </div> <!--fim container navBar-->
                    
                </nav><!-- fim da navBar-->   
                
                
                
                
                
            </div> <!-- fim barra menu--> 
            
            <!-- começa DIV conteudo-->
            <div class="row" id="conteudo">
            
            <div class="container"> 
              
                <!-- coluna da esquerda -->
                <div class="col-md-2" id="lateral">
                <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == TRUE) {?>    
                <div class="list-group">
                    
                    <span class="list-group-item active"> Ações</span>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DEPOSITO']->value;?>
" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span>Depósito</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_TRANSFERENCIA']->value;?>
" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span>Transferência</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SAQUE']->value;?>
" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span>Saque</a>
                                                         
                </div><!--fim da list group-->              
                <?php }?>                 
                </div> <!-- finm coluna esquerda -->  
                
                <!-- coluna direita CONYEUDO CENTRAL -->
                <div class="col-md-10">
                   
                    <!-- fim do menu breadcrumb-->             
                    
                  <?php 

                  Rotas::get_Pagina();
                  //var_dump(Rotas::$pag);
                  ?>
                    
                </div>  <!--fim coluna direita-->  
            
            </div>   
                
                
            
                
                
                
            </div><!-- fim DIV conteudo-->
            
            <!-- começa div rodape -->
            <div class="row" id="rodape">
                <center>
                    <h4><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</h4>
                    <P>Todos os Direitos Reservados - Pedro Henrique Vieira Silva - Data Atual: <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
</P>
                </center>
            
            </div><!-- fim div rodape-->
            
            
            
           </div> <!-- fim do container geral -->
        
        
        
        
    </body>
</html>
<?php }
}
