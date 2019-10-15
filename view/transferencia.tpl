<div class="page-header">
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
</div>