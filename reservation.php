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
            color: #004d40;
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
            <a class="navbar-brand" href="#">CAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="reservation.php">Réserver</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="liste_reservations.php">Mes réservations</a>
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
            <h2>Réserver un vol auprès de la compagnie CAS.</h2>
        </div>
        <form class="mt-4">
            <div class="mb-3">
                <label for="departure" class="form-label">Destination</label>
                <select name="" class="form-control" id="departure" placeholder="Ville de départ">
                    <option value="">Butembo-Beni</option>
                    <option value="">Beni-Bunia</option>
                    <option value="">Goma-Butembo</option>
                    <option value="">Bunia-Lubumbashi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="departure-date" class="form-label">Date de départ</label>
                <input type="date" class="form-control" id="departure-date">
            </div>
            <div class="mb-3">
                <label for="passengers" class="form-label">Nombre de passagers</label>
                <input type="number" class="form-control" id="passengers" placeholder="Nombre de passagers">
            </div>
            <button type="submit" class="btn btn-primary w-100">Réserver</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
