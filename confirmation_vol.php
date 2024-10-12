<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAS - Confirmation de Réservation</title>
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
        .confirmation-container {
            margin-top: 50px;
            text-align: center;
        }
        .confirmation-container h2 {
            color: #004d40;
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

    <div class="container confirmation-container">
        <h2>Merci pour votre réservation !</h2>
        <p>Votre réservation a été confirmée avec succès.</p>
        <a href="index.html" class="btn btn-primary">Retour à l'accueil</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
