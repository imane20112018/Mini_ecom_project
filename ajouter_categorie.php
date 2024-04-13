<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ecoomerce</title>
</head>

<body>
    <?php include 'includes/nav.php'; ?>
    <div class="container py-2">
        <?php
        if (isset($_POST['ajouter'])) {
            $libelle = $_POST['libelle'];
            $description = $_POST['description'];
            if (!empty($libelle) && !empty($description)) {
                require 'includes/database.php';
                $request = $pdo->prepare("INSERT INTO categorie(libelle,description) VALUES(?,?)");
                $result = $request->execute([$libelle, $description]);
        ?>
                <div class="alert alert-seccess" role="alert">
                    La Catégorie <?php echo $libelle ?> est bien Ajoutee.
                </div>
            <?php
            } else { ?>
                <div class="alert alert-danger" role="alert">
                    Libelle et Description sont obligatoires!
                </div>
        <?php  }
        }
        ?>
        <h4>Ajouter Catégorie</h4>
        <form method="post">
            <label class="form-label">Libelle</label>
            <input type="text" class="form-control" name="libelle">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description"></textarea>
            <input type="submit" value="Ajouter Catégorie" name="ajouter" class="btn btn-primary ptn-lg my-2">
        </form>
    </div>
</body>

</html>