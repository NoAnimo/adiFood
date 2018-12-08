$(document).ready(function(){
    $("#login").click(function(){
        correo=$("#correo");
        contra=$("#contra");

        if(correo.val().trim()==""){
            $("#mensaje_error").html("Ingrese un usuario");
            correo.focus();
        }
        else if(contra.val().trim()==""){
            $("#mensaje_error").html("Ingrese la contraseña");
        	contra.focus();
        }
        else{
            $.ajax({
                type: "POST",
                url: "verificarSignin.php",
                data: {
                    correo : correo.val(),
                    contra : contra.val()
                },
                success: function(resp){
       	            if(resp!=""){
                        console.log("respuesta" + resp);
                        window.location.href="menu.html";
                    }
                    else{
                        $("#mensaje_error").html("Usuario o Contraseña Incorrecta");
                    }
                }
            });
        }
    });
});
