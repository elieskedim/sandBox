<?php
    require_once"bdd.php";

    $resultat = $bdd->query('SELECT * FROM articles');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        td{
            height: 70px;
            background-color: #eee;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="bg-dark text-white pl-3">Articles</h1>
        <table class="table">
            <thead>
                <tr>
                <th class="col-10">Contenu</th>
                <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($req = $resultat->fetch(PDO::FETCH_ASSOC)){
                        echo '<tr>';
                        echo '<td>' . $req['content'] . '</td>';
                        echo '<td class="pt-3"><a id="send" class="bg-danger rounded text-white p-2" href="supp_article.php?id=' . $req['id_article'] . '">Supprimer</a></td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/app.js"></script>
</body>
</html>