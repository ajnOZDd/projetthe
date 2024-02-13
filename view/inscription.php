<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page d'inscription</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
        .zero {
            width: 400px;
            height: 300px;
            border: solid;
            border-radius: 15px;
            border-color: white;
            margin-left: 900px;
            margin-top: 90px;
            background-color: transparent;
            position: relative;
            z-index: 1;
        }
         h1 {
            margin-left: 60px;
            color: white;
        }
        .un {
            width: 350px;
            height: 160px;
            float: left;
            margin-left: 50px;
            margin-top: 25px;
        }

        

        .animation {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }
    </style>



</head>
<body>
    

<div>
     <img src="../assets/images/cana.png" class="animation">
    <div class="zero">
        <h1>INSCRIPTION</h1>
    <form action="../classes/controllerinscriptionlogin.php" method="post">

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nominscription" placeholder="Entrer votre nom" required>
        </div>


        <div class="form-group">
            <label for="password">Mot de Passe</label>
            <input type="password" id="password" name="passwordinscription" placeholder="Valider votre mode paase" required>

        </div>

        <div class="form-group">
          <button type="submit">
            s'inscrire
          </button>
        </div>
</form>
<p>si vous avez deja un compte <a href="index.php" class="btn btn-primary">login</a></p>

</div>
</div>
</div>
</body>

<footer>

</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</html>
