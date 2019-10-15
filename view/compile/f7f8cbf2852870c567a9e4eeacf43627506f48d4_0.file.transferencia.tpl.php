<?php
/* Smarty version 3.1.33, created on 2019-10-14 21:46:12
  from 'D:\xampp\htdocs\Banco\view\transferencia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da516d4010225_92379241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7f8cbf2852870c567a9e4eeacf43627506f48d4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Banco\\view\\transferencia.tpl',
      1 => 1571100363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da516d4010225_92379241 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-header">
            <div class="container-fluid" style="text-align: left;">
                <h1>
                    Preencha os campos para realizar a transferência.
                </h1>
            </div>
        </div>

<div class="container-fluid">
 <form id="deposito" name="deposito" method="POST" class="form-vertical  js-form-loading" action=""
                onsubmit="">
<div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label for="exampleFormControlSelect1" class="col-sm-6 col-form-label"> <h4>Valor: </h4></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="R$ 00,00" name = "valorTransferencia" required>
                            </div>
                        </div>
                    </div>
	</div>  
	<br>  
	<div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="exampleFormControlSelect1" class="col-sm-6 col-form-label"> <h4> Agencia Destino: </h4></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Insira a agencia de destino..." name = "agencia_dest" required>
                            </div>
                        </div>
                    </div>
	</div>  
	<br>  
	<div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="exampleFormControlSelect1" class="col-sm-6 col-form-label"> <h4> Conta Destino: </h4></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Insira a conta de destino..." name = "conta_dest" required>
                            </div>
                        </div>
                    </div>
	</div>  
	<br>  

	<div class="container-fluid col-md-7" style="text-align: center;">
                    <div class="form-group">
                        <button class="btn  btn-primary" type="submit" id="calcular">Transferir</button>
                    </div>
     </div>                
	</form>
</div><?php }
}
