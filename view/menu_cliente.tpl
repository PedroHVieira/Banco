<h4 class="text-center"> Histórico </h4>
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
        {foreach from=$EXTRATO item=P}
        <tr>
            
            <td style="width: 10%">{$P.idUsuario}</td>
            <td style="width: 10%">{$P.acao}</td>
            <td style="width: 10%">{$P.idAcao}</td>
            <td style="width: 10%">{$P.data}</td>

        </tr>
        {/foreach}
    </tbody>    
    </table>
      </center>
    
    
</section>
<!--  paginação inferior   -->  
<section id="pagincao" class="row">
<center>
</center>
</section>
      