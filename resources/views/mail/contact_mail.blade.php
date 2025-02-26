<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanctuary Spa</title>
</head>

<body>
    <h1>Grazie per averci contattato</h1>
    <h2>Risponderemo il prima possibile</h2>
    <p>Se non hai richiesto un contatto ignora questa mail.</p>

    <!-- faccio visualizzare $user_data dell'utente che ha fatto richiesta con cui ho lavorato in ContactMail e FrontController -->
    <p>Ecco un riepilogo dei tuoi dati:</p>
    <ul>
        <li>Nome e Cognome: {{$user_data['name']}}</li> 
        <li>La tua Mail: {{$user_data['email']}}</li>
        <li>Il tuo telefono: {{$user_data['tel']}}</li>
        <li>Il tuo messaggio: {{$user_data['user_message']}}</li>
    </ul>
</body>

</html>