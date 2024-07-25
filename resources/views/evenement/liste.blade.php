<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gest-Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

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

    <div class="container text-center">
        <div class="row">
            <div class="col S12">
                <h1>LISTE DES EVENEMENTS</h1>
                <button class="btn btn-back" onclick="history.back()">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <hr>

                <a href="/ajout" class="btn btn-primary">Ajouter un évenement </a href="/">
                <hr>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Description </th>
                            <th>Date</th>
                            <th>Lieu</th>
                            <th>Heure</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $ide=1;
                        @endphp
                        @foreach ($evenements as $evenement )
                        <tr>
                            <td>{{ $ide }}</td>
                            <td>{{ $evenement->nom }}</td>
                            <td>{{ $evenement->Description }}</td>
                            <td>{{ $evenement->date }}</td>
                            <td>{{ $evenement->lieu }}</td>
                            <td>{{ $evenement->heure }}</td>
                           <th>
                            @if($evenement->image)
                    <img src="{{ asset('uploads/evenements/'.$evenement->image) }}" width="70px" height="70px" class="card-img-top event-image" alt="{{ $evenement->nom }}">

                    @endif</th>
                            <td>
                                <a href="/update-evenement/{{{ $evenement->id }}}" class="btn btn-info">Update</a>
                                <a href="/delete-evenement/{{{ $evenement->id }}}" class="btn btn-danger">Delete</a>

                            </td>
                        </tr>
                        @php
                            $ide +=1;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                {{ $evenements->links()}}
                <a href="{{ url('/events') }}" class="btn btn-primary">Voir les évènements </a >
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
