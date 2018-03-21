<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Desenvolver uma aplicacao que valide informacoes de um formulario.">
    <meta name="author" content="Mateus Joaquim">
    <title>Avaliação para Desenvolvimento Web</title>
    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- CSS Form validation -->
    <link href="coffe.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">
        <h1>CoffeBean Desafio</h1>
        <p class="lead">Desenvolver uma aplicação que valide informações de um formulário</p>
    </div>
         <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <div class="search-box">
                            <div class="caption">
                                <h3>Validação</h3>
                            </div>
                            <form action="validacao.php" class="loginForm" method="POST">
                                <div class="input-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Password" required>
                                    <input type="submit" id="submit" class="form-control" value="Enviar">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="aro-pswd_info">
                            <div id="pswd_info">
                                <ul>
                                    <h3>Regras Password</h3>
                                    <li id="letter" class="invalid">Mínimo de <strong>2 letras minusculas</strong></li>
                                    <li id="capital" class="invalid">Mínimo de <strong>2 letras maísculas</strong></li>
                                    <li id="number" class="invalid">Mínimo de <strong>dois numeros</strong></li>
                                    <li id="length" class="invalid">Mínimo de <strong>10 caracteres e max de 126</strong></li>
                                    <li id="space" class="invalid">Use<strong> dois caracteres especiais  (!#$%&'*+-/=?^_`{|}~) ou ponto (.)</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script>
    $(document).ready(function(){
    
    // Inicio password validacao

	$('input[type=password]').keyup(function() {
        var pswd = $(this).val();
        
        // valida tamanho
		if ( pswd.length <= 10 ) {
			$('#length').removeClass('valid').addClass('invalid');
		} else if( pswd.length > 120 )  {
			$('#length').removeClass('valid').addClass('invalid');
        } else {
            $('#length').removeClass('invalid').addClass('valid');
        }
        // valida caracteres
		if ( pswd.match(/[A-z]{2}/) ) {
			$('#letter').removeClass('invalid').addClass('valid');
		} else {
			$('#letter').removeClass('valid').addClass('invalid');
		}
        // valida 2 letras maisculas
		if ( pswd.match(/[A-Z]{2}/) ) {
			$('#capital').removeClass('invalid').addClass('valid');
		} else {
			$('#capital').removeClass('valid').addClass('invalid');
		}
        // valida 2 numeros
		if ( pswd.match("[0-9].*[0-9]")) {
            $('#number').removeClass('invalid').addClass('valid');
		} else {
			$('#number').removeClass('valid').addClass('invalid');
        }
		//validate 2 especiais
		if ( pswd.match(/[^a-zA-Z0-9\-\/]{2}/)) {
			$('#space').removeClass('invalid').addClass('valid');
		} else {
			$('#space').removeClass('valid').addClass('invalid');
		}
		
	}).focus(function() {
		$('#pswd_info').show();
	}).blur(function() {
		$('#pswd_info').hide();
    });
});    
</script>
  </body>
</html>
