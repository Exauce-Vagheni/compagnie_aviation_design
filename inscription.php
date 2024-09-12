<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAS - Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<style>
      .nav-item a{
            color:white;
        }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CAS</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="connexion.php">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center">Créer un compte chez CAS</h2>
        <form class="mt-4" id="form">
            <div class="mb-3">
                <label for="first-name" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="first-name" placeholder="Votre prénom">
            </div>
            <div class="mb-3">
                <label for="last-name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="last-name" placeholder="Votre nom">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="email" placeholder="Votre email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Numero de téléphone</label>
                <input type="tel" class="form-control" id="phone" placeholder="Votre numero">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" placeholder="Mot de passe">
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirmer le mot de passe</label>
                <input type="password" class="form-control" id="confirm-password" placeholder="Confirmez le mot de passe">
            </div>
            <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
        </form>
    </div>
        <footer style="visibility:hidden;">
            Fait par Aris
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
