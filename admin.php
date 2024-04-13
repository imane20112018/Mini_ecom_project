<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Espace Administrateur </title>
</head>

<body>
    <?php
    include 'includes/nav.php'; ?>
    <div class="container py-2">
        <?php
        if (!isset($_SESSION['utilisateur'])) {
            // echo 'acces refuse';
            // die();
            header('location:connexion.php');
        }
        // var_dump($_SESSION['utilisateur']);
        ?>
        <h3>Bonjour <?php echo $_SESSION['utilisateur']['login'] ?></h3>
    </div>
</body>

</html>