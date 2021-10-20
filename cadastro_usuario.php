<html> 

<head> 

	<title> Cadastro do usuario </title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous">
			
        </script>

</head> 

	<body>
	
<?php
                include 'conexaoprova.php';
				
                $select = "SELECT * FROM usuarios";
				
				$select = $conexao->prepare("SELECT * FROM usuarios");
				
				$select->execute();
				
                $result = $select->fetchAll(PDO::FETCH_ASSOC);
				
                ?>				
				
				
		</body>
		

            <div class="window" id="janela1">
			
                <a href="#" class="fechar">X Fechar</a>

                <h4>Cadastro de usuario</h4>
				
                <form id="cadastro" action="" method="post">
				
                    <label> Nome: </label> <input type="text" name="nome" id="nome" />

                    <label> Senha: </label> <input type="text" name="senha" id="senha" />
					
					 <label> Nome do pet: </label> <input type="text" name="nome_pet" id="nome_pet" />
					 
					 <label> Idade: </label> <input type="text" name="idade_pet" id="idade_pet" />

					
                    <br/><br/>
					
                 <input type="submit" value="Submit" /> <br />
					
                </form>
				
            </div>
			
            <div id="mascara"></div>
			
        </div>
		
    </body>
	
</html>

<script type="text/javascript" language="javascript">

 
    const URL = 'salvarprova.php'
    fetch(`${URL}`)
        .then((body) => body.json())
        .then((data) => {
            console.log(data)
    })
    .catch((error) => console.error('Erro:', error.message || error))

    $(document).ready(function() {

        $('#submit').click(function() {

            var dados = $('#cadastro').serialize();

            $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'salvarprova.php',
                    async: true,
                    data: dados,
                    success: function(response) {
                        location.reload();
                    },
                    error: function(req, err){ console.log('Mensagem:' + err); }
            });

            return false;
        });


        $("a[rel=modal]").click(function(ev) {
            ev.preventDefault();

            var id = $(this).attr("href"); 

            var alturaTela = $(document).height();
            var larguraTela = $(window).width();

            $('#mascara').css({'width': larguraTela, 'height': alturaTela});
            $('#mascara').fadeIn(1000);
            $('#mascara').fadeTo("slow", 0.8);

            var left = ($(window).width() / 2) - ($(id).width() / 2);
            var top = ($(window).height() / 2) - ($(id).height() / 2);

            $(id).css({'top': top, 'left': left});
            $(id).show();
        });

        $("#mascara").click(function() {
            $(this).hide();
            $(".window").hide();
        });

        $('.fechar').click(function(ev) {
            ev.preventDefault();
            $("#mascara").hide();
            $(".window").hide();
        });

    });
</script>

		</html>
