<!DOCTYPE HTML>
<html lang="es">
     <head>
         <meta charset="utf-8"/>
        <title>Firmas Digitales - coactiva 2016</title>
        
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
        
        
         <script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#Guardar").click(function() 
			{
		    	var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		    	var validaFecha = /([0-9]{4})\-([0-9]{2})\-([0-9]{2})/;
		    	var ruc_entidades = $("#ruc_entidades").val();
		    	var nombre_entidades = $("#nombre_entidades").val();
		    	var telefono_entidades  = $("#telefono_entidades").val();
		    	var direccion_entidades = $("#direccion_entidades").val();
		    	var ciudad_entidades = $("#ciudad_entidades").val();
		    	
		    	
		    	
		    	
		    	
		    	if (ruc_entidades == "")
		    	{
			    	
		    		$("#mensaje_ruc").text("Introduzca un Ruc");
		    		$("#mensaje_ruc").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_ruc").fadeOut("slow"); //Muestra mensaje de error
		            
				}    
				
		    	if (nombre_entidades == "")
		    	{
			    	
		    		$("#mensaje_nombres").text("Introduzca una Entidad ");
		    		$("#mensaje_nombres").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_nombres").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
		    	

				//los telefonos
		    	if (telefono_entidades == "" )
		    	{
			    	
		    		$("#mensaje_telefono").text("Ingrese un Teléfono");
		    		$("#mensaje_telefono").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_telefono").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    	if (direccion_entidades == "" )
		    	{
			    	
		    		$("#mensaje_direccion").text("Ingrese una Direccion");
		    		$("#mensaje_direccion").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_direccion").fadeOut("slow"); //Muestra mensaje de error
		            
				}

			
				
		    	if (ciudad_entidades == "" )
		    	{
			    	
		    		$("#mensaje_ciudad").text("Ingrese una Ciudad");
		    		$("#mensaje_ciudad").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_ciudad").fadeOut("slow"); //Muestra mensaje de error
		            
				}

		    					    

			}); 


		        $( "#ruc_entidades" ).focus(function() {
				  $("#mensaje_ruc").fadeOut("slow");
			    });
				
				$( "#nombre_entidades" ).focus(function() {
					$("#mensaje_nombres").fadeOut("slow");
    			});
				
				$( "#telefono_entidades" ).focus(function() {
					$("#mensaje_telefono").fadeOut("slow");
    			});
				$( "#direccion_entidades" ).focus(function() {
					$("#mensaje_direccion").fadeOut("slow");
    			});
				
				$( "#ciudad_entidades" ).focus(function() {
					$("#mensaje_ciudad").fadeOut("slow");
    			});
		
				
		
		      
				    
		}); 

	</script>
        
        
        
        
        
    </head>
      <body style="background-color: #d9e3e4;">
    
       <?php include("view/modulos/head.php"); ?>
       
       <?php include("view/modulos/menu.php"); ?>
  
     <div class="container">
  
  <div class="row" style="background-color: #ffffff;">
  
  
      <form action="<?php echo $helper->url("FirmasDigitales","InsertaFirmasDigitales"); ?>" method="post" class="col-lg-6">
            <h4 style="color:#ec971f;">Insertar Firmas Digitales</h4>
            <hr/>
            	
		   		
            
             <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
	        
	            	
	        <div class="row">
		    <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Ruc Entidades </p>
			  	<input type="text" name="ruc_entidades" id="ruc_entidades" value="<?php echo $resEdit->ruc_entidades; ?>" class="form-control"/>
			  <div id="mensaje_ruc" class="errores"></div>
			  </div>
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Firma</p>
			  	<input type="file" name="imagen_firmas_digitales" id="imagen_firmas_digitales" value="<?php echo $resEdit->imagen_firmas_digitales; ?>" class="form-control"/> 
			  <div id="mensaje_nombres" class="errores"></div>
			  </div>
		    </div>
		    
			
	     	<hr>
	            	  
            
		     <?php } } else {?>
		    
		             <div class="row">
		    <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Ruc Entidades </p>
			  	<input type="text" name="ruc_entidades" id="ruc_entidades" value="" class="form-control"/>
			  <div id="mensaje_ruc" class="errores"></div>
			  </div>
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Firma</p>
			  	<input type="file" name="imagen_firmas_digitales" id="imagen_firmas_digitales" accept="png|jpg|jpeg" onKeyDown="return intro(event)" value="" class="form-control"/> 
			 <div id="mensaje_firmas" class="errores"></div>
			  </div>
		    </div>
		       
			<hr>
		     <?php } ?>
		       <div class="row">
			  <div class="col-xs-12 col-md-12" style="text-align: center;" > 
           <input type="submit" id="Guardar" name="Guardar" value="Guardar" class="btn btn-success"/>
           </div>
            </div>
          </form>
       
       
        <div class="col-lg-6">
            <h4 style="color:#ec971f;">Firmas</h4>
            <hr/>
        </div>
        <section class="col-lg-6 usuario" style="height:400px;overflow-y:scroll;">
        <table class="table table-hover">
	         <tr>
	    		<th style="color:#456789;font-size:80%;">Id</th>
	    		<th style="color:#456789;font-size:80%;">Ruc</th>
	    		<th style="color:#456789;font-size:80%;">Nombre</th>
	    		
	  		</tr>
            
	            <?php foreach($resultSet as $res) {?>
	        		<tr>
	                   <td style="color:#000000;font-size:80%;"> <?php echo $res->id_entidades; ?>  </td>
		               <td style="color:#000000;font-size:80%;" > <?php echo $res->ruc_entidades; ?>     </td> 
		                 <td style="color:#000000;font-size:80%;"> <?php echo $res->nombre_entidades; ?>     </td>
		                 
		               <td>
			           		<div class="right">
			                    <a href="<?php echo $helper->url("FirmasDigitales","index"); ?>&id_firmas_digitales=<?php echo $res->id_firmas_digitales; ?>" class="btn btn-warning" style="font-size:65%;">Editar</a>
			                </div>
			            
			             </td>
			             <td>   
			                	<div class="right">
			                    <a href="<?php echo $helper->url("FirmasDigitales","borrarId"); ?>&id_firmas_digitales=<?php echo $res->id_firmas_digitales; ?>" class="btn btn-danger" style="font-size:65%;">Borrar</a>
			                </div>
			                <hr/>
		               </td>
		    		</tr>
		        <?php } ?>
            
            <?php 
            
            //echo "<script type='text/javascript'> alert('Hola')  ;</script>";
            
            ?>
            
       	</table>     
      </section>
       </div>
      </div>
  
       
       <?php include("view/modulos/footer.php"); ?>
        
     </body>  
    </html>          