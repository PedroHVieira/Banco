<?php
/* Smarty version 3.1.33, created on 2019-06-04 18:18:37
  from 'D:\xampp\htdocs\Loja\view\clientes_recovery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf699dda02b12_03396215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c474c6191e68d935c9b99344669e862fac586e26' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Loja\\view\\clientes_recovery.tpl',
      1 => 1559665116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf699dda02b12_03396215 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Digite seu email cadatrado para receber uma nova senha </h4>
<hr>

<form name="recuperarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite seu email cadastrado</label>
          
            <input type="email" name="cli_email" id="cli_email" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-warning btn-block"> Recuperar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  
    
</form>
<?php }
}
