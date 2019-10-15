<!DOCTYPE html>

<html>
    <head>
        <title>{$TITULO_SITE}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="{$GET_TEMA}/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{$GET_TEMA}/tema/contatos/contatos.css" rel="stylesheet" type="text/css"/>
        <script src="{$GET_TEMA}/tema/js/jquery-2.2.1.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMA}/tema/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMA}/tema/contatos/contatos.js" type="text/javascript"></script>
        <!-- meu aquivo pessoal de CSS-->
        <link href="{$GET_TEMA}/tema/css/tema.css" rel="stylesheet" type="text/css"/>
     <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    </head>
    <body>
        
        <!-- começa  o container geral -->
        <div class="container-fluid">
            
            <!-- começa a div topo -->
            <div class="row" id="topo">
                 
                
                <div class="container">

                    <div class="col-md-6">
                         
                        <img src="{$GET_TEMA}/images/logo" alt=""> 

                    </div>

                    <div class="col-md-6 text-right">
                            <br>
                        {if $LOGADO == TRUE}
                            {$USER} 
                            <br>
                            <br>
                            AGÊNCIA: {$AGENCIA}
                            <br>
                            CONTA: {$CONTA}
                            <br>
                            SALDO: {$SALDO} 
                            <br>
                            <br>
                            
                        {/if}
                        
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
                                {if $LOGADO == TRUE}
                                    <li><a href="{$GET_SITE_HOME}"><i class="glyphicon glyphicon-home"></i> Histórico </a> </li>
                                    <li><a href="{$PAG_DEPOSITO}"><i class="glyphicon glyphicon-tag"></i> Depósito </a> </li>
                                    <li><a href="{$PAG_TRANSFERENCIA}"><i class="glyphicon glyphicon-user"></i> Transferência</a> </li>
                                    <li><a href="{$PAG_SAQUE}"><i class="glyphicon glyphicon-shopping-cart"></i> Saque </a> </li>

                                {/if}

                                {if $LOGADO == FALSE}
                                    <li><a href="{$PAG_CLIENTELOGIN}"><i class="glyphicon glyphicon-home"></i> Login </a> </li>
                                {/if}
       
                            </ul> 

                            {if $LOGADO == TRUE}
                            <form class="navbar-form navbar-right" role="search" method="POST">                                
                                <a href="{$PAG_LOGOFF}" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a> 
                            </form>
                            {/if}
                           
                         </div><!-- fim navbar collapse-->   


                    </div> <!--fim container navBar-->
                    
                </nav><!-- fim da navBar-->   
                
                
                
                
                
            </div> <!-- fim barra menu--> 
            
            <!-- começa DIV conteudo-->
            <div class="row" id="conteudo">
            
            <div class="container"> 
              
                <!-- coluna da esquerda -->
                <div class="col-md-2" id="lateral">
                {if $LOGADO == TRUE}    
                <div class="list-group">
                    
                    <span class="list-group-item active"> Ações</span>

                    <a href="{$PAG_DEPOSITO}" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span>Depósito</a>
                    <a href="{$PAG_TRANSFERENCIA}" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span>Transferência</a>
                    <a href="{$PAG_SAQUE}" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span>Saque</a>
                                                         
                </div><!--fim da list group-->              
                {/if}                 
                </div> <!-- finm coluna esquerda -->  
                
                <!-- coluna direita CONYEUDO CENTRAL -->
                <div class="col-md-10">
                   
                    <!-- fim do menu breadcrumb-->             
                    
                  {php}

                  Rotas::get_Pagina();
                  //var_dump(Rotas::$pag);
                  {/php}
                    
                </div>  <!--fim coluna direita-->  
            
            </div>   
                
                
            
                
                
                
            </div><!-- fim DIV conteudo-->
            
            <!-- começa div rodape -->
            <div class="row" id="rodape">
                <center>
                    <h4>{$TITULO_SITE}</h4>
                    <P>Todos os Direitos Reservados - Pedro Henrique Vieira Silva - Data Atual: {$DATA}</P>
                </center>
            
            </div><!-- fim div rodape-->
            
            
            
           </div> <!-- fim do container geral -->
        
        
        
        
    </body>
</html>
