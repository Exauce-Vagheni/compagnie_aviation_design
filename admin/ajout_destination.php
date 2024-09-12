<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAS Admin - Ajouter Destination</title>
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
            color: black;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
         .nav-item a{
            color:white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CAS Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="reservations_clients.php">Réservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ajout_destination.php">Ajouter destination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="liste_clients.php">Utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Se deconnecter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container form-container">
        <div class="form-header">
            <h2>Ajouter une destination</h2>
        </div>
        <form class="mt-4">
            <div class="mb-3">
                <label for="departure" class="form-label">Destination</label>
                <input type="text" class="form-control" id="departure" placeholder="Entrez la ville de départ">
            </div>
            <div class="mb-3">
                <label for="places" class="form-label">Nombre de places</label>
                <input type="number" class="form-control" id="places" placeholder="Nombre de places">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Tarif ($)</label>
                <input type="number" class="form-control" id="price" placeholder="Entrez le tarif">
            </div>
            <button type="submit" class="btn btn-primary w-100">Ajouter destination</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
