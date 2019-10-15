<?php
/* Smarty version 3.1.33, created on 2019-06-04 17:18:18
  from 'D:\xampp\htdocs\Loja\view\email_cliente_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf68bba885574_11160076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00f135c4e085ab65fdf54c4ee5b7bbb7636416e7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Loja\\view\\email_cliente_cadastro.tpl',
      1 => 1559661241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf68bba885574_11160076 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 , obrigado por se cadastrar em <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h3>

<p> Cadastro efetuado com sucesso,  para fazer  o login use seu email cadastrado ( <?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
 )
<br>
com a sua senha, sua senha neste momento é ( <?php echo $_smarty_tpl->tpl_vars['SENHA']->value;?>
 )

</p>
<p>
    Para acessar o site e sua conta basta usar este endereço: <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a>  
</p><?php }
}
