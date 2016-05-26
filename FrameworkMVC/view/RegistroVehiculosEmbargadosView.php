<!DOCTYPE HTML>
<html lang="es">

      <head>
      
        <meta charset="utf-8"/>
        <title>Registro Vehiculos Embargados- coactiva 2016</title>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  			   
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
		<script>
		    webshims.setOptions('forms-ext', {types: 'date'});
			webshims.polyfill('forms forms-ext');
		</script>
		
        
        
       <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
                
            
        </style>
       
    
    
    </head>
    <body style="background-color: #d9e3e4;">
    
       <?php include("view/modulos/head.php"); ?>
       
       <?php include("view/modulos/menu.php"); ?>
       
       
       
       <?php
       $resultMenu=array(0=>"Identificacion",1=>"Titulo Credito",2=>"Juicio");
     	 		 
     			
     	
		   
		?>
 
  
  <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
     
      <form action="<?php echo $helper->url("RegistroVehiculosEmbargados","index"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
    
    <div class="col-lg-5">
    <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
           <?php //no hay datos para editar?>
        
            <?php } } else {?>
		     
		      <h4 style="color:#ec971f;">Registro Vehiculos Embargados</h4>
            	<hr/>
		     
		     <div class="row">
			    
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Selecione filtro</p>
			  	<select name="criterio_busqueda" id="criterio_busqueda"  class="form-control" >
					<?php foreach($resultMenu as $val=>$desc) {?>
						<option value="<?php echo $val; ?>"  ><?php echo $desc ?> </option>
			        <?php } ?>
				</select> 			  
			  </div>
		    
		     
             	
             	
		    <div class="col-xs-6 col-md-6">
		    	<p  class="formulario-subtitulo" style="color: #ffffff;" >--</p>
			  <input type="text" name="contenido_busqueda" id="contenido_busqueda" value="" class="form-control"/>
			  <div id="mensaje_contenido_busqueda" class="errores"></div>
			  </div>
			  
			<div class="col-xs-12 col-md-12" style="margin-top: 20px; text-align: center;" >
		
			  	<input type="submit" id="buscar" name="buscar"  value="buscar" class="btn btn-default"/>
			</div>
			
			  </div>
             	
             	
             	
             	
             	
             	
             	
		     <?php } ?>
    </div>
    
    
    <div  class="col-lg-7">
     <h4 style="color:#ec971f;">Lista de titulo</h4>
            <hr/>
    		
		<div class="col-xs-12" style="margin: 5px;">	

	</div>
	<?php if(!empty($resultDatos)){?>
	<div class="col-xs-12">
      
      
        
       <section   style="height:400px;overflow-y:scroll;width: 655px;">
        <table class="table table-hover ">
	         <tr >
	    		
	    		
	    		<th style="color:#456789;font-size:80%;">Titulo Credito</th>
	    		<th style="color:#456789;font-size:80%;">Juicio</th>
	    		<th style="color:#456789;font-size:80%;">Tipo Identificacion</th>
	    		<th style="color:#456789;font-size:80%;">Identificacion</th>
	    		<th style="color:#456789;font-size:80%;">Nombres</th>
	    		<th style="color:#456789;font-size:80%;"></th>
	    		
	    		<th></th>
	    		<th></th>
	  		</tr>
            
	            <?php if (!empty($resultDatos)) {  foreach($resultDatos as $res) {?>
	        		<tr>
	        
	                   <td style="color:#000000;font-size:80%;"> <?php echo $res->id_titulo_credito; ?></td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->juicio_referido_titulo_credito; ?>     </td> 
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->nombre_tipo_identificacion; ?>  </td>
		               <td style="color:#000000;font-size:80%;"> <?php echo $res->identificacion_clientes; ?>  </td>
		                <td style="color:#000000;font-size:80%;"> <?php echo $res->nombres_clientes; ?>  </td>
		           <td>
			           		<div class="right">
			                    <a href="<?php echo $helper->url("VehiculosEmbargados","index"); ?>&id_auto_pagos=<?php echo $res->id_auto_pagos; ?>" class="btn btn-warning" style="font-size:65%;">VER</a>
			                </div>
			            
			          </td>  
		    		</tr>
		        <?php } } ?>
		        
      
        
            
            
       	</table>     
		     
      </section>
        
        </div>
        <?php 
		}
            
          ?>
        
    </div>
    
    </form>
  

    </div>
   </div>
     </body>  
    </html>   