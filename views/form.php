<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>TestBulko - 2017</title>
	<meta name="viewport" content="user-scalable=no, initial-scale = 1, minimum-scale = 1, maximum-scale = 1, width=device-width">
	<link rel="icon" type="image/vnd.microsoft.icon" href="http://www.bulko.net/templates/img/favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="http://www.bulko.net/templates/img/favicon.ico" />
	<link rel="stylesheet" href="https://cdn.bootcss.com/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="simple_app_web/asset/css/styles.css">
</head>
<body>
	<header>
		<div class="wrapper">
			<a class="logo-bulko" href="http://www.bulko.net/" title="Logo Agence Bulko"><img src="./asset/img/logoBulko.png" alt="Logo Agence Bulko" ></a>
			<a class="logo-github" href="https://github.com/Bulko/test-dev-bulko/blob/master/README.md" title="Lire les consignes" target="_blank" rel="noopener">
				<img src="./asset/img/github-icon.png" alt="Logo github">README.md
			</a>
		</div>
	</header>
	<main>
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		
		<!-- <div class="form-ok">Pour votre message de validation de formulaire</div> -->
		<!-- <div class="form-error">Pour votre message d'erreur</div> -->
		<form method="post" id='myForm'>
			<p>Contactez-nous</p>
			<div class="form-part-1">
				<div class="form-control">
					<input type="text" name="nom" placeholder="Nom"/>
				</div>
				<div class="form-control">
					<input type="email" name="email" placeholder="Email"/>
				</div>
				<div class="form-control">
					<input type="tel" name="tel" placeholder="Téléphone"/>
				</div>
			</div>
			<div class="form-part-2">
				<div class="form-control">
					<textarea name="message" placeholder="Message"></textarea>
				</div>
				<input type="submit" value="Envoyer" />
			</div>
			<div id="res"></div>
		</form>
		<script>
			$("#myForm").submit(function(e){
			  e.preventDefault(); //empêcher une action par défaut
			  var form_data = $(this).serialize(); //Encoder les éléments du formulaire pour la soumission
			  console.log(form_data);
			  $.ajax({
			    url : "/message",
			    type: "POST",
			    data : form_data
			  }).done(function(response){ 
			    $("#res").html(response);
			  });
			});
		</script>
	</main>
	<footer>
		<p>© Bulko - 2017<br>🦄  GLHF</p>
	</footer>
</body>
</html>