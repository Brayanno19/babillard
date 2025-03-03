<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Babillard</title>
    <link rel="stylesheet" href="./Style/indexStyle.css">
    <link rel="stylesheet" href="./Style/login.css">
    <script src="./script/script.js" defer></script>
</head>
<body>

    <header>
        <h1>Mon Babillard</h1> 
    </header>

    <main>
        <!-- ici on fait l'inclusion des fichier -->
         <div id="ma_box">
             <?php 
                require_once 'includes/home.php';
            ?>
        </div>
    </main>

    <footer>
        <h1> Cette page à été realisé par les étudiant de la L2B pour le projet de java </h1>
    </footer>
    
</body>
</html> 