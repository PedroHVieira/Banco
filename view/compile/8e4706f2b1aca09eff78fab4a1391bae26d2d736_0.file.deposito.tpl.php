<?php
/* Smarty version 3.1.33, created on 2019-10-14 21:46:07
  from 'D:\xampp\htdocs\Banco\view\deposito.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da516cfb3bda5_54872498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e4706f2b1aca09eff78fab4a1391bae26d2d736' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Banco\\view\\deposito.tpl',
      1 => 1571100351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da516cfb3bda5_54872498 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-header">
            <div class="container-fluid" style="text-align: left;">
                <h1>
                    Insira um valor para ser depositado em sua conta.
                </h1>
            </div>
        </div>

<div class="container-fluid">
 <form id="deposito" name="deposito" method="POST" class="form-vertical  js-form-loading" action=""
                onsubmit="">
<div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label"> <h4>Valor: </h4></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="R$ 00,00" name = "valorDeposito" required>
                            </div>
                        </div>
                    </div>
	</div>  
	<br>  

	<div class="container-fluid col-md-7" style="text-align: center;">
                    <div class="form-group">
                        <button class="btn  btn-primary" type="submit" id="calcular">Depositar</button>
                    </div>
     </div>                
	</form>
</div><?php }
}
