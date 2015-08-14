<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Pessoas</title>

	<!-- jQuery -->
	<script src="js/jquery-2.1.4.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

<?php
		#require "constantes.php";
        #require "./controller/Controller.php";
		require "./view/formulario.php";
?>
        <table id="listagem">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Logradouro</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

    <script>
        var listagem = null;
    
    
        $('#cadastro').submit(function() {
            $.ajax({
                method: 'POST',
                url: './ajax/cadastro.php',
                data: $('#cadastro').serialize(),
                dataType: 'json',
                success: function(retorno){
                    console.log(retorno);
                    $('tbody').html(retorno);
                },
                error: function(err){
                    console.log(err);
                },
                done: function(){
                   $.ajax({
                        method: 'POST',
                        url: './view/listagem.php',
                        success: function(data){
                            console.log(data);
                            $('#listagem tbody').append(data);
                        },
                        error: function(err){
                            console.log(err);
                        }
                    });
                }
            });

            // Apaga os dados do formulário :: retorna ao estado inicial
            $(this)[0].reset();
            return false;
        });

    </script>
    
</body>
</html>