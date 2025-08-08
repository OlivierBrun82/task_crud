<?php
require_once 'config/database.php';

//recupere les données du formulaire si elles sont envoyé en post 
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $title = trim(htmlspecialchars($_POST["title"]) ?? '');
        $desc = trim(htmlspecialchars($_POST["desc"]) ?? '');
        $priorityChoice = (($_POST["priorityChoice"]));
    }

    var_dump($priorityChoice);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1><strong>Entrez vos tâche</strong></h1>
    </header>
    <main>
        <section class="formContainer">
            <form method="POST">
                <div>
                  <div>
                    <input type="submit" value="Créer">
                  </div>
                    <label for="title">Titre</label>
                    <input type="text" name="title" id="title" required placeholder="Entrez le nom de votre tâche">
                    <label for="desc">Description</label>
                    <input type="text" name="desc" id="desc" required placeholder="Entrez la description de votre tâche">
                    <label for="priority">Priorité</label>
                    <select name="priorityChoice" id="priorityChoice">
                        <option value="">--Choissez la priorité--</option>
                        <option value="basse">Basse</option>
                        <option value="moyenne">Moyenne</option>
                        <option value="haute">Haute</option>
                    </select>
                </div>
            </form>
        </section>
    </main>
    <Footer>
        <span>À Faire!</span>
    </Footer>
</body>
</html>