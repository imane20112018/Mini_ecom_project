<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ecoomerce</title>
</head>

<body>
    <?php
    include 'includes/nav.php'; ?>
    <div class="container py-2">
        <?php
        if (isset($_POST['ajouter'])) {
            $login = $_POST['login'];
            $pwd = $_POST['possword'];

            if (!empty($login) && !empty($pwd)) {
                require 'includes/database.php';
                $date = date(format: 'y-m-d');
                $request = $pdo->prepare('INSERT INTO utilisateur values (null,?,?,?)');
                $reseult = $request->execute([$login, $pwd, $date]);
                //Redirection 
                header('location:connexion.php');
            } else {
        ?>
                <div class="alert alert-danger" role="alert">
                    Login et mot de passe sont obligatoires!
                </div>
        <?php
            }
        }
        ?>
        <h4>Ajouter Utilisateur </h4>
        <form method="post">
            <label class="form-label">login</label>
            <input type="text" class="form-control" name="login">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="possword">
            <input type="submit" value="Ajouter utilisateur" name="ajouter" class="btn btn-primary ptn-lg my-2">
        </form>
    </div>
</body>

</html>