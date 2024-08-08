{{-- <!DOCTYPE html>
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
            display: flex;
            align-items: center;
        }

        .event-image {
            flex-shrink: 0;
            width: 150px;
            height: 100%;
            object-fit: cover;
            border-left: 1px solid #ddd;
        }

        .event-content {
            padding: 1.25rem;
            flex-grow: 1;
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
                    <div class="event-content">
                        <h5 class="card-title"><strong>Nom:</strong> {{ $evenement->nom }}</h5>
                        <p class="card-text"><strong>Description:</strong> {{ $evenement->Description }}</p>
                        <p class="card-text"><strong>Date:</strong> {{ $evenement->date }}</p>
                        <p class="card-text"><strong>Lieu:</strong> {{ $evenement->lieu }}</p>
                        <p class="card-text"><strong>Heure:</strong> {{ $evenement->heure }}</p>
                    </div>
                    @if($evenement->image)
                    <img src="{{ asset('uploads/evenements/'.$evenement->image) }}" class="event-image" alt="{{ $evenement->nom }}">
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>

</html> --}}



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
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .event-header {
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: space-between;
            padding: 1.25rem;
            background-color: #f8f9fa;
            cursor: pointer;
        }

        .event-header h5 {
            margin: 0;
        }

        .event-content {
            display: none;
            flex-direction: row;
            width: 100%;
        }

        .event-details {
            padding: 1.25rem;
            flex-grow: 1;
        }

        .event-image {
            flex-shrink: 0;
            width: 150px;
            height: auto;
            object-fit: cover;
            border-left: 1px solid #ddd;
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
                    <div class="event-header" onclick="toggleDetails(this)">
                        <h5 class="card-title">{{ $evenement->nom }}</h5>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="event-content">
                        <div class="event-details">
                            <p class="card-text"><strong>Description:</strong> {{ $evenement->Description }}</p>
                            <p class="card-text"><strong>Date:</strong> {{ $evenement->date }}</p>
                            <p class="card-text"><strong>Lieu:</strong> {{ $evenement->lieu }}</p>
                            <p class="card-text"><strong>Des heures:</strong> {{ $evenement->heure }}</p>
                        </div>
                        @if($evenement->image)
                        <img src="{{ asset('uploads/evenements/'.$evenement->image) }}" class="event-image" alt="{{ $evenement->nom }}">
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        function toggleDetails(header) {
            const content = header.nextElementSibling;
            if (content.style.display === "none" || content.style.display === "") {
                content.style.display = "flex";
                header.querySelector("i").classList.remove("fa-chevron-down");
                header.querySelector("i").classList.add("fa-chevron-up");
            } else {
                content.style.display = "none";
                header.querySelector("i").classList.remove("fa-chevron-up");
                header.querySelector("i").classList.add("fa-chevron-down");
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>

</html>
