<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAS - Réservation de Vol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #004d40;
        }
        .btn-primary {
            background-color: #004d40;
            border: none;
        }
        .btn-primary:hover {
            background-color: #00362c;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }
        .form-header {
            background-color: #004d40;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.html">S'inscrire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.html">Réserver</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container form-container">
        <div class="form-header">
            <h2>Réserver un vol</h2>
        </div>
        <form class="mt-4">
            <div class="mb-3">
                <label for="departure" class="form-label">Ville de départ</label>
                <input type="text" class="form-control" id="departure" placeholder="Entrez la ville de départ">
            </div>
            <div class="mb-3">
                <label for="arrival" class="form-label">Ville d'arrivée</label>
                <input type="text" class="form-control" id="arrival" placeholder="Entrez la ville d'arrivée">
            </div>
            <div class="mb-3">
                <label for="departure-date" class="form-label">Date de départ</label>
                <input type="date" class="form-control" id="departure-date">
            </div>
            <div class="mb-3">
                <label for="return-date" class="form-label">Date de retour (facultatif)</label>
                <input type="date" class="form-control" id="return-date">
            </div>
            <div class="mb-3">
                <label for="passengers" class="form-label">Nombre de passagers</label>
                <input type="number" class="form-control" id="passengers" placeholder="Nombre de passagers">
            </div>
            <button type="submit" class="btn btn-primary w-100">Rechercher</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
