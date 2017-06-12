
<?php

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="css/user.css">

<script src="js/jquery-1.12.3.min.js"></script>
<script>
	$(document).ready(function(){
  
 $("#Clave_Usuario").keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
          });
   
  
    $(".cerrar").click(function(){
      
        $(".modal").fadeOut(300);
      $("#foot").css("display", "block"); 
    });

$("#RegU").click(function(){
	 if ($('#Nombre').val() === '') {
        alert('El campo esta vacio');
    } else {
        alert('Campo correcto');
    }

});

 $("#Tel").keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
          });
 

});

</script>

<script>

		$(document).ready(function(){
				$('#RegU').click(function(){
			var ID=	$('#Clave_u').val();	
				if($('#Nombre').val()==""){
						return false;
					}
					else{
						var Nombre = $('#Nombre').val();
					}
					if($('#Edad').val()==""){
						return false;
					}
					else{
						var Edad = $('#Edad').val();
					}


					if($('#Tel').val()==""){
						return false;
					}
					else{
						var Tel = $('#Tel').val();
					}


					if($('#Email').val()==""){
						return false;
					}
					else{
						var Email = $('#Email').val();
					}

					jQuery.post("procesar.php", {
						id:ID,
						name:Nombre,
						tel:Tel,
						edad:Edad,
						email:Email
					}, function(data, textStatus){
						if(data == 1){

							$('#res').html("Datos insertados.");
							$('#res').css('color','green');
							$('#Nombre').val("");
							$('#Edad').val("");
							$('#Tel').val("");
							$('#Email').val("");

						$("#form .d").each(function (index) 
        {  
            $(this).text("");
        }) ;
						}
						else{
							$('#res').html("Ha ocurrido un error.");
							$('#res').css('color','red');
						}
					});
				});
			});
		

</script>

<script>

  $(document).ready(function() {
    $('#abrir').click(function(){

      var clave = $('#Clave_Usuario').val();
    
     $('#Clave_u').val(clave);
      if($.trim(clave).length){
      
        $.ajax({
          url:"comprobar.php",
          method:"POST",
          data:{clave:clave},
          cache:"false",
          beforeSend:function() {
            $('#abrir').val("Conectando...");
          },
          success:function(data) {
          	
            $('#abrir').val("Verificar");
            
            if(data=="error")
             {
        $('#veri').html("");

		$('#veri').css('color','red');
		$(".modal").fadeIn();
		$("#foot").css("display", "none"); 
		$("#modificar").css("display", "none"); 
            }else
            if (data!="") {
  
		$('#veri').html("Existe usuario");
		$('#veri').css('color','red');        			
		$('#veri').css('font-size','40px');   
		$('#modificar').html(data);
       	 $('#modificar').css('display','block');
       	     } 

          }
        });
      };
    });
  });	
</script>
<script>
	function funcion(){
var clave=$('#clave_M').val();
var nombre=$('#nombre_M').val();
var tel=$('#tel_M').val();
var edad=$('#edad_M').val();
var email=$('#email_M').val();

				jQuery.post("mod.php", {
						clave:clave,
						nombre:nombre,
						tel:tel,
						edad:edad,
						email:email
					}, function(data, textStatus){
						alert(data);
						if(data == 1){

							$('#resp').html("Datos actualizados.");
							$('#resp').css('color','green');
							$('#modificar').css('display','none');
							

						
						}
						else{
							$('#res').html("Ha ocurrido un error.");
							$('#res').css('color','red');
						}
					});

	}
</script>
</head>
<body>
	<nav >
<img src="imagenes/Asociasion.jpg" style="width: 100px;
height: 100%;
float:left;
border-right:  1px solid red;">	
	
		<ul>

		
			<li><a href="index.php">Inicio</a></li>
			<li class="drop">
				<a href="#">Registro</a>
				
				<div class="dropdownContain">
					<div class="dropOut">
						<div class="triangle"></div>
						<ul>
							<li><a href="registro_U.php" style="color:black">Usuarios</a ></li>
									<li><a href="registro_P.php" style="color:black">Predio</a></li>
						</ul>
					</div>
				</div>
			
			</li>
			<li><a href="#">Pagos</a></li>
			<li><a href="Padron.php">Padron</a></li>
			<li style="float: right;"><a href="cierre.php">Cerrar sesión</a></li>

			</ul>
			</nav>
	
	<div id="contenedor" >
		

		<div id="Verificar" style="margin-right:  400px;">
	<header style="margin-right: 200px;"><h1>Registro usuarios <img src="imagenes/riego.jpg" alt=""></h1></header>
		
			<form  style="margin-right:  200px;">

			<label for="Clave_Usuario" id="lan">Clave</label>
			<input type="text" id="Clave_Usuario" class="d" placeholder="Ingresa  clave">
	
		<input type="button" id="abrir" value="Verificar" class="btn" style="width: 150px;">
		
		<p id="veri"></p>

		
			</form>
		</div>
	<div class="modal" id="#modal">
    <div class="ventana" id="ventana">

        <span class="cerrar">x</span>
<div id="camposU">
<div class="inicio">
	<h2>Registra usuario</h2>
</div>
<div id="form" >

	<label for="Clave">Clave</label>
	<input type="text" id="Clave_u" class="d" placeholder="clave" readonly>
	<label for="Nombre">Nombre</label>
	<input type="text" id="Nombre" class="d" placeholder="Ingresa nombre">
	<label for="Edad">Edad</label>
	<input type="text" id="Edad" class="d" placeholder="Ingresa Edad">
	<label for="Tel">Telefono</label>
	<input type="text" id="Tel" class="d" placeholder="Ingresa Telefono">
	<label for="Email">Email</label>
	<input type="text" id="Email" class="d" placeholder="Ingresa Email">
	<div id="Op">
	<button id="RegU" class="btn" >Registrar</button>
	<button id="Cancelar" class="btn">Cancelar</button>
<p id="res"></p>
	
	
	</div>

</div>
    </div>
</div>





</div>
<div id="modificar" style="margin-left: 900px;
	width: 350px;
	height: 300px;
	
	position: relative;
	font-size: 15px;
	bottom:300px; display:none;

	">
	
<div id="resp"> hola</div>
	
	</div>	
	<!--
		<label for="" style="font-size: 10px;">CODIGO</label><input type="text" class="d" style="width: 100px;"><br>
		<label for="" style="font-size: 10px;">NOMBRE</label><input type="text" class="d" style="width: 100px;"><br>
		<label for="" style="font-size: 10px;">EDAD</label><input type="text"  class="d" style="width: 100px;"><br>
		<label for="" style="font-size: 10px;">TEL.</label><input type="text"  class="d" style="width: 100px;"><br>
		<label for="" style="font-size: 10px;">EMAIL</label><input type="text" class="d" style="width: 100px;"><br>
	<input type="button" value="Modificar" class="btn">
	
-->


<footer id="foot">
	<img src="imagenes/Asociasion.jpg" alt="" id="imas">
	<img src="imagenes/logo1.png" alt=""
	style="float:right;">

	<h4> Distrito patzcuaro, michoacan </h4>
	<p>ASOCIACIÓN DE USUARIOS RIO TACÁMBARO A.C.
<ul>
	<li>Telefono :01-459-596-02-23 </li>
	<li>Correo: asuritariego@hotmail.com </li>
	<li>Direccion :melchor ocampo 449, col. los pinos </li>
</ul>
	</p>
	</footer>	

</body>
</html>	 