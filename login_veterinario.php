<html> 

 <head> 

    <title>LOGIN</title> 

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 

  </head> 

  <body> 

      <h1>Login</h1> 

    <form method="POST" name="form" action="login.php"> 

      <label for="nomeusuario"> Nome de usuário: </label> 

      <p><input type="text" name="nomeusuario"></p>  

      <p><label for="senha">Senha: </label> </p>  

      <p><input type="password" name="senha"></p>  

      <br> 

      <input type="button" value="ENTRAR">     <button type="submit" value="sent"><a href="registro.html">CADASTRAR</a></button>  

      <div>&nbsp;</div> 

    </form> 

  </body> 

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.4.3.min.js"></script> 

  <script type="text/javascript"> 

 

$(function() { 

    $(".delete").click(function(){ 

    var element = $(this); 

    var id = element.attr("id"); 

    var info = 'id=' + id; 

 

    if(confirm("Deseja realmente Deletar cliente id:   " + id)) { 

        $.ajax({ 

            type: "POST", 

            url: "/removeClient", 

            data: info, 

            success: function () { 

            } 

        }); 

 

        $(this).parents("#show").animate({backgroundColor: "#003"}, "slow").animate({opacity: "hide"}, "slow"); 

    } 

 

    }); 

}); 

        

</script> 

</html> 