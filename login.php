<?php
session_start();
include 'users.php';


    $username = $_POST['username'];
    $psw = $_POST['psw'];

    foreach ($users as $user) {
        if ($user['username'] === $username && $user['psw'] === $psw) {
            $_SESSION['username'] = $username;
            header('Location: index.php');
            exit();
        }
    }
    $error = "Username o password errati!";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP strong password generator</title>
</head>
<body>
    <header>
        <h1>
            PHP STRONG PASSWORD GENERATOR 
        </h1>
    </header>
    <main>
        <?php if (isset($error)): ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <div>
            <form action="login.php" method="post">
                <label for="username">Inserisci il tuo username</label>
                <input type="text" name="username" id="username" required>
                <label for="psw">Inserisci la tua password</label>
                <input type="password" name="psw" id="psw" required>
                <button type="submit">Accedi</button>
            </form>
        </div>
    </main>
</body>
</html>