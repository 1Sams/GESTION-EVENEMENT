<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .event-card {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 0.375rem;
            overflow: hidden;
        }

        .event-image {
            max-width: 100%;
            height: auto;
        }

        .event-content {
            padding: 1.25rem;
        }

        .event-content p {
            margin-bottom: 0.75rem;
        }

        .event-content h5 {
            margin-bottom: 1rem;
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
    <button class="btn btn-back" onclick="history.back()">
        <i class="fas fa-arrow-left"></i>
    </button>

    <h1 class="alert alert-danger text-center">Liste des Événements</h1>

    <div class="container mt-5">
        <div class="row">

            @foreach($evenements as $evenement)
            <div class="col-md-4">
                <div class="event-card card">
                    @if($evenement->image)
                    <img src="{{ $evenement->image }}" class="card-img-top event-image" alt="{{ $evenement->nom }}">
                    @endif
                    <div class="card-body event-content">
                        <h5 class="card-title"><strong>Nom:</strong>{{ $evenement->nom }}</h5>
                        <p class="card-text"><strong>Description:</strong>{{ $evenement->Description }}</p>
                        <p class="card-text"><strong>Date:</strong> {{ $evenement->date }}</p>
                        <p class="card-text"><strong>Lieu:</strong> {{ $evenement->lieu }}</p>
                        <p class="card-text"><strong>Heure:</strong> {{ $evenement->heure }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>

</html>
