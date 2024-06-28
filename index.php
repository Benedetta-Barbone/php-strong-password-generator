<!--
Creiamo una sicurissima e semplicissima pagina di login in cui l'utente puo' autenticarsi via form con:
- un username
- una password
La pagina di login (login.php) ci redireziona, una volta effettuato e SOLO se avvenuto correttamente,
alla pagina principale della nostra applicazione (index.php), in cui visualizziamo via sessione il nome dell'utente loggato.
Creiamo poi una pagina di logout (logout.php) che rimuova le informazioni della sessione dalla sessione attuale e redirezioni
all pagina di login (login.php). -->

<?php

$utentiIscritti = [
    [
        'username' => 'ercolino',
        'psw' => 'giorgio86',
    ],
    [
        'username' => 'romano',
        'psw' => 'vituzzo39',
    ],
    [
        'username' => 'magicastella',
        'psw' => 'bacchetta...',
    ],
    [
        'username' => 'benebarb',
        'psw' => '123456',
    ],
    [
        'username' => 'michiamo',
        'psw' => 'comemichiamo',
    ],
    [
        'username' => 'lucazz',
        'psw' => 'indovina',
    ],

]


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
        <div>
            <form action="" method="get">
                <div>
                    <label for="username">Inserisci il tuo username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div>
                    <label for="psw">Inserisci la tua password</label>
                    <input type="password" name="psw" id="psw">
                </div>
                <input type="button" value="Accedi">
            </form>
        </div>
    </main>
</body>
</html>