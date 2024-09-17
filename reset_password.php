
<?php
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    $pdo = new PDO('mysql:host=localhost:3306;dbname=ClientLeger','root','');
    $stmt = $pdo->prepare("SELECT * FROM password_resets WHERE token = :token AND expires_at > NOW()");
    $stmt->execute(['token' => $token]);
    $reset = $stmt->fetch();

    if ($reset) {
        ?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Nouveau mot de passe</title>
        </head>
        <body>
            <h2>Nouveau mot de passe</h2>
            <form action="update_password.php" method="post">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
                <label for="password">Nouveau mot de passe :</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Réinitialiser le mot de passe</button>
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "Ce lien de réinitialisation est invalide ou a expiré.";
    }
}
?>
