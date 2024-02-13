<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAGE dE LOGIN</title>
    <link href="./assets/css/bootstrap.css" rel="stylesheet">

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

        h2 {
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

        p {
            color: blue;
            margin-left: 50px;
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
<p>nom: admin</p>
<p>mot de passer :mande</p>

    <div>
        <img src="assets/images/vape.png" class="animation">
        <div class="zero">
            <h2>CONNECTER-VOUS</h2>
            <form action="../classes/controllerp.php" method="post">
                <div class="un">


                    <div class="form-group">
                        <label for="nom">nom</label>
                        <input type="text" id="nomlogin" name="nomlogin" placeholder="veuiller entrer votre nom" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de Passe</label>
                        <input type="password" id="passwordlogin" name="passwordlogin" placeholder="Valider votre mode paase" required>
                    </div>

                    <div class="form-group">
                        <button type="submit"> connection</button>
                    </div>


            </form>
        </div>
    </div>
    </div>
</body>

<footer>

</footer>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>

</html>