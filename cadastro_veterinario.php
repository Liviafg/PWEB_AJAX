<!DOCTYPE html> 

<html> 

<head> 

    <title>Cadastro de usuários</title> 

    <meta charset="utf-8"> 

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" 

        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" 

        crossorigin="anonymous"> 

    </script> 

</head> 

<body> 

    <form method="POST" action="inserir.php"> 

        <p> Nome: <input type="text" name="nome" id="nome" required=""> </p> 

        <p> Usuário: <input type="text" name="usuario" id="telefone" required=""> </p>  

        <p> Email: <input type="text" name="email" id="email" required=""> </p> 

        <p> Senha: <input type="password" name="senha" id="senha" required=""></p> 

        <input type="submit" name="cadastrar" value="Cadastrar"> 

    </form> 

</body> 

</html> 

<script type="text/javascript" language="javascript"> 

   

    $(document).ready(function()  

    { 

        $('#registrar').click(function()  

        { 

            var dados = $('#registro_usuario').serialize(); 

            $.ajax( 

            { 

                type: 'POST', 

                dataType: 'json', 

                url: 'registrar.php', 

                async: true, 

                data: dados, 

                success: function(response)  

                { 

                    location.reload(); 

                } 

            }); 

            return false; 

        }); 

     jQuery('.excluir').click(function() 

        { 

            var element = $(this); 

            var id = element.attr("id"); 

            var info = 'id=' +id; 

            if(confirm("Deseja realmente excluir esse usuário?")) 

            { 

                $.ajax( 

                    { 

                        type: "POST", 

                        url: "./excluir.php?id="+id, 

                        data: info, 

                        success: function()  

                        { 

                            setTimeout(function() 

                            { 

                                window.location.reload(1); 

                            }) 

                        } 

                    } 

                ) 

            } 

        }); 

    }) 

</script> 