<?php
/* Smarty version 3.1.33, created on 2019-06-04 18:50:05
  from 'D:\xampp\htdocs\Loja\view\clientes_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf6a13d2a8cf4_26338268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c558b5686c4fe4392cdf69fdab948ee767e3123' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Loja\\view\\clientes_senha.tpl',
      1 => 1559667003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf6a13d2a8cf4_26338268 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center">Alteração de senha de acesso</h3>


<form name="alterarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite sua senha atual</label>
          
            <input type="password" name="cli_senha_atual" id="cli_senha_atual" class="form-control" required>
          
           
            
            <label>Digite sua nova senha</label>
          
            <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
            <br>
           
            
            
            <button type="submit" class="btn btn-warning btn-block"> Alterar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  

    
    
    
</form>
<?php }
}
