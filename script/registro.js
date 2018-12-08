$(document).ready(function(){

   $("#submituser").click(function(){
      codigo=$("#codigo").val();
      nombre=$("#nombre").val();
      telefono=$("#telefono").val();
      correo=$("#correo").val();
      contra1=$("#contra1").val();
      contra2=$("#contra2").val();

      telefono = codigo + telefono;

	console.log(nombre);
	console.log(correo);
	console.log(telefono);
	console.log(contra1);
	console.log(contra2);

      var Telefono = /\d{7,9}/gm;
	  if(nombre == ""){
          $("#mensaje_error").html("No ha ingresado su nombre");
	  }
      else if(correo == ""){
          $("#mensaje_error").html("No ha ingresado su correo");
      }
      else if(contra1 == ""){
		$("#mensaje_error").html("No ha ingresado su contraseña");
	  }
      else if(contra2 == ""){
          $("#mensaje_error").html("No ha confirmado su contraseña");
	  }
      else if(contra1 != contra2){
          $("#mensaje_error").html("Sus contraseñas no coinciden");
	  }
      else{
          if(Telefono.test(telefono)){
		       console.log("Todo OK");
              $.ajax({
                  type: "POST",
                  url: "verificarRegistro.php",
                  data:{
                      nombre: nombre,
                      correo: correo,
                      telefono: telefono,
                      contra: contra1
                  },
                  success: function(resp){
                      if(resp!=""){
			              console.log("Se registro, prro");
                          window.location.href = "menu.html";
                      }
                      else{
                          $("#mensaje_error").html("Su correo ya ha sido usados");
                      }
                  }
              });
          }
          else{
		      console.log("No paso el cel :'v");
              $("#mensaje_error").html("Su telefono no es valido");
          }
      }

  });
});
