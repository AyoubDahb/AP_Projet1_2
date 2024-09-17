<div id= "connexion">

	<div class="connexion_form_container">
		<div class="connexion_form">
			<h2 class="page-title"> Se Connecter </h2>

			<form method="post" action="controleur/traitement.php">

			<div class="login-container">
				<input class="login-input" type="text" name="email" placeholder=" " />
				<label class="login-label">Email :</label>
			</div>
			<div class="login-container">
				<input class="login-input" type="password" name="mdp" placeholder=" " />
				<label class="login-label">Mot de passe :</label>
			</div>

			<div class="login-btns">
				<button type="reset" class="reset-btn">Annuler</button>
				<button type="submit" class="confirm-btn" name="action" value="connecter">Confirmer</button>
			</div>
			<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié</title>
    <style>
        .forgot-password {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #000000
			;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .forgot-password:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="process_reset.php" method="post">
        <!-- Autres champs du formulaire -->
        <a href="forgot_password.php" class="forgot-password">Mot de passe perdu</a>
    </form>
</body>
</html>


			</form>
		</div>
	</div>
	
	<div class="connexion_bg">
		<div class="logo-connexion"></div>
		<img src="public/img/bg_connexion.svg" />
		<div class="goto-inscription-connexion">
			<p>Pas de compte?</p>
			<span>
				<a href="index.php?page=inscription">S'inscrire</a>
			</span>
		</div>
	</div>
</div>