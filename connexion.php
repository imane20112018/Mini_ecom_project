<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Connexion</title>
</head>

<body>
    <?php include 'includes/nav.php'; ?>
    <div class="container py-2">
        <?php
        if (isset($_POST['connexion'])) {
            $login = $_POST['login'];
            $pwd = $_POST['password'];
            if (!empty($login) && !empty($pwd)) {
                require_once 'includes/database.php';
                $sqlstate = $pdo->prepare('SELECT * FROM utilisateur WHERE login =? AND password=?');
                $result = $sqlstate->execute([$login, $pwd]);
                if ($sqlstate->rowCount() >= 1) {
                    $_SESSION['utilisateur'] = $sqlstate->fetch();
                    header('location:admin.php');
                }
            } else {
        ?>
                <div class="alert alert-danger" role="alert">
                    Login ou mot de passe incorrectes!
                </div>
        <?php
            }
        }
        ?>
        <h4>Connexion</h4>
        <form method="post">
            <label class="form-label">login</label>
            <input type="text" class="form-control" name="login">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            <input type="submit" value="Connexion" name="connexion" class="btn btn-primary ptn-lg my-2">
        </form>
    </div>
</body>

</html>