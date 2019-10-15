<h3>Cadastro de cliente</h3>
<!--- dados do cadastro -->

<hr>

<form name="cadcliente" id="cadcliente" method="post" action="">

<section class="row" id="cadastro">
    
  
        
        <div class="col-md-12">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" minlength="3" required>
            
            
        </div>
        
        
        
      
        <div class="col-md-6">
            <label>Agência:</label>
            <input type="text" name="agencia" class="form-control" required>
            
            
        </div>
        
      
        <div class="col-md-6">
            <label>Conta:</label>
            <input type="text" name="conta" class="form-control" required>
            
            
        </div>
        
      
        
        <div class="col-md-6">
            <label>Tipo:</label>
            <select class="form-control" id="tipo" name = "tipo" required >
                <option>Básico</option>
                <option>Salário</option>
                <option>Premium</option>
            </select>
        </div>
        
      
        
        <div class="col-md-6">
            <label>Senha:</label>
            <input type="password" name="senha" class="form-control"  min="10" max="99" required>
            
            
        </div>
        
      
        
        	            
	</section>

	      <br>
	      <br>
	      
	      <section class="row" id="btngravar">
	          
	       <div class="col-md-4"></div>
	       
	       <div class="col-md-4">
	           <button type="submit" class="btn btn-info btn-block "> <i class="glyphicon glyphicon-ok"></i> Gravar </button>
	               
	           
	       </div>
	       
	       <div class="col-md-4"></div>
	    
	    
	</section>
	      
	      
	         </form>