<?php
/* Smarty version 3.1.33, created on 2019-06-17 15:13:14
  from 'D:\xampp\htdocs\Loja\view\pedido_retorno_erro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d07d83a294054_58565443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9266ce7b12e14119f2c01b3f0bb0ab4c8bc77d0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Loja\\view\\pedido_retorno_erro.tpl',
      1 => 1560790942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d07d83a294054_58565443 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center text-danger"> Ocorreu um problema no pagamento, ou foi cancelado</h3>
<hr>
<section  class="row">
    
    <div class="col-md-3"></div>
   
    
    <div class="col-md-6">
        
          <p> Caso teve algum problema entre em contato conosco, informando <br>
        o código de referência:<b> <?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
 </b>
        </p> 
        
         <p> Ou pode tentar novamente o pagamento na seção "Pedidos" clicando em "Detalhes",<br>
         verá seus itens comprados e o abaixo o botão "Completar Pagamento Agora"
        </p>  
        
         <p> Para ir a tela do pedido e efetivar o pagamento, clique no botão.</p>  
         <p>
         <form name="pagamento" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
             <input type="hidden" name="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
">  
             <button class="btn btn-success btn-block btn-lg"> Fazer Pagamento Agora</button>
                 
             
             
         </form>        
             
             
         </p>
        
        
        
    </div>
    <div class="col-md-3"></div>
  
</section><?php }
}
