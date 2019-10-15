<?php
/* Smarty version 3.1.33, created on 2019-10-14 16:21:56
  from 'D:\xampp\htdocs\Banco\view\clientes_recovery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da4cad4e87e59_07680622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f11fa1ee6568266609a30a9d8663564d35408fa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Banco\\view\\clientes_recovery.tpl',
      1 => 1559665116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da4cad4e87e59_07680622 (Smarty_Internal_Template $_smarty_tpl) {
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
