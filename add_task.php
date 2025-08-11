<?php
require_once 'config/database.php';

//recupere les données du formulaire si elles sont envoyé en post 
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $title = trim(htmlspecialchars($_POST["title"]) ?? '');
        $description = trim(htmlspecialchars($_POST["description"]) ?? '');
        $priority = (($_POST["priority"]));


//logique de traitement en db
    $pdo = dbConnexion();
// préparation des données à insérer
    $insertTask = $pdo->prepare("
        INSERT INTO tasks (title, description, priority)
        VALUES (?, ?, ?)
    ");
// insertion des données en db
    $insertTask->execute([$title, $description, $priority]);
    
    $message = "La tâche à été crée avec succè";
    }
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
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" required placeholder="Entrez la description de votre tâche">
                    <label for="priority">Priorité</label>
                    <select name="priority" id="priority">
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