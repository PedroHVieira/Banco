<?php
/* Smarty version 3.1.33, created on 2019-10-14 20:55:41
  from 'D:\xampp\htdocs\Banco\view\menu_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da50afd116972_96539150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f24f1efe4fe69a64d4d15b745893f901e06aae4c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Banco\\view\\menu_cliente.tpl',
      1 => 1571097340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da50afd116972_96539150 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center"> Histórico </h4>
<hr>

<section class="row" id="pesquisa">
    <div class="espacamento">
    <!---  faz  uma busca entre datas --->
    <label class="espacamento"> Buscar entre datas</label>
    <form name="buscardata" method="post" action="">
     
        <div class="col-md-3">            
            <input type="date" name="data_ini" class="form-control" required>

        </div> 

        <div class="col-md-3"> 

            <input type="date" name="data_fim" class="form-control" required>

        </div> 


        <div class="col-md-3"> 

            <button class="btn btn-primary"> Buscar </button>

        </div> 


        <div class="col-md-3">    

        </div> 


    </form>

    </div>

</section>

<br>



<hr>

<section class="row" id="pedidos">
    
      
    <center>
    <table class="table table-bordered  " style="width: 90%">
        <thead class="thead-dark">
        <tr class="text-success bg-primary">
            <td>idUsuario</td>
            <td>Ação</td>
            <td>idAção</td>
            <td>Data</td>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EXTRATO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        <tr>
            
            <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['idUsuario'];?>
</td>
            <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['acao'];?>
</td>
            <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['idAcao'];?>
</td>
            <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['data'];?>
</td>

        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>    
    </table>
      </center>
    
    
</section>
<!--  paginação inferior   -->  
<section id="pagincao" class="row">
<center>
</center>
</section>
      <?php }
}
