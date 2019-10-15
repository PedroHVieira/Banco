<?php
/* Smarty version 3.1.33, created on 2019-10-14 16:53:30
  from 'D:\xampp\htdocs\Banco\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da4d23aa5e517_07747168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e18b600efeb019f1ce0520b8a77256a923439122' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Banco\\view\\login.tpl',
      1 => 1571082809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da4d23aa5e517_07747168 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == TRUE) {?>



<?php } else { ?>

<section class="row" id="fazerlogin">

    <form name="cliente_login" method="post" action="" >
    
        <div class="col-md-4 text-center">
                        
                
        </div>
     
        <!---  aqui estão os campos -->
        <div class="col-md-4">

     
            <div class="form-group"> 
                <label></i> Agência: </label>
                <input type="text"  class="form-control " name="txt_agencia" value="" placeholder="Digite sua Agência" required autocomplete="off">        

            </div>

            <div class="form-group"> 
                <label></i> Conta: </label>
                <input type="text"  class="form-control " name="txt_conta" value="" placeholder="Digite sua Conta" required autocomplete="off">        

            </div>


            <div class="form-group"> 
                 <label> Senha: </label>
                 <input type="password"  class="form-control " name="txt_senha" value="" placeholder="Digite sua senha" required>        
           
            </div>


            <div class="form-group"> 
                
                <button class="btn btn-geral btn-block btn-lg"><i class="glyphicon glyphicon-log-in"></i> Entrar </button>
          
                
                
                
            </div>
            <div class="form-group" style = "text-align: center"> 
                
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
" class="btn btn-default "><i class="glyphicon glyphicon-pencil"></i> Me Cadastrar</a>         
                
                
            </div>

            
        </div><!-- fim dos campos -->


        <div class="col-md-4 text-center"> 
        
      
        </div>
    
    </form>
    
    
</section>

<?php }
}
}
