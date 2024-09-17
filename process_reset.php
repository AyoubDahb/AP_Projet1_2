
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $dsn ='mysql:host=localhost:3306;dbname=ClientLeger';
    $username = 'root';
    $password = '';
  
    
    
    try {
        $pdo = new PDO($dsn, $username, $password);

        $stmt = $pdo->prepare("SELECT password FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();

        if ($user) {
            $password = $user['password'];
            echo "Votre mot de passe est : $password";
        } else {
            echo "Cet email est inexistant.";
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
}
?>
