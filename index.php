<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAS - Reservation de Vols</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
       
    </style>
</head>
<body id="accueil">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="connexion.php">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">S'inscrire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container hero-text">
        <h1>Réservez votre vol avec CAS</h1>
        <p>Découvrez les meilleures offres pour vos destinations préférées</p>
    </div>

    <div class="container form-container mt-5">
        <h2 class="text-center mb-4">Trouvez votre vol</h2>
        <form class="row g-3">
            <div class="col-md-6">
            <label for="departure" class="form-label">Départ</label>
                <select name="" class="form-control" id="departure" placeholder="Ville de départ">
                    <option value="">Butembo</option>
                    <option value="">Beni</option>
                    <option value="">Goma</option>
                    <option value="">Bunia</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="destination" class="form-label">Destination</label>
                <select name="" class="form-control" id="destination" placeholder="Ville d'arrivée">
                    <option value="">Beni</option>
                    <option value="">Goma</option>
                    <option value="">Bunia</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="departure-date" class="form-label">Date de départ</label>
                <input type="date" class="form-control" id="departure-date">
            </div>
            <div class="col-md-6">
                <label for="return-date" class="form-label">Date de retour</label>
                <input type="date" class="form-control" id="return-date">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">Rechercher</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
