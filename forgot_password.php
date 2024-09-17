<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialiser le mot de passe</title>
    <style>
        body {
            background-color: #000; 
            color: #FFA500;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #333; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #FFA500; 
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 10px;
            color: #FFA500; 
        }

        input[type="email"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #FFA500; 
            border-radius: 5px;
            width: 100%;
            max-width: 300px;
        }

        button {
            padding: 10px 20px;
            background-color: #FFA500; 
            color: #000; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e69500;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Réinitialiser le mot de passe</h2>
        <form action="process_reset.php" method="post">
            <label for="email">Entrez votre adresse email :</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>
