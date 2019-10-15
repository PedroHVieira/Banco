<?php
/* Smarty version 3.1.33, created on 2019-10-14 21:46:47
  from 'D:\xampp\htdocs\Banco\view\saque.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da516f7c2acb6_85102777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c71db8dabafd48f4e2c2e9531da5c3b0f926ad9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Banco\\view\\saque.tpl',
      1 => 1571100402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da516f7c2acb6_85102777 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-header">
            <div class="container-fluid" style="text-align: left;">
                <h1>
                    Insira um valor para ser retirado de sua conta.
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
                                    aria-describedby="emailHelp" placeholder="R$ 00,00" name = "valorSaque" required>
                            </div>
                        </div>
                    </div>
	</div>  
	<br>  

	<div class="container-fluid col-md-7" style="text-align: center;">
                    <div class="form-group">
                        <button class="btn  btn-primary" type="submit" id="calcular">Retirar</button>
                    </div>
     </div>                
	</form>
</div><?php }
}
