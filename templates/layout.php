<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MediTrack - Portail Patient</title>
</head>
<body>
    <header>
        <h1>MediTrack</h1>
        <nav>
            <a href="?page=home">Accueil</a>
            <a href="?page=search">Recherche Patient</a>
            <a href="?page=login">Connexion</a>
        </nav>
    </header>
    <main>
        <?php echo $content ?? ''; ?>
    </main>
</body>
</html>
