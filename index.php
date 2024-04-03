<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php include 'includes/nav.php'; ?>
    <div class="container">
        <?php
        if (isset($_POST['Ajouter'])) {
            $login = $_POST['login'];
            $pwd = $_POST['password'];
            if (!empty($nom) && !empty($pwd)) {
                //request

            }
        }

        ?>
        <form action="post">
            <label class="form-label">login</label>
            <input type="text" class="form-control" name="login">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="possword">
            <input type="submit" value="Ajouter utilisateur" name="Ajouter" class="btn btn-primary ptn-lg my-2">
        </form>
    </div>
</body>

</html>