<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Catégories d'Événements</title>
    <style>
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 25px 12.5%;
            background: transparent;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }

        .header {
            background-color: #333;
        }

        .navbar-nav .nav-link {
            color: #333;
            font-weight: 500;
            padding: 0.75rem 1rem;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
            text-decoration: none;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.25rem;
            color: #007bff;
        }

        .navbar-brand:hover {
            color: #0056b3;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 1rem;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-img-container {
            display: flex;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .card-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #ddd;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card-title {
            margin-bottom: 1rem;
        }

        .btn-primary {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 0.375rem;
            padding: 0.5rem 1rem;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #f8f9fa;
        }

        .content {
            margin-top: 160px;
            text-align: center;
        }

        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .btn-back {
            position: fixed;
            top: 15px;
            right: 15px;
            z-index: 110;
            background-color: #007bff;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="school.php">Accueil</a>

                <a class="nav-link" href="evenement.php">Événements</a>

                <a class="nav-link" href="A_propos.php">À propos</a>

                <a class="nav-link" href="Nous_contacter.html">Contact</a>
            </div>
        </nav>
    </header>

    <button class="btn btn-back" onclick="history.back()">
        <i class="fas fa-arrow-left"></i>
    </button>

    <div class="container content">
        <h1 class="text-center mb-4">VOS CATÉGORIES D'ÉVÉNEMENTS POUR CE MOIS</h1>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <!-- Sport Category -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-container">
                        <img src="{{ asset('image/concept-equipement-sport_1284-13034.jpg') }}" class="card-img"
                            alt="Sport">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">SPORT</h5>
                        <p class="card-text">
                            Ce mois-ci, plongez dans le vif de l'action avec une série passionnante d'évènements
                            sportifs qui captiveront votre esprit compétitif et votre passion pour le sport.
                        </p>
                        <a href="{{ url('/events') }}" class="btn btn-primary">Voir les évènements associés</a>
                    </div>
                </div>
            </div>

            <!-- Distraction Category -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-container">
                        <img src="{{ asset('image/jeux-4.jpg') }}" class="card-img" alt="Distraction">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">DISTRACTION</h5>
                        <p class="card-text">
                            Préparez-vous à une explosion de divertissement ce mois-ci avec une gamme éclectique
                            d'évènements qui promettent de captiver et divertir. Des spectacles en direct aux festivals
                            vibrants, notre calendrier d'évènements de distraction offre une variété de choix pour tous
                            les goûts et tous les âges.
                        </p>
                        <a href="{{ url('/events') }}" class="btn btn-primary">Voir les évènements associés</a>
                    </div>
                </div>
            </div>

            <!-- Education Category -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-container">
                        <img src="{{ asset('image/Difference-Between-School-and-Education_Education.jpg') }}"
                            class="card-img" alt="Education">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">ÉDUCATION</h5>
                        <p class="card-text">
                            Explorez les opportunités éducatives passionnantes qui enrichissent notre communauté ce
                            mois-ci. Des conférences inspirantes aux ateliers interactifs, notre calendrier d'évènements
                            éducatifs propose une multitude d'occasions pour apprendre, partager et grandir ensemble.
                        </p>
                        <a href="{{ url('/events') }}" class="btn btn-primary">Voir les évènements associés</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 Votre Entreprise. Tous droits réservés.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>

</html>
