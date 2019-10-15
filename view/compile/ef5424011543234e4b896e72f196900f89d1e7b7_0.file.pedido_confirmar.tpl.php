<?php
/* Smarty version 3.1.33, created on 2019-05-28 21:08:49
  from 'D:\xampp\htdocs\Loja\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ced874123e185_23361682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef5424011543234e4b896e72f196900f89d1e7b7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Loja\\view\\pedido_confirmar.tpl',
      1 => 1559069891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced874123e185_23361682 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Confirmar Pedido</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">
    
    <div class="col-md-12" align="right">
         <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-info" title="">Voltar para Carrinho</a> 
    </div>
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-right">
         
    </div>
    
</section>
    <br>

<!--  table listagem de itens -->
<section class="row ">
   
    <center>
    <table class="table table-bordered" style="width: 95%">
       
       <!--
        <tr>
            <td colspan=6 align="right"><a href="" class="btn btn-success" title="">Comprar Mais</a></td> 
        </tr>
        -->

        <tr class="text-danger bg-danger">
            <td></td> 
            <td>Produto</td> 
            <td>Valor R$</td> 
            <td>X</td> 
            <td>Sub Total R$</td> 
             
            
        </tr>
     
        
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        
        <tr>
            
            <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"> </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
  </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
 </td>                        
            
        </tr>
        
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->
        
        <!-- botoes de baixo e valor total -->
        <section class="row" id="total">
                      
            <div class="col-md-4 text-right">
           
            </div>
            
            <div class="col-md-4 text-right text-danger bg-warning">
            <h4>
               Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
 
            </h4>
            <h4>
               Frete : R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
 
            </h4>
            <hr>
            <h4>
               Total do Pedido: R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
 
            </h4>
            </div>
            
            <!-- botão de limpar-->
            <div class="col-md-4 ">

            
                <form name="pedido_finalizar" id="pedido_finalizar"  method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
">
                    <!-- botão finalzar -->
                    <button class="btn btn-success btn-block btn-mg" type="submit" method="post" >  <i class="glyphicon glyphicon-ok"></i> Finalizar Pedido </button>
                </form>

            </div>
            
            


        </section>
        <br>

        <hr>
           
       
       </form>  
       
       </div>
       
                   
                        
  </section>
       <br>
       <br>
       <br>
       <br><?php }
}
