<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAS - Mes Réservations</title>
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
        .reservation-container {
            margin-top: 50px;
        }
        .reservation-header {
            color: #004d40;
            text-align: center;
            margin-bottom: 30px;
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

    <div class="container reservation-container">
        <h2 class="reservation-header">Mes réservations</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Destination</th>
                        <th>Date de départ</th>
                        <th>Nombre de Passagers</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Butembo-Goma</td>
                        <td>2024-09-20</td>
                        <td>2</td>
                        <td>Confirmée</td>
                        <td><button class="btn btn-primary btn-sm">Annuler</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Beni-Beni</td>
                        <td>2024-10-10</td>
                        <td>1</td>
                        <td>En Attente</td>
                        <td><button class="btn btn-primary btn-sm">Annuler</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
